@extends('office.includes.master')

@section('content')

<div class="content-wrapper" style="margin-right: 240px">
    
    <!-- Messages Header -->
    <div class="dashboard-header p-4 text-white rounded-lg">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2 class="mb-1">Platform Messages</h2>
                <p class="mb-0">Manage your received and sent messages</p>
            </div>
            <div class="quick-actions">
                <button class="btn btn-light btn-sm shadow-sm"><i class="fas fa-edit"></i> New Message</button>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Sidebar - Message List -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-theme text-white">
                    <h5 class="mb-0">Inbox</h5>
                </div>
                <div class="card-body p-0">
                    <div class="input-group p-3">
                        <input type="text" class="form-control" placeholder="Search messages...">
                        <button class="btn btn-theme"><i class="fas fa-search"></i></button>
                    </div>
                    <div class="list-group message-list">
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-start">
                            <div class="message-avatar bg-success text-white">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-1">John Doe</h6>
                                <p class="text-muted small mb-0">Your property has been approved...</p>
                            </div>
                            <span class="badge bg-danger ms-auto">New</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-start">
                            <div class="message-avatar bg-primary text-white">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-1">Support Team</h6>
                                <p class="text-muted small mb-0">Your subscription payment is due...</p>
                            </div>
                        </a>
                        <!-- More messages -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Message Content -->
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-theme text-white d-flex justify-content-between">
                    <h5 class="mb-0">Message Details</h5>
                    <button class="btn btn-light btn-sm"><i class="fas fa-reply"></i> Reply</button>
                </div>
                <div class="card-body message-content">
                    <div class="message-info d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">From: <strong>John Doe</strong></h6>
                            <small class="text-muted">Received on: Feb 12, 2025 at 3:45 PM</small>
                        </div>
                        <span class="badge bg-success">Read</span>
                    </div>
                    <hr>
                    <p class="message-text">
                        Hello, your property has been successfully approved. You can now manage it from the dashboard. 
                        Let us know if you need any assistance.
                    </p>
                </div>
            </div>

            <!-- Reply Box -->
            <div class="card shadow-sm mt-3">
                <div class="card-header bg-theme text-white">
                    <h5 class="mb-0">Reply</h5>
                </div>
                <div class="card-body">
                    <textarea class="form-control" rows="3" placeholder="Write your reply..."></textarea>
                    <div class="d-flex justify-content-end mt-2">
                        <button class="btn btn-success"><i class="fas fa-paper-plane"></i> Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
/* Theme Colors */
.bg-theme {
    background-color: #2d714e !important;
}

/* Dashboard Header */
.dashboard-header {
    background: linear-gradient(135deg, #2d714e 0%, #145032 100%);
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

/* Cards */
.card {
    border-radius: 10px;
}

/* Message List */
.message-list .list-group-item {
    border-left: 5px solid transparent;
    transition: all 0.3s;
}

.message-list .list-group-item:hover {
    background-color: #f8f9fa;
    border-left-color: #2d714e;
}

/* Message Avatar */
.message-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Reply Box */
textarea {
    border-radius: 8px;
}
</style>

@endsection
