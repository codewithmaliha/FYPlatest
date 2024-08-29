@extends('admin.layouts.main')

@section('main-container')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Post</h4>
                <hr>
                <form method="POST" enctype="multipart/form-data" action="{{ url('/admin/store-ad') }}">
                    @csrf

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="vehicle_name">Vehicle Name</label>
                        <input type="text" name="vehicle_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" name="duration" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" name="location" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="weight">Weight</label>
                        <input type="text" name="weight" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" class="form-control" rows="5" cols="30" maxlength="200"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="categories">Categories</label>
                        <input type="text" name="categories" class="form-control">
                    </div>



                    <div class="form-group">
                        <label for="contact">Contact No</label>
                        <input type="tel" name="contact" class="form-control" placeholder="123-456-7890" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control">

                    </div>

                    <button type="submit" class="btn btn-primary">Create Post</button>
                </form>
            </div>
        </div>
    @endsection
