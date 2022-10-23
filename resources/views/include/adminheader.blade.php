<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <link rel="icon" type="image/x-icon" href="{{asset ('assets/img/reflex_logo.png')}}"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- Bootstrap 5.1.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    
    
    <!--Main Style CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Prescription CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/prescription_style.css')}}"> 
    <link rel="stylesheet" href="{{ asset ('assets/css/tab.css')}}"> 
    <link rel="stylesheet" href="{{ asset ('assets/css/multiselect.css')}}"> 
    <link rel="stylesheet" href="{{ asset ('assets/css/bs-stepper.css')}}"> 



</head>

<body>
    <!-- Header Start -->
    <div class="header  mb-3 shadow">
        <div class="container-fluid pt-1">
            <div class="row align-items-center">
                <!--logo & title start-->
                
                <div class="col-md-6">
                    <a class="d-flex align-items-center logo" href="{{route('admin')}}">
                        <!-- <img class="logo" src="img/Logo.png" alt="Logo"> -->
                        <img class="logo" src="{{asset ('assets/img/reflex_logo.png')}}" alt="Logo">

                        <!-- <h2 class="ms-3 mb-0 logo-title">
                            Dental Office Management System
                        </h2> -->
                    </a>
                </div>
                <!--logo & title end-->

                <!--nav start-->
                @if(Session::has('loginId'))
                <!--info Bar start-->
                <div class="col-md-6 ">
                    <nav class="navbar navbar-expand-lg navbar-light p-0 ">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">  
                                    
                            </div>
                        </div>
                    </nav>
                </div>
                @endif
                <!--info Bar end-->
            </div>
        </div>
    </div>
    <!-- Header end -->
    <script>
        // var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        // var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        // return new bootstrap.Tooltip(tooltipTriggerEl)
        // })

        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>