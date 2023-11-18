<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <div id="entrenadores">
        <h1>@{{mensaje}}</h1>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">APellido</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
      <th scope="col">Direccion</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="row in entrenadores">
      <th scope="row">@{{row.id}}</th>
      <th scope="row">@{{row.nombre}}</th>
      <th scope="row">@{{row.apellido}}</th>
      <th scope="row">@{{row.telefono}}</th>
      <th scope="row">@{{row.correo}}</th>
      <th scope="row">@{{row.direccion}}</th>
      <th scope="row"><img src="img/@{{row.img}}" alt=""></th>
      
    </tr>
  </tbody>
</table>
    </div>
<script src="js/apis/apiEntrenadores.js"></script>
<script src="js/vue.js"></script>
<script src="js/vue-resource.js"></script>
<script src="js/jquery.js"></script>
</body>
</html>