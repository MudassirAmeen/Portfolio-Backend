@extends('Admin.Dashboard')

@section('title', 'Edit Portfolio Item')
@section('mainContent')
    <div class="card shadow mb-4">
        <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
        <div class="card-header">
            <strong class="card-title">Edit Portfolio Item</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('portfolio.update', ['portfolio' => $item->id]) }}" enctype="multipart/form-data" class="row needs-validation" novalidate
                method="POST">
                @csrf
                @method('PUT')
                {{--  Name  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Name</label>
                        <input type="text" value="{{ old('name') ? old('name') : $item->name }}" name="name"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }} @if (old('name')) is-valid @endif">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{--  Project Date  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Project Date</label>
                        <input type="date" value="{{ old('date') ? old('date') : $item->date }}" name="date"
                            class="form-control {{ $errors->has('date') ? 'is-invalid' : '' }} @if (old('date')) is-valid @endif">
                        @error('date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{--  URL  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Project URL</label>
                        <input type="text" value="{{ old('url') ? old('url') : $item->url}}" name="url"
                            class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }} @if (old('url')) is-valid @endif">
                        @error('url')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{--  Client Name  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Client Name</label>
                        <input type="text" value="{{ old('client') ? old('client') : $item->client}}" name="client"
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
                        <select class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }} @if (old('category')) is-valid @endif" name="category" id="simple-select2">
                            @foreach ($categories as $category)
                                <option value="{{ $category->name }}" {{$item->category == $category->name ? "Selected" : " "}}>{{ $category->name }}</option>
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
                            id="example-textarea" name='description' rows="4">{{ old('description') ? old('description') : $item->description}}</textarea>
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
