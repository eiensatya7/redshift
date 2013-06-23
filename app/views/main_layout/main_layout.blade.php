<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title> @yield('title') </title>
        <script type="text/javascript" src="js/vendor/jquery-1.9.1.js" ></script>
        <script type="text/javascript" src="js/vendor/jquery-ui-1.10.3.custom.min.js" ></script>
        <link href="css/vendor/jquery-ui-1.10.3.custom.css" rel="stylesheet" type="text/css" />
        <link href="css/main_layout/main_layout.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        @include('main_layout.main_header_layout')
        @include('main_layout.main_content_layout')
        @include('main_layout.main_footer_layout')
    </body>

</html>