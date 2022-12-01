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
                                <a href="https://dashboard.tawk.to/?lang=en#/admin/637fbe0adaff0e1306d944cd/chat-widget" target="_blank" data-bs-toggle="collapse" class="nav-link px-0 align-middle "
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
                                Subject</button>
                        </div>
                        <br>
                        <div class="row" style="background: whitesmoke;" class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>
                                        Subject
                                    </th>
                                    <th>
                                        Strand
                                    </th>
                                    <th>
                                        Category
                                    </th>
                                    <th>
                                        Sequence
                                    </th>
                                    <th>
                                        No. of Hours
                                    </th>
                                    <th>
                                        Pre-requisite
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        E-Modules
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($modules as $mod)
                                        <tr>
                                            <td>
                                                {{ $mod['SubjectName'] }}
                                            </td>
                                            <td>
                                                {{ $mod['Strand'] }}
                                            </td>
                                            <td>
                                                {{ $mod['category'] }}
                                            </td>
                                            <td>
                                                {{ $mod['sequence'] }}
                                            </td>
                                            <td>
                                                {{ $mod['hours'] }}
                                            </td>
                                            <td>
                                                {{ $mod['prerequisite'] }}
                                            </td>
                                            <td>
                                                {{ $mod['status'] }}
                                            </td>
                                            <td>
                                                <form
                                                    action="{{ route('modules.show', ['module' => $mod['trackID']]) }}"
                                                    method="POST">
                                                    @method('get')
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="hidden" name="title"
                                                            value="{{ $mod['SubjectName'] }}">
                                                        <button type="submit" class="btn btn-success fs-6"
                                                            style="font-size: 12px;width: 80px;">View Modules</button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td>
                                                <button class="btn btn-success fs-6"
                                                    style="font-size: 12px;width: 80px;" data-toggle="modal"
                                                    data-target="#viewModuleModal{{ $mod['trackID'] }}">View/Edit</button>
                                                <div class="modal fade " id="viewModuleModal{{ $mod['trackID'] }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="viewModuleModalLabel{{ $mod['trackID'] }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="viewModuleModalLabel{{ $mod['trackID'] }}">
                                                                    View/Edit
                                                                    Subject</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <form action="/adminstrands" method="POST"
                                                                        enctype="multipart/form-data"
                                                                        autocomplete="off">
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <input required type="text"
                                                                                style="width:350px;margin-left: 35px;"
                                                                                name="description" id="un"
                                                                                placeholder="Subject Description"
                                                                                value="{{ $mod['SubjectName'] }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select readonly name="strand"
                                                                                id="strand"
                                                                                style="width:150px;margin-left: 35px;">
                                                                                @foreach ($availableStrands as $as)
                                                                                    @if ($as['description'] == $mod['Strand'])
                                                                                        <option
                                                                                            value={{ $as['strandID'] }}
                                                                                            selected>
                                                                                            {{ $as['description'] }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value={{ $as['strandID'] }}
                                                                                            disabled>
                                                                                            {{ $as['description'] }}
                                                                                        </option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="category" id="category"
                                                                                style="width:150px;margin-left: 35px;">
                                                                                @if ($mod['category'] == 'CORE')
                                                                                    <option value="CORE" selected>
                                                                                        CORE
                                                                                    </option>
                                                                                    <option value="APPLIED" disabled>
                                                                                        APPLIED
                                                                                    </option>
                                                                                    <option value="SPECIALIZED"
                                                                                        disabled>
                                                                                        SPECIALIZED
                                                                                    </option>
                                                                                @endif

                                                                                @if ($mod['category'] == 'APPLIED')
                                                                                    <option value="CORE" disabled>
                                                                                        CORE
                                                                                    </option>
                                                                                    <option value="APPLIED" selected>
                                                                                        APPLIED
                                                                                    </option>
                                                                                    <option value="SPECIALIZED"
                                                                                        disabled>
                                                                                        SPECIALIZED
                                                                                    </option>
                                                                                @endif

                                                                                @if ($mod['category'] == 'SPECIALIZED')
                                                                                    <option value="CORE" disabled>
                                                                                        CORE
                                                                                    </option>
                                                                                    <option value="APPLIED" disabled>
                                                                                        APPLIED
                                                                                    </option>
                                                                                    <option value="SPECIALIZED"
                                                                                        selected>
                                                                                        SPECIALIZED
                                                                                    </option>
                                                                                @endif

                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 35px;">
                                                                            <input readonly type="number"
                                                                                style="cursor: not-allowed;"
                                                                                name="sequence" id=""
                                                                                placeholder="Sequence Number"
                                                                                value="{{ $mod['sequence'] }}">
                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 35px;">
                                                                            <input type="number" name="hours"
                                                                                id=""
                                                                                placeholder="No. Of Hours"
                                                                                value="{{ $mod['hours'] }}">
                                                                            <input type="text" name="prerequisite"
                                                                                id=""
                                                                                placeholder="Pre-requisite"
                                                                                value="{{ $mod['prerequisite'] }}">
                                                                        </div>
                                                                        <div class="form-group"
                                                                            style="margin-left: 35px">
                                                                            <label for="emodule" class="emodule"><b>E
                                                                                    Module Docs</b></label>
                                                                            <br>
                                                                            <input type="file" name="file"
                                                                                id="">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="hidden" name="trackID"
                                                                                value="{{ $mod['trackID'] }}">
                                                                        </div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary"
                                                                    style="background-color: #ff589e" name="btnUpdate"
                                                                    value="true">Update
                                                                    Module</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-danger fs-6"
                                                    style="font-size: 12px;width: 80px;"data-toggle="modal"
                                                    data-target="#deleteModal{{ $mod['trackID'] }}">Delete</button>
                                                <div class="modal fade" id="deleteModal{{ $mod['trackID'] }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="deleteModalLabel{{ $mod['trackID'] }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form
                                                                action="{{ route('adminstrands.destroy', ['adminstrand' => $mod['trackID']]) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @method('delete')
                                                                @csrf
                                                                <div class="form-group">
                                                                    <input type="hidden" name="trackID"
                                                                        value="{{ $mod['trackID'] }}">
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5 class="modal-title"
                                                                        id="deleteModalLabel{{ $mod['trackID'] }}">
                                                                        Do you want to
                                                                        proceed Deleting Subject ?</h5>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Yes,
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
                    <h5 class="modal-title" id="addModuleModalLabel">Add Subject</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="/adminstrands" method="POST" enctype="multipart/form-data"
                            autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <input required type="text" style="width:350px;margin-left: 35px;"
                                    name="description" id="un" placeholder="Subject Description">
                            </div>
                            <div class="form-group">
                                <select name="strand" id="strand" style="width:150px;margin-left: 35px;">
                                    @foreach ($availableStrands as $as)
                                        <option value={{ $as['strandID'] }}>{{ $as['description'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="category" id="category" style="width:150px;margin-left: 35px;">
                                    <option value="CORE" selected>CORE</option>
                                    <option value="APPLIED">APPLIED</option>
                                    <option value="SPECIALIZED">SPECIALIZED</option>
                                    </option>
                                </select>
                            </div>
                            <div class="form-group" style="margin-left: 35px;">
                                <input required type="number" name="sequence" id=""
                                    placeholder="Sequence Number">
                            </div>
                            <div class="form-group" style="margin-left: 35px;">
                                <input type="number" name="hours" id="" placeholder="No. Of Hours">
                                <input type="text" name="prerequisite" id=""
                                    placeholder="Pre-requisite">
                            </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #ff589e" name="btnAdd"
                        value="true">Add
                        Module</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @if (session()->pull('successUpdatingModule'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Updated Subject',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successUpdatingModule') }}
    @endif
    @if (session()->pull('successDeletingModule'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted Subject',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successDeletingModule') }}
    @endif
    @if (session()->pull('successAddingModule'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added Subject',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successAddingModule') }}
    @endif
    @if (session()->pull('errorDeletingModule'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to delete subject, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorDeletingModule') }}
    @endif
    @if (session()->pull('errorUpdatingModule'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to update subject, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorUpdatingModule') }}
    @endif
    @if (session()->pull('errorAddingModule'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to add subject, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorAddingModule') }}
    @endif
    @if (session()->pull('errorExistingSequence'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to add subject, Existing Sequence, Please Try Again!',
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
