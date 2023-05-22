@extends('Admin.Dashboard')

@section('title', 'Add About Item')
@section('mainContent')
    <div class="card shadow mb-4">
        <div class="card-header">
            <strong class="card-title">Add About Item</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('about.store') }}" enctype="multipart/form-data" class="row needs-validation" novalidate
                method="POST">
                @csrf

                {{--  Name  --}}
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

                {{--  Email  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Email</label>
                        <input type="text" value="{{ old('email') }}" name="email"
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
                        <input type="text" value="{{ old('phone') }}" name="phone"
                            class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }} @if (old('phone')) is-valid @endif">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{--  Image  --}}
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

                {{--  Birthday  --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Birthday</label>
                        <input type="date" value="{{ old('birthday') }}" name="birthday"
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
                        <input type="text" value="{{ old('website') }}" name="website"
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
                        <input type="text" value="{{ old('degree') }}" name="degree"
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
                        <input type="text" value="{{ old('city') }}" name="city"
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('javascop/ijaboCropTool.min.js') }}"></script>
    <script>
        $('#image').ijaboCropTool({
            setRatio: 5 / 7,
            processUrl: '{{ route('aboutCropImage') }}',
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
