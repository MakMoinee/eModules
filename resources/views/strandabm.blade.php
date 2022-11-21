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
                            <li class="scroll-to-section"><a href="/strands" style="color:#f55858 !important;">Academic
                                    Strands</a>
                            </li>
                            <li class="scroll-to-section"><a href="/profile">My Profile</a></li>
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
    <section class="section" id="about" style="background: #ff589e;">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark"
                    style="border-bottom-right-radius: 5px;border-top-right-radius: 5px;">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
                        <a href="/strands"
                            class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline"
                                style="margin-top: 20px;color:#f55858 !important;">Dashboard</span>
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
                                <a href="/notifications" class="nav-link px-0 align-middle" style="color:whitesmoke">
                                    <i class="fs-4 bi-table" style="color:whitesmoke"></i> <span
                                        class="ms-1 d-none d-sm-inline">Notifications</span></a>
                            </li>
                            <li>
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle "
                                    style="color:whitesmoke">
                                    <i class="fs-4 bi-bootstrap" style="color:whitesmoke"></i> <span
                                        class="ms-1 d-none d-sm-inline">Chat</span></a>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown pb-4">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none"
                                id="dropdownUser1" aria-expanded="false">
                                <img src="/images/user.png" alt="hugenerd" width="30" height="30"
                                    class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">{{ $user }}</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="header-text">
                        <div class="container">
                            <div class="row">
                                @if ($track == 'ABM')
                                    <center>
                                        <h4 style="margin-left: 220px;">ACCOUNTANCY, BUSINESS AND MANAGEMENT</h4>
                                        <br>
                                        <nav class="navbar navbar-expand-lg navbar-light bg-light"
                                            style="margin-left: 220px; border-bottom-left-radius: 5px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;">
                                            <div class="collapse navbar-collapse" id="navbarNav">
                                                <ul class="navbar-nav">
                                                    @if ($category == 'CORE')
                                                        <li class="nav-item active">
                                                            <a class="nav-link" href="/abm?category=CORE"><b>CORE</b>
                                                            </a>
                                                        </li>
                                                    @else
                                                        <li class="nav-item ">
                                                            <a class="nav-link" href="/abm?category=CORE">CORE
                                                            </a>
                                                        </li>
                                                    @endif
                                                    @if ($category == 'APPLIED')
                                                        <li class="nav-item active">
                                                            <a class="nav-link"
                                                                href="/abm?category=APPLIED"><b>APPLIED</b>
                                                            </a>
                                                        </li>
                                                    @else
                                                        <li class="nav-item ">
                                                            <a class="nav-link" href="/abm?category=APPLIED">APPLIED
                                                            </a>
                                                        </li>
                                                    @endif
                                                    @if ($category == 'SPECIALIZED')
                                                        <li class="nav-item active">
                                                            <a class="nav-link"
                                                                href="/abm?category=SPECIALIZED"><b>SPECIALIZED ABM</b>
                                                            </a>
                                                        </li>
                                                    @else
                                                        <li class="nav-item ">
                                                            <a class="nav-link"
                                                                href="/abm?category=SPECIALIZED">SPECIALIZED ABM
                                                            </a>
                                                        </li>
                                                    @endif
                                                </ul>


                                            </div>
                                        </nav>
                                    </center>
                                @endif

                                @if ($track == 'HUMSS')
                                    <center>
                                        <h4 style="margin-left: 220px;">HUMANITIES & SOCIAL SCIENCES</h4>
                                        <nav class="navbar navbar-expand-lg navbar-light bg-light"
                                            style="margin-left: 220px; border-bottom-left-radius: 5px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;">
                                            <div class="collapse navbar-collapse" id="navbarNav">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="#">CORE <span
                                                                class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">APPLIED</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">SPECIALIZED HUMSS</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </center>
                                @endif
                            </div>
                            <br>
                            <div class="row table-responsive-md" style="background: whitesmoke;">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <th>
                                            Subject
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($trackRes as $tr)
                                            <tr>
                                                <td>{{ $tr['description'] }}
                                                    <button style="float: right;" class="btn btn-btn-primary"
                                                        data-toggle="modal"
                                                        data-target="#viewModal{{ $tr['trackID'] }}">...</button>
                                                    <div class="modal fade" id="viewModal{{ $tr['trackID'] }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="viewModalLabel{{ $tr['trackID'] }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <center>
                                                                        <h5 class="modal-title"
                                                                            id="viewModalLabel{{ $tr['trackID'] }}">
                                                                            {{ $tr['description'] }}
                                                                        </h5>
                                                                    </center>
                                                                </div>
                                                                <form action="#" method="GET">
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="No. Of Hours"
                                                                                class="for">No. Of Hours:</label>
                                                                            <br>
                                                                            <input required type="number"
                                                                                name="hours" id=""
                                                                                value="{{ $tr['hours'] }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="prerequisite"
                                                                                class="for">Pre-requisite:</label>
                                                                            <br>
                                                                            <input type="text" name="prerequisite"
                                                                                id=""
                                                                                value="{{ $tr['prerequisite'] }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="emodules" class="for">E
                                                                                Modules:</label>
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    @foreach ($moduleHelper as $mh)
                                                                                        @if ($mh['trackID'] == $tr['trackID'])
                                                                                            @if ($mh['isAvailable'])
                                                                                                @foreach ($emodules as $em)
                                                                                                    <ul>
                                                                                                        @if ($em['trackID'] == $mh['trackID'])
                                                                                                            <li><a href="/storage/emodules/{{ $em['filePath'] }}"
                                                                                                                    target="_blank">{{ $em['description'] }}</a>
                                                                                                            </li>
                                                                                                        @endif
                                                                                                    </ul>
                                                                                                @endforeach
                                                                                            @else
                                                                                                There are no available e
                                                                                                modules.
                                                                                            @endif
                                                                                        @endif
                                                                                    @endforeach

                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        {{-- <button type="submit"
                                                                            class="btn btn-primary">Yes,
                                                                            Proceed</button> --}}
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- 
                                                <td>
                                                    {{ $tr['hours'] }}
                                                </td>
                                                <td>
                                                    {{ $tr['prerequisite'] }}
                                                </td>
                                                <td>
                                                    {{ $tr['status'] }}
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ***** Welcome Area End ***** -->


    <!-- ***** Footer Start ***** -->
    <footer style="background-color: #bfbfbf;">
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

</body>

</html>
