<?php
require '../Shared/Template.php';
Template::renderHeader();

?>

<div class="container-fluid">
    <div class="row">
        <div class=" col-6">
            <div class="card px-3">
                <div class="row">
                    <h4 class=" py-2 text-center">Mesin 1</h4>
                    <div class="col-xl-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="icon-box icon-box-lg bg-success-light rounded-circle">
                                    <i class="fa-solid  text-success fa-bolt"></i>
                                    </div>
                                    <div class="total-projects ms-3">
                                        <h3 class="text-success count">0 V</h3>
                                        <span>Total Volts</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="icon-box icon-box-lg bg-primary-light rounded-circle">
                                    <i class="fa-solid text-primary fa-battery-full"></i>
                                    </div>
                                    <div class="total-projects ms-3">
                                        <h3 class="text-primary count">0 A</h3>
                                        <span>Total Ampere</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-6">
            <div class="card px-3">
                <div class="row">
                    <h4 class=" py-2 text-center">Mesin 2</h4>
                    <div class="col-xl-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                    <div class="icon-box icon-box-lg bg-success-light rounded-circle">
                                    <i class="fa-solid  text-success fa-bolt"></i>
                                    </div>
                                    <div class="total-projects ms-3">
                                        <h3 class="text-success count">0 V</h3>
                                        <span>Total Volts</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                <div class="icon-box icon-box-lg bg-primary-light rounded-circle">
                                    <i class="fa-solid text-primary fa-battery-full"></i>
                                    </div>
                                    <div class="total-projects ms-3">
                                        <h3 class="text-primary count">0 A</h3>
                                        <span>Total Ampere</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-9">
            <div class="card">
                <div class="card-header border-0 pb-0">
                    <h4 class="heading mb-0">Jalur Kereta 1</h4>
                    <!-- <ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-week" type="button" role="tab" aria-selected="true">Week</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-month" type="button" role="tab"
                                aria-selected="false">Month</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-year" type="button" role="tab"
                                aria-selected="false">Year</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-all" type="button" role="tab" aria-selected="false">All</button>
                        </li>
                    </ul> -->
                </div>
                <div class="card-body custome-tooltip p-0">
                    <div id="overiewChart"></div>
                    
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-header border-0">
                    <h4 class="heading mb-0">Alarm</h4>
                </div>
                <div class="card-body pt-0 custome-tooltip">
                    <div class="d-flex justify-content-center">
                    <div class="icon-box icon-box-lg bg-danger rounded-circle">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                    <div class="icon-box icon-box-lg bg-light rounded-circle">
                        </div>
                    </div>
                    <!-- <ul class="lang-chart">
                        <li><i class="fa-sharp fa-regular fa-circle-dot"></i>Html</li>
                        <li><i class="fa-sharp fa-regular fa-circle-dot"></i>Css</li>
                        <li><i class="fa-sharp fa-regular fa-circle-dot"></i>scss</li>
                        <li><i class="fa-sharp fa-regular fa-circle-dot"></i>c++</li>
                        <li><i class="fa-sharp fa-regular fa-circle-dot"></i>JavaScript</li>
                    </ul> -->
                </div>
            </div>
        </div>

        <div class="col-xl-9">
        <div class="card">
                <div class="card-header border-0 pb-0 flex-wrap">
                    <h4 class="heading mb-0">Jalur Kereta 2</h4>
                    <!-- <ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-week" type="button" role="tab" aria-selected="true">Week</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-month" type="button" role="tab"
                                aria-selected="false">Month</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-year" type="button" role="tab"
                                aria-selected="false">Year</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-all" type="button" role="tab" aria-selected="false">All</button>
                        </li>
                    </ul> -->
                </div>
                <div class="card-body custome-tooltip p-0">
                    <div id="overiewChart2"></div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

<?php
Template::renderFooter();
?>