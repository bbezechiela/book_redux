@include('partials.__header', [
    'title' => 'My Purchase | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/myPurchase-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 shadow">
        <x-sidebar />
    </div>

    {{-- <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start" tabindex="-1"
        aria-labelledby="offcanvasExampleLabel">
        <x-sidebar />
    </div>
    <div id="sidebarProfile" class="sidebarProfile p-2 min-vh-100 shadow">
        <x-sidebarProfile />
    </div> --}}
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5"
                        src="../assets/Book_Logo.png" alt="Logo"></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
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
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>
        <div class="purchase-container">
            <div class="header">
                <h4>My Purchase</h4>
                <p>View and track your purchase item</p>
            </div>
            <div class="card-body nav-details">
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;"
                        aria-current="page" href="/booksrented">Books Rented</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/mypurchase">To Purchase</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/toreceive">To Receive</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/delivered-mypurchase">Delivered</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/dropped-mypurchase">Dropped</a>
                </nav>
            </div>
        </div>
        <div class="card table-card">
            <div class="card-datatable table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer" style="">
                    <table class="datatables-basic table border-top dataTable no-footer dtr-column collapsed"
                        id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1390px;">
                        <thead>
                            <tr>
                                <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 10px;"
                                    aria-label=""></th>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1" style="width: 120px;">Status</th>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1" style="width: 120px;">End Date</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 120px;">Start Date</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 220px;">Title</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 150px;">Rental Price</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 220px;">Security Deposit</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 120px;">Duration</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 180px;">Name</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 190px;">Contact Number
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 144px;">Email
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 100px;">Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $loopCount = 0;
                            @endphp
                            @foreach ($tracks as $track)
                                <tr class="odd">
                                    <td class="control" tabindex="0" style=""></td>
                                    <td class="status-text">
                                        {{ $track->status }}
                                    </td>
                                    <td>{{ $track->end_date }}</td>
                                    <td>{{ $track->start_date }}</td>
                                    <td>{{ $track->book->title }}</td>
                                    <td>₱{{ $track->book->price }}</td>
                                    <td>₱{{ $track->book->security_deposit }}</td>
                                    <td>{{ $track->book->rental_duration }} Day(s)</td>
                                    <td>{{ $track->book->user->first_name . ' ' . $track->book->user->last_name }}</td>
                                    <td>{{ $track->user->phone_number }}</td>
                                    <td>{{ $track->user->email }}</td>
                                    <td>
                                        <div class="d-inline-block"><a href="javascript:;"
                                                class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown" aria-expanded="false"></a>
                                            <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                                <li><a href="javascript:;" class="dropdown-item">Returned</a>
                                                </li>
                                                <li><a href="javascript:;" class="dropdown-item">Notify User</a>
                                                </li>
                                                <div class="dropdown-divider"></div>
                                                <li><a href="javascript:;"
                                                        class="dropdown-item text-danger delete-record">Overdue</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                    $loopCount++;
                                @endphp
                            @endforeach
                            @if ($loopCount == 0)
                                <div class="w-100 mt-5 d-flex justify-content-center">
                                    <img class="img mt-3" src="../assets/Empty-Box.png" alt="image">
                                </div>
                                <h1 class="mt-2 text-center fw-bold" style="color: #E55B13; font-size: 20px;">No Books Rented</h1>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])
