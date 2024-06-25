<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <!-- Seccion de la Configuración y Metadatos -->

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lista de usuarios || Corporate Group Vértice</title>

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

                <!-- Logo de la empresa -->
                <div class="col-lg-4 col-md-6 col-6 text-center">
                    <div class="Converge-div-logo">
                        <img id="VerIniciobtn" src="/img/Converge.png" alt="Logotipo Converge" href="#"
                            class="img-fluid" />
                    </div>
                </div>
            </div>
        </header>

        <a href="{{ route('inicio') }}" class="btn btn-outline-primary">Regresar</a>

        <main class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('create-all-permisos') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-primary">Crear todos los permisos</button>
                            &nbsp;

                        </form>
                        <br>

                        <div class="table-responsive">
                            <br>
                            <style>
                                #Permisos thead th {
                                    background-color: #b8860b;
                                    color: white;
                                }
                            </style>

                            <table class="table table-bordered" id="Clientes">
                                <thead class="text-white" style="background-color: #b8860b">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nombre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permisos as $permiso)
                                        <tr class="">
                                            <td> {{ $permiso->id }} </td>
                                            <td> {{ $permiso->name }} </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
