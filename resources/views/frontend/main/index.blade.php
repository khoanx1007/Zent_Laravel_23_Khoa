@extends('frontend.layouts.client');
@section('content')
		<div class="container">
		<h1 class="secondfont font-weight-bold">Recent Post</h1>
	</div>
	<div class="container pt-4 pb-4">
		<div class="row">
			<div class="col-lg-6">
				@foreach ($posts as $post)
					<div class="card border-0 mb-4 box-shadow h-xl-300">              
						<div style="background-image: url({{ $post->my_image }}); height: 150px;    background-size: cover;    background-repeat: no-repeat;"></div>               
						<div class="card-body px-0 pb-0 d-flex flex-column align-items-start">
							<h2 class="h4 font-weight-bold">
							<a class="text-dark" href="./article.html">{{$post->title}}</a>
							</h2>
							<p class="card-text">
								{{$post->content}}
							</p>
							<div>
								<small class="d-block"><a class="text-muted" href="./author.html">Favid Rick</a></small>
								<small class="text-muted">Dec 12 &middot; 5 min read</small>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<div class="col-lg-6">
				<div class="flex-md-row mb-4 box-shadow h-xl-300">
					@foreach ($posts2 as $post2 )		
							<div class="mb-3 d-flex align-items-center">
								<img height="100" width="120" src="{{ $post2->my_image }}">
								<div class="pl-3">
									<h2 class="mb-2 h6 font-weight-bold">
									<a class="text-dark" href="./article.html">{{ $post2->title }}</a>
									</h2>
									<div class="card-text text-muted small">
										{{$post->content}}
									</div>
									<small class="text-muted">Dec 12 &middot; 5 min read</small>
								</div>
							</div>										
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-md-8">
				<h5 class="font-weight-bold spanborder"><span>All Stories</span></h5>
				<div class="mb-3 d-flex justify-content-between">
					<div class="pr-3">
						<h2 class="mb-1 h4 font-weight-bold">
						<a class="text-dark" href="./article.html">East Antarctica's glaciers are stirring</a>
						</h2>
						<p>
							Nasa says it has detected the first signs of significant melting in a swathe of glaciers in East Antarctica.
						</p>
						<div class="card-text text-muted small">
							Jake Bittle in SCIENCE
						</div>
						<small class="text-muted">Dec 12 &middot; 5 min read</small>
					</div>
					<img height="150" src="frontend/assets/img/demo/1.jpg">
				</div>
			</div>
			<div class="col-md-4 pl-4">
				<h5 class="font-weight-bold spanborder"><span>Popular</span></h5>
				<ol class="list-featured">
					<li>
					<span>
					<h6 class="font-weight-bold">
					<a href="./article.html" class="text-dark">Did Supernovae Kill Off Large Ocean Animals?</a>
					</h6>
					<p class="text-muted">
						Jake Bittle in SCIENCE
					</p>
					</span>
					</li>
					<li>
					<span>
					<h6 class="font-weight-bold">
					<a href="./article.html" class="text-dark">Humans Reversing Climate Clock: 50 Million Years</a>
					</h6>
					<p class="text-muted">
						Jake Bittle in SCIENCE
					</p>
					</span>
					</li>
					<li>
					<span>
					<h6 class="font-weight-bold">
					<a href="./article.html" class="text-dark">Unprecedented Views of the Birth of Planets</a>
					</h6>
					<p class="text-muted">
						Jake Bittle in SCIENCE
					</p>
					</span>
					</li>
					<li>
					<span>
					<h6 class="font-weight-bold">
					<a href="./article.html" class="text-dark">Effective New Target for Mood-Boosting Brain Stimulation Found</a>
					</h6>
					<p class="text-muted">
						Jake Bittle in SCIENCE
					</p>
					</span>
					</li>
				</ol>
			</div>
		</div>
	</div>
@endsection