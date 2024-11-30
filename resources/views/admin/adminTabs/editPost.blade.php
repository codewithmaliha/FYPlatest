
@extends('admin.layouts.main')

@section('main-container')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card"><div class="card-body">
    <h4 class="card-title">Edit Post</h4>
    <hr>
    <form method="POST" enctype="multipart/form-data"    action="{{ url('/admin/edit-post/'.$post->id) }}">
        @csrf

        <div class="form-group">
            <img src="{{asset($post->image)}}" alt="{{($post->image)}}" style="width:100px; height:100px">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="vehiclename">Vehicle Name</label>
            <input type="text" name="vehiclename" value="{{ $post->serviceName }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="text" name="duration" value="{{ $post->duration }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" value="{{ $post->location }}" class="form-control">
        </div>





        <div class="form-group">
            <label for="weight">Load Capacity</label>
            <input type="number" name="loadCapacity" value="{{ $post->loadCapacity }}" class="form-control" placeholder="Enter weight in kg" required>
            <select name="unit" id="unit">
                <option value="kg">Kg</option>
                <option value="lbs">Lbs</option>
              </select>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" name="description" value=""  class="form-control" rows="5" cols="30" maxlength="200" >{{ $post->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="categories">Categories</label>
            <input type="text" name="categories" value="{{ $post->type }}" disabled class="form-control">
        </div>
        <div class="form-group">
            <label for="contact">Contact No</label>
            <input type="tel" name="contact"  value="{{ $post->contact }}"  class="form-control" placeholder="123-456-7890" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" value="{{ $post->price }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
</div>


@endsection
