@extends('Admin.Dashboard')

@section('title', 'About table')

@section('mainContent')
    <div class="col-md-12 my-4">
        <div class="row">
            <div class="col-6">
                <h2 class="h4 mb-1">About Table</h2>
                <p class="mb-3">Read, Edit, Delete and Add new About.</p>
            </div>
            <div class="col-6">
                <a href="{{route('about.create')}}" class="btn btn-primary float-right">Add New</a>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <!-- table -->
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>NAME</th>
                            <th>Degree</th>
                            <th>Age</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>
                                <a href="{{route('about.show', ['about' => $item->id])}}">
                                    <img src='{{asset("storage/AdminPanel/assets/About/$item->image")}}' width="50px" alt="{{$item->name}}">
                                </a>
                            </td>
                            <td>
                                <a href="{{route('about.show', ['about' => $item->id])}}" style="color:white">{{$item->name}}</a>
                            </td>
                            <td>
                                <p class="mb-0 text-muted">{{$item->degree}}</p>
                            </td>
                            <td>
                                <p class="mb-0 text-muted">{{date('Y') - date('Y', strtotime($item->birthday)) }}</p>
                            </td>
                            <td>
                                <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{route('about.edit', ['about' => $item->id])}}">Edit</a>
                                    <form action="{{route('about.destroy', ['about' => $item->id])}}" method="POST" class="dropdown-item" >
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
