@extends('layouts.admin')
@section('content')
        <div class="card">
            <div class="card-body">
                <h1 class="text-center">Welcome to  {{ Auth::user()->name }}  Dashboard</h1>
            </div>
        </div>
@endsection