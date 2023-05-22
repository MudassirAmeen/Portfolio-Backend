@extends('Admin.Dashboard')

@section('title', 'Edit Education')
@section('mainContent')
<div class="card shadow mb-4">
    <div class="card-header">
        <strong class="card-title">Edit Education</strong>
    </div>
    <div class="card-body">
        <form action="{{ route('education.update', ['education' => $item->id]) }}" class="row needs-validation" novalidate method="POST">
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
                    <label for="simpleinput">Institute</label>
                    <input type="text" value="{{ old('name') ? old('name') : $item->institute}}" name="institute"
                        class="form-control {{ $errors->has('institute') ? 'is-invalid' : '' }} @if (old('institute')) is-valid @endif">
                    @error('institute')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="simpleinput">Start Date</label>
                    <input type="date" value="{{ old('name') ? old('name') : $item->start}}" name="start" min="{{ date('Y') }}"
                        class="form-control {{ $errors->has('start') ? 'is-invalid' : '' }} @if (old('start')) is-valid @endif">
                    @error('start')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="simpleinput">End Date</label>
                    <input type="date" value="{{ old('name') ? old('name') : $item->end}}" name="end" min="{{ date('Y') }}"
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
                        class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }} @if (old('description')) is-valid @endif"
                        id="example-textarea" name='description' rows="4">{{ old('name') ? old('name') : $item->description}}</textarea>
                    @error('description')
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
@endsection