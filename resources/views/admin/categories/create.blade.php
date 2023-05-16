@extends('layouts.admin')
@section('content')
        <div class="card">
            <div class="card header">
                <h4>Create Category</h4>
            </div>
            <div class="card-body">
                <form action="{{ url('insert-category') }}" method="POST" >
                    @csrf
                    <div class="row">
                            
                        <div class="col-md-6 mb-3">
                            <label for=""> Name</label>
                            <input type="text" placeholder="Type Category name Here" name="name" class="form-control">
                        </div> 
                        <div class="col-md-6 mb-3">
                            <label for=""> Slug</label>
                            <input type="text" placeholder="Type Category Slug here" name="slug" class="form-control">
                        </div>
                        <div class="col-md-1 mb-3" style=" margin-top:47px">
                            <label for=""> Description</label>
                            <textarea name="description" placeholder="Description"rows="4"></textarea>
                        </div>

                         <div class="col-md-6 mb-3" style="margin-left: 520px; margin-top:56px">
                            <label for=""> Status</label>
                            <input type="checkbox" name="status">
                        </div>
                        
                        <div class="col-md-6 ">
                            <label for=""> Popular</label>
                            <input type="checkbox" name="popular">
                        </div>
                        <div class="col-md-6">
                            <label for=""> Title</label>
                            <input type="text" placeholder="Title" name="title" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3" style="margin-top:30px">
                            <label for=""> Meta Description</label>
                            <textarea name="meta_description" placeholder="Meta description" row="3" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6 mb-3" style="margin-top:30px">
                            <label for=""> Meta Keywords</label>
                            <textarea name="meta_keywords" placeholder="Meta Keywords" row="3" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12">
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="col-md-12 mt-3">
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection