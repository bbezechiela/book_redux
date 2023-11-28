@include('partials.__header', [
    'title' => 'Product | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/singleProduct-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
</head>

<body>
    <div id="body-container" class="container-fluid px-0">
        <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start" tabindex="-1"
            aria-labelledby="offcanvasExampleLabel">
            <x-sidebar />
        </div>
        <div id="content" class="border content">
            <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
                <div class="w-100 d-flex mt-2 p-0">
                    <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                        aria-controls="offcanvasExample">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5"
                            src="/assets/Book_Logo.png" alt="Logo"></a>
                </div>
                <div class="position-absolute end-0">
                    <div class="d-flex">
                        <div class="input-group mt-1" style="height: 2em">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
                            <div class="position-relevant">
                                <input id="search_input" class="form-control rounded-3" type="text" placeholder="Search">
                                <div id="searches" class="position-absolute border bg-light w-100 p-2"
                                    style="cursor: pointer;">
                                </div>
                            </div>
                        </div>
                        {{-- <a href="/messages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" data-bs-title="Messages">
                                <i class="fa fa-envelope-o" aria-hidden="true"
                                    style="font-size: 20px; color: #003060;"></i>
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
            @if ($book_id->status == 'Exchange')
                <div class="card mb-3 book-details mx-4">
                    <div class="row g-0">
                        <div class="col-md-4 p-5">
                            <img src="{{ asset('images/books/' . $book_id->book_photo) }}"
                                class="img-fluid mx-auto rounded" alt="product" width="300px" height="564px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $book_id->title }} <a href="" data-bs-toggle="modal"
                                        data-bs-target="#report">Report</a></h5>
                                <h6 class="card-title"><span style="color: #E55B13; font-weight: bold;"></span>
                                    <span> For {{ $book_id->status }}
                                        |</span> <span>{{ $book_id->genre }}</span>
                                </h6>
                                {{-- <p class="card-text">
                                Shipping From <span style="font-weight: bold;">{{ $user_id->address }} to</span>
                            <span class="inline-dropdown">
                                <button class="btn dropdown-toggle places-button" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Catbalogan
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Sample 1</a></li>
                                    <li><a class="dropdown-item" href="#">Sample 2</a></li>
                                    <li><a class="dropdown-item" href="#">Sample 3</a></li>
                                </ul>
                            </span>
                            </p> --}}
                                {{-- <p class="card-text">Shipping Fee <span
                                        style="font-weight: bold;">₱{{ $book_id->price }}</span></p> --}}
                            <p class="card-text">Shipping Fee <span>₱103</span></p>
                            <p class="card-text">Author: <span>{{ $book_id->author }}</span></p>
                            <p class="card-text">Edition: <span>{{ $book_id->edition }}</span></p>
                            <div class="d-flex justify-content-start align-items-center mb-2">
                                <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-center">
                                    <p class="m-0" style="color: #003060;">Quantity: </p>
                                    <button class="btn btn-link btn-minus px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                    </button>
                                    <input id="form1" min="0" name="quantity" value="2" type="number"
                                        class="form-control form-control-mm" />
                                    <button class="btn btn-link btn-plus px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                    <p class="card-text m-0" style="white-space: nowrap;">{{ $book_id->stock }} pieces available</p>
                                </div>
                            </div>
                            <p class="card-text">Language: <span>{{ $book_id->language }}</span>
                            </p>
                            <p class="card-text">Condition: <span>{{ $book_id->condition }}</span>
                            </p>
                            <p class="card-text">Exchange Preferences: <span
                                    >{{ $book_id->Preferences }}</span>
                            </p>
                            <p class="card-text">Product Description: <span
                                   >{{ $book_id->description }}</span></p>
                            <p class="card-text fw-bold" style="color: #2D6092;"><i class="fa fa-info-circle" aria-hidden="true"
                                    style="margin-right: 10px"></i>For a successful book exchange
                                process, it is suggested that you first negotiate a deal with the exchanger by messaging
                                them.</p>
                            <p class="card-text location-text"><i class="fa fa-map-marker"
                                    aria-hidden="true"></i>{{ $user_id->address }}Bagacay, Tacloban</p>


                                {{-- <a href="#" class="btn total-likes"><i
                                        class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 7px"></i>100</a> --}}
                                <a href="/addtocart/{{ $book_id->id }}" class="btn cart-button"><i
                                        class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to
                                    Cart</a>
                                <a href="#" class="btn wishlist-button"><i class="fa fa-list-alt"
                                        aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="card mb-3 book-details mx-4">
                    <div class="row g-0">
                        <div class="col-md-4 p-5">
                            <img src="{{ asset('images/books/' . $book_id->book_photo) }}"
                                class="img-fluid mx-auto rounded" alt="product" width="300px" height="564px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $book_id->title }} <a href=""
                                        data-bs-toggle="modal" data-bs-target="#report">Report</a></h5>
                                <h6 class="card-title"><span
                                        style="color: #E55B13; font-weight: bold;">₱{{ $book_id->price }}
                                    </span>
                                    <span>| For {{ $book_id->status }}
                                        |</span> <span>{{ $book_id->genre }}</span>
                                </h6>
                                {{-- <p class="card-text">
                                Shipping From <span style="font-weight: bold;">{{ $user_id->address }} to</span>
                            <span class="inline-dropdown">
                                <button class="btn dropdown-toggle places-button" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Catbalogan
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Sample 1</a></li>
                                    <li><a class="dropdown-item" href="#">Sample 2</a></li>
                                    <li><a class="dropdown-item" href="#">Sample 3</a></li>
                                </ul>
                            </span>
                            </p> --}}
                            <p class="card-text">Shipping Fee <span
                                    >₱{{ $book_id->price }}</span>
                            </p>
                            <p class="card-text">Author: <span>{{ $book_id->author }}</span></p>
                            <p class="card-text">Edition: <span>{{ $book_id->edition }}</span>
                            </p>
                            <div class="d-flex justify-content-start align-items-center mb-2">
                                <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-center">
                                    <p class="m-0" style="color: #003060;">Quantity: </p>
                                    <button class="btn btn-link btn-minus px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                    </button>
                                    <input id="form1" min="0" name="quantity" value="2" type="number"
                                        class="form-control form-control-mm" />
                                    <button class="btn btn-link btn-plus px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                    <p class="card-text m-0" style="white-space: nowrap;">{{ $book_id->stock }} pieces available</p>
                                </div>
                            </div>
                            <p class="card-text">Language: <span>{{ $book_id->language }}</span>
                            </p>
                            <p class="card-text">Condition: <span>{{ $book_id->condition }}</span>
                            </p>
                            <p class="card-text">Product Description: <span
                                    >{{ $book_id->description }}</span></p>
                            <p class="card-text"><small class="text-body-secondary">{{ $user_id->address }}</small>
                            </p>
                            {{-- <a href="#" class="btn total-likes"><i
                                        class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 7px"></i>100</a> --}}
                                <a href="/addtocart/{{ $book_id->id }}" class="btn cart-button"><i
                                        class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add
                                    to Cart</a>
                                <a href="#" class="btn wishlist-button"><i class="fa fa-list-alt"
                                        aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- ADD ELSE IF FOR RENT PRODUCT PAGE 
            DETAILS INCLUDE: 
                Shipping fee
                Photo
                Front
                Back
                Genre
                Condition
                Rental Price
                Security Deposit
                Title
                Author
                Edition
                Language
                Rental Duration
                Rental Terms and Condition
                Description --}}

            <div class="container text-center seller-details mx-4">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center">
                            {{-- <div class="circle-picture"></div> --}}
                            <img src="{{ asset('images/profile_photos/' . $user_id->profile_photo) }}"
                                alt="seller image" class="circle-picture">
                            <div class="user-info">
                                <p>{{ $user_id->first_name . ' ' . $user_id->last_name }}</p>
                                <p>2K followers . 400 following</p>
                                {{-- <p>Lives in {{ $user_id->address }}</p> --}}
                                <button class="message-button"><i class="fa fa-envelope"
                                        aria-hidden="true"></i>Message</button>
                                <a href="/userlistings"><button class="view-profile-button"><i class="fa fa-eye"
                                            aria-hidden="true"></i>View
                                        Profile</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ratings">
                            <p>Ratings <span class="rate">100</span></p>
                            <p>Books Bought <span class="bought">20</span></p>
                            <p>Books Lent <span class="lent">120</span></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ratings">
                            <p>Books Sold <span class="sold">203</span></p>
                            <p>Books Exchanged <span class="exchange">59</span></p>
                            <p>Books Rented <span class="rent">9</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ratings-review">
                <div class="card-body rating-details">
                    <h5 class="card-title">User Ratings and Reviews</h5>
                    {{-- <nav class="nav nav-pills flex-column flex-sm-row">
                        <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;"
                            aria-current="page" href="#">Seller Rating</a>
                        <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                            href="#">Exchanger
                            Rating</a>
                        <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                            href="#">Renter
                            Rating</a>
                        <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                            href="#">Buyer
                            Rating</a>
                        <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                            href="#">Lessor
                            Rating</a>
                    </nav> --}}
                </div>
                <div class="container text-center review-rating-details">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="rating-info">
                                    <h4>4.9</h4>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ratings">
                                <a href="#" class="btn active d-block rate-button" role="button"
                                    data-bs-toggle="button" aria-pressed="true"
                                    style="background-color: #003060; border-color: #003060;">All
                                    <span>(10)</span></a>
                                <a href="#" class="btn d-block rate-button" role="button"
                                    data-bs-toggle="button">3 Star
                                    <span>(20)</span></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ratings">
                                <a href="#" class="btn d-block rate-button" role="button"
                                    data-bs-toggle="button" aria-pressed="true">5 Star <span>(100)</span></a>
                                <a href="#" class="btn d-block rate-button" role="button"
                                    data-bs-toggle="button">2 Star
                                    <span>(20)</span></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ratings">
                                <a href="#" class="btn d-block rate-button" role="button"
                                    data-bs-toggle="button" aria-pressed="true">4 star <span>(10)</span></a>
                                <a href="#" class="btn d-block rate-button" role="button"
                                    data-bs-toggle="button">1 Star
                                    <span>(59)</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center customer-ratings">
                <div class="row align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="/assets/nestine.png" alt="seller image" class="customer-picture">
                        <div class="customer-ratings-info">
                            <p>N******nnn</p>
                            {{-- <p>N******nnn <a href="" data-bs-toggle="modal" data-bs-target="#report">Report</a></p> --}}
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <p style="font-weight: bold;">Exchange</p>
                            <p>22/07/2023 <span>11.03</span></p>
                            <p>Condition: <span>10/10</span></p>
                            <p>Accuracy of Description: <span>10/10</span></p>
                            <p>Interaction: <span>10/10</span></p>
                            <p>Nice book. Good job Exchanger!</p>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <img src="/assets/bubble_bath.png" alt="Image 1"
                                            class="d-inline square-picture">
                                        <img src="/assets/bubble_bath.png" alt="Image 2"
                                            class="d-inline square-picture">
                                        <img src="/assets/bubble_bath.png" alt="Image 3"
                                            class="d-inline square-picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center customer-ratings">
                <div class="row align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="/assets/nestine.png" alt="seller image" class="customer-picture">
                        <div class="customer-ratings-info">
                            <p>N******nnn</p>
                            {{-- <p>N******nnn <a href="#" data-bs-toggle="modal" data-bs-target="#report">Report</a></p>s --}}
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <p style="font-weight: bold;">Exchange</p>
                            <p>22/07/2023 <span>11.03</span></p>
                            <p>Condition: <span>10/10</span></p>
                            <p>Accuracy of Description: <span>10/10</span></p>
                            <p>Interaction: <span>10/10</span></p>
                            <p>Nice book. Good job Exchanger!</p>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <img src="/assets/bubble_bath.png" alt="Image 1"
                                            class="d-inline square-picture">
                                        <img src="/assets/bubble_bath.png" alt="Image 2"
                                            class="d-inline square-picture">
                                        <img src="/assets/bubble_bath.png" alt="Image 3"
                                            class="d-inline square-picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row">
                        <div class="col-md-3">
                            <div class="card img-card" style="width: 20rem;">
                            <img src="../assets/yellow_book.png" class="card-img-top" alt="product"  width="100px" height="364px">
                            <div class="card-body text-center">
                                <a href="#" class="btn total-likes"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i>100</a>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card w-80 book-details">
                            <div class="card-body">
                                <h5 class="card-title">Change your World Through Prayer <a href="">Report</a></h5>
                                <h6 class="card-title"><span style="color: #E55B13; font-weight: bold;">₱100.00 </span> <span>| For Sale |</span> <span>Self-Help</span></h6>
                                <p class="card-text">
                                    Shipping From <span style="font-weight: bold;">Tacloban to</span>
                                    <span class="inline-dropdown">
                                      <button class="btn dropdown-toggle places-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Catbalogan
                                      </button>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Sample 1</a></li>
                                        <li><a class="dropdown-item" href="#">Sample 2</a></li>
                                        <li><a class="dropdown-item" href="#">Sample 3</a></li>
                                      </ul>
                                    </span>
                                  </p>
                                <p class="card-text">Shipping Fee <span style="font-weight: bold;">₱0</span></p>
                                <p class="card-text">Author: <span>Ben Rowling</span></p>
                                <p class="card-text">Edition: <span>1st Edition</span></p>
                                <p class="card-text">Language: <span>English</span></p>
                                <p class="card-text">Condition: <span>Like New</span></p>
                                <p class="card-text">Product Description: <span>One of the most inspiring and impactful books ever written, The 7 Habits of Highly Effective People has captivated readers for nearly three decades. </span></p>
                                <a href="#" class="btn cart-button"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                <a href="#" class="btn wishlist-button"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a>
                            </div>
                            </div>
                        </div>
                        </div> --}}

    </div>
    </div>

    <!-- Report Modal -->
    <div class="modal fade" id="report" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:#003060;">Select a Reason</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-check">
                        <input class="form-check-input check-report" type="checkbox" value=""
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                            Counterfeit and copyright
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check-report" type="checkbox" value=""
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                            Prohibited item
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check-report" type="checkbox" value=""
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                            Offensive or potentially offensive item
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check-report" type="checkbox" value=""
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                            Fraudulent listing
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check-report" type="checkbox" value=""
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                            Others
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label report-input"
                            style="color:#003060;">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"
                            placeholder="Please further elaborate on your selected reason" rows="7" style="color:#003060;"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn report-button">Report</button>
                </div>
            </div>
        </div>
    </div>
</body>

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])

<script>
    // search script
    var search = document.getElementById('search_input');
    var searchContainer = document.getElementById('searches');
    if (search.value.trim().length < 1) {
        searchContainer.style.display = 'none'
    }
    search.addEventListener('keydown', (event) => {
        if (event.key === 'Enter' || event.keyCode === 13) {
            window.location.href = '/searchitem/' + search.value;
        }
    });
    search.addEventListener('input', () => {
        if (search.value.trim().length > 1) {
            const requestOptions = {
                method: 'GET',
            };
            fetch('/search/' + search.value.trim(), requestOptions)
                .then(response => response.json())
                .then(result => {
                    searchContainer.style.display = 'inline';
                    searchContainer.innerHTML = '';
                    // console.log(result);
                    result.forEach(data => {
                        console.log(data);
                        if (data.unit == 'Available') {
                            const suggestionElement = document.createElement('div');
                            const searchedImage = document.createElement('img');
                            const searchedContent = document.createElement('div');
                            const titleText = document.createElement('p');
                            const authorText = document.createElement('p');
                            // suggestionElement.textContent = data.title;
                            suggestionElement.id = "searched-item";
                            suggestionElement.className = 'row px-2';
                            searchedImage.src = '/images/books/' + data.book_photo;
                            searchedImage.className = 'col-3 px-0 bg-light';
                            searchedContent.className = 'col border';
                            searchedContent.id = 'textContent';
                            titleText.className = 'm-0 fw-bold';
                            titleText.id = 'searched-title';
                            titleText.textContent = data.title;
                            authorText.id = 'searched-author';
                            authorText.textContent = data.author;
                            suggestionElement.addEventListener('click', () => {
                                window.location.href = "/product/" + data.id + "/" + data
                                    .user_id;
                                searchContainer.innerHTML = '';
                            });
                            searchContainer.appendChild(suggestionElement);
                            suggestionElement.appendChild(searchedImage);
                            suggestionElement.appendChild(searchedContent);
                            searchedContent.appendChild(titleText);
                            searchedContent.appendChild(authorText);
                        }
                    });
                })
                .catch(error => console.log('error', error));
        } else {
            searchContainer.style.display = 'none'
            searchContainer.innerHTML = '';
        }
    });
</script>