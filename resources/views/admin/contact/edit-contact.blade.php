@extends('admin.master')
@section('title')
Edit contact
@endsection
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Edit Contact</h3>
               
            </div>
      <!--card-header -->
            <div id="form_body" class="card-body">
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <div class="custom-bg">
                    <form action="{{url('/contact/update')}}" method="POST" >
                      @csrf
                      <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Owner Name</label>
                                    <input type="text" name="ownername" class="form-control" value="{{$contact->ownername}}">
                                    <input type="hidden" name="owner_id" class="form-control" value="{{$contact->id}}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Owner Degree</label>
                                    <input type="text" name="ownerdegree" class="form-control" value="{{$contact->ownername}}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Owner Institute</label>
                                    <input type="text" name="ownerinstitute" class="form-control" value="{{$contact->ownerinstitute}}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Others</label>
                                    <input type="text" name="other" class="form-control" value="{{$contact->other}}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Owner Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{$contact->phone}}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Owner Email</label>
                                    <input type="email" name="email" class="form-control" value="{{$contact->email}}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="status">Publication Status</label>
                                    <div class="box-body pub-stat display-inline">
                                    <input  type="radio"  name="publication_status" {{$contact->publication_status == 1 ? 'checked' : ' '}} value="1">
                                    <label for="active">Active</label>
                                </div>
                                <div class="box-body pub-stat display-inline">
                                    <input  type="radio" name="publication_status" {{$contact->publication_status == 0 ? 'checked' : ' '}} value="0" >
                                    <label for="inactive">Inactive</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mrt-30">
                                <div class="form-group">
                                    <button type="submit" name='btn' class="btn btn-info submit-button">Update</button>
                                </div>
                            </div>

                        </div>
                      <!-- /.form-group -->
            <!-- /.col -->
              </form>
          </div>
        <!--card-body-->
      </div>
      <!--card-->
    </div>
  <!--container-fluid-->
</div>
  </section>
  <!-- /.content -->
@endsection