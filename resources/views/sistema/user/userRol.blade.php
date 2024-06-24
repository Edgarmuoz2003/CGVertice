<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <!-- Seccion de la Configuración y Metadatos -->

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Converge || Corporate Group Vértice</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="../img/Converge.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">

</head>
<body>

    <div class="container-fluid">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-lg-nowrap flex-wrap justify-content-center align-items-center">
                <!-- Botón regresar -->
                <div class="col-lg-1 col-md-1 col-1 text-center">
                    <div class="Converge-div-logo" >
                        <a href="{{ route('inicio') }}" class="btn btn-outline-primary">Regresar</a>
                    </div>
                </div>
                <script>
                    document.getElementById('VerIniciobtn').addEventListener('click', function() {
                        window.location.href = "{{ route('inicio') }}";
                    });
                </script>
            </div>

        </header>
        <a href="{{ route('users.index', ['id' => $user->id]) }}" class="btn btn-outline-primary">Regresar</a>

        <main class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <br>

                <div class="card">
                    <div class="card-header">
                        {{ $user->name }}
                    </div>
                    <div class="card-body">
                        <h5>Lista de Roles</h5>
                        {!! Form::model($user, ['route' => ['asignar.update', $user->id], 'method' => 'put']) !!}
                        @foreach($roles as $role)
                        <div>
                            <label>
                                {!! Form::checkbox('roles[]', $role->id, $user->hasAnyRole($role->name) ? : false, ['class'=>'mr-1']) !!}
                                {{ $role->name }}
                            </label>
                        </div>
                        @endforeach
                        {!! Form::submit('Asignar Roles',['class'=>'btn btn-outline-primary mt-3']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </main>