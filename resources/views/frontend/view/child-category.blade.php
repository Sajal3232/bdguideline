@extends('frontend.master')
@section('title')
SUB CATEGORY
@endsection
@section('content')
<section class="p">
		<div class="container">
			<div class="row">
				<div class="col-md-12 pad">
					<h5>জাতীয় বিশ্ববিদ্যালয় এবং ঢাকা বিশ্ববিদ্যালয় অধিভুক্ত কলেজের (বাংলা, গণিত, ইংরেজী, অর্থনীতি, রাস্ট্রবিজ্ঞান) মাস্টার্স ফাইনাল ভিবিন্ন বষের নতুন সিলেবাস অনুযায়ী রচিত সাজেশন্স এবং হ্যান্ড নোট
					</h5>
				</div>
				<div class="col-md-12">
					<div class="Masters">
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
						  				<p>শিক্ষকগনের সহায়তায়<p/>
						  				<p>তৈরি বিশেষ হ্যান্ড নোট</p>
						  			</th>
								  </tr>

						  		<tr>
						      		<th>{{$subcategories->subname}}</th>
						      		<td></td>
						      		<td></td>
								  </tr>
								  @foreach($childcategories as $childcategory)
						    	<tr>
						      		<td>{{$childcategory->childname}}</td>
						      		<td class="a-link-b"><a href="{{url('/pdf/file/view/child/suggetion',['id'=>$childcategory->id])}}">Suggetion Download</a></td>
						      		<td class="a-link-b" class="a-link-b"><a href="{{url('/pdf/file/view/child/note',['id'=>$childcategory->id])}}">Note Download</a></td>
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