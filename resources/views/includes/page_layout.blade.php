@include('includes.header')

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div class="text-center" style="margin-left: 30px;">
                    <h5 style="width:125px">RSBN</h5> 
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
                </div>
            </div>
            @include('includes.sidebar')
        </div>
        @include('includes.headinfo')
        {{-- @include('includes.topbar') --}}

        <div class="page-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        @include('includes.footer')
        <!--end wrapper-->
        
</body>
</html>
<!--end wrapper-->
