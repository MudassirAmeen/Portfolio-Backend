@extends('Admin.Dashboard')

@section('title', 'Add Service')
@section('mainContent')
    <div class="card shadow mb-4">
        <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
        <div class="card-header">
            <strong class="card-title">Add Service</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('service.store') }}" enctype="multipart/form-data" class="row needs-validation"
                novalidate method="POST">
                @csrf
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
                <div class="col-md-6">
                    <div class="form-group mb-3" id="ChoseImage">
                        <label for="customFile">Chose an Image</label>
                        <div class="custom-file">
                            <input type="file" id="image"
                                class="form-control custom-file-input
                                {{ $errors->has('image') ? 'is-invalid' : '' }} @if (old('image')) is-valid @endif"
                                value="{{ old('image') }}" name="image">

                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group mb-3 d-none" id="ChoseImageName">
                        <label for="simpleinput">Image Name</label>
                        <input type="text" id="imageName"
                        class="form-control 
                        {{ $errors->has('image') ? 'is-invalid' : '' }} @if (old('image')) is-valid @endif"
                        value="{{ old('image') }}" name="image" readonly>
                        
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="example-textarea">Long Description(Optional)</label>
                        <textarea
                            class="form-control {{ $errors->has('longdescription') ? 'is-invalid' : '' }} @if (old('longdescription')) is-valid @endif"
                            id="example-textarea" name='longdescription' rows="4">{{ old('longdescription') }}</textarea>
                        @error('longdescription')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Short Description</label>
                        <input type="text" value="{{ old('description') }}" name="description"
                            class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }} @if (old('description')) is-valid @endif">
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-6">
                    <button type="submit" class="form-controll btn btn-primary btn-block mt-4">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        CKEDITOR.replace('longdescription');
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('javascop/ijaboCropTool.min.js') }}"></script>
    <script>
        $('#image').ijaboCropTool({
            setRatio: 1 / 1,
            processUrl: '{{ route('ServiceCropImage') }}',
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
