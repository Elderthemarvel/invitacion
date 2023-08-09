<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invitación | Confirmación</title>
    <link href="<?=base_url('css/bootstrap.min.css')?>" rel="stylesheet" >
    <link rel="stylesheet" href="<?=base_url('css/style.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/lightbox.css')?>">

    <script src="<?=base_url('js/bootstrap.bundle.min.js')?>" ></script>
    <script src="<?=base_url('js/vue.min.js')?>" ></script>
    <script src="<?=base_url('js/axios.min.js')?>" ></script>
    <script src="<?=base_url('js/jquery-3.7.0.min.js')?>" ></script>
    <script src="<?=base_url('js/lightbox.js')?>" ></script>
    <link rel="stylesheet" href="<?=base_url('css/bootstrap-icons.css?v=1')?>">

</head>
<body style="background-color: #CAB164;">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="img-icon text-center mb-4" >
                    <img src="img/girasoles.png" style="width:80px;" alt="">
                </div>
                <h3 class="text-center">Listado de confirmación</h3>
<<<<<<< Updated upstream
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Respuesta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($respuestas as $key => $respuesta) {?>
                            <tr>
                                <th scope="row"><?=$key+1?></th>
                                <td><?=$respuesta['nombre']?></td>
                                <td><?=$respuesta['estado']==1 ? "Si, Asistire": "No podre asistir"; ?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
=======
    
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Respuesta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($respuestas as $key => $respuesta) {?>
                        <tr>
                            <th scope="row"><?=$key+1?></th>
                            <td><?=$respuesta['nombre']?></td>
                            <td><?=$respuesta['estado']==1 ? "Si, Asistire": "No podre asistir"; ?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
>>>>>>> Stashed changes
            </div>
        </div>
       
    </div>
</body>
</html>