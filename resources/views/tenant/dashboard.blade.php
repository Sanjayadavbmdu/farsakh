@extends('tenant.includes.master')


@section('content')
          
<div class="page-title-head d-flex align-items-center gap-2">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-bold mb-0">Dashboard</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0 fs-13">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Farsak</a></li>
            
            <li class="breadcrumb-item active">Tenant Dashboard</li>
        </ol>
    </div>
</div>




<div class="page-container">

    <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-2 justify-content-between">
                        <div>
                            <h5 class="text-muted fs-13 fw-bold text-uppercase" title="Revenue">
                                Total Value</h5>
                            <h3 class="mt-2 mb-1 fw-bold">$1.25M</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-1"><i class="ri-arrow-up-line"></i>
                                    15.34%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                        <div class="avatar-lg flex-shrink-0">
                            <span class="avatar-title bg-success-subtle text-success rounded fs-28">
                                <iconify-icon icon="solar:wallet-bold-duotone"></iconify-icon>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="apex-charts" id="chart-revenue"></div>
            </div>
        </div><!-- end col -->

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-2 justify-content-between">
                        <div>
                            <h5 class="text-muted fs-13 fw-bold text-uppercase" title="Products Sold">
                                Active Contracts</h5>
                            <h3 class="mt-2 mb-1 fw-bold">48</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-1"><i class="ri-arrow-up-line"></i>
                                    10.12%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                        <div class="avatar-lg flex-shrink-0">
                            <span class="avatar-title bg-info-subtle text-info rounded fs-28">
                                <iconify-icon icon="solar:cart-bold-duotone"></iconify-icon>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="apex-charts" id="chart-products"></div>
            </div>
        </div><!-- end col -->

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-2 justify-content-between">
                        <div>
                            <h5 class="text-muted fs-13 fw-bold text-uppercase" title="New Customers">
                                Pending Requests</h5>
                            <h3 class="mt-2 mb-1 fw-bold">1</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger me-1"><i class="ri-arrow-down-line"></i>
                                    5.47%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                        <div class="avatar-lg flex-shrink-0">
                            <span class="avatar-title bg-warning-subtle text-warning rounded fs-28">
                                <iconify-icon icon="solar:user-bold-duotone"></iconify-icon>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="apex-charts" id="chart-customers"></div>
            </div>
        </div><!-- end col -->

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-2 justify-content-between">
                        <div>
                            <h5 class="text-muted fs-13 fw-bold text-uppercase" title="Profit Margin">
                                Late Payments</h5>
                            <h3 class="mt-2 mb-1 fw-bold">3</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-1"><i class="ri-arrow-up-line"></i>
                                    8.21%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                        <div class="avatar-lg flex-shrink-0">
                            <span class="avatar-title bg-primary-subtle text-primary rounded fs-28">
                                <iconify-icon icon="solar:graph-up-bold-duotone"></iconify-icon>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="apex-charts" id="chart-profit"></div>
            </div>
        </div><!-- end col -->


        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-2 justify-content-between">
                        <div>
                            <h5 class="text-muted fs-13 fw-bold text-uppercase" title="Products Sold">
                                Active Contracts</h5>
                            <h3 class="mt-2 mb-1 fw-bold">48</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-1"><i class="ri-arrow-up-line"></i>
                                    10.12%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                        <div class="avatar-lg flex-shrink-0">
                            <span class="avatar-title bg-info-subtle text-info rounded fs-28">
                                <iconify-icon icon="solar:cart-bold-duotone"></iconify-icon>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="apex-charts" id="chart-products"></div>
            </div>
        </div><!-- end col -->

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-2 justify-content-between">
                        <div>
                            <h5 class="text-muted fs-13 fw-bold text-uppercase" title="Products Sold">
                                Active Contracts</h5>
                            <h3 class="mt-2 mb-1 fw-bold">48</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-1"><i class="ri-arrow-up-line"></i>
                                    10.12%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                        <div class="avatar-lg flex-shrink-0">
                            <span class="avatar-title bg-info-subtle text-info rounded fs-28">
                                <iconify-icon icon="solar:cart-bold-duotone"></iconify-icon>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="apex-charts" id="chart-products"></div>
            </div>
        </div><!-- end col -->

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-2 justify-content-between">
                        <div>
                            <h5 class="text-muted fs-13 fw-bold text-uppercase" title="Products Sold">
                                Active Contracts</h5>
                            <h3 class="mt-2 mb-1 fw-bold">48</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-1"><i class="ri-arrow-up-line"></i>
                                    10.12%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                        <div class="avatar-lg flex-shrink-0">
                            <span class="avatar-title bg-info-subtle text-info rounded fs-28">
                                <iconify-icon icon="solar:cart-bold-duotone"></iconify-icon>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="apex-charts" id="chart-products"></div>
            </div>
        </div><!-- end col -->

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-2 justify-content-between">
                        <div>
                            <h5 class="text-muted fs-13 fw-bold text-uppercase" title="Products Sold">
                                Active Contracts</h5>
                            <h3 class="mt-2 mb-1 fw-bold">48</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-1"><i class="ri-arrow-up-line"></i>
                                    10.12%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                        <div class="avatar-lg flex-shrink-0">
                            <span class="avatar-title bg-info-subtle text-info rounded fs-28">
                                <iconify-icon icon="solar:cart-bold-duotone"></iconify-icon>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="apex-charts" id="chart-products"></div>
            </div>
        </div><!-- end col -->
    </div><!-- end row -->

    <!-- end row-->



</div> <!-- container -->
@endsection