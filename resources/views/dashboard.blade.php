
@extends('admin-master')

@section('content')
   <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h4>Tableau de Bord</h4>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                </div><input class="form-control fc-datepicker" name="daterange" placeholder="MM/DD/YYYY" type="text">
                            </div>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">CA LOTS VENDUS</h6>
                                                        <h2 class="mb-0 number-font">44,278 DHS</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="saleschart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">CA LOTS RESERVES</h6>
                                                        <h2 class="mb-0 number-font">67,987 DHS</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="leadschart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">TOTAL AVANCES</h6>
                                                        <h2 class="mb-0 number-font">76,965 DHS</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="profitchart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">TOTAL RELIQUATS</h6>
                                                        <h2 class="mb-0 number-font">59,765 DHS</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="costchart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 END -->
                        
                        <!-- COL END -->
                    </div>
                    <!-- ROW CLOSED -->
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6  col-xl-3">
                            <div class="card widgets-cards bg-primary box-primary-shadow">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <div class="chart-circle chart-circle-sm ms-3 mt-1" data-value="0.62" data-thickness="6" data-bs-color="#3c5998">
                                        <div class="chart-circle-value text-white">70%</div>
                                    </div>
                                    <div class="wrp text-wrapper text-white p-3">
                                        <p class="mt-0">8758</p>
                                        <p class="mt-1 mb-0">Nbr Lots Libres</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COL END -->
                        <div class="col-sm-12 col-md-6 col-lg-6  col-xl-3">
                            <div class="card widgets-cards bg-success box-success-shadow">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <div class="chart-circle chart-circle-sm ms-3 mt-1" data-value="0.37" data-thickness="6" data-bs-color="#0e8c79">
                                        <div class="chart-circle-value text-white">17%</div>
                                    </div>
                                    <div class="wrp text-wrapper text-white p-3">
                                        <p class="mt-0">6477</p>
                                        <p class=" mt-1 mb-0"> Nbr Lots Investisseurs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COL END -->
                        <div class="col-sm-12 col-md-6 col-lg-6  col-xl-3">
                            <div class="card widgets-cards bg-warning box-warning-shadow">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <div class="chart-circle chart-circle-sm ms-3 mt-1" data-value="0.42" data-thickness="6" data-bs-color="#c68806">
                                        <div class="chart-circle-value text-white">42%</div>
                                    </div>
                                    <div class="wrp text-wrapper text-white p-3">
                                        <p class="mt-0">7847</p>
                                        <p class=" mt-1 mb-0"> Nbr Lots Réserves</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COL END -->
                        <div class="col-sm-12 col-md-6 col-lg-6  col-xl-3">
                            <div class="card widgets-cards bg-danger box-danger-shadow">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <div class="chart-circle chart-circle-sm ms-3 mt-1" data-value="0.42" data-thickness="6" data-bs-color="#c21a1a">
                                        <div class="chart-circle-value text-white">37%</div>
                                    </div>
                                    <div class="wrp text-wrapper text-white p-3">
                                        <p class="mt-0">345</p>
                                        <p class=" mt-1 mb-0"> Nbr Lots Vendus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                       
                    </div>
                    <!-- ROW OPEN -->
                   
                        <!-- ROW-2 -->
                        <div class="row">
                           
                            <!-- COL END -->
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">CA PAR MOIS </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-container">
                                            
                                            <canvas id="chartBar2" class="h-275"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <!-- COL END -->
                        </div>
                        <!-- ROW-2 END -->

                       
                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

        </div>
  
        <!--app-

                  
@endsection