@extends('admin.includes.master')

@section('content')
<style>
    .property-header {
        background: #f8f9fa;
        border-radius: 15px;
        padding: 2rem;
        margin-bottom: 2rem;
    }
    .main-image {
        height: 400px;
        object-fit: cover;
        border-radius: 15px;
    }
    .thumbnails {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
        margin-top: 15px;
    }
    .thumbnail-img {
        height: 100px;
        object-fit: cover;
        border-radius: 10px;
        cursor: pointer;
        transition: transform 0.2s;
    }
    .thumbnail-img:hover {
        transform: scale(1.05);
    }
    .detail-card {
        background: white;
        border-radius: 15px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    }
    .feature-icon {
        width: 40px;
        height: 40px;
        background: #e9f5eb;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #2d714e;
    }
    .inquiry-card {
        border-left: 3px solid #2d714e;
        padding-left: 1rem;
        margin-bottom: 1rem;
    }
</style>

<div class="container py-4">
    <!-- Property Header -->
    <div class="property-header">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="display-5 fw-bold">Sunset Luxury Villa</h1>
                <div class="d-flex gap-3 align-items-center">
                    <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Dubai Marina, UAE</p>
                    <span class="badge bg-success">For Sale</span>
                </div>
            </div>
            <div class="col-md-4 text-end">
                <h2 class="text-success">$1,500,000</h2>
            </div>
        </div>
    </div>

    <!-- Main Image & Gallery -->
    <div class="mb-4">
        <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be" 
             class="main-image w-100" 
             alt="Property main image">
        <div class="thumbnails">
            <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a" 
                 class="thumbnail-img" 
                 alt="Thumbnail 1">
            <!-- Add 3 more thumbnails -->
        </div>
    </div>

    <div class="row g-4">
        <!-- Left Column -->
        <div class="col-lg-8">
            <!-- Key Features -->
            <div class="detail-card">
                <h3 class="mb-4">Property Features</h3>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="feature-icon">
                                <i class="fas fa-bed"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">5 Bedrooms</h5>
                                <small>All en-suite</small>
                            </div>
                        </div>
                    </div>
                    <!-- Add more features -->
                </div>
            </div>

            <!-- Description -->
            <div class="detail-card">
                <h3 class="mb-3">Description</h3>
                <p class="text-muted">Luxury waterfront villa with panoramic sea views...</p>
            </div>

            <!-- Inquiries -->
            <div class="detail-card">
                <h3 class="mb-4">Recent Inquiries</h3>
                <div class="inquiry-card">
                    <div class="d-flex justify-content-between">
                        <h5>David Smith</h5>
                        <small>2 days ago</small>
                    </div>
                    <p class="mb-1">Is this property still available?</p>
                    <a href="mailto:david@example.com" class="text-success">david@example.com</a>
                </div>
                <!-- Add more inquiries -->
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-lg-4">
            <!-- Owner Info -->
            <div class="detail-card">
                <h3 class="mb-4">Property Owner</h3>
                <div class="d-flex align-items-center gap-3 mb-4">
                    <img src="https://randomuser.me/api/portraits/men/75.jpg" 
                         class="rounded-circle" 
                         width="80" 
                         alt="Owner">
                    <div>
                        <h5 class="mb-1">John Doe</h5>
                        <p class="text-muted mb-0">Verified Owner</p>
                    </div>
                </div>
                <div class="list-group">
                    <a href="tel:+971501234567" class="list-group-item list-group-item-action">
                        <i class="fas fa-phone me-2"></i>+971 50 123 4567
                    </a>
                    <a href="mailto:john@example.com" class="list-group-item list-group-item-action">
                        <i class="fas fa-envelope me-2"></i>john@example.com
                    </a>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="detail-card">
                <h3 class="mb-3">Quick Actions</h3>
                <div class="d-grid gap-2">
                    {{-- <button class="btn btn-success">
                        <i class="fas fa-edit me-2"></i>Edit Listing
                    </button> --}}
                    <button class="btn btn-outline-danger">
                        <i class="fas fa-trash me-2"></i>Deactive Property
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Required Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Initialize image gallery
    document.querySelectorAll('.thumbnail-img').forEach(img => {
        img.addEventListener('click', function() {
            document.querySelector('.main-image').src = this.src;
        });
    });
</script>
@endsection