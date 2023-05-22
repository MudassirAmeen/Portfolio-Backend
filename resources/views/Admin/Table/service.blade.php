@extends('Admin.Dashboard')

@section('title', 'Services table')

@section('mainContent')
    <div class="col-md-12 my-4">
        <div class="row">
            <div class="col-6">
                <h2 class="h4 mb-1">Services Table</h2>
                <p class="mb-3">Read, Edit, Delete and Add new Services.</p>
            </div>
            <div class="col-6">
                <a href="{{route('service.create')}}" class="btn btn-primary float-right">Add New</a>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <!-- table -->
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>Short Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>
                                <p class="mb-0 text-muted">{{$item->id}}</p>
                            </td>
                            <td>
                                <a href="{{route('service.show', ['service' => $item->id])}}" style="color:white">{{$item->name}}</a>
                            </td>
                            <td>
                                <p class="mb-0 text-muted">{{$item->description}}</p>
                            </td>
                            <td>
                                <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{route('service.edit', ['service' => $item->id])}}">Edit</a>
                                    <form action="{{route('service.destroy', ['service' => $item->id])}}" method="POST" class="dropdown-item" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item"  style="display:contents">Remove</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
