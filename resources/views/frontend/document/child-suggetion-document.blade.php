@extends('frontend.master')
@section('title')
SUB CATEGORY
@endsection
@section('content')
	<section class="p">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="d-block m-auto" style="height: 600px; max-width:900px; ">
						@foreach($pdf as $pd)
						<img src="{{asset($pd->suggetion_image)}}" alt="">
						@endforeach

                       		<!-- <iframe src="{{url('subcategory_image/')}}" frameborder="0"></iframe> -->
                        </div>
					</div>
				</div>
			</div>
	</section>
@endsection