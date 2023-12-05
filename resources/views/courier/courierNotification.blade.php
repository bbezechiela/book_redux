@include('partials.__header', [
'title' => 'Manage Shipment | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/shipment-style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0 body">
    <div id="content" class="pe-0 border content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4 top-nav">
            <div class="w-100 d-flex mt-1 p-1">
                <p class="text-admin">Courier</p>
                <a href="/shipment"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" data-bs-title="Home">
                        <i class="fa fa-area-chart" aria-hidden="true" style="font-size: 20px; margin-right: 20px;  color: #003060;">
                            Manage Order</i>
                    </button></a>
                <a href="/return"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        data-bs-title="Return">
                        <i class="fa fa-refresh" aria-hidden="true" style="font-size: 20px; color: #003060;"> Manage
                            Return</i>
                    </button></a>
                    <a href="/completedShipping"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        data-bs-title="Completed">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="font-size: 20px; color: #003060; margin-right: 20px;">  Completed</i>
                    </button></a>
                    <a href="/couriermessage"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        data-bs-title="Messages">
                        <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060; margin-right: 20px;">  Messages</i>
                    </button></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    {{-- <a href="/couriermessage"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
                    <a href="/couriernotification"><button class="btn mx-1 mt-1 selected-style" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px;"></i>
                        </button></a>
                    <a href="/courierprofile"><button class="btn mx-1 p-0" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Profile">
                            <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="profile"
                                width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                        </button></a>
                </div>
            </div>
        </ul>

        <div class="notification-page">
            <div class="notification">
                <div class="notification-details">
                    <img src="../assets/nestine.png" alt="Profile Image">
                    <div class="notification-text">
                        <p class="notification-message">Marie Tan Fernandez liked your listing</p>
                        <p class="date-time">2 hours ago</p>
                    </div>
                </div>
            </div>
            <div class="notification">
                <div class="notification-details">
                    <img src="../assets/nestine.png" alt="Profile Image">
                    <div class="notification-text">
                        <p class="notification-message">Some items in your wishlist are now available</p>
                        <p class="date-time">10 hours ago</p>
                    </div>
                </div>
            </div>
            <div class="notification">
                <div class="notification-details">
                    <img src="../assets/nestine.png" alt="Profile Image">
                    <div class="notification-text">
                        <p class="notification-message">Order XSJAIOJANSZS is completed. Have you rated your purchase?
                        </p>
                        <p class="date-time">8/20/2023 10:11</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])