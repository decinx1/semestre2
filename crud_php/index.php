<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <titl></title>
        <!-- Link de boostrap -->
    <script src="https://kit.fontawesome.com/0f7e9dbca8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center p-3">hola mundo</h1>
    <div class="container-fluid row ">
        <form class="col-4 p-3">
            <h3 class="text-center">Registro de peronas </h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la persona </label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <!-- contenido del forms de boostrap -->

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la persona </label>
                <input type="text" class="form-control" name="nombre">
            </div>  

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido de la persona </label>
                <input type="text" class="form-control" name="apellido">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI de la persona </label>
                <input type="text" class="form-control" name="dni">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fehca">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" name="correo">
            </div>

            <button type="submit" class="btn btn-primary"name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
        <!-- inicio de la tabla  -->
        <table class="table">
            <thead class="bg-info">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRES</th>
                <th scope="col">APELLIDOS</th>
                <th scope="col">DNI</th>
                <th scope="col">FECHA DE NACIMIENTO</th>
                <th scope="col">CORREO  </th>
                <ths cope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <a href="" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                </td>
                </tr>
                
            </tbody>
            </table>
         </div>
     </div>

        <!-- JavaScript paquete -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>