<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Cursos virtuales web| Admin</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--=============================================
=            CSS PLUGINS            =
=============================================-->

{{--BOOTSTRAP--}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="
anonymous">

{{--OverlayScrollbars.min.css--}}

<link rel="stylesheet" href="{{url('/')}}/css/plugins/OverlayScrollbars.min.css">

{{--ADMIN LTE--}}

<link rel="stylesheet" href="{{url('/')}}/css/plugins/adminlte.min.css">

{{--GOOGLE FONTS--}}

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<!--=============================================
=            JS PLUGINS            =
=============================================-->

{{--JQUERY--}}

<!--<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>-->

{{--JQUERY 3.3.1--}}

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

{{--POPPER--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

{{--BOOTSTRAP.JS--}}

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


{{--fONT AWESOME--}}

<script src="https://kit.fontawesome.com/a48fa10f21.js" crossorigin="anonymous"></script>

{{--JS ADMIN LTE--}}

<script src="{{url('/')}}/js/plugins/adminlte.js"></script>

<script src="{{url('/')}}/js/plugins/jquery.overlayScrollbars.min.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">

	<div class="wrapper">

		@include('modulos.header')

		@include('modulos.sidebar')

		@yield('content')

		@include('modulos.footer')

	

   </div>
	
</body>
</html>