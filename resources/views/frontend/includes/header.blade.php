<!--------------------------------------
NAVBAR
--------------------------------------->
<nav class="topnav navbar navbar-expand-lg navbar-light bg-white fixed-top">
	<div class="container">
		<a class="navbar-brand" href="./index.html"><strong>BeuBlog</strong></a>
		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse" id="navbarColor02" style="">
			<ul class="navbar-nav mr-auto d-flex align-items-center">
				<li class="nav-item">
				<a class="nav-link" href="./index.html">Intro <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="./article.html">Culture</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="./article.html">Tech</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="./article.html">Politics</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="./article.html">Health</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="./article.html">Collections</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="./about.html">About</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="./docs.html">Template <span class="badge badge-secondary">docs</span></a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto d-flex align-items-center">
				@guest
					<li class="nav-item">
						<a class="nav-link text-cyan font-weight-bold" href="{{ route('auth.login') }}">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-success font-weight-bold" href="{{ route('auth.register') }}">Register</a>
					</li>
					@else
						<li class="nav-item">
							<span>{{ auth()->user()->name }}</span>
						</li>
						<li class="nav-item pl-2">
							<img src="/backend/dist/img/khoa.jpg" class="imagebg" alt="User Image" style="width:20%; border-radius:50%;">
						</li>
				@endguest
			</ul>
		</div>
	</div>
</nav>
<!-- End Navbar -->