@include('partials.__header', [
'title' => 'User Profile Preview | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/preview-style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start" tabindex="-1"
        aria-labelledby="offcanvasExampleLabel">
        <x-sidebar />
    </div>
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3" type="text" placeholder="Search">
                    </div>
                    {{-- <a href="/messages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a>
                    <a href="/notification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
                    <ul class="nav py-profile justify-content-end">
                        <li class="nav-item dropdown">
                            <a href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                class="nav-link dropdown-toggle avatar" aria-expanded="false" title="profile">
                                <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}"
                                    alt="notification" width="35" height="35" class="rounded-5"
                                    style="margin-right: 2em;">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/myprofile">Profile</a></li>
                                <li><a class="dropdown-item" href="/mypurchase">My Purchase</a></li>
                                <li><a class="dropdown-item" href="/addresses">Addresses</a></li>
                                <li><a class="dropdown-item" href="/changepassword">Change Password</a></li>
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>
        <div class="container-fluid" style="--bs-gutter-x: 0;">
            <div class="card">
                <div class="rounded-top text-white d-flex flex-row" style="background-color: #003060; height:200px;">
                    <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                        <img src="../assets/nestine.png" alt="Generic placeholder image"
                            class="img-fluid img-thumbnail mt-4 mb-2"
                            style="width: 150px; z-index: 1; background-color: #FFF;">
                        <button type="button" class="btn message-button" style="z-index: 1;">
                            <i class="fa fa-envelope" aria-hidden="true"></i> Message
                        </button>
                    </div>
                    <div class="ms-3" style="margin-top: 130px;">
                        <h5>Nestine Nicole Navarro</h5>
                        <p>Lives in Tacloban City</p>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle ellipsis-button" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-ellipsis-h ellipsis-icon ml-auto" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fa fa-exclamation-circle" aria-hidden="true"
                                        style="margin-right: 1px"></i>
                                    Report</a></li>
                        </ul>
                    </div>
                </div>
                <div class="p-4 text-black" style="background-color: #f8f9fa;">
                    <div class="d-flex justify-content-end text-center py-1">
                        <div>
                            <p class="mb-1 h5" style="color: #E55B13;">253</p>
                            <p class="small text-muted mb-0">Listings</p>
                        </div>
                        <div class="px-3">
                            <p class="mb-1 h5" style="color: #E55B13;">1026</p>
                            <p class="small text-muted mb-0">Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="mb-5">
                        <p class="lead fw-normal mb-1" style="color: #003060;">Preferred genres</p>
                        <div class="p-4" style="background-color: #f8f9fa;">
                            <p class="font-italic mb-1" style="color: #003060;">Educational</p>
                            <p class="font-italic mb-1" style="color: #003060;">History Fiction</p>
                            <p class="font-italic mb-0" style="color: #003060;">Science Fiction</p>
                        </div>
                    </div>
                </div>
                <div class="p-4" style="background-color: #f8f9fa;">
                    <ul class="nav nav-underline">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/userlistings">Listings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-nav-link" href="/userreviews">User Reviews and Ratings</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- <div class="container text-center seller-details mx-4">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <img src="../assets/nestine.png" alt="seller image" class="circle-picture">
                        <div class="user-info">
                            <p>Nestine Nicole Navarro</p> --}}
        {{-- <p>2K followers . 400 following</p> --}}
        {{-- <p>Lives in Tacloban City</p>
                            <button class="message-button"><i class="fa fa-envelope"
                                    aria-hidden="true"></i>Message</button> --}}
        {{-- <button class="follow-button"><i class="fa fa-plus" aria-hidden="true"></i>Follow</button> --}}
        {{-- </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle ellipsis-button" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-h ellipsis-icon ml-auto" aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fa fa-exclamation-circle"
                                            aria-hidden="true" style="margin-right: 7px"></i>
                                        Report</a></li> --}}
        {{-- <li><a class="dropdown-item" href="#"><i class="fa fa-ban" aria-hidden="true"
                                            style="margin-right: 7px"></i>Block</a></li> --}}
        {{-- </ul>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="ratings">
                        <p>Liked genres:<span class="exchange">Educational, History Fiction, Science Fiction</span></p>
                    </div>
                </div> --}}
        {{-- <div class="col">
                    <div class="ratings">
                        <p>Ratings <span class="rate">100</span></p>
                        <p>Books Bought <span class="bought">20</span></p>
                    </div>
                </div>
                <div class="col">
                    <div class="ratings">
                        <p>Books Sold <span class="sold">203</span></p>
                        <p>Books Exchanged <span class="exchange">59</span></p>
                    </div>
                </div> --}}
        {{-- </div>
        </div>
        <div class="navbar-details">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/userlistings">Listings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/userreviews">User Reviews and Ratings</a>
                </li> --}}
        {{-- <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/userwishlist">Wish List</a>
                </li> --}}
        {{-- </ul>
        </div>
        <div class="row contents px-3 mt-4"> --}}
            <div class="row justify-content-between mx-auto">
                <div class="col-4 d-flex flex-row">
                    <h3 class="fw-bold">Listings (Ikaw nala himo UI kay na error na an ak cocopyhan unta kay mayda na
                        backend hahaha) Adi nga naka comment is an kanan nakadto han explore - similar la adto an iya
                        style didi na page</h3>
                </div>

        {{-- <div id="daily-discover" class="mx-5 px-5">
                    <h4 id="daily-discover-header">Listings</h4>
                    <div id="content-cards" class="w-100 mx-2 d-flex px-4 overflow-x-auto" style="height: 300px; ">
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                            <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2"
        alt="..." width="130px" height="170px">
        <div class="card-body py-0">
            <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
            <p class="card-text mt-0 mb-0">{{ $daily->author }}<br>
                {{ $daily->genre }}</p>
            @foreach ($daily->user->addressUser as $address)
            @if ($address->default_address == 'true')
            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
            </p>
            @endif
            @endforeach
            @foreach ($daily->cart as $cart)
            @if ($cart->user_id == session('id') && $cart->product_id == $daily->id)
            <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                <span class="fw-bold p-0 text-success">Added to cart</span>
            </div>
            @endif
            @endforeach
            <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                <span class="fw-bold p-0">₱{{ $daily->price }}</span>
                <div class="button-container">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle add-button" onclick="stopPropagation(event)"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/addtocart/{{ $daily->id }}"
                                    onclick="stopPropagation(event)"><i class="fa fa-cart-plus" aria-hidden="true"
                                        style="margin-right: 7px"></i>Add to
                                    Cart</a></li>
                            <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i
                                        class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add
                                    to
                                    Wishlist</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @elseif ($daily->unit == 'Available' || ($daily->stock > 0))
    <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
        onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
        <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2" alt="..." width="130px"
            height="170px">
        <div class="card-body py-0">
            <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
            <p class="card-text mt-0 mb-0">{{ $daily->author }}<br>
                {{ $daily->genre }}</p>
            @foreach ($daily->user->addressUser as $address)
            @if ($address->default_address == 'true')
            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
            </p>
            @endif
            @endforeach
            @foreach ($daily->cart as $cart)
            @if ($cart->user_id == session('id') && $cart->product_id == $daily->id)
            <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                <span class="fw-bold p-0 text-success">Added to cart</span>
            </div>
            @endif
            @endforeach
            <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                <span class="fw-bold p-0">₱{{ $daily->price }}</span>
                <div class="button-container">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle add-button" onclick="stopPropagation(event)"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/addtocart/{{ $daily->id }}"
                                    onclick="stopPropagation(event)"><i class="fa fa-cart-plus" aria-hidden="true"
                                        style="margin-right: 7px"></i>Add to
                                    Cart</a></li>
                            <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i
                                        class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add
                                    to
                                    Wishlist</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
</div>--}}
{{-- </div>
</div>
</div> --}}
@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])