<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <!-- title of site -->
        <title>Blog Post || Home Page</title>

        @include('website.Layout.include.style')

    </head>
	
	<body>
		
		<!--header-top start -->

            @include('website.Layout.include.header')
           
		<!--header-top end -->

        @yield('contain')

		<!--footer start-->

        @include('website.Layout.include.footer')
		
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->
        @include('website.Layout.include.script')

	
    </body>
	
</html>