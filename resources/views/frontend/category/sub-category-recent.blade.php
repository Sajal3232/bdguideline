@extends('frontend.master')
@section('title')
SUB CATEGORY
@endsection
@section('content')
<section class="p">
		<div class="container">
			<div class="row">
				<div class="col-md-12 pad">
					<h5>MCQ মডেল টেস্ট, বিসিএস ও অন্যান্য সরকারি চাকরির প্রস্তুতি</h5>
				</div>
				<div class="col-md-12">
					<div class="mcq-job">
						<table class="table table-bordered td-menu">
							<tbody>
                                @foreach($subcategories as $subcategory)
								<tr>
									<td><a href="{{url('/pdf/file/view',['id'=>$subcategory->id])}}" class="clr">{{$subcategory->subname}}</a></td>
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