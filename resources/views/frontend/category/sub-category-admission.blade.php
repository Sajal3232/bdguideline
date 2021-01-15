@extends('frontend.master')
@section('title')
SUB CATEGORY
@endsection
@section('content')
<section class="p">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mcq-job">
						<table class="table table-bordered td-menu">
							<tbody>
								@foreach($subcategories as $subcategory)
									
								<tr>
									<td><a href="{{url('/childcategory/page',['id'=>$subcategory->id])}}" class="clr">{{$subcategory->subname}}</a></td>
								</tr>
								
								@endforeach

								<!-- <tr>
									<td><a href="{{url('/childcategory/page',['id'=>$subcategory->id])}}" class="clr">{{$subcategory->subname}}</a></td>
                                </tr> -->
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section
@endsection