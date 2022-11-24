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

    <title>E Modules</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/owl-carousel.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
</head>

<body style="background-color: #ff589e">

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
    <header class="header-area header-sticky">
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
                            <li class="scroll-to-section"><a href="/about">About</a></li>
                            <li class="scroll-to-section"><a href="/strands">Academic Strands</a></li>
                            <li class="scroll-to-section"><a href="/profile" style="color:#f55858 !important;">My
                                    Profile</a></li>
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
    <div class="container">
        <div class="row">
            <div class="mdiv-left" style="width: 30%; height: 500px; margin-top: 120px;  background-color: #d5d5d5">
                <center>
                    <img style="margin-top: 20px;" src="/images/user.png" alt="" srcset=""
                        width="200px" height="200px">
                    <br>
                    <br>
                    {{-- <a href="#">Edit Avatar</a> --}}
                    <br>
                    <h4>{{ $user['lastname'] }}, {{ $user['firstname'] }} {{ $user['middlename'] }}</h4>
                </center>
            </div>
            <div class="mdiv-right" style="width:70%;height: 500px;margin-top: 120px; background-color: white">
                <h1 style="margin-top: 30px;margin-left: 20px;">Hi {{ $user['firstname'] }}</h1>

                <form action="/profile" method="post" style="margin-top: 30px;margin-left: 20px;" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="First Name" class="for">First Name</label>
                        <label for="Middle Name" class="for" style="margin-left: 150px;">Middle Name</label>
                        <label for="Last Name" class="for" style="margin-left: 150px;">Last Name</label>
                        <br>
                        <input required type="text" name="firstname" id="" class="form-group"
                            value="{{ $user['firstname'] }}">
                        <input required type="text" name="middlename" id="" class="form-group"
                            style="margin-left: 39px;" value="{{ $user['middlename'] }}">
                        <input required type="text" name="lastname" id="" class="form-group"
                            style="margin-left: 55px;" value="{{ $user['lastname'] }}">
                    </div>
                    <div class="form-group">
                        <label required for="Email" class="for">Email</label>
                        <br>
                        <input required type="email" name="email" id="" value="{{ $user['email'] }}">
                    </div>
                    <div class="form-group">
                        <label for="password" class="for">Password</label>
                        <label for="repassword" class="for" style="margin-left: 160px;">Confirm Password</label>
                        <br>
                        <input disabled readonly type="password" name="password" id="password"
                            value="{{ $user['password'] }}" style="cursor: no-drop;">
                        <input required type="password" name="repassword" id="repassword"
                            style="margin-left: 39px;">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="uid" value="{{ $user['userID'] }}">
                        <button type="submit" class="btn btn-primary" style="background-color: #f55858"
                            name="btnUpdate" value="true">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ***** Welcome Area End ***** -->




    <!-- ***** Footer Start ***** -->
    <footer style="background-color: #bfbfbf; height:100%;">
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
    @if (session()->pull('successUpdate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Updated Profile',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successUpdate') }}
    @endif

    @if (session()->pull('errorUpdate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed To Update Profile',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorUpdate') }}
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

    <div class="modal fade " id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="/login" method="POST" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <center>
                                <div class="form-group">
                                    <input required type="text" style="width:350px;margin-left: 50px;"
                                        name="username" id="un" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input required type="password" style="width:350px;margin-left: 50px;"
                                        name="password" id="pw" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input style="margin-left: -170px;" type="checkbox" name="remember"
                                        id="remember" placeholder="remember">
                                    <label for="remember" class="remember">Remember me</label>

                                </div>
                            </center>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #ff589e">Login</button>
                </div>
                </form>
            </div>
        </div>
    </div>
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
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("repassword");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>


<script src="https://js.pusher.com/7.2.0/pusher.min.js"></script>
    <script src="js/push.js"></script>
</body>

</html>
