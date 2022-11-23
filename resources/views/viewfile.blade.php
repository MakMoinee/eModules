<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/storage/images/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E Modules</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/owl-carousel.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    {{-- <iframe src="https://docs.google.com/gview?url=http://localhost:8443/storage/emodules/{{ $mfile }}&embedded=true"
        style="width:600px; height:500px;" frameborder="0"></iframe> --}}
        {{-- <embed src="/storage/emodules/{{ $mfile }}" type="application/pdf"   height="700px" width="500"> --}}
    <iframe src="/storage/emodules/{{ $mfile }}" frameborder="0" width="100%" height="900px"></iframe>
</body>

</html>
