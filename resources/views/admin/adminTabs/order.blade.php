@extends('admin.layouts.main')

@section('main-container')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">All Orders list
        {{-- <a href="{{ url('/admin/create-post/' ) }}" title="Create Ad" class=" ml-3 badge badge-primary">Create Ad</a> --}}

        </h4>

        <hr>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Post</th>
                <th>Username</th>
                <th>Contact</th>
                <th>Action</th>


              </tr>
            </thead>
            <tbody>
                @php
                    $counter = 1;
                @endphp
                 @foreach ($order as $misbah)
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td><img src="{{ asset($misbah->post_image) }}" style="width:40px;height:40px"> {{ $misbah->post_name }}</td>
                    <td>{{ $misbah->username }}</td>
                    <td>{{ $misbah->contact }}</td>
                    <td>
                        <a href="{{ url('/admin/delete-order/'. $misbah->id ) }}" title="Delete" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
                @endforeach

                {{-- @foreach ($rentnow as $misbah)
                    <tr>
                        <td>{{ $srNo++ }}</td>
                        <td>{{  }}</td>
                        <td>{{ $misbah->username}}</td>
                        <td>{{ $misbah->contact }}</td>


                         <td>
                            <a href="{{ url('/admin/delete-post-ads/'. $rentnow->id ) }}" title="Delete" class="badge badge-danger">Delete</a>
                            <a href="{{ url('/admin/edit-post/'. $rentnow->id ) }}" title="Edit" class="badge badge-primary">Edit</a></td>
                    </tr>
                @endforeach --}}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


@endsection
