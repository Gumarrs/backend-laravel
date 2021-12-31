<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

{{-- style --}}
@include('includes.style')
</head>


<body>
{{-- sidebar --}}
@include('includes.sidebar')
    <div id="right-panel" class="right-panel">
{{-- header --}}
@include('includes.navbar')
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
{{-- content --}}
@yield('content')
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>


  {{-- script --}}
  @include('includes.script')
</body>
</html>
