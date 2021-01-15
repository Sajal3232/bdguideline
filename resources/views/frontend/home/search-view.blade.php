@extends('frontend.master')
@section('title')
SUB CATEGORY
@endsection
@section('content')
<section class="p">
		<div class="container">
			<div class="row">
				<div class="col-md-12 pad">
					<h5>বিসিএস ও অন্যান্য সরকারি চাকরির প্রস্তুতি</h5>
				</div>
				<div class="col-md-12">
					<div class="bcs">
						<table class="table table-bordered td-menu">
							<tbody>
								<tr>
                                    <td></td>
                                </tr>
								@foreach($subcategories as $subcategory)
								<tr>
									<td class="">
										<a href="{{url('/pdf/file/view',['id'=>$subcategory->id])}}">{{$subcategory->subname}}</a>
										<!-- <a href="{{url('/pdf/file/download',['file'=>$subcategory->id])}}">DOWNLOAD</a> -->
									</td>
                               </tr>
                                @endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection