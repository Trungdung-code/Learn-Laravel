<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Blog Home</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/paper-kit.css?v=2.1.0" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/nucleo-icons.css" rel="stylesheet">

</head>

<body>
    @include('layout.nav')
    <div class="main">
        @yield('main')
    </div>
    </div>

    @include('layout.footer')
</body>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#mytextarea'
    });
</script>
<!-- Core JS Files -->
<script src="{{ asset('assets') }}/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/popper.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Switches -->
<script src="{{ asset('assets') }}/js/bootstrap-switch.min.js"></script>

<!--  Plugins for Slider -->
<script src="{{ asset('assets') }}/js/nouislider.js"></script>

<!--  Photoswipe files -->
<script src="{{ asset('assets') }}/js/photo_swipe/photoswipe.min.js"></script>
<script src="{{ asset('assets') }}/js/photo_swipe/photoswipe-ui-default.min.js"></script>
<script src="{{ asset('assets') }}/js/photo_swipe/init-gallery.js"></script>

<!--  Plugins for Select -->
<script src="{{ asset('assets') }}/js/bootstrap-select.js"></script>

<!--  for fileupload -->
<script src="{{ asset('assets') }}/js/jasny-bootstrap.min.js"></script>

<!--  Plugins for Tags -->
<script src="{{ asset('assets') }}/js/bootstrap-tagsinput.js"></script>

<!--  Plugins for DateTimePicker -->
<script src="{{ asset('assets') }}/js/moment.min.js"></script>
<script src="{{ asset('assets') }}/js/bootstrap-datetimepicker.min.js"></script>

<script src="{{ asset('assets') }}/js/paper-kit.js?v=2.1.0"></script>

</html>
