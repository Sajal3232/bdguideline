@extends('frontend.master')
@section('title')
SUB CATEGORY
@endsection
@section('content')
<section class="menu-item">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="2nd-item">
						<table class="table table-bordered td-menu">
						  	<tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td><a href="{{url('/subcategory/page/admission',['id'=>$category->id])}}" class="clr" > {{$category->name}} </a> </td>
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