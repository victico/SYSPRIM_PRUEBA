@extends('layouts.appx')
 
@section('title', 'Modelos')

 
@section('content')
	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
      <h2>Modelos </h2>
      <div class="col-md-12 ms-sm-auto  px-md-4 mt-3">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button type="button" class="btn btn-outline-dark align-self-end" data-bs-toggle="modal" data-bs-target="#createModelo">+ Añadir Modelo</button>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col" class="text-center" >Nombre</th>
              <th scope="col" class="text-center" >Marca</th>
              <th scope="col" class="text-center">Acciones</th>
            </tr>
          </thead>
          <tbody class="table-group-divider" >
            @foreach ($modelos as $modelo)
              <tr>
                
                <td class="text-center">
                  <h4>{{$modelo->name}}</h4>
                </td>
                <td class="text-center">
                  <h4>{{$modelo->brands->name}}</h4>
                </td>
                <td  class="">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                      <button class="btn btn-danger" onclick="deleteItem({{$modelo->id}},'modelos')" type="button">Eliminar</button>
                    </div>             
                </td>
                          
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
    @include('models.createModelo')
    @include('models.deleteModelo')
@endsection