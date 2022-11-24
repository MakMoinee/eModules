<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/storage/images/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Admin Users</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/owl-carousel.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky" style="background: #ff589e;color:bisque;">
        <img style="float: left;padding: 10px;margin-left: 50px;" src="/storage/images/favicon.ico" alt=""
            srcset="" width="80px" height="80px" class="img-responsive">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->

                        <a href="/" class="logo">MERR-C Society Academy</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#signup" data-toggle="modal"
                                    data-target="#logOutModal">Sign Out</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->

    <section class="section" id="about">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark"
                    style="border-bottom-right-radius: 5px;border-top-right-radius: 5px;">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
                        <a href="/"
                            class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline" style="margin-top: 20px;">Dashboard</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                            id="menu">
                            <li class="nav-item">
                                <a href="/announcements" class="nav-link align-middle px-0" style="color:whitesmoke">
                                    <i class="fs-4 bi-house"></i> <span
                                        class="ms-1 d-none d-sm-inline">Announcements</span>
                                </a>
                            </li>
                            <li>
                                <a href="/adminstrands" class="nav-link px-0 align-middle" style="color:whitesmoke">
                                    <i class="fs-4 bi-table" style="color:whitesmoke"></i> <span
                                        class="ms-1 d-none d-sm-inline">Academic
                                        Strands</span></a>
                            </li>
                            <li>
                                <a href="/adminusers" class="nav-link px-0 align-middle" style="color:whitesmoke">
                                    <i class="fs-4 bi-table" style="color:whitesmoke"></i> <span
                                        class="ms-1 d-none d-sm-inline"
                                        style="color:#f55858 !important;">Users</span></a>
                            </li>
                            <li>
                                <a href="https://dashboard.tawk.to/?lang=en#/admin/637fbe0adaff0e1306d944cd/chat-widget"
                                    target="_blank" data-bs-toggle="collapse" class="nav-link px-0 align-middle "
                                    style="color:whitesmoke">
                                    <i class="fs-4 bi-bootstrap" style="color:whitesmoke"></i> <span
                                        class="ms-1 d-none d-sm-inline">Chat</span></a>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown pb-4">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none"
                                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="/images/user.png" alt="hugenerd" width="30" height="30"
                                    class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">{{ $nem }}</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    <!-- Content Here --->
                    <div class="container">
                        <div class="row">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#signUpModal">Add
                                User</button>
                        </div>
                        <br>
                        <div class="row" style="background: whitesmoke;" class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>
                                        Username
                                    </th>
                                    <th>
                                        Full Name
                                    </th>
                                    <th>
                                        LRN
                                    </th>
                                    <th>
                                        Track
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        User Type
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($eusers as $item)
                                        <tr>
                                            <td>{{ $item['username'] }}</td>
                                            <td>
                                                {{ $item['lastname'] }}, {{ $item['firstname'] }}
                                                {{ $item['middlename'] }}
                                            </td>
                                            <td>{{ $item['lrn'] }}</td>
                                            <td>{{ $item['track'] }}</td>
                                            <td>{{ $item['email'] }}</td>
                                            <td>
                                                @if ($item['userType'] == 0)
                                                    Super Admin
                                                @endif
                                                @if ($item['userType'] == 1)
                                                    Admin
                                                @endif
                                                @if ($item['userType'] == 2)
                                                    User
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn btn-success" data-toggle="modal"
                                                    data-target="#viewModal{{ $item['userID'] }}">View/Edit</button>
                                                <div class="modal fade" id="viewModal{{ $item['userID'] }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="viewModalLabel{{ $item['userID'] }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content" style="width: 450px;">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="viewModalLabel{{ $item['userID'] }}">View/Edit
                                                                    User
                                                                </h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <form
                                                                        action="{{ route('adminusers.update', ['adminuser' => $item['userID']]) }}"
                                                                        method="POST" enctype="multipart/form-data"
                                                                        autocomplete="off">
                                                                        @method('put')
                                                                        @csrf
                                                                        <div class="form-group"
                                                                            style="margin-left: 60px;">
                                                                            <label for="Username"
                                                                                class="for">Username<span
                                                                                    style="color:red">*</span></label>
                                                                            <label for="Firstname" class="for"
                                                                                style="margin-left: 110px;">First
                                                                                Name<span
                                                                                    style="color:red">*</span></label>
                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 60px;margin-top: -20px;">
                                                                            <input required type="text"
                                                                                name="username" id=""
                                                                                style="width:150px;"
                                                                                value="{{ $item['username'] }}">
                                                                            <input required type="text"
                                                                                name="firstname" id=""
                                                                                style="width:150px;margin-left: 33px;"
                                                                                value="{{ $item['firstname'] }}">
                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 60px;margin-top: -12px;">
                                                                            <label for="Middlename"
                                                                                class="for">Middle Name<span
                                                                                    style="color:red">*</span></label>
                                                                            <label for="Lastname" class="for"
                                                                                style="margin-left: 89px;">Last
                                                                                Name<span
                                                                                    style="color:red">*</span></label>
                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 60px;margin-top: -20px;">
                                                                            <input required type="text"
                                                                                name="middlename" id=""
                                                                                style="width:150px;"
                                                                                value="{{ $item['middlename'] }}">
                                                                            <input required type="text"
                                                                                name="lastname" id=""
                                                                                style="width:150px;margin-left: 33px;"
                                                                                value="{{ $item['lastname'] }}">
                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 60px;margin-top: -12px;">
                                                                            <label for="lrn"
                                                                                class="for">LRN</label>
                                                                            <label for="Track" class="for"
                                                                                style="margin-left: 153px;">Track<span
                                                                                    style="color:red">*</span></label>
                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 60px;margin-top: -20px;">
                                                                            <input type="text" name="lrn"
                                                                                id="" style="width:150px;"
                                                                                value="{{ $item['lrn'] }}">
                                                                            <select name="track" id="civilstat"
                                                                                style="width:150px;margin-left: 33px;">
                                                                                @if ($item['track'] == 'ABM')
                                                                                    <option value="ABM" selected>ABM
                                                                                    </option>
                                                                                @else
                                                                                    <option value="ABM">ABM
                                                                                    </option>
                                                                                @endif

                                                                                @if ($item['track'] == 'GAS')
                                                                                    <option value="GAS" selected>GAS
                                                                                    </option>
                                                                                @else
                                                                                    <option value="GAS">GAS
                                                                                    </option>
                                                                                @endif

                                                                                @if ($item['track'] == 'HUMSS')
                                                                                    <option value="HUMSS" selected>
                                                                                        HUMSS
                                                                                    </option>
                                                                                @else
                                                                                    <option value="HUMSS">HUMSS
                                                                                    </option>
                                                                                @endif

                                                                                @if ($item['track'] == 'STEM')
                                                                                    <option value="STEM" selected>
                                                                                        STEM
                                                                                    </option>
                                                                                @else
                                                                                    <option value="STEM">STEM
                                                                                    </option>
                                                                                @endif

                                                                                @if ($item['track'] == 'TVL')
                                                                                    <option value="TVL" selected>
                                                                                        TVL
                                                                                    </option>
                                                                                @else
                                                                                    <option value="TVL">TVL
                                                                                    </option>
                                                                                @endif
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 60px;margin-top: -12px;">
                                                                            <label for="password"
                                                                                class="for">Password</label>
                                                                            <label for="Email" class="for"
                                                                                style="margin-left: 111px;">Email<span
                                                                                    style="color:red">*</span></label>
                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 60px;margin-top: -20px;">
                                                                            <input type="password" name="password"
                                                                                id="vpassword" style="width:150px;">
                                                                            <input type="email" name="email"
                                                                                id=""
                                                                                style="width:150px;margin-left: 33px;"
                                                                                value="{{ $item['email'] }}">
                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 60px;margin-top: -12px;">
                                                                            <label for="password"
                                                                                class="for">Retype Password</label>
                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 60px;margin-top: -20px;">
                                                                            <input type="password" name="repassword"
                                                                                id="vrepassword" style="width:150px;">

                                                                        </div>


                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary"
                                                                    name="btnUpdateUser"
                                                                    style="background-color: #ff589e"
                                                                    value="yes">Update User</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-danger" data-toggle="modal"
                                                    data-target="#deleteUserModal{{ $item['userID'] }}">Delete</button>
                                                <div class="modal fade" id="deleteUserModal{{ $item['userID'] }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="deleteUserModalLabel{{ $item['userID'] }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form
                                                                action="{{ route('adminusers.destroy', ['adminuser' => $item['userID']]) }}"
                                                                method="POST">
                                                                @method('delete')
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <h5 class="modal-title"
                                                                        id="deleteUserModalLabel{{ $item['userID'] }}">
                                                                        Do
                                                                        you want to proceed deleting user ?</h5>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Yes, Proceed</button>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->



    <!-- ***** Footer Start ***** -->
    <footer style="background-color: #bfbfbf;margin-top: 20px;">
        <div class="container">
            <div class="row">
                <center>
                    <p class="copyright" style="color: black;">Copyright &copy; 2022</p>
                    {{-- <div class="col-lg-7 col-md-12 col-sm-12">
                        <p class="copyright" style="color: white;">Copyright &copy; 2022
                    </div> --}}
                </center>
                {{-- <div class="col-lg-5 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </footer>
    @if (session()->pull('successLogin'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Login',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successLogin') }}
    @endif

    <div class="modal fade" id="logOutModal" tabindex="-1" role="dialog" aria-labelledby="logOutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/logout" method="GET">
                    <div class="modal-body">
                        <h5 class="modal-title" id="logOutModalLabel">Do you want to proceed logging out ?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Yes, Proceed</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 450px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="signUpModalLabel">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="/signup" method="POST" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group" style="margin-left: 60px;">
                                <label for="Username" class="for">Username<span style="color:red">*</span></label>
                                <label for="Firstname" class="for" style="margin-left: 106px;">First Name<span
                                        style="color:red">*</span></label>
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -20px;">
                                <input required type="text" name="username" id="" style="width:150px;">
                                <input required type="text" name="firstname" id=""
                                    style="width:150px;margin-left: 33px;">
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -12px;">
                                <label for="Middlename" class="for">Middle Name<span
                                        style="color:red">*</span></label>
                                <label for="Lastname" class="for" style="margin-left: 83px;">Last Name<span
                                        style="color:red">*</span></label>
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -20px;">
                                <input required type="text" name="middlename" id=""
                                    style="width:150px;">
                                <input required type="text" name="lastname" id=""
                                    style="width:150px;margin-left: 33px;">
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -12px;">
                                <label for="lrn" class="for">LRN</label>
                                <label for="Track" class="for" style="margin-left: 153px;">Track<span
                                        style="color:red">*</span></label>
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -20px;">
                                <input type="text" name="lrn" id="" style="width:150px;">
                                <select name="track" id="civilstat" style="width:150px;margin-left: 33px;">
                                    <option value="ABM" selected>ABM</option>
                                    <option value="GAS">GAS</option>
                                    <option value="HUMSS">HUMSS</option>
                                    <option value="STEM">STEM</option>
                                    <option value="TVL">TVL
                                    </option>
                                </select>
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -12px;">
                                <label for="password" class="for">Password<span style="color:red">*</span></label>
                                <label for="Email" class="for" style="margin-left: 107px;">Email<span
                                        style="color:red">*</span></label>
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -20px;">
                                <input required type="password" name="password" id="password" style="width:150px;">
                                <input type="email" name="email" id=""
                                    style="width:150px;margin-left: 33px;">
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -12px;">
                                <label for="password" class="for">Retype Password<span
                                        style="color:red">*</span></label>
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -20px;">
                                <input required type="password" name="repassword" id="repassword"
                                    style="width:150px;">
                            </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="btnSignup"
                        style="background-color: #ff589e" value="admin">Add User</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @if (session()->pull('successUpdateUser'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Updated User',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successUpdateUser') }}
    @endif
    @if (session()->pull('successDeleteUser'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted User',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successDeleteUser') }}
    @endif
    @if (session()->pull('successCreate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added User',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successCreate') }}
    @endif
    @if (session()->pull('errorDeleteUser'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to delete user, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorDeleteUser') }}
    @endif
    @if (session()->pull('errorExistingUser'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'User exisited, Please Contact Your Administrator for possible resetting of password!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorExistingUser') }}
    @endif
    @if (session()->pull('errorUpdateUser'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to update user, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorUpdateUser') }}
    @endif
    @if (session()->pull('errorCreate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to add user, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorCreate') }}
    @endif
    @if (session()->pull('errorExistingSequence'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to add module, Existing Sequence, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorExistingSequence') }}
    @endif

    <!-- jQuery -->
    <script src="js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="js/owl-carousel.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="js/custom.js"></script>

</body>

</html>
