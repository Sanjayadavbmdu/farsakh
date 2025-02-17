@extends('office.includes.master')

@section('content')

<div class="content-wrapper p-4" style="margin-right: 250px">
    <!-- Page Header -->
    <div class="card shadow-sm mb-4">
        <div class="card-body d-flex justify-content-between align-items-center bg-dark-green text-white rounded">
            <h4 class="fw-bold"><i class="fas fa-users"></i> Tenant List</h4>
            <a href="{{ route('office.new_addtions.add.tenant') }}" class="btn " style="color: white"><i class="fas fa-user-plus" style="padding-right: 5px"></i> Add New Tenant</a>
        </div>
    </div>

    <!-- Search & Filters -->
    {{-- <div class="card shadow-lg mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="🔍 Search Tenant by Name, Email, or Property...">
                </div>
                <div class="col-md-3">
                    <select class="form-control">
                        <option value="">Filter by Status</option>
                        <option value="active">Active</option>
                        <option value="pending">Pending</option>
                        <option value="evicted">Evicted</option>
                    </select>
                </div>
                <div class="col-md-3 text-end">
                    <button class="btn btn-dark-green"><i class="fas fa-filter"></i> Apply Filters</button>
                </div>
            </div>
        </div>
    </div> --}}


     <!-- Filters Section -->
     <div class="d-flex row rounded " style="margin-bottom: 20px">
        <div class="col-md-4">
            <input type="text" id="searchFilter" class="form-control form-control-sm rounded-pill" placeholder="Search by Name or Email">
        </div>
        {{-- <div class="col-md-2">
            <select id="statusFilter" class="form-select form-select-sm rounded-pill">
                <option value="">All Status</option>
                <option value="Permanently Banned">Permanently Banned</option>
                <option value="Temporarily Banned">Temporarily Banned</option>
            </select>
        </div> --}}
        <div class="d-flex col-md-8 justify-content-end mt-1">
            <button class="btn btn-primary rounded-circle btn-icon me-2" id="exportExcel" title="Excel">
                <i class="fa-solid fa-file-excel"></i>
            </button>
            <button class="btn btn-primary rounded-circle btn-icon me-2" id="copyButton" title="Copy">
                <i class="fa-solid fa-copy"></i>
            </button>
            <button class="btn btn-primary rounded-circle btn-icon me-2" id="exportPdf" title="PDF">
                <i class="fa-solid fa-file-pdf"></i>
            </button>
            <button class="btn btn-primary rounded-circle btn-icon me-2" id="printButton" title="Print">
                <i class="fa-solid fa-print"></i>
            </button>
        </div>
    </div>


    <!-- Tenant Table -->
    <div class="card shadow-lg">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table id="blacklist-datatable" class="table table-striped dt-responsive nowrap w-100" style="font-size: 12px !important">
                    <thead >
                        <tr>
                            <th>#</th>
                            <th>Tenant</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Property</th>
                            <th>Status</th>
                            <th>Lease End</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="tenant-avatar.jpg" class="rounded-circle me-2" width="40" alt="">
                                    <div>
                                        <h6 class="mb-0">John Smith</h6>
                                        <small class="text-muted">#TEN-1023</small>
                                    </div>
                                </div>
                            </td>
                            <td>john.smith@example.com</td>
                            <td>+1 234 567 890</td>
                            <td>Luxury Villa - #PROP1254</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>2024-12-31</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <!-- More rows -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        <nav aria-label="Tenant Pagination">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </nav>
    </div>
</div>

<style>
/* Dark Green Theme */
.bg-dark-green {
    background-color: #2d714e !important;
}

/* Custom Button */
.btn-dark-green {
    background-color: #2d714e;
    color: white;
    border-radius: 8px;
}

.btn-dark-green:hover {
    background-color: #22583d;
}

/* Card Styling */
.card {
    border-radius: 12px;
    transition: all 0.3s ease;
}

.card:hover {
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
}

/* Table */
.table th {
    text-transform: uppercase;
    font-weight: bold;
}

.badge {
    font-size: 0.9em;
    padding: 5px 10px;
    border-radius: 12px;
}

.badge.bg-success {
    background-color: #28a745 !important;
}

.badge.bg-warning {
    background-color: #ffc107 !important;
}

.badge.bg-danger {
    background-color: #dc3545 !important;
}
</style>

@endsection
