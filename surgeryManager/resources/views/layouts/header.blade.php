<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name') }}</title>

    <!-- Bootstrap Styles-->
    <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/font-awesome.css') }}"/>
    <!-- Morris Chart Styles-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/js/morris/morris-0.4.3.min.css') }}"/>
    <!-- Custom Styles-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/custom-styles.css') }}"/>
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
