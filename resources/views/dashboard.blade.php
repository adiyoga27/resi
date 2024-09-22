@extends('layouts.panel')
@section('name')
<link rel="stylesheet" href="{{url('assets')}}/libs/apexcharts/dist/apexcharts.css">
    
@endsection
@section('content')
     <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <i class="ri-emotion-line fs-6 text-info"></i>
                                        <p class="fs-4 mb-1">Users</p>
                                    </div>
                                    <div class="col-5">
                                        <h1 class="fw-light text-end mb-0">23</h1>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <i class="ri-image-fill fs-6 text-success"></i>
                                        <p class="fs-4 mb-1">Customer</p>
                                    </div>
                                    <div class="col-5">
                                        <h1 class="fw-light text-end mb-0">169</h1>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <i class="ri-money-euro-circle-line fs-6 text-purple"></i>
                                        <p class="fs-4 mb-1">Omzet Bulan Lalu</p>
                                    </div>
                                    <div class="col-5">
                                        <h1 class="fw-light text-end mb-0">157</h1>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <i class="ri-bar-chart-fill fs-6 text-danger"></i>
                                        <p class="fs-4 mb-1">Omzet Bulan Ini</p>
                                    </div>
                                    <div class="col-5">
                                        <h1 class="fw-light text-end mb-0">236</h1>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Sales Ratio</h4>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="">
                                            <select class="form-select">
                                                <option value="0" selected="">August 2018</option>
                                                <option value="1">May 2018</option>
                                                <option value="2">March 2018</option>
                                                <option value="3">June 2018</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="sales-ratio" class="mt-4"></div>
                                <ul class="list-inline mt-4 text-center fs-2">
                                    <li class="list-inline-item text-muted"><i class="ri-checkbox-blank-circle-fill fs-3 align-middle text-info me-1"></i> COD</li>
                                    <li class="list-inline-item text-muted"><i class="ri-checkbox-blank-circle-fill fs-3 align-middle text-success me-1"></i> PENGIRIMAN</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   
                </div>
               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Nice admin.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
@endsection
@section('js')
    
    <!--This page JavaScript -->
    <script src="{{url('assets')}}/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{url('assets')}}/js/pages/dashboards/dashboard3.js"></script>
@endsection