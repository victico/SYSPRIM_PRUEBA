@extends('layouts.appx')
 
@section('title', 'Marcas')

 
@section('content')
	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
      <h2>Marcas </h2>
      <div class="col-md-12 ms-sm-auto  px-md-4 mt-3">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button type="button" class="btn btn-outline-dark align-self-end" data-bs-toggle="modal" data-bs-target="#createBrand">+ Añadir Marca</button>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              
              <th  class="text-center" scope="col">Logo</th>
              <th  class="text-center" scope="col">Nombre</th>
              <th  class="text-center" scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            @foreach ($brands as $brand)
              <tr>
                <td class="text-center" >
                  <img src="{{$brand->logo}}" height="50" width="50">
                </td>
                <td class="text-center" >
                  <h4>{{$brand->name}}</h4>
                </td>
                <td>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-danger" onclick="deleteItem({{$brand->id}},'brands')" type="button">Eliminar</button>
                  </div>              
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
    @include('brands.createBrand')
    @include('brands.deleteBrand')
@endsection