
<div class="modal fade" id="createModelo" tabindex="-1" aria-labelledby="createModeloLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registro de Modelo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{Route('modelos.store')}}" method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
          @csrf
          <div class="col-md-12">
            <label for="name" class="form-label">Nombre *</label>
            <input type="text" class="form-control" name="name" id="name" value="" required>
 
            <div class="invalid-feedback">
              Este campo no puede queda vacio
            </div>
          </div>
          <div class="col-md-12">
              <label for="validationCustom04" class="form-label">Marca</label>
              <select class="form-select" name="marca" id="marca" onChange="getMod()" required>
                <option selected disabled value="">Choose...</option>
                @foreach ($brands as $brand)
                  <option  value="{{$brand->id}}" >{{$brand->name}}</option>
                @endforeach
              </select>
              <div class="invalid-feedback">
                Debes llenar este campo
              </div>
            </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Aceptar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


