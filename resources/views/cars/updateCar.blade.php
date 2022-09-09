<div class="modal fade" id="updateCar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registro de Vehiculos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST"  id="car_update" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
          @csrf
            <div class="col-md-6">
              <label for="placa_update" class="form-label">Placa</label>
              <input type="text" class="form-control" name="placa" id="placa_update" value=""  maxlength="7" required>
              <div class="valid-feedback">
              </div>
              <div class="invalid-feedback">
                Debes llenar este campo
              </div>
            </div>
            <div class="col-md-6">
              <label for="año_update" class="form-label">Año</label>
              <input type="number" class="form-control" name="año" id="año_update" value=""  maxlength="4" max="2022" required>
              <div class="valid-feedback">
              </div>
              <div class="invalid-feedback">
                Debes llenar este campo y año deber ser igual o menor al año en curso
              </div>
            </div>
            <div class="col-md-6">
              <label for="marca_update" class="form-label">Marca</label>
              <select class="form-select" name="marca" id="marca_update" onChange="getMod(this.value, 'modelo_update')" required>
                <option selected disabled value="">Choose...</option>
                @foreach ($brands as $brand)
                  <option  value="{{$brand->id}}" >{{$brand->name}}</option>
                @endforeach
              </select>
              <div class="invalid-feedback">
                Debes llenar este campo
              </div>
            </div>
            <div class="col-md-6">
              <label for="modelo_update" class="form-label">Modelo</label>
              <select class="form-select" name="modelo" id="modelo_update" required>
                
                
              </select>
              <div class="invalid-feedback">
                Debes llenar este campo
              </div>
            </div>
            <div class="col-md-6">
              <label for="color_update" class="form-label">Color</label>
              <input type="text" class="form-control" name="color" id="color_update" value=""  required>
              <div class="valid-feedback">
              </div>
              <div class="invalid-feedback">
                Debes llenar este campo
              </div>
            </div>
            <div class="col-md-6">
              <label for="fecha_update" class="form-label">Fecha de ingreso</label>
              <input type="datetime-local" class="form-control" max="{{ date('Y-m-d') }}T{{ date('h:m') }}" name="fecha" id="fecha_update" required>
              <div class="invalid-feedback">
                Debes llenar este campo
              </div>
            </div>
            
            <div class="col-md-12 mt-2">
              <button class="btn btn-primary" type="submit">Aceptar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>