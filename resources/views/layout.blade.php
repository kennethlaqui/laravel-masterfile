<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ url('js/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ url('js/font-awesome/css/font-awesome.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ url('css/fontastic.css') }}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ url('css/grasp_mobile_progress_circle-1.0.0.min.css') }}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ url('js/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ url('css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ url('css/custom.css') }}">
    <!-- Favicon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!-- <link rel="shortcut icon" href="img/favicon.ico"> -->
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>

    <div class="container">
        @yield('content')
    </div>

    <!-- JavaScript files-->
    <script src="{{ url('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('js/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ url('js/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
    <script src="{{ url('js/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ url('js/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url('js/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ url('js/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<<<<<<< HEAD
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
=======
    <script>
    $('#empl_tbl').DataTable({
        "scrollY": 200,
        "scrollX": true
>>>>>>> 1ec2c393cf0cd750ea01967aef284f34d4a369c6

    <!-- Main File-->
    <script src="{{ url('js/front.js') }}"></script>
    <script src="{{ url('js/custom.js') }}"></script>

<script type="text/javascript">
    $(function(){
        $('#toggle-btn').trigger('click');
    });
<<<<<<< HEAD
</script>


=======
    </script>
    <script src="{{ url('js/custom.js') }}"></script>
>>>>>>> 1ec2c393cf0cd750ea01967aef284f34d4a369c6
</body>

</html>
