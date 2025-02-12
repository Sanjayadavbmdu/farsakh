@extends('maintenance.includes.master')


@section('content')

<div class="page-title-head d-flex align-items-center gap-2">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-bold mb-0">Messages</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0 fs-13">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Farsak</a></li>

            <li class="breadcrumb-item active">Messages</li>
        </ol>
    </div>
</div>
<div class="page-container">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Messages</h4>
                    <p class="text-muted font-14">
                        
                    </p>


<div class="border-top border-light">
    <div class="table-responsive">
        <table class="table table-hover mail-list mb-0">
            <tbody>
                <tr class="position-relative">
                    <td class="ps-3">
                        1- </td>

                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{asset('tenant/assets/images/users/avatar-2.jpg')}}"
                                alt="user avatar" class="avatar-xs rounded-circle">

                            <h5 class="fs-14 mb-0 fw-medium">
                                <a href="#!" class="link-reset text-truncate">George
                                    Thomas</a>
                            </h5>
                        </div>
                    </td>

                    <td>
                        <a data-bs-toggle="modal" href="#email-details-modal"
                            role="button" aria-controls="email-details-modal"
                            class="link-reset text-truncate fs-14 fw-medium stretched-link">Request
                            For Information </a>
                    </td>

                    <td>
                        <div>
                            <span class="fs-14 text-muted text-truncate mb-0"> I hope
                                you are doing well. I have a small request. Can you
                                please...</span>
                        </div>
                    </td>

                   
                    <td>
                        <p class="fs-12 text-muted mb-0 text-end text-truncate">
                            Jan 5, 3:45 PM
                        </p>
                    </td>

                    <td class="pe-3">
                        <iconify-icon icon="solar:bolt-circle-bold-duotone"
                            class="text-danger fs-16 ms-2 align-middle"></iconify-icon>
                    </td>
                </tr>

                <tr class="position-relative">
                    <td class="ps-3">
                        2- </td>

                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{asset('tenant/assets/images/users/avatar-3.jpg')}}"
                                alt="user avatar" class="avatar-xs rounded-circle">

                            <h5 class="fs-14 mb-0 fw-medium">
                                <a href="#!" class="link-reset text-truncate">Robert C.
                                    Lane</a>
                            </h5>
                        </div>
                    </td>

                    <td>
                        <a data-bs-toggle="modal" href="#email-details-modal"
                            role="button" aria-controls="email-details-modal"
                            class="link-reset text-truncate fs-14 fw-medium stretched-link">Invitation
                            For Meeting </a>
                    </td>

                    <td>
                        <div>
                            <span class="fs-14 text-muted text-truncate mb-0"> Good
                                Morning, I hope this email finds you well. I am writing
                                to extra...</span>
                        </div>
                    </td>

                   

                    <td>
                        <p class="fs-12 text-muted mb-0 text-end text-truncate">
                            Mar 23, 7:30 AM
                        </p>
                    </td>

                    <td class="pe-3">
                        <iconify-icon icon="solar:bolt-circle-bold-duotone"
                            class="text-success fs-16 ms-2 align-middle"></iconify-icon>
                    </td>
                </tr>

                <tr class="position-relative">
                    <td class="ps-3">
                        3- </td>

                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{asset('tenant/assets/images/brands/dribbble.svg')}}"
                                alt="user avatar" class="avatar-xs rounded-circle">

                            <h5 class="fs-14 mb-0 fw-medium">
                                <a href="#!"
                                    class="link-reset text-truncate">Dribbble</a>
                            </h5>
                        </div>
                    </td>

                    <td>
                        <a data-bs-toggle="modal" href="#email-details-modal"
                            role="button" aria-controls="email-details-modal"
                            class="link-reset text-truncate fs-14 fw-medium stretched-link">Become
                            a successful self-taught designer </a>
                    </td>

                    <td>
                        <div>
                            <span class="fs-14 text-muted text-truncate mb-0"> There's
                                no one right way to learn design. In fa...</span>
                        </div>
                    </td>

                   

                    <td>
                        <p class="fs-12 text-muted mb-0 text-end text-truncate">
                            Apr 10, 1:15
                        </p>
                    </td>

                    <td class="pe-3">
                        <iconify-icon icon="solar:bolt-circle-bold-duotone"
                            class="text-info fs-16 ms-2 align-middle"></iconify-icon>
                    </td>
                </tr>

                <tr class="position-relative">
                    <td class="ps-3">
                        1- </td>

                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{asset('tenant/assets/images/users/avatar-5.jpg')}}"
                                alt="user avatar" class="avatar-xs rounded-circle">

                            <h5 class="fs-14 mb-0 fw-medium">
                                <a href="#!" class="link-reset text-truncate">Darren C.
                                    Gallimore</a>
                            </h5>
                        </div>
                    </td>

                    <td>
                        <a data-bs-toggle="modal" href="#email-details-modal"
                            role="button" aria-controls="email-details-modal"
                            class="link-reset text-truncate fs-14 fw-medium stretched-link">Holiday
                            Notice</a>
                    </td>

                    <td>
                        <div>
                            <span class="fs-14 text-muted text-truncate mb-0"> Good
                                Evening, I hope you are doing well. I have a small
                                request.</span>
                        </div>
                    </td>

                   

                    <td>
                        <p class="fs-12 text-muted mb-0 text-end text-truncate">May 8,
                            9:45 PM</p>
                    </td>

                    <td class="pe-3">

                    </td>
                </tr>

                <tr class="position-relative">
                    <td class="ps-3">
                        1- </td>

                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{asset('tenant/assets/images/users/avatar-9.jpg')}}"
                                alt="user avatar" class="avatar-xs rounded-circle">

                            <h5 class="fs-14 mb-0 fw-medium">
                                <a href="#!" class="link-reset text-truncate">Mike A.
                                    Bell</a>
                            </h5>
                        </div>
                    </td>

                    <td>
                        <a data-bs-toggle="modal" href="#email-details-modal"
                            role="button" aria-controls="email-details-modal"
                            class="link-reset text-truncate fs-14 fw-medium stretched-link">Offer
                            Letter</a>
                    </td>

                    <td>
                        <div>
                            <span class="fs-14 text-muted text-truncate mb-0"> Thank you
                                for applying. I hope you are doing well. I have a
                                small.</span>
                        </div>
                    </td>

                   

                    <td>
                        <p class="fs-12 text-muted mb-0 text-end text-truncate">Jun 16,
                            6:00 AM</p>
                    </td>

                    <td class="pe-3">
                        <iconify-icon icon="solar:bolt-circle-bold-duotone"
                            class="text-secondary fs-16 ms-2 align-middle"></iconify-icon>
                    </td>
                </tr>

                <tr class="position-relative">
                    <td class="ps-3">
                   1- </td>

                    {{-- <td>
                        <button class="btn p-0 text-warning fs-16 flex-shrink-0"><i
                                class="ri-star-fill"></i></button>
                    </td> --}}

                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{asset('tenant/assets/images/users/avatar-6.jpg')}}"
                                alt="user avatar" class="avatar-xs rounded-circle">

                            <h5 class="fs-14 mb-0 fw-medium">
                                <a href="#!" class="link-reset text-truncate">Bennett C.
                                    Rice</a>
                            </h5>
                        </div>
                    </td>

                    <td>
                        <a data-bs-toggle="modal" href="#email-details-modal"
                            role="button" aria-controls="email-details-modal"
                            class="link-reset text-truncate fs-14 fw-medium stretched-link">Apology
                            Letter</a>
                    </td>

                    <td>
                        <div>
                            <span class="fs-14 text-muted text-truncate mb-0"> I hope
                                you are doing well. I have a small request. Can you
                                please</span>
                        </div>
                    </td>

                  

                    <td>
                        <p class="fs-12 text-muted mb-0 text-end text-truncate">
                            Jun 16, 6:00 AM
                        </p>
                    </td>

                    <td class="pe-3">

                    </td>
                </tr>

               
                
            </tbody>
        </table>
    </div>
</div>
                </div></div></div></div></div>

@endsection