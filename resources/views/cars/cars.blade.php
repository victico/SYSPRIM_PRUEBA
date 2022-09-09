@extends('layouts.appx')
 
@section('title', 'Registro de Vehiculos')

 
@section('content')


	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">

      <h2>Vehiculos Registrados</h2>
      	@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
      <div class="col-md-12 ms-sm-auto  px-md-4 mt-3">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button type="button" class="btn btn-outline-dark align-self-end" data-bs-toggle="modal" data-bs-target="#createCar">+ Añadir Vehiculo</button>
        </div>
      </div>
      <div class="table-responsive mt-4">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th  class="text-center" scope="col">Modelo</th>
              <th  class="text-center" scope="col">Marca</th>
              <th  class="text-center" scope="col">Placa</th>
              <th  class="text-center" scope="col">Año</th>
              <th  class="text-center" scope="col">Color</th>
              <th  class="text-center" scope="col">Fecha de ingreso</th>
              <th  class="text-center" scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
          	@foreach ($cars as $car)
              <tr>
              	
                <td class="text-center" >
                 <h4> {{$car->modelos->name}}</h4>
                </td>
                <td class="text-center" >
                  <h4>{{$car->brands->name}}</h4>
                </td>
                <td class="text-center" >
                  <h4>{{$car->placa}}</h4>
                </td>
                <td class="text-center" >
                  <h4>{{$car->year}}</h4>
                </td>
                <td class="text-center" >
                  <h4>{{$car->color}}</h4>
                </td>
                <td class="text-center" >
                  <h4>{{$car->checkin}}</h4>
                </td>
                <td>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-center">
        					  <button class="btn btn-primary me-md-2" type="button" onclick="updateCar({{$car->id}})">Editar</button>
        					  <button class="btn btn-danger" onclick="deleteItem({{$car->id}},'cars')" type="button">Eliminar</button>
        					</div>             
        				</td>
                
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
    @include('cars.createdCar')
    @include('cars.deleteCar')
    @include('cars.updateCar')
@endsection