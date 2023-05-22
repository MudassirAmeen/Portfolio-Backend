@extends('Admin.Dashboard')

@section('title', 'Edit Service')
@section('mainContent')
    <div class="card shadow mb-4">
        <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
        <div class="card-header">
            <strong class="card-title">Edit Service</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('service.update', ['service' => $item->id]) }}" enctype="multipart/form-data" class="row needs-validation"
                novalidate method="POST">
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
                        <label for="simpleinput">Short Description</label>
                        <input type="text" value="{{ old('description') ? old('description') : $item->description}}" name="description"
                            class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }} @if (old('description')) is-valid @endif">
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="example-textarea">Long Description(Optional)</label>
                        <textarea
                            class="form-control {{ $errors->has('longdescription') ? 'is-invalid' : '' }} @if (old('longdescription')) is-valid @endif"
                            id="example-textarea" name='longdescription' rows="4">{{ old('longdescription') ? old('longdescription') : $item->longdescription }}</textarea>
                        @error('longdescription')
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
        CKEDITOR.replace('longdescription');
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('javascop/ijaboCropTool.min.js') }}"></script>
    

@endsection
