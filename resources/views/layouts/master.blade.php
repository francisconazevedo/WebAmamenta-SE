<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
            <span class="brand-text font-weight-light">Amamenta-SE</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <li class="nav-item">
                        <a href="/donaters" class="nav-link">
                            <i class="nav-icon fas fa-user-friends"></i>
                            <p>
                                Doadoras
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/links" class="nav-link">
                            <i class="nav-icon fas fa-link"></i>
                            <p>
                                Links Úteis
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/milkbanks" class="nav-link">
                            <i class="nav-icon fas fa-hand-holding-heart"></i>
                            <p>
                                Bancos de Leite
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/mythsortruths" class="nav-link">
                            <i class="nav-icon  fas fa-list-ul"></i>
                            <p>
                                Mitos ou Verdades
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('configurations.edit', 1) }}" class="nav-link">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>
                                Configuração
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">

                        <form id="form-logout" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="nav-link" href="javascript:{}" onclick="document.getElementById('form-logout').submit();"><i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Sair
                                </p>
                            </a>
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('header-title')</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
