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
							
									@if($categories->name =="এইস এস সি" ||$categories->name =="এস এস সি" )
									<table class="table table-bordered td-menu">
										<tbody>
											<tr>
												<th>বিষয়</th>
												<th>সাজেশন্স</th>
												<th><p>ঢাকা বিশ্ববিদ্যালয়</p>
													<p>ভিবিনন পাবলিক </p>
													<p>বিশ্ববিদ্যালয়ের ছাত্র</p>
													<p>এবং দেশের স্বনামধন্য</p>
													<p>সরকারি কলেজের</p>
													<p>শিক্ষকগনের সহায়তায়</p>
													<p>তৈরি বিশেষ হ্যান্ড নোট</p>
												</th>
											</tr>
											@foreach($subcategories as $subcategory)
											<tr>
												<td>{{$subcategory->subname}}</td>
												<td class="a-link-b"><a href="{{url('/pdf/file/view',['id'=>$subcategory->id])}}">Suggetion Download</a></td>
												<td class="a-link-b" class="a-link-b"><a href="{{url('/pdf/file/view',['id'=>$subcategory->id])}}">Note Download</a></td>
											</tr>
											@endforeach
										</tbody>
									</table>
									@else
							<table class="table table-bordered td-menu">
								<tbody>

									@foreach($subcategories as $subcategory)
									<tr>
										<td><a href="{{url('/childcategory/page',['id'=>$subcategory->id])}}" class="clr">{{$subcategory->subname}}</a></td>
									</tr>
									@endforeach
								</tbody>
							</table>
							@endif
						</div>
					</div>
				</div>
			</div>
	</section>
@endsection