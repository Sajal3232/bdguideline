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
									<th><p>বিষয়</p></th>
									<th><p>বিগত ভিবিন্ন সালে বিসিএস ও</p> <p>অন্যান্য সরকারি চাকরির</p> <p>পরীক্ষায় আগত প্রশ্নের সমাধান</p> <p>ও গুরুত্বপূন অংশ</p></th>
                                </tr>
								@foreach($subcategories as $subcategory)
								<tr>
									<td>{{$subcategory->subname}}</td>
									<td class="a-link-b">
										<a href="{{url('/pdf/file/view',['id'=>$subcategory->id])}}">Download</a>
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