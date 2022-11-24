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

    <title>Admin Panel</title>
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
                            <li class="scroll-to-section"><a href="/" style="color:#f55858 !important;">Home</a>
                            </li>
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
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline"
                                        style="color:#f55858 !important;">Announcements</span>
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
                                        class="ms-1 d-none d-sm-inline">Users</span></a>
                            </li>
                            <li>
                                <a href="https://dashboard.tawk.to/?lang=en#/admin/637fbe0adaff0e1306d944cd/chat-widget" target="_blank"
                                    data-bs-toggle="collapse" class="nav-link px-0 align-middle "
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
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addModuleModal">Add
                                Announcement</button>
                        </div>
                        <br>
                        <div class="row" style="background: whitesmoke;" class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Card Picture
                                    </th>
                                    <th>
                                        Subtext
                                    </th>
                                    <th>
                                        Activated
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($announce as $an)
                                        <tr>
                                            <td>{{ $an['description'] }}</td>
                                            <td>{{ $an['card'] }}</td>
                                            <td>
                                                {{ strlen($an['subtext']) > 60 ? substr($an['subtext'], 0, 60) . '...' : $an['subtext'] }}
                                            </td>
                                            <td>
                                                @if ($an['activated'] == 0)
                                                    false
                                                @else
                                                    true
                                                @endif
                                            </td>
                                            <td>
                                                @if ($an['activated'] == 0)
                                                    <button class="btn btn-primary" data-toggle="modal"
                                                        data-target="#activateModal{{ $an['announceID'] }}"
                                                        style="font-size: 12px;">Activate</button>
                                                    <div class="modal fade" id="activateModal{{ $an['announceID'] }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="activateModalLabel{{ $an['announceID'] }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form
                                                                    action="{{ route('announcements.update', ['announcement' => $an['announceID']]) }}"
                                                                    method="POST">
                                                                    @method('put')
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <h5 class="modal-title"
                                                                            id="activateModalLabel{{ $an['announceID'] }}">
                                                                            Do
                                                                            you want to proceed activating this
                                                                            announcement
                                                                            ?</h5>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary"
                                                                            name="btnActivate" value="true">Yes,
                                                                            Proceed</button>
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <button class="btn btn-warning" style="font-size: 12px;"
                                                        data-toggle="modal"
                                                        data-target="#deactivateModal{{ $an['announceID'] }}">Deactivate</button>
                                                    <div class="modal fade"
                                                        id="deactivateModal{{ $an['announceID'] }}" tabindex="-1"
                                                        role="dialog"
                                                        aria-labelledby="deactivateModalLabel{{ $an['announceID'] }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form
                                                                    action="{{ route('announcements.update', ['announcement' => $an['announceID']]) }}"
                                                                    method="POST">
                                                                    @method('put')
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <h5 class="modal-title"
                                                                            id="deactivateModalLabel{{ $an['announceID'] }}">
                                                                            Do
                                                                            you want to proceed deactivating this
                                                                            announcement
                                                                            ?</h5>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary"
                                                                            name="btnDeactivate" value="true">Yes,
                                                                            Proceed</button>
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif

                                                <br>
                                                <button class="btn btn-success"
                                                    style="font-size: 12px;">View/Edit</button>
                                                <br>
                                                <button class="btn btn-danger" style="font-size: 12px;"
                                                    data-toggle="modal"
                                                    data-target="#deleteModal{{ $an['announceID'] }}">Delete</button>
                                                <div class="modal fade" id="deleteModal{{ $an['announceID'] }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="deleteModalLabel{{ $an['announceID'] }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form
                                                                action="{{ route('announcements.destroy', ['announcement' => $an['announceID']]) }}"
                                                                method="POST">
                                                                @method('delete')
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <h5 class="modal-title"
                                                                        id="deleteModalLabel{{ $an['announceID'] }}">
                                                                        Do
                                                                        you want to proceed deleting this
                                                                        announcement
                                                                        ?</h5>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary"
                                                                        name="btnDelete" value="true">Yes,
                                                                        Proceed</button>
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

    <div class="modal fade " id="addModuleModal" tabindex="-1" role="dialog"
        aria-labelledby="addModuleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModuleModalLabel">Add Announcement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="{{ route('announcements.store') }}" method="POST"
                            enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group" style="margin-left: 35px">
                                <label for="description" class="for"><b>Description</b></label>
                                <br>
                                <input required type="text" style="width:350px;" name="description"
                                    id="un">
                            </div>
                            <div class="form-group" style="margin-left: 35px">
                                <label for="emodule" class="emodule"><b>Card Picture</b></label>
                                <br>
                                <input required type="file" name="file" id=""
                                    accept=".jpg, .png, .jpeg">
                            </div>
                            <div class="form-group" style="margin-left: 35px">
                                <label for="subtext" class="for"><b>Subtext</b></label>
                                <br>
                                <input required type="text" name="subtext" style="width:350px;">
                            </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #ff589e" name="btnAdd"
                        value="true">Add
                        Announcement</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @if (session()->pull('successUpdateAnnounce'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Updated Announcement',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successUpdateAnnounce') }}
    @endif
    @if (session()->pull('successDeleteAnnounce'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted Announcement',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successDeleteAnnounce') }}
    @endif
    @if (session()->pull('successAddingAnnounce'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added Announcement Record',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successAddingAnnounce') }}
    @endif
    @if (session()->pull('errorDeleteAnnounce'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to delete announcement, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorDeleteAnnounce') }}
    @endif
    @if (session()->pull('errorUpdateAnnounce'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to update announcement, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorUpdateAnnounce') }}
    @endif
    @if (session()->pull('errorAddingAnnounce'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to add announcement, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorAddingAnnounce') }}
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
