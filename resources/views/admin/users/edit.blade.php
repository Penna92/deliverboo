@extends('layouts.admin')

@section('content')
    <h1 class="text-center">Edit</h1>
    <div class="container">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
              Laravel 7 - Edit Blog Post Form Example
            </div>
            <div class="card-body">
              <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('admin.users.update', $user->id)}}">
               @csrf
               @method('PUT')
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" id="name" name="name" class="form-control" required="" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" id="address" name="address" class="form-control" required="" value="{{$user->address}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
    </div>
@endsection