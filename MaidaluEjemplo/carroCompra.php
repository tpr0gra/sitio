<?php
include("conexion.php");

$con=conectar();
echo "Se realiza correcta conexión";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="d-md-flex align-items-md-center">
            <div class="h3">Catálogo de Productos</div>
            <div class="ml-auto d-flex align-items-center views"> <span class="btn text-success"> <span class="fas fa-th px-md-2 px-1"></span><span>Vista Cuadrícula</span> </span> <span class="btn"> <span class="fas fa-list-ul"></span><span class="px-md-2 px-1">Vista en Lista</span> </span> <span class="green-label px-md-2 px-1">428</span>                <span class="text-muted">Productos</span> </div>
        </div>
        <div class="d-lg-flex align-items-lg-center pt-2">
            <div class="form-inline d-flex align-items-center my-2 mr-lg-2 radio bg-light border"> <label class="options">Más Populares <input type="radio" name="radio"> <span class="checkmark"></span> </label> <label class="options">Más Baratos <input type="radio" name="radio" checked> <span class="checkmark"></span> </label> </div>
            <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2"> <label class="tick">Grandes Marcas <input type="checkbox" checked="checked"> <span class="check"></span> </label> <span class="text-success px-2 count"> 328</span> </div>
            <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2"> <label class="tick">Lo nuevo <input type="checkbox"> <span class="check"></span> </label> <span class="text-success px-2 count"> 72</span> </div>
            <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2"> <label class="tick">Chile <input type="checkbox"> <span class="check"></span> </label> <span class="border px-1 mx-2 mr-3 font-weight-bold count"> 12</span> <select name="country" id="country" class="bg-light">
                    <option value="" hidden>Comuna</option>
                    <option value="India">La Florida</option>
                    <option value="USA">Santiago Centro</option>
                    <option value="Uk">Macúl</option>
                </select> </div>
        </div>
        <div class="d-sm-flex align-items-sm-center pt-2 clear">
            <div class="text-muted filter-label">Filtros:</div>
            <div class="green-label font-weight-bold p-0 px-1 mx-sm-1 mx-0 my-sm-0 my-2">Seleccionar Filtro <span class=" px-1 close">&times;</span> </div>
            <div class="green-label font-weight-bold p-0 px-1 mx-sm-1 mx-0">Seleccionar Filtro <span class=" px-1 close">&times;</span> </div>
        </div>
        <div class="filters"> <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Filtro<span class="px-1 fas fa-filter"></span></button> </div>
        <div id="mobile-filter">
            <div class="py-3">
                <h5 class="font-weight-bold">Categorías</h5>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Desinfección <span class="badge badge-primary badge-pill">328</span> </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Limpieza <span class="badge badge-primary badge-pill">112</span> </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Artículos Personales <span class="badge badge-primary badge-pill">32</span> </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Packs <span class="badge badge-primary badge-pill">48</span> </li>
                </ul>
            </div>
            <div class="py-3">
                <h5 class="font-weight-bold">Marcas</h5>
                <form class="brand">
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Clorox <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Copito <input type="checkbox" checked> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Dove <input type="checkbox" checked> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Quix <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Pampers <input type="checkbox"> <span class="check"></span> </label> </div>
                </form>
            </div>
            <div class="py-3">
                <h5 class="font-weight-bold">Evaluación</h5>
                <form class="rating">
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <input type="checkbox"> <span class="check"></span> </label>                        </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label>                        </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label>                        </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label>                        </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label>                        </div>
                </form>
            </div>
        </div>
        <div class="content py-md-0 py-3">
            <section id="sidebar">
                <div class="py-3">
                    <h5 class="font-weight-bold">Categorías</h5>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Desinfexión <span class="badge badge-primary badge-pill">328</span> </li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Higiene Personal <span class="badge badge-primary badge-pill">112</span> </li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Artículos de limpieza <span class="badge badge-primary badge-pill">32</span> </li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Bebés <span class="badge badge-primary badge-pill">48</span> </li>
                    </ul>
                </div>
                <div class="py-3">
                    <h5 class="font-weight-bold">Marcas</h5>
                    <form class="brand">
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Clorox <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Copito <input type="checkbox" checked> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Dove <input type="checkbox" checked> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Quix <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Pampers <input type="checkbox"> <span class="check"></span> </label> </div>
                    </form>
                </div>
                <div class="py-3">
                    <h5 class="font-weight-bold">Evaluados</h5>
                    <form class="rating">
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <input type="checkbox"> <span class="check"></span> </label>                            </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label>                            </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label>                            </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label>                            </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label>                            </div>
                    </form>
                </div>
            </section>
            <!-- Sección de productos -->
            <section id="products">
                <div class="container py-3">
                
                    <div class="row">
                    <?php
                        include_once "conexion.php";
                        $query = "select tipo, imagen from productos;";
                        $res = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                    
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                        
                            <div class="card"> <img class="card-img-top" src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode($row['imagen']); ?>">
                                <div class="card-body">
                                    <h6 class="font-weight-bold pt-1"><?php echo $row['tipo']; ?></h6>
                                    <div class="text-muted description">Space for small product description</div>
                                    <div class="d-flex align-items-center product"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                    <div class="d-flex align-items-center justify-content-between pt-3">
                                        <div class="d-flex flex-column">
                                            <div class="h6 font-weight-bold">36.99 USD</div>
                                            <div class="text-muted rebate">48.56</div>
                                        </div>
                                        <div class="btn btn-primary">Buy now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>   
                </div>
               
                    
            </section>
        </div>
    </div>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html> 

</body>

</html>