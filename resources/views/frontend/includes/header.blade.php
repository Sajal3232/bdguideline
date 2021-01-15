<header class="h-wraper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light bgc">
						<a class="navbar-brand" href="#"><img src="{{asset('/')}}/frontend/images/logo/BD GUID LOGO UPDATE.png" alt=""></a>
						<button class="navbar-toggler m-p-w" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						  <span class="navbar-toggler-icon"></span>
						</button>
					  
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
						  <ul class="navbar-nav mr-auto">
							<li class="nav-item active">
							  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" href="{{url('/job')}}">job</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('/academic')}}">Academic</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" href="{{url('/admission')}}">Admission</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" href="{{url('/contact')}}">Contact</a>
							  </li>
						  </ul>
						  <form class="form-inline my-2 my-lg-0" action="{{url('/search')}}" method="POST"> 
						  	@csrf
							<input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						  </form>
						</div>
					  </nav>
				</div>
			</div>
		</div>
	</header>