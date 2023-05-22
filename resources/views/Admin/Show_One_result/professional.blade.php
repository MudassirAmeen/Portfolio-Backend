@extends('Admin.Dashboard')

@section('title', 'Professional Experience Page')
@section('mainContent')
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
            <div class="row align-items-center mb-4">
                <div class="col">
                    <h2 class="h5 page-title"><small class="text-muted text-uppercase">Professional Experience
                            ID</small><br />{{ $item->id }}</h2>
                </div>
                <div class="col-auto">
                    <a href="{{ route('professional.edit', ['professional' => $item->id]) }}" type="button"
                        class="btn btn-secondary">Edit</a>
                    <form action="{{ route('professional.destroy', ['professional' => $item->id]) }}"
                        style="display:contents" method="POST">
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
                            <h2 class="mb-0 text-uppercase">{{ $item->name }}</h2>
                            <p class="text-muted">{{ $item->institute }}</p>
                        </div>
                        <div class="col-md-7">
                            <p class="small text-muted text-uppercase mb-2">Description</p>
                            <p class="mb-4">
                                <strong>{{ $item->longdescription }}</strong>
                            </p>
                        </div>
                        <div class="col-md-5">
                            <p class="small text-muted text-uppercase mb-2">Created At</p>
                            <p class="mb-4">
                                <strong>{{ $item->created_at->format('d-M-Y') }}</strong>
                            </p>
                            <p>
                                <small class="small text-muted text-uppercase">Updated At</small><br />
                                <strong>{{ $item->updated_at->format('d-M-Y') }}</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
