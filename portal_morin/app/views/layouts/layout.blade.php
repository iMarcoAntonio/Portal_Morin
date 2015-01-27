<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Aplicación para Morin</title>
        {{HTML::style('assets/css/bootstrap.css')}}
        {{HTML::style('assets/css/sb-admin-2.css')}}
        {{HTML::style('assets/font-awesome/css/font-awesome.css')}}
        {{HTML::style('assets/css/bootstrap-table.css')}}
        {{HTML::style('assets/css/metisMenu.min.css')}}
    </script>
    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand" href="#">Aplicación para Morin</div>

                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <div class="avatar">
                                <img src="assets/images/avatar.png" class="img-circle" alt="avatar" />
                            </div>
                            Bienvenido, {{ Auth::user()->username; }}
                            <i class="fa fa-user fa-fw"></i>  
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="{{ URL::to('/logout') }}"><i class="fa fa-sign-out fa-fw"></i>Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>

                            </li>

                            @yield('consultas')
                            
                            @yield('providers')
                            
                            @yield('updateDataBase')

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
        {{HTML::script('assets/js/jquery.js')}}
        {{HTML::script('assets/js/bootstrap.min.js')}}
        {{HTML::script('assets/js/sb-admin-2.js')}}
        {{HTML::script('assets/js/bootstrap-table.js')}}
        {{HTML::script('assets/js/metisMenu.min.js')}}
    </script>
    </body>
</html>