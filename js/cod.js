$(document).ready(function () {
    //*************************************************************** */
    $("#btnAgregarPro").click(function (e) {
      location.href = "../php/addProducto.php";
    });
    //*************************************************************** */
    $("#btnMenuAdminitrador").click(function (e) {
      location.href = "../php/menuAdministrador.php";
    });
    //*********************AGREGAR PRODUCTOS DE CONSOLAS*************** */
    $.ajax({
      url: "php/verProductos.php",
      type: "POST",
      data: "",
      success: function (respuesta) {
        let productos = JSON.parse(respuesta);
        let tarjeta = "";
        //vamos a recorrer los Productos
        productos.forEach((producto) => {
          tarjeta += `
              <div class="productos pro-1 col-6 col-md-3 col-lg-2 ">
                <div class="card" id="card">
                  <img src="/pruevas PHP/icommer/img/${producto.foto}" class="card-img " width="174px" height="200px" >
                  <div class="card-body">
                    <h4 class="card-title">${producto.nombre}</h4>
                    <p>$${producto.precio}</p>
                    <a href="#">#111111</a>
                  </div>
                </div>
              </div>
          `;
        });
        $(".consolas").html(tarjeta);
      }
    });
    //*********************AGREGAR PRODUCTOS DE STARWARS*************** */
    $.ajax({
      url: "php/verStarWars.php",
      type: "POST",
      data: "",
      success: function (respuesta) {
        let productos = JSON.parse(respuesta);
        let tarjeta = "";
        //vamos a recorrer los Productos
        productos.forEach((producto) => {
          tarjeta += `
              <div class="productos pro-1 col-6 col-md-3 col-lg-2 ">
                <div class="card" id="card">
                  <img src="/pruevas PHP/icommer/img/${producto.foto}" class="card-img" width="174px" height="200px" >
                  <div class="card-body">
                      <h4 class="card-title">${producto.nombre}</h4>
                      <p>$${producto.precio}</p>
                      <a href="#">#111111</a>
                  </div>
                </div>
              </div>
          `;
        });
        $(".starwars").html(tarjeta);
      }
    });
    //*********************AGREGAR PRODUCTOS DE DIVERSOS*************** */
    $.ajax({
      url: "php/verDiversos.php",
      type: "POST",
      data: "",
      success: function (respuesta) {
        let productos = JSON.parse(respuesta);
        let tarjeta = "";
        //vamos a recorrer los Productos
        productos.forEach((producto) => {
          tarjeta += `
              <div class="productos pro-1 col-6 col-md-3 col-lg-2 ">
                <div class="card" id="card">
                  <img src="/pruevas PHP/icommer/img/${producto.foto}" class="card-img" width="174px" height="200px" >
                  <div class="card-body">
                      <h4 class="card-title">${producto.nombre}</h4>
                      <p>$${producto.precio}</p>
                      <a href="#">#111111</a>
                  </div>
                </div>
              </div>
          `;
        });
        $(".diversos").html(tarjeta);
      }
    });
    //*************************ELIMINAR PRODUCTO DE LA BBDD ***********************************/
    $(document).on('click','#btnEliminar', function(e){
      if(confirm("Desea eliminar el Producto")){
        let elemento = $(this)[0].parentElement;
        elemento. children;
        let id = $(elemento).children('input').val();
        //enviar id al servidor,{}
        $.post('eliminarProductos.php',{id},function(respuesta){
          alert(respuesta);
          window.location.reload();
        });
        
      }
    });
    //****************************ELIMINAR PRODUCTO STARWARS DE LA BBDD************************* */
    $(document).on('click','#btnEliminarStarWars', function(e){
      if(confirm("Desea eliminar el Producto")){
        let elemento = $(this)[0].parentElement;
        elemento. children;
        let id = $(elemento).children('input').val();
        //enviar id al servidor,{}
        $.post('eliminarStarWars.php',{id},function(respuesta){
          alert(respuesta);
          window.location.reload();
        });
        
      }
    });
    //****************************ELIMINAR PRODUCTO DIVERSOS DE LA BBDD************************* */
    $(document).on('click','#btnEliminarDiversos', function(e){
      if(confirm("Desea eliminar el Producto")){
        let elemento = $(this)[0].parentElement;
        elemento. children;
        let id = $(elemento).children('input').val();
        //enviar id al servidor,{}
        $.post('eliminarDiversos.php',{id},function(respuesta){
          alert(respuesta);
          window.location.reload();
        });
        
      }
    });
  
   });
  
  
  
  