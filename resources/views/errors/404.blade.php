<!doctype html>
<html lang="en" dir="ltr">
    <!--Head : meta, css -->
    @include('admin.layouts.head')
    <!--End Head-->
    <body>
        <!-- page -->
        <div class="page">

			<!-- page-content -->
			<div class="page-content">
				<div class="container text-center text-dark">
					<div class="display-1  text-dark mb-5">404</div>
					<p class="h5 font-weight-normal mb-7 leading-normal">Oops! looks like you got lost...</p>
					<a class="btn btn-primary  mb-5" href="{{ route('dashboard') }}">
						Go To Homepage
					</a>
				</div>
			</div>
			<!-- page-content end -->
		</div>
        <!-- page End-->

        <!-- Jquery js-->
        @include('admin.layouts.script')

    </body>
</html>
