<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Iniciar sesión</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    {{ HTML::style('assets/css/signin.css') }}
    </head>
    <body>
        <div class="container">
            {{ Form::open(['url' => 'login', 'autocomplete' => 'off', 'class' => 'form-signin', 'role' => 'form']) }}

                @if(Session::has('error_message'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session::get('error_message') }}
                    </div>
                @endif

                <h2 class="form-signin-heading">Ingresa tus datos</h2>

                {{ Form::label('username', 'Username', ['class' => 'sr-only']) }}
                {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Nombre de usuario', 'autofocus' => '']) }}

                {{ Form::label('password', 'Password', ['class' => 'sr-only']) }}
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) }}

                <div class="checkbox">
                    <label>
                        {{ Form::checkbox('remember', true) }} Recordar
                    </label>
                </div>

                {{ Form::submit('Iniciar sesión', ['class' => 'btn btn-primary btn-block']) }}
        
            {{ Form::close() }}
        </div>
        <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>