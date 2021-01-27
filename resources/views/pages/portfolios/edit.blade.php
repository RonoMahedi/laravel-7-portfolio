@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Edit</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <form action="{{route('portfolio.update', $portfolio->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("put")
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h3>Big Image</h3>
                        <img style="height: 30vh" src="{{url($portfolio->big_image)}}" class="img-thumbnail" alt="big image">
                        <input class="mt-3" type="file" name="big_image">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <h3>Small Image</h3>
                        <img style="height: 20vh" src="{{url($portfolio->small_image)}}" class="img-thumbnail" alt="small image">
                        <input class="mt-3" type="file" name="small_image">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$portfolio->title}}">
                        </div>
                        <div class="mb-5">
                            <label for="sub_title">Sub Title</label>
                            <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{$portfolio->sub_title}}">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <h3>Description</h3>
                        <textarea class="form-control" name="description" rows="5">{{$portfolio->description}}</textarea>
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="client">Client</label>
                            <input type="text" class="form-control" id="client" name="client" value="{{$portfolio->client}}">
                        </div>
                        <div class="mb-5">
                            <label for="category">Category</label>
                            <input type="text" class="form-control" id="category" name="category" value="{{$portfolio->category}}">
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5">
             </form>
        </div>
    </main>
@endsection
