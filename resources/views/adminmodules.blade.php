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
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/owl-carousel.css">
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
                                    <i class="fs-4 bi-house"></i> <span
                                        class="ms-1 d-none d-sm-inline">Announcements</span>
                                </a>
                            </li>
                            <li>
                                <a href="/adminstrands" class="nav-link px-0 align-middle" style="color:whitesmoke">
                                    <i class="fs-4 bi-table" style="color:whitesmoke"></i> <span
                                        class="ms-1 d-none d-sm-inline" style="color:#f55858 !important;">Academic
                                        Strands</span></a>
                            </li>
                            <li>
                                <a href="/adminusers" class="nav-link px-0 align-middle" style="color:whitesmoke">
                                    <i class="fs-4 bi-table" style="color:whitesmoke"></i> <span
                                        class="ms-1 d-none d-sm-inline">Users</span></a>
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
                            <h2>{{ $title }}</h2>
                        </div>
                        <br>
                        <div class="row">
                            <a href="/adminstrands" class="btn btn-success" style="margin-right: 10px;">Go Back</a>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addModuleModal">Add
                                E-Module</button>
                        </div>
                        <br>
                        <div class="row" style="background: whitesmoke;" class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>
                                        E Module ID
                                    </th>
                                    <th>
                                        E Module Description
                                    </th>
                                    <th>
                                        Sequence
                                    </th>
                                    <th>
                                        E Module File
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($emodules as $e)
                                        <tr>
                                            <td>
                                                {{ $e['moduleID'] }}
                                            </td>
                                            <td>
                                                {{ $e['description'] }}
                                            </td>
                                            <td>
                                                {{ $e['sequence'] }}
                                            </td>
                                            <td>
                                                {{ $e['filePath'] }}
                                            </td>
                                            <td>
                                                <button class="btn btn-success" data-toggle="modal"
                                                    data-target="#viewModuleModal{{ $e['moduleID'] }}">View/Edit</button>
                                                <div class="modal fade " id="viewModuleModal{{ $e['moduleID'] }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="viewModuleModalLabel{{ $e['moduleID'] }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="viewModuleModalLabel{{ $e['moduleID'] }}">
                                                                    View/Edit
                                                                    E-Module</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <form
                                                                        action="{{ route('modules.update', ['module' => $e['moduleID']]) }}"
                                                                        method="POST" enctype="multipart/form-data"
                                                                        autocomplete="off">
                                                                        @method('put')
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <input required type="text"
                                                                                style="width:350px;margin-left: 35px;"
                                                                                name="description" id="un"
                                                                                placeholder="E Module Description"
                                                                                value="{{ $e['description'] }}">
                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 35px;">
                                                                            <input required type="number"
                                                                                name="sequence" id=""
                                                                                placeholder="Sequence Number"
                                                                                value="{{ $e['sequence'] }}">
                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 35px">
                                                                            <label for="emodule" class="emodule"><b>E
                                                                                    Module Docs</b></label>
                                                                            <br>
                                                                            <input type="file" name="files"
                                                                                id=""
                                                                                accept=".pdf, .docx, .xlsx">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="hidden" name="tid"
                                                                                value="{{ $id }}">
                                                                            <input type="hidden" name="formType"
                                                                                value="upload">
                                                                        </div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary"
                                                                    style="background-color: #ff589e" name="btnUpdate"
                                                                    value="{{ $e['moduleID'] }}">Update
                                                                    E-Module</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-danger" data-toggle="modal"
                                                    data-target="#deleteModuleModal{{ $e['moduleID'] }}">Delete</button>
                                                <div class="modal fade" id="deleteModuleModal{{ $e['moduleID'] }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="deleteModuleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form
                                                                action="{{ route('modules.destroy', ['module' => $e['moduleID']]) }}"
                                                                method="POST">
                                                                @method('delete')
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <h5 class="modal-title"
                                                                        id="deleteModuleModalLabel{{ $e['moduleID'] }}">
                                                                        Do
                                                                        you want to delete this e module record ?</h5>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary"
                                                                        name="btnDelete"
                                                                        value="{{ $id }}">Yes,
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
                    <h5 class="modal-title" id="addModuleModalLabel">Add E-Module</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="{{ route('modules.store') }}?id={{ $id }}" method="POST"
                            enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <input required type="text" style="width:350px;margin-left: 35px;"
                                    name="description" id="un" placeholder="E Module Description">
                            </div>
                            <div class="form-group" style="margin-left: 35px;">
                                <input required type="number" name="sequence" id=""
                                    placeholder="Sequence Number">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="tid" value="{{ $id }}">
                                <input type="hidden" name="formType" value="upload">
                                <input type="hidden" name="title" value="{{ $title }}">
                            </div>
                            <div class="form-group" style="margin-left: 35px">
                                <label for="emodule" class="emodule"><b>E
                                        Module Docs</b></label>
                                <br>
                                <input type="file" name="files" id=""
                                    accept=".pdf, .docx, .xlsx, .pptx">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #ff589e" name="btnAdd"
                        value="true">Add E-Module</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @if (session()->pull('successUpdateEModule'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Updated E Module',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successUpdateEModule') }}
    @endif
    @if (session()->pull('successDeleteModule'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted E Module',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successDeleteModule') }}
    @endif
    @if (session()->pull('successAddEModule'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added E Module',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successAddEModule') }}
    @endif
    @if (session()->pull('errorMimeTypeNotValid'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'File not valid, Please try valid file',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorMimeTypeNotValid') }}
    @endif
    @if (session()->pull('errorDeleteModule'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to delete e module, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorDeleteModule') }}
    @endif
    @if (session()->pull('errorUpdateEModule'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to update e module, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorUpdateEModule') }}
    @endif
    @if (session()->pull('errorAddEModule'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to add e module, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorAddEModule') }}
    @endif
    @if (session()->pull('errorFileNotValid'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'File Not Valid, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorFileNotValid') }}
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
    <script src="../js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../js/owl-carousel.js"></script>
    <script src="../js/scrollreveal.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="../js/custom.js"></script>
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const errParam = urlParams.get('err');
        if (errParam == 1) {
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to add e module, File Too Large',
                    showConfirmButton: false,
                    timer: 1300
                });
                window.history.pushState({}, document.title, window.location.pathname);
            }, 1500);
        }
    </script>

</body>

</html>
