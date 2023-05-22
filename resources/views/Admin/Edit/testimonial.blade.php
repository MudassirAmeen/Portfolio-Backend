@extends('Admin.Dashboard')

@section('title', 'Edit Testimonial')
@section('mainContent')
    <div class="card shadow mb-4">
        <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
        <div class="card-header">
            <strong class="card-title">Edit Testimonial</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('testimonial.update', ['testimonial' => $item->id]) }}" enctype="multipart/form-data" class="row needs-validation" novalidate method="POST">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Name</label>
                        <input type="text" value="{{ old('name') ? old('name') : $item->name}}" name="name"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }} @if (old('name')) is-valid @endif">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Role</label>
                        <input type="text" value="{{ old('role') ? old('role') : $item->role}}" name="role"
                            class="form-control {{ $errors->has('role') ? 'is-invalid' : '' }} @if (old('role')) is-valid @endif">
                        @error('role')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="example-textarea">Text area</label>
                        <textarea
                            class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }} @if (old('comment')) is-valid @endif"
                            id="example-textarea" name='comment' rows="4">{{ old('comment') ? old('comment') : $item->comment }}</textarea>
                        @error('comment')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        CKEDITOR.replace('comment');
    </script>
@endsection
