<!DOCTYPE html>
<html lang="en" dir="ltr">
<!--Head : meta, css -->
    @include('admin.layouts.head')
<!--End Head-->
<body class="app sidebar-mini rtl">

<!--Global-Loader-->
<div id="global-loader">
    <img src="{{ asset('assets/images/icons/loader.svg') }}" alt="loader">
</div>

<div class="page">
    <div class="page-main">

        <!--app-header-->
        @include('admin.layouts.header')
        <!--app-header end-->

        <!-- Sidebar menu-->
        @include('admin.layouts.sidebar')
        <!--sidemenu end-->

        <!-- app-content-->
        <div class="app-content  my-3 my-md-5">
            <!--End side app-->
            <div class="side-app">
                <!-- Page header content -->
                @include('admin.layouts.header_content')
                <!-- End page-header -->
                @yield('content')
            </div>
            <!--End side app-->

            <!-- Right-sidebar-->
            @include('admin.layouts.right_sidebar')
            <!-- End Rightsidebar-->

            <!--footer-->
            @include('admin.layouts.footer')
            <!-- End Footer-->

        </div>
        <!-- End app-content-->
    </div>
</div>
<!-- End Page -->

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- Script: Jquery, javascript -->
@include('admin.layouts.script')
<!-- End Script -->
</body>

</html>
