<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>VideoWarrior.mobi | Dashboard</title>
            <!-- Tell the browser to be responsive to screen width -->
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <!-- Bootstrap 3.3.6 -->
            <link rel="stylesheet" href="/admin_panel/css/bootstrap.min.css">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="/admin_panel/plugins/font-awesome/css/font-awesome.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="/admin_panel/css/AdminLTE.min.css">
            <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
            <link rel="stylesheet" href="/admin_panel/css/skins/_all-skins.min.css">
            <!-- bootstrap wysihtml5 - text editor -->
            <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
            <!-- iCheck -->
            <link rel="stylesheet" href="/admin_panel/plugins/iCheck/square/blue.css">
            <!-- simplemde editor -->
            <link rel="stylesheet" href="/admin_panel/plugins/simplemde/simplemde.min.css">
            <link rel="stylesheet" href="/admin_panel/css/custom.css">      
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">       
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">

            
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>
    <body>

        <div id="app">
                @yield('content')
        </div>


        <!-- Scripts -->
        <!-- jQuery 2.2.3 -->
        <script src="/admin_panel/js/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="/admin_panel/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/admin_panel/js/app.min.js"></script>
        <!--  simplemde editor -->
        <script src="/admin_panel/plugins/simplemde/simplemde.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
        <script src=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

        @yield('script')
    </body>
</html>
