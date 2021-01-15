@extends('frontend.master')
@section('title')
HOME
@endsection
@section('content')
<div class="scroll-text">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="s-text">
						@php
						$information=App\Models\Information::where('publication_status',1)->orderby('id','DESC')->take(3)->get();
						@endphp
						<marquee width="100%" direction="left">
						@foreach($information as $info)
							{{$info->information}}
							@endforeach
						</marquee>
					</div>
				</div>
			</div>
		</div>
    </div>
    
 

	<section class="menu-item">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="2nd-item">
						<table class="table table-bordered td-menu">
						  	<tbody>
							  @foreach($categories as $category)
							  @if($category->select_status=='1')	  
						  		<tr>
						      		<td><a href="{{url('/subcategory/page/general',['id'=>$category->id])}}" class="clr">{{$category->name}}</a></td>
								</tr>
								@endif
                                @endforeach
						    	</tr>
						  	</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-3">
					<div class="1st-item">
						<table class="table table-bordered td-menu">
						  	<tbody>
							  @foreach($categories as $category)
							  @if($category->select_status=='2')
						  		<tr>
						      		<td><a href="{{url('/subcategory/page/academic',['id'=>$category->id])}}" class="clr" >{{$category->name}}</a> </td>
						    	</tr>
						    	@endif
                                @endforeach
						  	</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-3">
					<div class="3rd-item">
						<table class="table table-bordered td-menu">
							<tbody>
							@foreach($categories as $category)
							  @if($category->select_status=='3')
						  		<tr>
						      		<td><a href="{{url('/subcategory/page/admission',['id'=>$category->id])}}" class="clr" >{{$category->name}}</a> </td>
						    	</tr>
						    	@endif
                                @endforeach
							</tbody>
					  </table>
					</div>
				</div>
				<div class="col-md-3">
					<div class="member-f">
						<div class="card-body">
							<h5 class="title">Membership Form:</h5>
							<form action="{{url('/membership/form')}}" method="POST">
									@csrf
								<div class="input-group m-p">
									<input class="input--style-3 {{ $errors->has('name') ? ' is-invalid' : '' }} " type="text" placeholder="Name" name="name">
										@if ($errors->has('name'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
                                        @endif
								</div>
								<div class="input-group m-p">
									<input class="input--style-3 {{ $errors->has('email') ? ' is-invalid' : '' }} " type="email" placeholder="Email" name="email">
										@if ($errors->has('email'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
                                        @endif
								</div>
								<div class="input-group m-p">
									<input class="input--style-3  {{$errors->has('phone') ? 'is-invalid' :''}} " type="text" placeholder="Phone" name="phone">
										@if ($errors->has('phone'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('phone') }}</strong>
											</span>
                                        @endif
								</div>
								<div class="input-group m-p">
									<div class="rs-select2 js-select-simple select--no-search">
										<select name="gender">
											<option disabled="disabled" selected="selected">Gender</option>
											<option value="1">Male</option>
											<option value="2">Female</option>
											<option value="3">Other</option>
										</select>
										<div class="select-dropdown"></div>
									</div>
								</div>
								<div class="input-group m-p">
									<input class="input--style-3 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="password">
									   @if ($errors->has('password'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
                                        @endif
                                </div>
								<div class="p-t-10">
									<button class="btn btn--pill btn--green colr" type="submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>					
	</section>

	<section class="mcq-test">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mcq-t">
						<div class="mcq-l">
						 @foreach($categories as $category)
							  @if($category->select_status=='4')
							<div class="one">
								<a href="{{url('/subcategory/page/recent',['id'=>$category->id])}}" class="clr">{{$category->name}}</a>
							</div>
							@endif
							@endforeach
						</div>
						@foreach($categories as $category)
							  @if($category->select_status=='5')
						<div class="mcq-r">
							<div class="three">
								<a href="{{url('/subcategory/page/mcq',['id'=>$category->id])}}" class="clr">{{$category->name}}</a>
							</div>
						</div>
						@endif
							@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection