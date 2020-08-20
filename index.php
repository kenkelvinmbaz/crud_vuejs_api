<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet">
</head>
<body>   

<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Add
</button>
    <div id="app" class="container">
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>NAME</th>
                <th>TELEPHONE</th>
                <th>ACTION</th>
            </thead>
            <tbody>
                <tr v-for="(usuario, index) in usuarios">
                    <td> {{ usuario.id }} </td>
                    <td> {{ usuario.name }} </td>
                    <td>  {{ usuario.telefone }} </td>
                    <td> <button value="editar"  class="btn btn-danger btn-sm btn-round" @click="editUsuario(index, usuario.id)"><i class="fa fa-pencil"></i></button> 
                    <button value="eliminar" class="btn btn-primary btn-sm btn-round" @click="deleteUsuario(index, usuario.id)"><i class="fa fa-envelope"></i> </button>
                    </td>

                </tr>
            </tbody>
        </table>
    

        <!-- The Modal -->
    <div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Modal Heading</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <div class="text-center">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control"  v-model='name' placeholder="informa o seu nome aqui...">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                        </div>
                        <input type="text" class="form-control"  v-model='telefone' placeholder="informa o seu telefone aqui...">
                    </div>
            </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button value="Confirmar" class="btn btn-primary" @click="addUsuario();"> REGISTRAR / EDITAR </button>
        </div>

        </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>
    <script src="js/index.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>