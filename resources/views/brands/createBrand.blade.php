
<div class="modal fade" id="createBrand" tabindex="-1" aria-labelledby="createBrandLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registro de Marca</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{Route('brand.store')}}" method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
          @csrf
          <div class="col-md-12">
            <label for="name" class="form-label">Nombre *</label>
            <input type="text" class="form-control" name="name" id="name" value="" required>
 
            <div class="invalid-feedback">
              Por favor coloca un nombre valido.
            </div>
          </div>
          <div class="col-md-12">
            <label for="Logo" class="form-label">Logo</label>
            <input type="file" name="logo" class="form-control" required="" >
            <div class="invalid-feedback">
              Este campo no puede estar vacio .
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


