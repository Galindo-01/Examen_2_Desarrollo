<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<br>
<div class="card">
    <div class="card-body">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalVehiculo">
            Agregar vehiculo
        </button>


        <!-- Modal -->
        <div class="modal fade" id="modalVehiculo" tabindex="-1" aria-labelledby="modalVehiculoLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalVehiculoLabel">Formulario vehiculo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('vehiculos.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="">Plate Number</label>
                                    <input type="text" class="form-control" id="plate_number" name="plate_number"
                                        value="{{ old('plate_number') }}" aria-label="First name">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Brand</label>
                                    <input type="text" class="form-control" id="brand" name="brand"
                                        value="{{ old('brand') }}" aria-label="Last name">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Model</label>
                                    <input type="text" class="form-control" id="model" name="model"
                                        value="{{ old('model') }}" aria-label="Last name">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Vehicle type</label>
                                    <input type="text" class="form-control" id="vehicle_type" name="vehicle_type"
                                        value="{{ old('vehicle_type') }}" aria-label="Last name">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Color</label>
                                    <input type="text" class="form-control" id="color" name="color"
                                        value="{{ old('color') }}" aria-label="Last name">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Capacity</label>
                                    <input type="text" class="form-control" id="capacity" name="capacity"
                                        value="{{ old('capacity') }}" aria-label="Last name">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Daily rate</label>
                                    <input type="text" class="form-control" id="daily_rate" name="daily_rate"
                                        value="{{ old('daily_rate') }}" aria-label="Last name">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Status</label>
                                    <input type="text" class="form-control" id="status" name="status"
                                        value="{{ old('status') }}" aria-label="Last name">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<br>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Plate Number</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Vehicle type</th>
                <th scope="col">Color</th>
                <th scope="col">Capacity</th>
                <th scope="col">Daily rate</th>
                <th scope="col">Status</th>
                <th scope="col">Botones</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($vehiculos as $vehiculo)
                <tr>
                    <th scope="row">{{ $vehiculo->id }}</th>
                    <td>{{ $vehiculo->plate_number }}</td>
                    <td>{{ $vehiculo->brand }}</td>
                    <td>{{ $vehiculo->model }}</td>
                    <td>{{ $vehiculo->vehicle_type }}</td>
                    <td>{{ $vehiculo->color }}</td>
                    <td>{{ $vehiculo->capacity }}</td>
                    <td>{{ $vehiculo->daily_rate }}</td>
                    <td>{{ $vehiculo->status }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined example">

                        </div>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="8" class="text-center">No hay Vehiculos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>

</html>
