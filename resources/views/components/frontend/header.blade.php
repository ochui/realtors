<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Realtor - Directory & Listings Bootstrap 5 Template.">


  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon-16x16.png')}}">


  <!-- Libs CSS -->

  <link href="{{asset('libs/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet" />
  <link href="{{asset('libs/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('libs/nouislider/distribute/nouislider.min.css')}}" rel="stylesheet">
  <link href="{{asset('libs/uppy/dist/uppy.min.css')}}" rel="stylesheet">
  <link href="{{asset('libs/litepicker/dist/css/litepicker.css')}}" rel="stylesheet">
  <link href="{{asset('libs/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet">


  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{asset('css/theme.min.css')}}">
  <title>{{isset($article) ? $article->heading : $globalConfigs->site_title}}</title>
  <x-frontend.google-analytics/>

  @livewireStyles

</head>

<body>
  @if (request()->is('/') || request()->routeIs('get-article'))
    <x-frontend.navbar :showShadow="false"/>  
  @else
    <x-frontend.navbar :showShadow="true"/>
  @endif
