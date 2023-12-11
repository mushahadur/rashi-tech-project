@extends('website.Layout.app')

@section('contain')
    		<!--welcome-hero start -->
		<section id="home" class="welcome-hero">
			<div class="container">
				<div class="welcome-hero-txt">
					<h2>this is Important Blog site  <br> for all user  </h2>
					<p>
						I am Mushahedur Rahaman khan. I am a full-stack web Developer. 
					</p>
				</div>
			</div>

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

	
		

		<!--blog start -->
		<section id="blog" class="blog" >
			<div class="container">
				<div class="section-header">
					<h2>All Blog Post</h2>
					<p>Always upto date with our latest Blog </p>
				</div><!--/.section-header-->
				<div class="blog-content">
					<div class="row">
						@foreach ($posts as $item)
						<div class="col-md-4 col-sm-6">
							<div class="single-blog-item">
								<div class="single-blog-item-img">
									<img src="{{asset('/storage/Post-image/'.$item->image)}}" alt="blog image">
								</div>
								<div class="single-blog-item-txt">
									<h2><a href="#">{{ $item->title }}</a></h2>
									<h4>posted <span>by</span> <a href="#">User</a>  {{ $item->created_at->format('F Y')}}</h4>
									<p> {{ $item->description }}</p>
								</div>
							</div>
						</div>
						@endforeach
						
						
					</div>
				</div>
			</div><!--/.container-->
			
		</section><!--/.blog-->
		<!--blog end -->
       
@endsection