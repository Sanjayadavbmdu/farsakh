@extends('office.includes.master')

@section('content')


<style>
     /* Message List Styling */
     .message-item {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ddd;
            cursor: pointer;
            transition: background 0.3s;
        }

        .message-item:hover {
            background: #f1f1f1;
        }

        .message-item.unread {
            font-weight: bold;
        }

        .message-icon {
            width: 40px;
            height: 40px;
            background-color: #2d714e;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-right: 10px;
        }

        .message-preview {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            max-width: 200px;
        }

        /* Active Tab */
        .nav-tabs .nav-link.active {
            background-color: #2d714e;
            color: white !important;
        }
</style>


<div class="content-wrapper p-4" style="margin-right: 250px">
    <!-- Page Header -->
    <div class="card shadow-sm mb-4">
        <div class="card-body d-flex justify-content-between align-items-center bg-dark-green text-white rounded">
            <h4 class="fw-bold"><i class="fas fa-envelope"></i> Message Management</h4>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#composeMessageModal">
                <i class="fas fa-plus" style="padding-right: 5px"></i> New Message
            </button>
        </div>
    </div>

    <!-- Tabs for Messages -->
    <ul class="nav nav-tabs" id="messageTabs">
        <li class="nav-item">
            <a class="nav-link active" id="incoming-tab" data-bs-toggle="tab" href="#incomingMessages">Incoming</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="outgoing-tab" data-bs-toggle="tab" href="#outgoingMessages">Outgoing</a>
        </li>
    </ul>

    <div class="tab-content mt-3">
        <!-- Incoming Messages -->
        <div class="tab-pane fade show active" id="incomingMessages">
            <div class="card shadow-sm">
                <div class="card-body">
                    <input type="text" class="form-control mb-3" placeholder="Search messages...">
                    <div class="message-item unread">
                        <div class="message-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h6 class="mb-1">John Smith</h6>
                            <small class="text-muted message-preview">Hello, I need help with my rental payment...</small>
                        </div>
                        <small class="text-muted ms-auto">2 hours ago</small>
                    </div>
                    <div class="message-item">
                        <div class="message-icon"><i class="fas fa-envelope-open"></i></div>
                        <div>
                            <h6 class="mb-1">Alice Johnson</h6>
                            <small class="text-muted message-preview">Thanks for the contract details...</small>
                        </div>
                        <small class="text-muted ms-auto">Yesterday</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Outgoing Messages -->
        <div class="tab-pane fade" id="outgoingMessages">
            <div class="card shadow-sm">
                <div class="card-body">
                    <input type="text" class="form-control mb-3" placeholder="Search messages...">
                    <div class="message-item">
                        <div class="message-icon"><i class="fas fa-share"></i></div>
                        <div>
                            <h6 class="mb-1">To: Mark Davis</h6>
                            <small class="text-muted message-preview">Your maintenance request is being processed...</small>
                        </div>
                        <small class="text-muted ms-auto">30 min ago</small>
                    </div>
                    <div class="message-item">
                        <div class="message-icon"><i class="fas fa-share"></i></div>
                        <div>
                            <h6 class="mb-1">To: Emily White</h6>
                            <small class="text-muted message-preview">Here is your contract renewal form...</small>
                        </div>
                        <small class="text-muted ms-auto">1 day ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Compose Message Modal -->
<div class="modal fade" id="composeMessageModal" tabindex="-1" aria-labelledby="composeMessageLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark-green text-white">
                <h5 class="modal-title" id="composeMessageLabel"><i class="fas fa-pencil-alt"></i> Compose New Message</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Recipient</label>
                        <input type="text" class="form-control" placeholder="Enter recipient name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" rows="4" placeholder="Type your message here..."></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-dark-green"><i class="fas fa-paper-plane" style="padding-right: 5px"></i> Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection