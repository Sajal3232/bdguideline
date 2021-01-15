
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('/')}}/frontend/css/owl.carousel.min.css"> <!------one-------->
	<link rel="stylesheet" href="{{asset('/')}}/frontend/css/owl.theme.default.min.css"> <!------Two-------->
	<link rel="stylesheet" href="{{asset('/')}}/frontend/css/bootstrap.min.css"> <!------Three------->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/{{asset('/')}}/frontend/css/all.min.css">
	<link rel="stylesheet" href="{{asset('/')}}/frontend/css/style.css"> <!------Coustom-------->
	<link rel="stylesheet" href="{{asset('/')}}/frontend/css/responsive.css"> <!------REsponsive CSS-------->
</head>
<body>
	@include('frontend.includes.header')

	 @yield('content')

     @include('frontend.includes.footer')





	<script src="{{asset('/')}}/frontend/js/jquery-3.5.1.min.js"></script><!--First default jquery-->
    <script src="{{asset('/')}}/frontend/js/bootstrap.min.js"></script><!--Second bootstrap-->
    <script src="{{asset('/')}}/frontend/js/owl.carousel.min.js"></script><!--owl carousel-->
    
</body>
</html>