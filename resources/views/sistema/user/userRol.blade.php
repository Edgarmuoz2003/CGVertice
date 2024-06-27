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
    @include('sistema.CGV.includes.head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head> 

<body>

<h1 class="titulo-roles">Roles de Usuario</h1>

    <div class="container-fluid"> 

    <div class="pt-4 pl-4">
        <a href="{{ route('users.index', ['id' => $user->id]) }}" class="btn btn-outline-warning">
            <i class="fas fa-arrow-left"></i> 
        </a>

    </div>
        

        

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

                <div class="userRol">
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
                            {!! Form::submit('Asignar Roles',['class'=>'btn btn-info mt-3 ']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </main>
    </div>
    <div class="row flex-lg-nowrap flex-wrap justify-content-center align-items-center pt-4" > 
                <!-- Botón regresar --> 
                <div class="col-lg-1 col-md-1 col-1 text-center"> 
                    <div class="Converge-div-logo"> 
                        <a href="{{ route('inicio') }}" class="btn btn btn-outline-warning">
                            <i class="fas fa-home"></i> 
                        </a> 
                    </div> 
                </div> 
                <script> 
                    document.getElementById('VerIniciobtn').addEventListener('click', function() { 
                        window.location.href = "{{ route('inicio') }}"; 
                    }); 
                </script> 
            </div>
            @include('sistema.CGV.includes.boton')
            
</body> 
</html>
