@extends('office.includes.master')

@section('content')

<div class="content-wrapper p-4" style="margin-right: 250px">
    <!-- Page Header -->
    <div class="card shadow-sm mb-4">
        <div class="card-body d-flex justify-content-between align-items-center bg-dark-green text-white rounded">
            <h4 class="fw-bold"><i class="fas fa-users"></i> Property Owners</h4>
            <a href="{{ route('office.new_addtions.add.owner') }}" class="btn btn" style="color: #f8f9fa"><i class="fas fa-user-plus" style="padding-right: 5px"></i> Add New Owner</a>
        </div>
    </div>

 


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

    <!-- Owners Table -->
    <div class="card shadow-lg">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table id="scroll-vertical-datatable"
                class="table table-striped dt-responsive nowrap w-100">
                    <thead class="bg-light">
                        <tr>
                            <th>#</th>
                            <th>Profile</th>
                            <th>Owner Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Ownership Type</th>
                            <th>Properties</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png" class="rounded-circle" width="40"></td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>+123456789</td>
                            <td><span class="badge bg-primary">Individual</span></td>
                            <td>5</td>
                            <td>
                                <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png" class="rounded-circle" width="40"></td>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td>+987654321</td>
                            <td><span class="badge bg-success">Company</span></td>
                            <td>12</td>
                            <td>
                                <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <!-- More Rows -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
/* Dark Green Theme */
.bg-dark-green {
    background-color: #2d714e !important;
}

/* Table Styling */
.table-hover tbody tr:hover {
    background-color: rgba(45, 113, 78, 0.1);
}

.table thead {
    background: #f8f9fa;
}

.badge {
    padding: 8px 12px;
    font-size: 14px;
    font-weight: bold;
}

.btn-sm {
    padding: 6px 10px;
}

/* Profile Image */
.rounded-circle {
    border: 2px solid #2d714e;
    padding: 2px;
}
</style>

<script>
// Live Search Functionality
document.getElementById('searchOwner').addEventListener('keyup', function() {
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll('tbody tr');
    rows.forEach(row => {
        let name = row.cells[1].textContent.toLowerCase();
        let email = row.cells[2].textContent.toLowerCase();
        row.style.display = (name.includes(filter) || email.includes(filter)) ? '' : 'none';
    });
});
</script>

@endsection
