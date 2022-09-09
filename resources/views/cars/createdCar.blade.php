<div class="modal fade" id="createCar" tabindex="-1" aria-labelledby="createCarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registro de Vehiculos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{Route('cars.store')}}" method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
          @csrf
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Placa</label>
              <input type="text" class="form-control" name="placa" id="validationCustom01" value=""  maxlength="7" required>
              <div class="valid-feedback">
              </div>
              <div class="invalid-feedback">
                Debes llenar este campo
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Año</label>
              <input type="number" class="form-control" name="año" id="validationCustom02" value=""  maxlength="4" max="2022" required>
              <div class="valid-feedback">
              </div>
              <div class="invalid-feedback">
                Debes llenar este campo y año deber ser igual o menor al año en curso
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom04" class="form-label">Marca</label>
              <select class="form-select" name="marca" id="marca" onChange="getMod(this.value, 'modelo')" required>
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
              <label for="validationCustom05" class="form-label">Modelo</label>
              <select class="form-select" name="modelo" id="modelo" required>
                
                
              </select>
              <div class="invalid-feedback">
                Debes llenar este campo
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom07" class="form-label">Color</label>
              <input type="text" class="form-control" name="color" id="validationCustom07" value=""  required>
              <div class="valid-feedback">
              </div>
              <div class="invalid-feedback">
                Debes llenar este campo
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom06" class="form-label">Fecha de ingreso</label>
              <input type="datetime-local" class="form-control" max="{{ date('Y-m-d') }}T{{ date('h:m') }}" name="fecha" id="validationCustom06" required>
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
<script type="text/javascript">
  
  
</script>