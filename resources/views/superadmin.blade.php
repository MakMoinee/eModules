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

    <title>Super Admin Panel</title>
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

    <section class="section" id="about" style="margin-bottom: 80px;">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col py-3">
                    <!-- Content Here --->
                    <div class="container">
                        <div class="row">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#chooseRoleModal">Add
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
                                        First Name
                                    </th>
                                    <th>
                                        Middle Name
                                    </th>
                                    <th>
                                        Last Name
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
                                        User Date Created
                                    </th>
                                    <th>
                                        User Date Last Updated
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($eusers as $item)
                                        <tr>
                                            <td>{{ $item['username'] }}</td>
                                            <td>{{ $item['firstname'] }}</td>
                                            <td>{{ $item['middlename'] }}</td>
                                            <td>{{ $item['lastname'] }}</td>
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
                                                {{ $item['created_at'] }}
                                            </td>
                                            <td>
                                                {{ $item['updated_at'] }}
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
                                                                        action="{{ route('superadmin.update', ['superadmin' => $item['userID']]) }}"
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
                                                                        @if ($item['userType'] == 1)
                                                                        @else
                                                                            <div class="form-group"
                                                                                style="margin-left: 60px;margin-top: -12px;">
                                                                                <label for="lrn"
                                                                                    class="for">LRN</label>
                                                                                <label for="Track" class="for"
                                                                                    style="margin-left: 153px;">Track</label>
                                                                            </div>
                                                                        @endif

                                                                        @if ($item['userType'] == 1)
                                                                        @else
                                                                            <div class="form-group"
                                                                                style="margin-left: 60px;margin-top: -20px;">
                                                                                <input type="text" name="lrn"
                                                                                    id=""
                                                                                    style="width:150px;"
                                                                                    value="{{ $item['lrn'] }}">
                                                                                <select name="track" id="civilstat"
                                                                                    style="width:150px;margin-left: 33px;">
                                                                                    @if ($item['track'] == 'ABM')
                                                                                        <option value="ABM"
                                                                                            selected>ABM
                                                                                        </option>
                                                                                    @else
                                                                                        <option value="ABM">ABM
                                                                                        </option>
                                                                                    @endif

                                                                                    @if ($item['track'] == 'GAS')
                                                                                        <option value="GAS"
                                                                                            selected>GAS
                                                                                        </option>
                                                                                    @else
                                                                                        <option value="GAS">GAS
                                                                                        </option>
                                                                                    @endif

                                                                                    @if ($item['track'] == 'HUMSS')
                                                                                        <option value="HUMSS"
                                                                                            selected>
                                                                                            HUMSS
                                                                                        </option>
                                                                                    @else
                                                                                        <option value="HUMSS">HUMSS
                                                                                        </option>
                                                                                    @endif

                                                                                    @if ($item['track'] == 'STEM')
                                                                                        <option value="STEM"
                                                                                            selected>
                                                                                            STEM
                                                                                        </option>
                                                                                    @else
                                                                                        <option value="STEM">STEM
                                                                                        </option>
                                                                                    @endif

                                                                                    @if ($item['track'] == 'TVL')
                                                                                        <option value="TVL"
                                                                                            selected>
                                                                                            TVL
                                                                                        </option>
                                                                                    @else
                                                                                        <option value="TVL">TVL
                                                                                        </option>
                                                                                    @endif
                                                                                </select>

                                                                            </div>
                                                                        @endif

                                                                        <div class="form-group"
                                                                            style="margin-left: 60px;margin-top: -12px;">
                                                                            <label for="password"
                                                                                class="for">Password</label>
                                                                            @if ($item['userType'] == 1)
                                                                            @else
                                                                                <label for="Email" class="for"
                                                                                    style="margin-left: 111px;">Email</label>
                                                                            @endif

                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 60px;margin-top: -20px;">
                                                                            <input type="password" name="password"
                                                                                id="vpassword" style="width:150px;">
                                                                            @if ($item['userType'] == 1)
                                                                            @else
                                                                                <input type="email" name="email"
                                                                                    id=""
                                                                                    style="width:150px;margin-left: 33px;"
                                                                                    value="{{ $item['email'] }}">
                                                                            @endif


                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 60px;margin-top: -12px;">
                                                                            <label for="password"
                                                                                class="for">Retype Password</label>
                                                                            <label for="userrole" class="for"
                                                                                style="margin-left: 59px;">User
                                                                                Role<span
                                                                                    style="color:red">*</span></label>
                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 60px;margin-top: -20px;">
                                                                            <input type="password" name="repassword"
                                                                                id="vrepassword" style="width:150px;">
                                                                            <select name="userrole" id="userrole"
                                                                                style="width:150px;margin-left: 33px;">
                                                                                @if ($item['userType'] == 1)
                                                                                    <option value="1" selected>
                                                                                        Admin
                                                                                    </option>
                                                                                @else
                                                                                    <option value="1" disabled>
                                                                                        Admin
                                                                                    </option>
                                                                                @endif
                                                                                @if ($item['userType'] == 2)
                                                                                    <option value="2" selected>
                                                                                        User</option>
                                                                                @else
                                                                                    <option value="2" disabled>
                                                                                        User
                                                                                    </option>
                                                                                @endif

                                                                            </select>
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
                                                                action="{{ route('superadmin.destroy', ['superadmin' => $item['userID']]) }}"
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

    <div>
        <button class="btn" style="visibility: hidden" data-toggle="modal" data-target="#signUpModal"
            id="btnSignUpShow"></button>
        <button class="btn" style="visibility: hidden" data-toggle="modal" data-target="#signUpAdminModal"
            id="btnSignUpAdminShow"></button>
    </div>

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

    <div class="modal fade" id="chooseRoleModal" tabindex="-1" role="dialog"
        aria-labelledby="chooseRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 450px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="chooseRoleModalLabel">Choose Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="form-group" style="margin-left: 60px;margin-top: -20px;">
                            <br>
                            <select name="userrole" id="achooserole" style="width:150px;margin-left: 33px;">
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" name="btnSignUpSuper"
                        style="background-color: #ff589e" value="yes" data-dismiss="modal"
                        onclick="chooseRole()">Choose Role</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="signUpAdminModal" tabindex="-1" role="dialog"
        aria-labelledby="signUpAdminModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 450px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="signUpAdminModalLabel">Add Admin</h5>
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
                                <label for="password" class="for">Password<span style="color:red">*</span></label>
                                <label for="password" class="for" style="margin-left: 107px;">Retype Password<span
                                        style="color:red">*</span></label>
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -20px;">
                                <input required type="password" name="password" id="apassword" style="width:150px;">
                                <input required type="password" name="repassword" id="arepassword"
                                    style="width:150px;margin-left: 32px;">
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -20px;">
                                <input type="hidden" name="userrole" id="auserrole">
                            </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="btnSignUpSuper"
                        style="background-color: #ff589e" value="yes">Add Admin</button>
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
                                <label for="Track" class="for" style="margin-left: 153px;">Track</label>
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
                                <label for="Email" class="for" style="margin-left: 107px;">Email</label>
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -20px;">
                                <input required type="password" name="password" id="apassword" style="width:150px;">
                                <input type="email" name="email" id=""
                                    style="width:150px;margin-left: 33px;">
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -12px;">
                                <label for="password" class="for">Retype Password<span
                                        style="color:red">*</span></label>
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -20px;">
                                <input required type="password" name="repassword" id="arepassword"
                                    style="width:150px;">
                                <input type="hidden" name="userrole" id="auserrole">
                            </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="btnSignUpSuper"
                        style="background-color: #ff589e" value="yes">Add User</button>
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
    <script>
        var password = document.getElementById("apassword"),
            confirm_password = document.getElementById("arepassword");

        function validatePassword1() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword1;
        confirm_password.onkeyup = validatePassword1;

        var password2 = document.getElementById("vpassword"),
            confirm_password2 = document.getElementById("vrepassword");

        function validatePassword2() {
            if (password2.value != confirm_password2.value) {
                confirm_password2.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password2.setCustomValidity('');
            }
        }

        password2.onchange = validatePassword2;
        confirm_password2.onkeyup = validatePassword2;

        function chooseRole() {
            let chooserole = document.getElementById('achooserole');
            let userrole = document.getElementById('auserrole');
            userrole.setAttribute("value", chooserole.value);

            if (chooserole.value == 2) {
                let btnSignUpShow = document.getElementById('btnSignUpShow');
                btnSignUpShow.click();
            } else if (chooserole.value == 1) {
                let btnSignUpAdminShow = document.getElementById('btnSignUpAdminShow');
                btnSignUpAdminShow.click();
            }
        }
    </script>
</body>

</html>
