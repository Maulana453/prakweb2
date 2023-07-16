  <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
	<a class="navbar-brand" href="index.html">
	  <span>
		Watcher
	  </span>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	  <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
		<ul class="navbar-nav  ">
		  <li class="nav-item active">
			<a class="nav-link" href="{{  url('frontend/home') }}">Home <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="{{  url('frontend/about') }}"> About </a>
		  </li>
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Our Watches
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <a class="dropdown-item" href="{{  url('frontend/automatic') }}">Automatic</a>
			  <a class="dropdown-item" href="{{  url('frontend/chronograph') }}">Chronograph</a>
			  <a class="dropdown-item" href="{{  url('frontend/digital') }}">Digital</a>
			  <a class="dropdown-item" href="{{  url('frontend/quartz') }}">Quartz</a>
			  <a class="dropdown-item" href="{{  url('frontend/smartwatch') }}">Smartwatch</a>
			</div>
		  </li>
		  
		  <li class="nav-item">
			<a class="nav-link" href="{{  url('frontend/contact') }}">Contact us</a>
		  </li>

		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				User
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
				<a href="#" class="dropdown-item">My Profile</a>
				<a href="#" class="dropdown-item">Settings</a>
				<hr class="dropdown-divider divider-thick">
				<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>
		
				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form>
			</div>
		  </li>
		</ul>
	  </div>
	</div>
  </nav>