<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>School</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="School Website" name="description" />
    <meta content="Pavan Kumar, Brajesh" name="Developed By" />
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/my/mycss.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/my/mobile.css') }}">
    
    <!-- Plugins CSS -->
    <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link rel="icon" href="{{ asset('assets/images/Trixa-logo-favicon.png') }}" type="image/x-icon">
    
    <!-- Loader -->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/header-colors.css') }}" />
    
    <!-- Select2 CSS -->
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
    
    <!-- DataTable CSS -->
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>


<div class="myalert">
    @if (session('msg'))
        <div id='showsuccess' hidden>{{ session('msg') }}</div>
        @php session()->forget('msg'); @endphp
    @endif
    @if (session('error'))
        <div id='showerror' hidden>{{ session('error') }}</div>
        @php session()->forget('error'); @endphp
    @endif
</div>
