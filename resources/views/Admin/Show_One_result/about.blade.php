@extends('Admin.Dashboard')

@section('title', 'About Page')
@section('mainContent')
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
            <div class="row align-items-center mb-4">
                <div class="col">
                    <h2 class="h5 page-title"><small class="text-muted text-uppercase">About
                            ID</small><br />{{ $item->id }}</h2>
                </div>
                <div class="col-auto">
                    <a href="{{ route('about.edit', ['about' => $item->id]) }}" type="button"
                        class="btn btn-secondary">Edit</a>
                    <form action="{{ route('about.destroy', ['about' => $item->id]) }}" style="display:contents"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">DELETE</button>
                    </form>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-body p-5">
                    <div class="row mb-5">
                        <div class="col-12 text-center mb-4">
                            <img src='{{ asset("storage/AdminPanel/assets/About/$item->image") }}' class="img-fluid mb-2"
                                width="200px" alt="">
                            <h2 class="mb-0 text-uppercase">{{ $item->name }}</h2>
                            <p class="text-muted">Website: {{ $item->website }}</p>
                            <p class="text-muted">Phone: {{ $item->phone }}</p>
                        </div>
                        <div class="col-md-7">
                            <p class="small text-muted text-uppercase mb-2">Degree</p>
                            <p class="mb-4">
                                <strong>{!! html_entity_decode($item->degree) !!}</strong>
                            </p>

                            <p class="small text-muted text-uppercase mb-2">City</p>
                            <p class="mb-4">
                                <strong>{!! html_entity_decode($item->city) !!}</strong>
                            </p>
                        </div>
                        <div class="col-md-5">
                            <p>
                                <small class="small text-muted text-uppercase">Email</small><br />
                                <strong>{{ $item->email }}</strong>
                            </p>
                            <p>
                                <small class="small text-muted text-uppercase">Birthday</small><br />
                                <strong>{{ $item->birthday }}</strong>
                            </p>
                            <p>
                                <small class="small text-muted text-uppercase">Last Time Updated</small><br />
                                <strong>{{ $item->updated_at->format('d-M-Y') }}</strong>
                            </p>
                            <p>
                                <small class="small text-muted text-uppercase">Last Time Updated</small><br />
                                <strong>{{ $item->updated_at->format('d-M-Y') }}</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
