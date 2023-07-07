@extends('layouts.admin')
@section('content')
        <div class="card">
            <div class="card header">
                <h4>Update Category</h4>
            </div>
            <div class="card-body">
                <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                            
                        <div class="col-md-6 mb-3">
                            <label for=""> Name</label>
                            <input type="text" value="{{ $category->name }}" placeholder="Type Category name Here" name="name" class="form-control">
                        </div> 
                        <div class="col-md-6 mb-3">
                            <label for=""> Slug</label>
                            <input type="text" value="{{ $category->slug }}" placeholder="Type Category Slug here" name="slug" class="form-control">
                        </div>
                        <div class="col-md-1 mb-3" style=" margin-top:47px">
                            <label for=""> Description</label>
                            <textarea name="description" placeholder="Description"rows="4">{{ $category->description }}</textarea>
                        </div>

                         <div class="col-md-6 mb-3" style="margin-left: 520px; margin-top:56px">
                            <label for=""> Status</label>
                            <input type="checkbox" {{ $category->status =="1"? 'checked':'' }} name="status">
                        </div>
                        
                        <div class="col-md-6 ">
                            <label for=""> Popular</label>
                            <input type="checkbox" {{ $category->popular =="1" ? 'checked':'' }} name="popular">
                        </div>
                        <div class="col-md-6">
                            <label for=""> Title</label>
                            <input type="text" value="{{ $category->title }}" placeholder="Title" name="title" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3" style="margin-top:30px">
                            <label for=""> Meta Description</label>
                            <textarea name="meta_description" placeholder="Meta description" row="3" class="form-control">{{ $category->meta_description }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3" style="margin-top:30px">
                            <label for=""> Meta Keywords</label>
                            <textarea name="meta_keywords" placeholder="Meta Keywords" row="3" class="form-control">{{ $category->meta_keywords }}</textarea>
                        </div>
                        @if($category->image != null)
                        <div class="col-md-12">
                            <img src="{{ asset('uploads/new_uploads/category/'.$category->image) }}" class="category-image" alt="Image Here">
                
                            <input type="file" name="image" class="form-control">
                        </div>
                        @endif
                        <div class="col-md-12 mt-3">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection