@include('partials.__header', [
    'title' => 'My List | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/mylist-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

{{-- <body> --}}
<div id="body-container" class="container-fluid px-0">
    {{-- <div class="row mx-0"> --}}
    <div id="sidebar" class="sidebar p-2 min-vh-100">
        <x-sidebar pic="{{ session('profile_pic') }}" name="{{ session('first_name') . ' ' . session('last_name') }}"
            address="{{ session('address') }}" />
    </div>
    <div id="content" class="pe-0 border content">
        <ul class="nav bg-light sticky-top head-nav shadow py-3 px-4">
            <div class="w-100 d-flex justify-content-between mt-1 p-0">
                <input class="border rounded-3 px-3 w-100" type="text" placeholder="Search">
                <a href="/" class="pb-2 px-2"><img class="img" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
            </div>
        </ul>
        <div class="container-fuid pt-3 px-3">
            <div class="row border mx-2 mt-3 p-3 shadow rounded">
                <div class="col d-flex align-items-center">
                    <p class="fs-3 order mx-auto fw-bold m-0">Order Status</p>
                </div>
                <div class="btn book-status col-2 ms-1 rounded rounded-4 py-2">
                    <p class="my-0 text-center fw-bold fs-3">0</p>
                    <p class="my-0 text-center fs-6">To ship</p>
                </div>
                <div class="btn book-status col-2 mx-2 rounded rounded-4 py-2">
                    <p class="my-0 text-center fw-bold fs-3">0</p>
                    <p class="my-0 text-center fs-6">Completed</p>
                </div>
                <div class="btn book-status col-2 mx-2 rounded rounded-4 py-2">
                    <p class="my-0 text-center fw-bold fs-3">0</p>
                    <p class="my-0 text-center fs-6">Cancelled</p>
                </div>
                <div class="btn book-status col-2 me-1 rounded rounded-4 py-2">
                    <p class="my-0 text-center fw-bold fs-3">0</p>
                    <p class="my-0 text-center fs-6">Return</p>
                </div>
            </div>
            <!-- My List contents -->
            <div class="row contents px-3 mt-4">
                <div class="row justify-content-between mx-auto">
                    <div class="col-4 d-flex flex-row">
                        <h3 class="fw-bold">My List</h3>
                        <button id="create-listing"
                            class="create-btn btn px-3 ms-2 d-flex align-items-center h-75">Create listing</button>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <label class="fw-bold" for="sort">Sort by</label>
                        <select class="px-3 py-1 h-75 ms-2 rounded" name="" id="sort">
                            <option value="Sale">Sale</option>
                            <option value="Exchange">Exchange</option>
                            <option value="Rent">Rent</option>
                        </select>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <a class="fw-bold p-0 edit-book">Edit</a>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <a class="fw-bold p-0 edit-book">Edit</a>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <a class="fw-bold p-0 edit-book">Edit</a>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <a class="fw-bold p-0 edit-book">Edit</a>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <a class="fw-bold p-0 edit-book">Edit</a>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <a class="fw-bold p-0 edit-book">Edit</a>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <a class="fw-bold p-0 edit-book">Edit</a>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <a class="fw-bold p-0 edit-book">Edit</a>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add listing for </h1>
                        <select name="" class="btn mx-2 fw-bold px-0" id="modal-category">
                            <option value="Sale">Sale</option>
                            <option value="Exchange">Exchange</option>
                            <option value="Rent">Rent</option>
                        </select>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <!-- sale -->
                    <div id="sale">
                        <form id="sale-form" action="/salepost" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body container-fluid px-5">

                                <div class="row">
                                    <div class="col-5 me-1 px-0 border mb-2 rounded">
                                        <input type="text" name="post_user"
                                            value="{{ session('first_name') . ' ' . session('last_name') }}" hidden>
                                        <input type="text" name="weight" id="sale-weight" hidden>
                                        <input type="text" name="width" id="sale-width" hidden>
                                        <input type="text" name="height" id="sale-height" hidden>
                                        <input type="text" name="length" id="sale-length" hidden>
                                        <input type="text" name="courier" id="sale-courier" hidden>

                                        <input type="file" name="book_photo" id="image" accept="image/*"
                                            class="d-none">
                                        <label for="image" class="position-relative w-100 h-100"
                                            style="cursor: pointer;">
                                            <img id="book-image" src="../assets/image.png" alt="image"
                                                class="img-fluid position-absolute top-50 start-50 translate-middle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-title="Click to Upload Image" width="170" height="170">
                                        </label>

                                    </div>
                                    <div class="col">
                                        <select name="genre" id=""
                                            class="w-100 mb-2 px-3 bg-light rounded">
                                            <option>Genre</option>
                                            <option value="Educational">Educational</option>
                                            <option value="Romance & Saga">Romance & Saga</option>
                                            <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                            <option value="Science Fiction">Science Fiction</option>
                                            <option value="Historical Fiction">Historical Fiction</option>
                                            <option value="Mystery & Suspense">Mystery & Suspense</option>
                                            <option value="Young Adult">Young Adult</option>
                                            <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                            <option value="Horror & Supernatural">Horror & Supernatural</option>
                                            <option value="Comedy & Satire">Comedy & Satire</option>
                                            <option value="Poetry & Prose">Poetry & Prose</option>
                                            <option value="Self-Help">Self-Help</option>
                                            <option value="Crime & Thriller">Crime & Thriller</option>
                                        </select>
                                        <input type="text" name="price" id="price"
                                            class="w-100 mb-2 px-3 rounded" placeholder="Price">
                                        <button type="button" id="sale-shipping-fee-btn"
                                            class="btn w-100 mb-2 px-3 rounded shipping-btn text-start py-0"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Click to open shipping form">
                                            Shipping Fee
                                        </button>
                                        <select name="condition" id=""
                                            class="w-100 mb-2 px-3 bg-light rounded">
                                            <option>Condition</option>
                                            <option value="Old">Old</option>
                                            <option value="Fairly new">Fairly new</option>
                                            <option value="New">New</option>
                                        </select>
                                        <select name="language" class="w-100 mb-2 px-3 bg-light rounded"
                                            id="">
                                            <option>Language</option>
                                            <option value="English" selected>English</option>
                                        </select>
                                    </div>
                                    <input type="text" name="title" class="w-100 mb-2 px-3 rounded"
                                        placeholder="Title">
                                    <input type="text" name="author" class="w-100 mb-2 px-3 rounded"
                                        placeholder="Author">
                                    <input type="text" name="edition" id="edition-sale"
                                        class="w-100 mb-2 px-3 rounded" placeholder="Edition">
                                    <textarea name="description" id="description" class="px-3 rounded" cols="30" rows="4"
                                        placeholder="Description"></textarea>
                                </div>

                            </div>
                            <div class="modal-footer border-0">
                                <button type="submit" id="submit" class="btn mx-auto w-25 text-white rounded-3"
                                    style="background-color: #E55B13;">List</button>
                            </div>
                        </form>
                    </div>

                    <!-- exchange -->
                    <div id="exchange" class="modal-body container-fluid px-5">
                        <form id="exchange-form" action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-5 me-1 border px-0 mb-2 rounded">
                                    <input type="text" name="post_user"
                                        value="{{ session('first_name') . ' ' . session('last_name') }}" hidden>
                                    <input type="text" name="weight" id="exchange-weight" hidden>
                                    <input type="text" name="width" id="exchange-width" hidden>
                                    <input type="text" name="height" id="exchange-height" hidden>
                                    <input type="text" name="length" id="exchange-length" hidden>
                                    <input type="text" name="courier" id="exchange-courier" hidden>

                                    <input type="file" name="book_photo" id="image" class="d-none">
                                    <label for="image" class="position-relative w-100 h-100"
                                        style="cursor: pointer;">
                                        <img id="book-image" src="../assets/image.png" alt="image"
                                            class="img-fluid position-absolute top-50 start-50 translate-middle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            data-bs-title="Click to Upload Image" width="170" height="170">
                                    </label>

                                </div>
                                <div class="col">
                                    <select name="genre" id="" class="w-100 mb-2 px-3 bg-light rounded">
                                        <option>Genre</option>
                                        <option value="Educational">Educational</option>
                                        <option value="Romance & Saga">Romance & Saga</option>
                                        <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                        <option value="Science Fiction">Science Fiction</option>
                                        <option value="Historical Fiction">Historical Fiction</option>
                                        <option value="Mystery & Suspense">Mystery & Suspense</option>
                                        <option value="Young Adult">Young Adult</option>
                                        <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                        <option value="Horror & Supernatural">Horror & Supernatural</option>
                                        <option value="Comedy & Satire">Comedy & Satire</option>
                                        <option value="Poetry & Prose">Poetry & Prose</option>
                                        <option value="Self-Help">Self-Help</option>
                                        <option value="Crime & Thriller">Crime & Thriller</option>
                                    </select>
                                    <input type="text" name="edition" id="edition-exchange"
                                        class="w-100 mb-2 px-3 rounded" placeholder="Edition">
                                    <button type="button" id="exchange-shipping-fee-btn"
                                        class="btn w-100 mb-2 px-3 rounded shipping-btn text-start py-0"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Click to open shipping form">
                                        Shipping Fee
                                    </button>
                                    <select name="condition" id="" class="w-100 mb-2 px-3 bg-light rounded">
                                        <option>Condition</option>
                                        <option value="Old">Old</option>
                                        <option value="Fairly new">Fairly new</option>
                                        <option value="New">New</option>
                                    </select>
                                    <select name="language" class="w-100 mb-2 px-3 bg-light rounded" id="">
                                        <option>Language</option>
                                        <option value="English" selected>English</option>
                                    </select>
                                </div>
                                <input type="text" name="name" class="w-100 mb-2 px-3 rounded"
                                    placeholder="Title">
                                <input type="text" name="author" class="w-100 mb-2 px-3 rounded"
                                    placeholder="Author">
                                <textarea name="exchange_preferences" id="exchange-preferences" class="px-3 rounded mb-2" cols="30"
                                    rows="4" placeholder="Exchange Preferences"></textarea>
                                <textarea name="description" id="description" class="px-3 rounded" cols="30" rows="4"
                                    placeholder="Description"></textarea>
                            </div>
                        </form>
                    </div>

                    <!-- rent -->
                    <div id="rent">
                        <form id="rent-form" action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body container-fluid px-5">
                                <div class="row">
                                    <div class="col-5 px-0 me-1 border mb-2 rounded">
                                        <input type="text" name="post_user"
                                            value="{{ session('first_name') . ' ' . session('last_name') }}" hidden>
                                        <input type="text" name="weight" id="rent-weight" hidden>
                                        <input type="text" name="width" id="rent-width" hidden>
                                        <input type="text" name="height" id="rent-height" hidden>
                                        <input type="text" name="length" id="rent-length" hidden>
                                        <input type="text" name="courier" id="rent-courier" hidden>

                                        <input type="file" name="book_photo" id="image" class="d-none">
                                        <label for="image" class="position-relative w-100 h-100"
                                            style="cursor: pointer;">
                                            <img id="book-image" src="../assets/image.png" alt="image"
                                                class="img-fluid position-absolute top-50 start-50 translate-middle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-title="Click to Upload Image" width="170" height="170">
                                        </label>

                                    </div>
                                    <div class="col">
                                        <select name="genre" id=""
                                            class="w-100 mb-2 px-3 bg-light rounded">
                                            <option>Genre</option>
                                            <option value="Educational">Educational</option>
                                            <option value="Romance & Saga">Romance & Saga</option>
                                            <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                            <option value="Science Fiction">Science Fiction</option>
                                            <option value="Historical Fiction">Historical Fiction</option>
                                            <option value="Mystery & Suspense">Mystery & Suspense</option>
                                            <option value="Young Adult">Young Adult</option>
                                            <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                            <option value="Horror & Supernatural">Horror & Supernatural</option>
                                            <option value="Comedy & Satire">Comedy & Satire</option>
                                            <option value="Poetry & Prose">Poetry & Prose</option>
                                            <option value="Self-Help">Self-Help</option>
                                            <option value="Crime & Thriller">Crime & Thriller</option>
                                        </select>
                                        <select name="condition" id=""
                                            class="w-100 mb-2 px-3 bg-light rounded">
                                            <option>Condition</option>
                                            <option value="Old">Old</option>
                                            <option value="Fairly new">Fairly new</option>
                                            <option value="New">New</option>
                                        </select>
                                        <button type="button" id="rent-shipping-fee-btn"
                                            class="btn w-100 mb-2 px-3 rounded shipping-btn text-start py-0"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Click to open shipping form">
                                            Shipping Fee
                                        </button>
                                        <input type="text" name="price" id="rental-price"
                                            class="w-100 mb-2 px-3 rounded" placeholder="Rental Price">
                                        <input type="text" name="security_deposit" class="w-100 mb-2 px-3 rounded"
                                            placeholder="Security Deposit">
                                    </div>
                                    <input type="text" name="title" class="w-100 mb-2 px-3 rounded"
                                        placeholder="Title">
                                    <input type="text" name="author" class="w-100 mb-2 px-3 rounded"
                                        placeholder="Author">
                                    <input type="text" name="edition" class="w-100 mb-2 px-3 rounded"
                                        placeholder="Edition">
                                    <select name="language" class="w-100 mb-2 px-3 bg-light rounded" id="">
                                        <option>Language</option>
                                        <option value="English" selected>English</option>
                                    </select>
                                    <input type="text" name="rental_duration" class="w-100 mb-2 px-3 rounded"
                                        placeholder="Rental Duration">
                                    <textarea name="rental_terms_and_condition" id="exchange-preferences" class="px-3 rounded mb-2" cols="30"
                                        rows="4" placeholder="Rental Terms and Condition"></textarea>
                                    <textarea name="description" id="" class="px-3 rounded" cols="30" rows="4"
                                        placeholder="Description"></textarea>
                                </div>

                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" id="submit" class="btn mx-auto w-25 text-white rounded-3"
                                    style="background-color: #E55B13;">List</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- shipping fee --}}
        <div class="modal fade" id="shipping-fee" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button id="back-shipping" class="btn text-decoration-none"><img src="assets/left_arrow.png"
                                alt="back"></button>
                        <h3 class="modal-title fs-6" id="staticBackdropLabel">Shipping Fee</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-2 px-4">
                        <span class="m-0 p-0" style="color: #737679; text-align: justify; font-size: 15px">Please fill
                            in dimensions accurately. Inaccurate or missing dimensions may result in additional shipping
                            fee or failed delivery.</span>
                        <input type="number" name="weight" id="weight"
                            class="w-50 mt-3 ms-2 mb-3 px-3 py-1 fs-6 rounded" placeholder="Weight (kg)"><br>

                        <label class="fw-bold" for="size">Packaging Size</label><br>
                        <input id="width" name="width" type="number"
                            class="w-50 ms-2 mt-1 mb-2 px-3 py-1 fs-6 rounded" placeholder="Width (cm)"><br>
                        <input id="height" name="height" type="number"
                            class="w-50 ms-2 mb-2 px-3 py-1 fs-6 rounded" placeholder="Height (cm)"><br>
                        <input id="length" name="length" type="number"
                            class="w-50 ms-2 mb-3 px-3 py-1 fs-6 rounded" placeholder="Length (cm)"><br>

                        <label class="fw-bold" for="courier">Please Select Courier</label><br>
                        <input id="jrs" class="ms-2" name="courier" type="radio" value="JRS Express">
                        <label for="jrs">JRS Express</label><br>
                        <input id="jt" class="ms-2" name="courier" type="radio" value="J&T Express">
                        <label for="jt">J&T Express</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="shipping-save-btn" class="btn mx-auto w-25 text-white rounded-3"
                            style="background-color: #E55B13;">Save</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
{{-- </div> --}}

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])
<script>
    // tool tips
    const imageToolTip = document.getElementById('book-image');
    const tooltipImageShow = bootstrap.Tooltip.getOrCreateInstance(imageToolTip);

    const SaleShippingToolTip = document.getElementById('sale-shipping-fee-btn');
    const tooltipSaleShippingShow = bootstrap.Tooltip.getOrCreateInstance(SaleShippingToolTip);

    const ExchangeShippingToolTip = document.getElementById('exchange-shipping-fee-btn');
    const tooltipExchangeShippingShow = bootstrap.Tooltip.getOrCreateInstance(ExchangeShippingToolTip);

    const RentShippingToolTip = document.getElementById('rent-shipping-fee-btn');
    const tooltipRentShippingShow = bootstrap.Tooltip.getOrCreateInstance(RentShippingToolTip);

    // modals
    const listingModal = new bootstrap.Modal('#staticBackdrop', {
        keyboard: false
    });

    const shippingModal = new bootstrap.Modal('#shipping-fee', {
        keyboard: false
    });

    // buttons for modals
    var create_listing_btn = document.getElementById('create-listing');
    var back_btn = document.getElementById("back-shipping");
    var sale_shipping_fee_btn = document.getElementById('sale-shipping-fee-btn');
    var exchange_shipping_fee_btn = document.getElementById('exchange-shipping-fee-btn');
    var rent_shipping_fee_btn = document.getElementById('rent-shipping-fee-btn');
    var shipping_save_btn = document.getElementById('shipping-save-btn');

    // shipping form inputs
    var weight = document.getElementById('weight');
    var width = document.getElementById('width');
    var height = document.getElementById('height');
    var length = document.getElementById('length');

    var jrsRadio = document.getElementById('jrs');
    var jtRadio = document.getElementById('jt');
    var courier;


    // hidden inputs for sale
    var sale_weight = document.getElementById('sale-weight');
    var sale_width = document.getElementById('sale-width');
    var sale_height = document.getElementById('sale-height');
    var sale_length = document.getElementById('sale-length');
    var sale_courier = document.getElementById('sale-courier');

    // hidden inputs for exchange
    var exchange_weight = document.getElementById('exchange-weight');
    var exchange_width = document.getElementById('exchange-width');
    var exchange_height = document.getElementById('exchange-height');
    var exchange_length = document.getElementById('exchange-length');
    var exchange_courier = document.getElementById('exchange-courier');

    // hidden inputs for rent
    var rent_weight = document.getElementById('rent-weight');
    var rent_width = document.getElementById('rent-width');
    var rent_height = document.getElementById('rent-height');
    var rent_length = document.getElementById('rent-length');
    var rent_courier = document.getElementById('rent-courier');


    create_listing_btn.addEventListener('click', function() {
        listingModal.show();
    });

    back_btn.addEventListener("click", function() {
        shippingModal.hide();
        listingModal.show();
    });

    sale_shipping_fee_btn.addEventListener('click', function() {
        listingModal.hide();
        shippingModal.show();
    });

    exchange_shipping_fee_btn.addEventListener('click', function() {
        listingModal.hide();
        shippingModal.show();
    });

    rent_shipping_fee_btn.addEventListener('click', function() {
        listingModal.hide();
        shippingModal.show();
    });

    var form = document.getElementById('sale-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        sale_weight.value = weight.value;
        sale_width.value = width.value;
        sale_height.value = height.value;
        sale_length.value = length.value;
        sale_courier.value = courier;
    });
    // save button or listing buttons
    // document.getElementById('submit').addEventListener('click', function() {
    //     if (list_category.value == 'Sale') {
    //         sale_weight.value = weight.value;
    //         sale_width.value = width.value;
    //         sale_height.value = height.value;
    //         sale_length.value = length.value;
    //         sale_courier.value = courier;


    //         // form.action = "/salepost";
    //         form.submit();
    //     } else if (list_category.value == "Exchange") {
    //         exchange_weight.value = weight.value;
    //         exchange_width.value = width.value;
    //         exchange_height.value = height.value;
    //         exchange_length.value = length.value;
    //         exchange_courier.value = courier;

    //         var form = document.getElementById('exchange-form');
    //         form.submit();
    //     } else if (list_category.value == "Rent") {
    //         rent_weight.value = weight.value;
    //         rent_width.value = width.value;
    //         rent_height.value = height.value;
    //         rent_length.value = length.value;
    //         rent_courier.value = courier;

    //         var form = document.getElementById('rent-form');
    //         form.submit();
    //     }


    // });

    shipping_save_btn.addEventListener('click', function() {

        if (weight.value == "" || width.value == "" || height.value == "" || length.value == "") {
            alert("please complete every filleds");
        } else {
            if (jrsRadio.checked) {
                courier = jrsRadio.value;
            } else if (jtRadio.checked) {
                courier = jtRadio.value;
            } else {
                courier = null;
            }

            // sale_weight.value = weight.value;
            // sale_width.value = width.value;
            // sale_height.value = height.value;
            // sale_length.value = length.value;
            // sale_courier.value = courier;

            shippingModal.hide();
            listingModal.show();
        }

    });

    var list_category = document.getElementById("modal-category");

    list_category.addEventListener("change", function() {
        // console.log(String(list_category.value));
        if (list_category.value == "Sale") {
            document.getElementById("sale").style.display = "flex";
            document.getElementById("exchange").style.display = "none";
            document.getElementById("rent").style.display = "none";

        } else if (list_category.value == "Exchange") {
            document.getElementById("sale").style.display = "none";
            document.getElementById("exchange").style.display = "flex";
            document.getElementById("rent").style.display = "none";

        } else if (list_category.value == "Rent") {
            document.getElementById("sale").style.display = "none";
            document.getElementById("exchange").style.display = "none";
            document.getElementById("rent").style.display = "flex";

        }
    });

    // uploading image
    var image_upload = document.getElementById("image");

    image_upload.addEventListener("change", function() {
        var image = document.getElementById("book-image");
        image.src = URL.createObjectURL(event.target.files[0]);
    })
</script>
{{-- <script src="{{ asset('/js/app-homepage.js') }}"></script> --}}
