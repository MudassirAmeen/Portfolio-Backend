@extends('Admin.Dashboard')

@section('title', 'Edit About Item')
@section('mainContent')
    <div class="card shadow mb-4">
        <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
        <div class="card-header">
            <strong class="card-title">Edit About Item</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('about.update', ['about' => $item->id]) }}" enctype="multipart/form-data" class="row needs-validation" novalidate
                method="POST">
                @csrf
                @method('PUT')

                {{--  Name  --}}
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

                {{--  Email  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Email</label>
                        <input type="text" value="{{ old('email') ? old('name') : $item->email}}" name="email"
                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} @if (old('email')) is-valid @endif">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                {{--  Phone  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Phone</label>
                        <input type="text" value="{{ old('phone') ? old('phone') : $item->phone}}" name="phone"
                            class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }} @if (old('phone')) is-valid @endif">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{--  Birthday  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Birthday</label>
                        <input type="date" value="{{ old('birthday') ? old('birthday') : $item->birthday}}" name="birthday"
                            class="form-control {{ $errors->has('birthday') ? 'is-invalid' : '' }} @if (old('birthday')) is-valid @endif">
                        @error('birthday')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{--  Website  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Website</label>
                        <input type="text" value="{{ old('website') ? old('website') : $item->website}}" name="website"
                            class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }} @if (old('website')) is-valid @endif">
                        @error('website')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{--  Degree  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Degree</label>
                        <input type="text" value="{{ old('degree') ? old('degree') : $item->degree}}" name="degree"
                            class="form-control {{ $errors->has('degree') ? 'is-invalid' : '' }} @if (old('degree')) is-valid @endif">
                        @error('degree')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{--  City Name  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">City Name</label>
                        <input type="text" value="{{ old('city') ? old('city') : $item->city}}" name="city"
                            class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }} @if (old('city')) is-valid @endif">
                        @error('city')
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

@endsection
