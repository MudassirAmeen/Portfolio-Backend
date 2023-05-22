@extends('Admin.Dashboard')

@section('title', 'Add Portfolio Item')
@section('mainContent')
    <div class="card shadow mb-4">
        <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
        <div class="card-header">
            <strong class="card-title">Add Portfolio Item</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('portfolio.store') }}" enctype="multipart/form-data" class="row needs-validation" novalidate
                method="POST">
                @csrf

                {{--  Name  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Name</label>
                        <input type="text" value="{{ old('name') }}" name="name"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }} @if (old('name')) is-valid @endif">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{--  FeatureImage  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3" id="ChoseImage">
                        <label for="customFile">Chose an Image</label>
                        <div class="custom-file">
                            <input type="file" id="image"
                                class="form-control custom-file-input
                                {{ $errors->has('featureImage') ? 'is-invalid' : '' }} @if (old('featureImage')) is-valid @endif"
                                value="{{ old('featureImage') }}" name="featureImage">

                            @error('featureImage')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group mb-3 d-none" id="ChoseImageName">
                        <label for="simpleinput">Image Name</label>
                        <input type="text" id="imageName"
                            class="form-control 
                        {{ $errors->has('featureImage') ? 'is-invalid' : '' }} @if (old('featureImage')) is-valid @endif"
                            value="{{ old('featureImage') }}" name="featureImage" readonly>

                        @error('featureImage')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{--  Project Date  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Project Date</label>
                        <input type="date" value="{{ old('date') }}" name="date"
                            class="form-control {{ $errors->has('date') ? 'is-invalid' : '' }} @if (old('date')) is-valid @endif">
                        @error('date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{--  Image Gallery  --}}
                {{--  <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>Chose an Image Gallery</label>
                        <div class="custom-file">
                            <input type="file"
                                class="form-control custom-file-input
                                {{ $errors->has('images') ? 'is-invalid' : '' }} @if (old('images')) is-valid @endif"
                                value="{{ old('images') }}" name="images[]" multiple>
                
                            @error('images[]')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                    <div class="image-gallery">
                        @if (isset($images))
                            @foreach ($images as $image)
                                <img src="{{ asset($image) }}" alt="image" width="100" height="100">
                            @endforeach
                        @endif
                    </div>
                </div>  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>Choose an Image Gallery</label>
                        <div class="custom-file">
                            <input type="file"
                                class="form-control custom-file-input {{ $errors->has('images') ? 'is-invalid' : '' }} @if (old('images')) is-valid @endif"
                                value="{{ old('images') }}" name="images[]" multiple>
                            @error('images[]')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                </div>


                {{--  URL  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Project URL</label>
                        <input type="text" value="{{ old('url') }}" name="url"
                            class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }} @if (old('url')) is-valid @endif">
                        @error('url')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6 d-none" id="imageGallery">
                    <div class="image-gallery"></div>
                </div>


                <script>
                    var input = document.querySelector('input[name="images[]"]');
                    input.addEventListener('change', function(e) {
                        let a = document.querySelector("#imageGallery");
                        if (a) {
                            a.classList.remove('d-none');
                        }
                        var files = e.target.files;
                        var gallery = document.querySelector('.image-gallery');
                        gallery.innerHTML = '';
                        for (var i = 0; i < files.length; i++) {
                            var file = files[i];
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                var img = document.createElement('img');
                                img.setAttribute('src', e.target.result);
                                img.setAttribute('alt', file.name);
                                img.setAttribute('width', '100');
                                img.setAttribute('height', '100');
                                img.style.margin = '10px';
                                gallery.appendChild(img);
                            }
                            reader.readAsDataURL(file);
                        }
                    });
                </script>


                {{--  Client Name  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Client Name</label>
                        <input type="text" value="{{ old('client') }}" name="client"
                            class="form-control {{ $errors->has('client') ? 'is-invalid' : '' }} @if (old('client')) is-valid @endif">
                        @error('client')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{--  Category  --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="simple-select2">Simple Select</label>
                        <select
                            class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }} @if (old('category')) is-valid @endif"
                            name="category" id="simple-select2">
                            @foreach ($categories as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{--  Description  --}}
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="example-textarea">Description</label>
                        <textarea
                            class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }} @if (old('description')) is-valid @endif"
                            id="example-textarea" name='description' rows="4">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="form-controll btn btn-primary btn-block mt-4">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        CKEDITOR.replace('description');
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('javascop/ijaboCropTool.min.js') }}"></script>
    <script>
        $('#image').ijaboCropTool({
            setRatio: 1 / 1,
            processUrl: '{{ route('PortfolioCropImage') }}',
            withCSRF: ['_token', "{{ csrf_token() }}"],

            onSuccess: function(message, element, status) {
                $('#ChoseImage').addClass('d-none');
                $('#ChoseImageName').removeClass('d-none');
                $('#imageName').val(message);
            },
            onError: function(message, element, status) {
                alert(message);
            }
        });
    </script>

@endsection
