@extends('admin.layouts.main')

@section('main-container')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">All posted Ads list
        <a href="{{ url('/admin/create-post/' ) }}" title="Create Ad" class=" ml-3 badge badge-primary" style="background-color:#fdb900;">Create Ad</a>

        </h4>

        <hr>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Sr#</th>
                <th>Image</th>
                <th>Service Name</th>
                <th>Type</th>
                <th>Duration</th>
                <th>location</th>
                <th >Description</th>
                <th>Contact</th>
                <th>Price</th>
                <th>Model/Year</th>
                <th>Fuel Type</th>
                <th>Power Source:</th>
                <th>Capacity:</th>
                <th>Goods Supported:</th>
                <th>Special Features</th>
                <th>Workers Available</th>
                <th>Experience/Skills</th>
                <th>Posted By</th>
                <th>Created At</th>
                <th>Available In</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $srNo = 1;
                @endphp

                @foreach ($post as $maliha)
                    <tr>
                        <td>{{ $srNo++ }}</td>
                        <td><img src="{{asset($maliha->image)}}" alt="image" style="width:50px ; height:50px"></td>
                        <td>{{ $maliha->serviceName }}</td>
                        <td>{{ $maliha->type }}</td>
                        <td>{{ $maliha->duration }}</td>
                        <td>{{ $maliha->location }}</td>
                        <td >{{ Str::limit($maliha->description,30,'....')}}</td>
                        <td>{{ $maliha->contact }}</td>
                        <td>{{ $maliha->price }}</td>
                        <td>{{ $maliha->modelYear }}</td>
                        <td>{{ $maliha->fuelType }}</td>
                        <td>{{ $maliha->powerSource }}</td>
                        <td>{{ $maliha->capacity }}</td>
                        <td>{{ $maliha->goodsSupported }}</td>
                        <td>{{ Str::limit($maliha->specialFeatures, 20,'. . .') }}</td>
                        <td>{{ $maliha->workersAvailable }}</td>
                        <td>{{ $maliha->experienceSkills }}</td>
                        <td>{{ $maliha->user->name }}</td>
                        <td>{{ $maliha->created_at->diffForhumans()}}</td>
                        <td>{{$maliha->booked_until ? $maliha->booked_until : 'N/A'}}</td>
                        <td>
                          <!-- Blade Template -->
<!-- Status Change Button -->
                                {{-- <button href="#"
                                data-toggle="modal" data-target="#exampleModal"
                                class="btn btn-sm btn-{{$maliha->status ? 'success' : 'danger'}}"
                                data-toggle="modal"
                                data-target="#statusChangeModal"
                                data-id="{{$maliha->id}}"
                                data-status="{{$maliha->status}}"
                                data-schedule-date="{{$maliha->schedule_date}}"
                                data-schedule-time="{{$maliha->schedule_time}}">
                                {{$maliha->status ? 'Available' : 'Booked'}}
                        </button> --}}

                        @if($maliha->status == 1)
                            <button data-toggle="modal" data-target="#exampleModal" data-id="{{ $maliha->id }}" class="btn btn-sm btn-success btn-action">Available</button>
                        @else
                            <a href="{{ url('/admin/status-change?id='.$maliha->id) }}" class="btn btn-sm btn-danger">Booked</a>
                        @endif

                      </td>




                        <td>
                            <a href="{{ url('/admin/delete-post-ads/'. $maliha->id ) }}" title="Delete" class="badge badge-danger">Delete</a>
                            <a href="{{ url('/admin/edit-post/'. $maliha->id ) }}" title="Edit" class="badge badge-primary">Edit</a>
                          </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

 <!-- Status Change Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Add Booked Time</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
          <form action="{{ url('/admin/status-change') }}" method="POST">
              @csrf
              <input type="hidden" name="id" id="record_id" >
              <div class="form-group">
                <label for="contact">Time:</label>
                <input type="datetime-local"  name="time" class="form-control" >
              </div>

            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-warning">Booked Vehicle</button>
            </div>
          </form>
  </div>
  </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.btn-action');
        buttons.forEach(button => {
            button.addEventListener('click', function () {
                // alert('Maliha Clicked the Button');
                // get the id from html input
                const recordId = this.getAttribute('data-id');
                // Set the values in the form
                document.getElementById('record_id').value = recordId;
            });
        });
    });
</script>



@endsection
