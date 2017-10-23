<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
   

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
  
   <link rel="stylesheet" type="text/css" href="{{url('css/select2.min.css')}}">
   <script type="text/javascript" src="{{url('js/jquery.js')}}"></script>
   <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/select2.min.js')}}"></script>
</head>