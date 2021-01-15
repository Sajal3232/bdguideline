@extends('admin.master')
@section('title')
CATEGORY
@endsection
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Add Category information</h3>
                <div class="short_button">
                    <a href=""><i class="fa fa-cogs"></i>Manage</a>
                </div>
            </div>
      <!--card-header -->
            <div id="form_body" class="card-body">
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <div class="custom-bg">
                    <form action="{{url('/category/save')}}" method="POST" >
                      @csrf
                      <div class="row">
                                  <div class="box-body pub-stat display-inline">
                                    <input  type="radio" name="select_status" value="1" >General
                                    <input  type="radio" name="select_status" value="2" >Education
                                    <input  type="radio" name="select_status" value="3" >Admission
                                    <input  type="radio" name="select_status" value="4" >Model Test (MCQ) [jobs]
                                    <input  type="radio" name="select_status" value="5" >Recent Questions & answers [Jobs]
                                </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="">
                                </div>
                            </div>
                      
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="status">Publication Status</label>
                                    <div class="box-body pub-stat display-inline">
                                    <input  type="radio"  name="status" value="1">
                                    <label for="active">Active</label>
                                </div>
                                <div class="box-body pub-stat display-inline">
                                    <input  type="radio" name="status" value="0" >
                                    <label for="inactive">Inactive</label>
                                </div>
                            </div>

                            <div class="col-sm-12 mrt-30">
                                <div class="form-group">
                                    <button type="submit" name='btn' class="btn btn-info submit-button">submit</button>
                                    <button type="reset" name='btn' class="btn btn-primary btn-default">clear</button>
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