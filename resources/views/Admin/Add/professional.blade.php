@extends('Admin.Dashboard')

@section('title', 'Add Profession Experience')
@section('mainContent')
<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <div class="card shadow mb-4">
        <div class="card-header">
            <strong class="card-title">Add Professional Experience</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('professional.store') }}" class="row needs-validation" novalidate method="POST">
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
                        <label for="simpleinput">Institute</label>
                        <input type="text" value="{{ old('institute') }}" name="institute"
                            class="form-control {{ $errors->has('institute') ? 'is-invalid' : '' }} @if (old('institute')) is-valid @endif">
                        @error('institute')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Start Date</label>
                        <input type="date" value="{{ old('start') }}" name="start" min="{{ date('Y') }}"
                            class="form-control {{ $errors->has('start') ? 'is-invalid' : '' }} @if (old('start')) is-valid @endif">
                        @error('start')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">End Date</label>
                        <input type="date" value="{{ old('end') }}" name="end" min="{{ date('Y') }}"
                            class="form-control {{ $errors->has('end') ? 'is-invalid' : '' }} @if (old('end')) is-valid @endif">
                        @error('end')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-3">
                        <label for="example-textarea">Text area</label>
                        <textarea
                            class="form-control {{ $errors->has('longdescription') ? 'is-invalid' : '' }} @if (old('longdescription')) is-valid @endif"
                            id="example-textarea" name='longdescription' rows="4">{{ old('longdescription') }}</textarea>
                        @error('longdescription')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        CKEDITOR.replace('longdescription');
    </script>
@endsection
