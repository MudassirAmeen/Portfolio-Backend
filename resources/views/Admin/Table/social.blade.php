@extends('Admin.Dashboard')

@section('title', 'Social Links table')

@section('mainContent')
    <div class="col-md-12 my-4">
        <div class="row">
            <div class="col-6">
                <h2 class="h4 mb-1">Social Links Table</h2>
                <p class="mb-3">Read, Edit, Delete and Add new Social Links </p>
            </div>
            <div class="col-6">
                <a href="{{route('social.create')}}" class="btn btn-primary float-right">Add New</a>
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
                            <th>LINKS</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($socialLinks as $item)
                        <tr>
                            <td>
                                {{$item->id}}
                            </td>
                            <td>
                                <p class="mb-0 text-muted">{{$item->name}}</p>
                            </td>
                            <td>
                                <p class="mb-0 text-muted">{{$item->link}}</p>
                            </td>
                            <td>
                                <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{route('social.edit', ['social' => $item->id])}}">Edit</a>
                                    <form action="{{route('social.destroy', ['social' => $item->id])}}" method="POST" class="dropdown-item" >
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
