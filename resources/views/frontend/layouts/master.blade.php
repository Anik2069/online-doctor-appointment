<!DOCTYPE html>
<html lang="en">

<!-- doccure/  30 Nov 2019 04:11:34 GMT -->
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Doccure</title>

		@include('frontend.css.css')
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
            <!-- Header -->
			@include('frontend.layouts.pages.header')
			<!-- /Header -->

			<!-- Home -->
            @yield('content')

			<!-- Footer -->
			@include('frontend.layouts.pages.footer')
			<!-- /Footer -->
	    </div>
	   <!-- /Main Wrapper -->
       @include('frontend.js.js')


	</body>

<!-- doccure/  30 Nov 2019 04:11:53 GMT -->
</html>
