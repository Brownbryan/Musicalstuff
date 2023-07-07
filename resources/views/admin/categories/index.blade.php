@extends('layouts.admin')
@section('content')
<div class="card-header">
    <h4 class="text-center">Category Page</h4>
</div>
<form action="{{ route('categories.create') }}" method="GET" style="display: inline-block;">
    @csrf
    <button class="btn btn-sm btn-info">
     New Category
    </button>
    </form>
        <div class="card">  

            <div class="card-body">
                <table class="table table-bordered">
                <div class="table">
                    <thead>
                        <tr>
                            <th>Id</th>&nbsp; &nbsp;
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $row )
                        <tr>
                            
                            <td>{{ $row->id  }}</td>
                            <td>{{ $row->name  }}</td>
                            <td>{{ $row->description }}</td>
                            <td>
                         
                                <img src="{{ asset('uploads/new_uploads/category/'.$row->image) }}" class="category-image" alt="Image Here">
                                
                            </td>
                            <td>
                                <a href="{{ url('edit-category/'.$row->id) }}" class="btn btn-sm btn-info" >Edit</a>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </div>
                </table>
            </div>
        </div>
@endsection