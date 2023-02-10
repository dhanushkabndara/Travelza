<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome To Travelza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/fancybox.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact new.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gallery.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hotel reg.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/loging.css') }}">  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nav.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/payment.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/feature.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/trave.css') }}">


    <style>
        body {
            background: #eeeeee;
        }

        .form-inline {
            display: inline-block;
        }

        .navbar-header.col {
            padding: 0 !important;
        }

        .navbar {
            background: #fff;
            padding-left: 16px;
            padding-right: 16px;
            border-bottom: 1px solid #d6d6d6;
            box-shadow: 0 0 4px rgba(0, 0, 0, .1);
        }

        .nav-link img {
            border-radius: 50%;
            width: 36px;
            height: 36px;
            margin: -8px 0;
            float: left;
            margin-right: 10px;
        }

        .navbar .navbar-brand {
            color: #555;
            padding-left: 0;
            padding-right: 50px;
            font-family: 'Merienda One', sans-serif;
        }

        .navbar .navbar-brand i {
            font-size: 20px;
            margin-right: 5px;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            box-shadow: none;
            padding-right: 35px;
            border-radius: 3px !important;
        }

        .search-box .input-group-addon {
            min-width: 35px;
            border: none;
            background: transparent;
            position: absolute;
            right: 0;
            z-index: 9;
            padding: 7px;
            height: 100%;
        }

        .search-box i {
            color: #a0a5b1;
            font-size: 19px;
        }

        .navbar .nav-item i {
            font-size: 18px;
        }

        .navbar .dropdown-item i {
            font-size: 16px;
            min-width: 22px;
        }

        .navbar .nav-item.open>a {
            background: none !important;
        }

        .navbar .dropdown-menu {
            border-radius: 1px;
            border-color: #e5e5e5;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
        }

        .navbar .dropdown-menu a {
            color: #777;
            padding: 8px 20px;
            line-height: normal;
        }

        .navbar .dropdown-menu a:hover,
        .navbar .dropdown-menu a:active {
            color: #333;
        }

        .navbar .dropdown-item .material-icons {
            font-size: 21px;
            line-height: 16px;
            vertical-align: middle;
            margin-top: -2px;
        }

        .navbar .badge {
            color: #fff;
            background: #f44336;
            font-size: 11px;
            border-radius: 20px;
            position: absolute;
            min-width: 10px;
            padding: 4px 6px 0;
            min-height: 18px;
            top: 5px;
        }

        .navbar a.notifications,
        .navbar a.messages {
            position: relative;
            margin-right: 10px;
        }

        .navbar a.messages {
            margin-right: 20px;
        }

        .navbar a.notifications .badge {
            margin-left: -8px;
        }

        .navbar a.messages .badge {
            margin-left: -4px;
        }

        .navbar .active a,
        .navbar .active a:hover,
        .navbar .active a:focus {
            background: transparent !important;
        }

        @media (min-width: 1200px) {
            .form-inline .input-group {
                width: 300px;
                margin-left: 30px;
            }
        }

        @media (max-width: 1199px) {
            .form-inline {
                display: block;
                margin-bottom: 10px;
            }

            .input-group {
                width: 100%;
            }
        }


        .card {
            transition: all 0.5s ease-in-out;
            cursor: pointer;
            box-shadow: 0px 0px 6px -4px rgba(0, 0, 0, 0.75);
            border-radius: 10px;
        }

        .card:hover {
            box-shadow: 0px 0px 51px -36px rgba(0, 0, 0, 1);
        }

        .plaz{
        transition: all 0.5s ease-in-out;
        cursor: pointer;
        box-shadow: 0px 0px 6px -4px rgba(0,0,0,0.75);
        border-radius: 10px;
    }
.plaz:hover{
    box-shadow: 0px 0px 51px -36px rgba(0,0,0,1);
}

    </style>
</head>

<body>
