@extends('Admin.Dashboard')

@section('title', 'Edit Skills')
@section('mainContent')
    <div class="card shadow mb-4">
        <div class="card-header">
            <strong class="card-title">Edit Skills</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('skill.update', ['skill' => $item->id]) }}" class="row needs-validation" novalidate method="POST">
                @csrf
                @method('PUT')
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
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Percentage</label>
                        <input type="number" name="percentage" value="{{ old('percentage') ? old('percentage') : $item->percentage}}"
                            class="form-control {{ $errors->has('percentage') ? 'is-invalid' : '' }} @if (old('name')) is-valid @endif">
                        @error('percentage')
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
