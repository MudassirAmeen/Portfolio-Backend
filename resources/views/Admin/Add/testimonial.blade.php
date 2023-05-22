@extends('Admin.Dashboard')

@section('title', 'Add Testimonial')
@section('mainContent')
    <div class="card shadow mb-4">
        <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
        <div class="card-header">
            <strong class="card-title">Add Testimonial</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('testimonial.store') }}" enctype="multipart/form-data" class="row needs-validation"
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
                    <div class="form-group mb-3">
                        <label for="simpleinput">Role</label>
                        <input type="text" value="{{ old('role') }}" name="role"
                            class="form-control {{ $errors->has('role') ? 'is-invalid' : '' }} @if (old('role')) is-valid @endif">
                        @error('role')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="example-textarea">Text area</label>
                        <textarea
                            class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }} @if (old('comment')) is-valid @endif"
                            id="example-textarea" name='comment' rows="4">{{ old('comment') }}</textarea>
                        @error('comment')
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
                <div class="col-md-6">
                    <button type="submit" class="form-controll btn btn-primary btn-block mt-4">Submit</button>
                </div>
                <div class="col-12">
                </div>
            </form>
        </div>
    </div>
    <script>
        CKEDITOR.replace('comment');
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('javascop/ijaboCropTool.min.js') }}"></script>
    <script>
        $('#image').ijaboCropTool({
            setRatio: 1 / 1,
            processUrl: '{{ route('TestimonialCropImage') }}',
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
