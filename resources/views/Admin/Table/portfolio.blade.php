@extends('Admin.Dashboard')

@section('title', 'Portfolio table')

@section('mainContent')
    <div class="col-md-12 my-4">
        <div class="row">
            <div class="col-6">
                <h2 class="h4 mb-1">Portfolio Table</h2>
                <p class="mb-3">Read, Edit, Delete and Add new Portfolio.</p>
            </div>
            <div class="col-6">
                <a href="{{route('portfolio.create')}}" class="btn btn-primary float-right">Add New</a>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <!-- table -->
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Client</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>
                               <a href="{{route('portfolio.show',['portfolio' => $item->id])}}"><img src='{{asset("storage/AdminPanel/assets/Portfolio/$item->featureImage")}}' width="50px" alt="{{$item->name}}"></a>
                            </td>
                            <td>
                                <p class="mb-0 text-muted">{{$item->name}}</p>
                            </td>
                            <td>
                                <p class="mb-0 text-muted" >{!! html_entity_decode($item->category) !!}</p>
                            </td>
                            <td>
                                <p class="mb-0 text-muted" >{!! html_entity_decode($item->client) !!}</p>
                            </td>
                            <td>
                                <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{route('portfolio.edit', ['portfolio' => $item->id])}}">Edit</a>
                                    <form action="{{route('portfolio.destroy', ['portfolio' => $item->id])}}" method="POST" class="dropdown-item" >
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
