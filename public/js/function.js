  /*

   Obtener modelos de una marca
   id   = ID en base de datos;
   type = Formulario al que lo solicita;

  */
  function getMod(id, type){
    console.log(id)
      var elm     = document.getElementById(type); 
      var options ='';
      axios.get('/getModels/'+id)
      .then(function (response) {
        // handle success
        var datos  = response.data;
        datos.forEach((modelo) => {
          
          options+='<option  value="';
          options+= modelo.id;
          options+='" >';
          options+=modelo.name;
          options+='</option>';


        });
        elm .innerHTML = options;
      })
      .catch(function (error) {
        // handle error
        console.log(error);
      });
  }

  /* 
    Borrar Cualquier registro 
    id   = ID en base de datos;
    type = Controlador al cual pertenece;
  
  */
  function deleteItem(id,type){

    let myModal = new bootstrap.Modal(document.getElementById('deletex'), {});
    myModal.show();

    document.getElementById('id_delete').href = "/"+type+"/delete/"+id;

  }
  /* 
    Editar datos
    id   = ID en base de datos;
  
  */

  function updateCar(id){

    //Abrimos el modal del formulario de update
    let myModal = new bootstrap.Modal(document.getElementById('updateCar'), {});
    myModal.show();
    
    //Solicitamos datos mediante AXIOS del carro a modificar.
    axios.get('/cars/'+id+'/edit')
    .then(function (response) {
      // Con los datos obtenidos llenamos el fomulario
      document.getElementById('placa_update').value   = response.data.placa;
      document.getElementById('año_update').value     = response.data.year;
      document.getElementById('marca_update').value   = response.data.brand_id;
      document.getElementById('color_update').value   = response.data.color;
      document.getElementById('fecha_update').value   = response.data.checkin;

      this.getMod(response.data.brand_id, 'modelo_update');

      document.getElementById('modelo_update').value  = response.data.modelo_id;

      //Configuramos la ruta del formulario
      document.getElementById('car_update').action    = '/cars/update/'+id;

    }).catch(function (error) {
      // handle error
      console.log(error);
    })
  }