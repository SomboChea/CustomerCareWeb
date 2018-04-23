@extends('layouts.app')

@section('content')
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <!-- { Top } Dashboard row -->
            <div class="row">
                <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title float-left">@yield('title')</h1>
                    <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
                </div>
            </div>
            <!-- { Botton } end Dashboard row -->

            @yield('block-content') <!-- main content -->

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->
@endsection()