<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'LoanMan') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/architect.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
<body class="font-sans antialiased">

            <div class="app-container app-theme-white body-tabs-shadow  ">

                @include('layouts.navigation')
                <div class="app-main" id='main'>
                        <div class="app-sidebar sidebar-shadow">
                            <div class="app-header__logo">
                                <div class="logo-src"></div>
                                <div class="header__pane ml-auto">
                                    <div>
                                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                            <span class="hamburger-box">
                                                <span class="hamburger-inner"></span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="app-header__mobile-menu">
                                <div>
                                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="app-header__menu">
                                <span>
                                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                        <span class="btn-icon-wrapper">
                                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                                        </span>
                                    </button>
                                </span>
                            </div>    <div class="scrollbar-sidebar">
                                <div class="app-sidebar__inner">
                                    Loan Management System

                                    <ul class="vertical-nav-menu">
                                        <li>

                                            <a href="index.html" class="mm-active">
                                                <i class="metismenu-icon pe-7s-rocket"></i>
                                                Dashboard
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon pe-7s-users"></i>
                                                Borrowers
                                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('borrowers.index') }}">
                                                        <i class="metismenu-icon"></i>
                                                        Borrowers
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('borrowers.index') }}">
                                                        <i class="metismenu-icon"></i>
                                                        Add Borrower
                                                    </a>
                                                </li>



                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon pe-7s-diamond"></i>
                                                Loans
                                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="elements-buttons-standard.html">
                                                        <i class="metismenu-icon"></i>
                                                        Buttons
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon pe-7s-cash"></i>
                                                Repayments
                                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="elements-buttons-standard.html">
                                                        <i class="metismenu-icon"></i>
                                                        Buttons
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>


                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon pe-7s-culture"></i>
                                                Savings
                                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="elements-buttons-standard.html">
                                                        <i class="metismenu-icon"></i>
                                                        Buttons
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon pe-7s-graph3"></i>
                                                Reports
                                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="elements-buttons-standard.html">
                                                        <i class="metismenu-icon"></i>
                                                        Buttons
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>


                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon pe-7s-calculator"></i>
                                                Accounting
                                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="elements-buttons-standard.html">
                                                        <i class="metismenu-icon"></i>
                                                        Buttons
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="app-main__outer">
                            <div class="app-main__inner">

                                @yield('content')

                            </div>


                            <div class="app-wrapper-footer">
                                <div class="app-footer">
                                    <div class="app-footer__inner">
                                        <div class="app-footer-left">
                                            <ul class="nav">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">


                                                    2021 © Copyright One Soft Solutions- All Rights Reserve
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="app-footer-right">
                                            <ul class="nav">

                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">

                                                        Loan Management System

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
                </div>
            </div>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>

        <script src="{{ asset('js/architect.js') }}" defer></script>






        <style type="text/css">
            #main{
                min-height: 700px;
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


    </body>



</html>
