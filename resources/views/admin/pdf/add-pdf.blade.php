@extends('admin.master')
@section('title')
CATEGORY
@endsection
@section('content')
<div id="form_body" class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="custom-bg">
                    <form action="{{url('/pdf/save')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-sm-6">
                               <div class="form-group">
                                <label for="title">Category <span>*</span></label>
                                <select  class="form-control select2{{ $errors->has('proCategory') ? ' is-invalid' : '' }}" value="{{ old('proCategory') }}" id="proCategory" name="proCategory">
                                    <option value="">====Select your category====</option>
                                    @foreach($categories as $key=>$value) 
                                    <option value="{{$value->id}}" required>{{$value->name}}</option>
                                    @endforeach
                                </select>
                                  @if ($errors->has('proCategory'))
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('proCategory') }}</strong>
                                  </span>
                                  @endif
                             </div>
                        </div>
                      <!-- /.form-group -->
                        <div class="col-sm-6">
                           <div class="form-group">
                                <label for="title">Subcategory<span>*</span></label>
                                <select name="proSubcategory" id="proSubcategory" class="form-control {{ $errors->has('proSubcategory') ? ' is-invalid' : '' }}" value="{{ old('proSubcategory') }}" required>
                                </select>
                                 @if ($errors->has('proSubcategory'))
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('proSubcategory') }}</strong>
                                  </span>
                                  @endif
                            </div>
                        </div>
                      <!-- /.form-group -->
                        <div class="col-sm-6">
                           <div class="form-group">
                            <label for="title">Child Category  (Optional)</label>
                                <select name="proChildcategory" id="proChildcategory" class="form-control" value="{{ old('proChildcategory') }}">
                                </select>
                            </div>
                        </div>
                      <!-- /.form-group -->
                        
                  <!-- /.form-group -->
                  <div class="col-lg-6">
                    <div class="form-group">
                          <label for="image"> Suggetion <span>*</span></label>
                          <input type="file" name="image[]" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" value="{{ old('image') }}" multiple="multiple">

                          @if ($errors->has('image'))
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                          </span>
                          @endif
                        </div>
                      <!-- /.form-group -->
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                          <label for="image"> Note <span>*</span></label>
                          <input type="file" name="image1[]" class="form-control{{ $errors->has('image1') ? ' is-invalid' : '' }}" value="{{ old('image1') }}" multiple="multiple">

                          @if ($errors->has('image'))
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image1') }}</strong>
                          </span>
                          @endif
                        </div>
                      <!-- /.form-group -->
                  </div>
                    
                  <!-- /.form-group -->
                  
                  <!-- /.form-group -->
                  <div class="col-sm-12">
                        <div class="form-group">
                            <label for="status">Publication Status</label>
                            <div class="box-body pub-stat display-inline">
                            <input class="{{ $errors->has('status') ? ' is-invalid' : '' }}" type="radio" id="active" name="status" value="1">
                            <label for="active">Active</label>
                            @if ($errors->has('status'))
                            <span class="invalid-feedback">
                              <strong>{{ $errors->first('status') }}</strong>
                            </span>
                            @endif
                        </div>
                          <div class="box-body pub-stat display-inline">
                              <input class="{{ $errors->has('status') ? ' is-invalid' : '' }}" type="radio" name="status" value="0" id="inactive">
                              <label for="inactive">Inactive</label>
                              @if ($errors->has('status'))
                              <span class="invalid-feedback">
                                <strong>{{ $errors->first('status') }}</strong>
                              </span>
                              @endif
                          </div>
                              @if ($errors->has('status'))
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('status') }}</strong>
                              </span>
                              @endif
                          </div>
                      </div>
                      <div class="col-sm-12 mrt-30">
                          <div class="form-group">
                              <button type="submit" class="btn btn-info submit-button">submit</button>
                              <button type="reset" class="btn btn-primary
                              ">clear</button>
                          </div>
                      </div>
                      <!-- /.form-group -->
                 </div>
                </div>
              </div>
            <!-- /.col -->
              </form>
              <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
              <script type="text/javascript">
             $(document).ready(function(){

             
                $('#proCategory').change(function(){
                    debugger;
                var ajaxId = $(this).val();    
                if(ajaxId){
                    $.ajax({
                    type:"GET",
                    url:"<?php echo e(url('ajax-product-subcategory')); ?>?category_id="+ajaxId,
                    success:function(res){               
                        if(res){
                            $("#proSubcategory").empty();
                            $("#proSubcategory").append('<option value="">=====select your subcategory======</option>');
                            $.each(res,function(key,value){
                                $("#proSubcategory").append('<option value="'+key+'">'+value+'</option>');
                            });
                    
                        }else{
                        $("#proSubcategory").empty();
                        }
                    }
                    });
                }else{
                    $("#proSubcategory").empty();
                    $("#proSubcategory").empty();
                }      
            });
        });


        

    </script>
    <script type="text/javascript">
             $(document).ready(function(){

             
                $('#proSubcategory').change(function(){
                    debugger;
                var ajaxId = $(this).val();    
                if(ajaxId){
                    $.ajax({
                    type:"GET",
                    url:"<?php echo e(url('ajax-product-childcategory')); ?>?subcategory_id="+ajaxId,
                    success:function(res){               
                        if(res){
                            $("#proChildcategory").empty();
                            $("#proChildcategory").append('<option value="">=====select your subcategory======</option>');
                            $.each(res,function(key,value){
                                $("#proChildcategory").append('<option value="'+key+'">'+value+'</option>');
                            });
                    
                        }else{
                        $("#proChildcategory").empty();
                        }
                    }
                    });
                }else{
                    $("#proChildcategory").empty();
                    $("#proChildcategory").empty();
                }      
            });
        });


        

    </script>
@endsection