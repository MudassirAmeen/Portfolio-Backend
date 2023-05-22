@extends('Admin.Dashboard')

@section('title', 'Add Category')
@section('mainContent')
    <div class="card shadow mb-4">
        <div class="card-header">
            <strong class="card-title">Add A Category</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" class="row needs-validation" novalidate method="POST">
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
                        <label for="simpleinput">Description</label>
                        <input type="text" name="description" value="{{ old('description') }}"
                            class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }} @if (old('name')) is-valid @endif">
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
