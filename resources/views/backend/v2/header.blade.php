<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ config('shopify-app.app_name') }}</title>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ secure_asset('/css/backend/v2/main.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('/css/backend/styles.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css"/>
  <link rel="stylesheet" type="text/css"
        href="https://select2.github.io/select2-bootstrap-theme/css/select2-bootstrap.css">
  <link href="{{ secure_asset('/css/backend/v2/main.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('/css/backend/styles.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
</head>
<body>



