<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @include('admin.layouts.supports')
</head>

<body>
    <div class="container-fluid">
        @section('header')
            {{-- <header>This is Base-header Section</header> --}}
        @show
    </div>


    <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">
            <div class="col-xs-12 col-sm-3 sidebar-offcanvas" id="sidebar">
                @section('body-content-sidebar')
                @show
            </div>
            <div class="col-xs-12 col-sm-9">
                @section('body-content-content')
                @show
            </div>
        </div>
    </div>


    @include('admin.layouts.supportScripts')
    @section('footer')

        <div class="container">
            {{-- <footer>This is base-footer Section</footer> --}}
        </div>
    @show
</body>