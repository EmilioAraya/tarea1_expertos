<!DOCTYPE html >
<html>
<head>
<title>INICIO</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

    <header>
        <!--En la sección del header pondremos el navbar que funcionará como el menu el cual contiene un vinculo a todas las secciones donde estan los formularios-->
        <nav class="navbar fixed-top navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#euclid1">EUCLIDES 1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#euclid2">EUCLIDES 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#euclid3">EUCLIDES 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#euclid4">EUCLIDES 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#euclid5">EUCLIDES 5</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#euclid6">EUCLIDES 6</a>
                </li>
            
                </ul>
            </div>
        </nav>
    </header>

    <body>

        <!--Sección que contiene un formulario y esta particionado en columnas, tiene las 12 columnas-->
        <!--id para que el menu pueda navegar sobre ellos-->
        <section id="euclid1">  
            <div class="container">
                <div class="row">
                    <div class="col">

                        <!--Este formulario tiene un metodo de tipo POST que enviará los datos a la acción euclid1.php-->
                        <!--Todos los campos del formulario tendrán validaciones simples gracias a los componentes de bootstrap, etiquetas, placeholders y que no se autocompleten-->
                        <form id="login-form" method="POST" action="euclid1.php">
                            
                            <div class="form-group">
                                <h3> Predecir Estilo </h3>
                            </div>

                            <div class="form-group">
                                <label for="CA">CA</label>
                                <input type="number" class="form-control" id="CA" name="CA" placeholder="CA" required autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="EC">EC</label>
                                <input type="number" class="form-control" id="EC" name="EC" placeholder="EC" required autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="EA">EA</label>
                                <input type="number" class="form-control" id="EA" name="EA" placeholder="EA" required autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="OR">OR</label>
                                <input type="number" class="form-control" id="OR" name="OR" placeholder="OR" required autocomplete="off">
                            </div>
                        
                            <!--Se envía los datos-->
                            <button type="submit" class="btn btn-primary">Predecir</button>
                        </form>

                    </div>
               
                </div>
            </div>
            
        </section>

        <!--Sección que contiene un formulario y esta particionado en columnas, tiene las 12 columnas-->
        <!--id para que el menu pueda navegar sobre ellos-->
        <section id="euclid2">  
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                    
                    <br></br>
                    <!--Este formulario tiene un metodo de tipo POST que enviará los datos a la acción euclid2.php-->
                    <!--Todos los campos del formulario tendrán validaciones simples gracias a los componentes de bootstrap, etiquetas, placeholders y que no se autocompleten-->
                    <!--Los select tienen por dentro los valores necesarios segun lo visto en el enunciado de la tarea y lo percibido en los registros de la DB-->
                    <form id="login-form" method="POST" action="euclid2.php">
                        
                        <div class="form-group">
                            <h3> Predecir Recinto </h3>
                        </div>

                        <div class="form-group">
                            <label for="estilo">ESTILO </label>
                                <select class="form-control" id="estilo" name="estilo" required autocomplete="off">
                                    <option value="1">DIVERGENTE</option>
                                    <option value="2">CONVERGENTE</option>
                                    <option value="3">ASIMILADOR</option>
                                    <option value="4">ACOMODADOR</option>        
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="promedio">Promedio</label>
                            <input type="number" class="form-control" id="promedio" name="promedio"placeholder="PROMEDIO" step=".01" required autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="sexo">SEXO </label>
                                <select class="form-control" id="sexo" name="sexo" required autocomplete="off">
                                    <option value="1">MASCULINO</option>
                                    <option value="2">FEMENINO</option>     
                                </select>
                        </div>

                        <!--Se envía los datos-->
                        <button type="submit" class="btn btn-primary">Predecir</button>
                    </form>
                    </div>
                </div>
            </div>
            
        </section>

        <!--Sección que contiene un formulario y esta particionado en columnas, tiene las 12 columnas-->
        <!--id para que el menu pueda navegar sobre ellos-->
        <section id="euclid3">  
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                    
                    <br></br>
                    <!--Este formulario tiene un metodo de tipo POST que enviará los datos a la acción euclid3.php-->
                    <!--Todos los campos del formulario tendrán validaciones simples gracias a los componentes de bootstrap, etiquetas, placeholders y que no se autocompleten-->
                    <!--Los select tienen por dentro los valores necesarios segun lo visto en el enunciado de la tarea y lo percibido en los registros de la DB-->
                    <form id="login-form" method="POST" action="euclid3.php">
                        
                        <div class="form-group">
                            <h3> Predecir Sexo </h3>
                        </div>

                        <div class="form-group">
                            <label for="estilo">ESTILO </label>
                                <select class="form-control" id="estilo" name="estilo" required autocomplete="off">
                                    <option value="1">DIVERGENTE</option>
                                    <option value="2">CONVERGENTE</option>
                                    <option value="3">ASIMILADOR</option>
                                    <option value="4">ACOMODADOR</option>        
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="promedio">Promedio</label>
                            <input type="number" class="form-control" id="promedio" name="promedio"placeholder="PROMEDIO" step=".01" required autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="recinto">RECINTO </label>
                                <select class="form-control" id="recinto" name="recinto" required autocomplete="off">
                                    <option value="1">PARAISO</option>
                                    <option value="2">TURRIALBA</option>     
                                </select>
                        </div>

                        <!--Se envía los datos-->
                        <button type="submit" class="btn btn-primary">Predecir</button>
                    </form>
                    </div>
                </div>
            </div>
            
        </section>

        <!--Sección que contiene un formulario y esta particionado en columnas, tiene las 12 columnas-->
        <!--id para que el menu pueda navegar sobre ellos-->
        <section id="euclid4">  
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        
                        <br></br>
                        <!--Este formulario tiene un metodo de tipo POST que enviará los datos a la acción euclid4.php-->
                        <!--Todos los campos del formulario tendrán validaciones simples gracias a los componentes de bootstrap, etiquetas, placeholders y que no se autocompleten-->
                        <!--Los select tienen por dentro los valores necesarios segun lo visto en el enunciado de la tarea y lo percibido en los registros de la DB-->
                        <form id="login-form" method="POST" action="euclid4.php">
                            
                            <div class="form-group">
                                <h3> Predecir Estilo </h3>
                            </div>

                            <div class="form-group">
                            <label for="recinto">RECINTO </label>
                                <select class="form-control" id="recinto" name="recinto" required autocomplete="off">
                                    <option value="1">PARAISO</option>
                                    <option value="2">TURRIALBA</option>     
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="promedio">Promedio</label>
                                <input type="number" class="form-control" id="promedio" name="promedio"placeholder="PROMEDIO" step=".01" required autocomplete="off">
                            </div>
                        
                            <div class="form-group">
                                <label for="sexo">SEXO </label>
                                <select class="form-control" id="sexo" name="sexo" required autocomplete="off">
                                    <option value="1">MASCULINO</option>
                                    <option value="2">FEMENINO</option>     
                                </select>
                            </div>

                            <!--Se envía los datos-->
                            <button type="submit" class="btn btn-primary">Predecir</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </section>
        
        <!--Sección que contiene un formulario y esta particionado en columnas, tiene las 12 columnas-->
        <!--id para que el menu pueda navegar sobre ellos-->
        <section id="euclid5">  
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                    
                    <br></br>
                    <!--Este formulario tiene un metodo de tipo POST que enviará los datos a la acción euclid5.php-->
                    <!--Los select tienen por dentro los valores necesarios segun lo visto en el enunciado de la tarea y lo percibido en los registros de la DB-->
                    <form id="login-form" method="POST" action="euclid5.php">
                        
                        <div class="form-group">
                            <h3> Predecir Nivel </h3>
                        </div>

                        <div class="form-group">
                                <label for="edad">EDAD </label>
                                <select class="form-control" id="edad" name="edad" required autocomplete="off">
                                    <option value="1">MAYOR O IGUAL DE 30</option>
                                    <option value="2">MAYOR DE 30 Y MENOR O IGUAL DE 55</option>
                                    <option value="3">MAYOR DE 50</option>     
                                </select>
                        </div>
                    
                        <div class="form-group">
                                <label for="genero">GENERO </label>
                                <select class="form-control" id="genero" name="genero" required autocomplete="off">
                                    <option value="1">FEMENINO</option>
                                    <option value="2">MASCULINO</option>
                                    <option value="3">NA</option>     
                                </select>
                        </div>

                        <div class="form-group">
                                <label for="autoevaluacion">AUTOEVALUACION </label>
                                <select class="form-control" id="autoevaluacion" name="autoevaluacion" required autocomplete="off">
                                    <option value="1">PRINCIPIANTE</option>
                                    <option value="2">INTERMEDIO</option>
                                    <option value="3">AVANZADO</option>     
                                </select>
                        </div>

                        <div class="form-group">
                                <label for="veces">NUMERO DE VECES ENSEÑANDO ESTE CURSO </label>
                                <select class="form-control" id="veces" name="veces" required autocomplete="off">
                                    <option value="1">NUNCA</option>
                                    <option value="2">DE 1 A 5 VECES</option>
                                    <option value="3">MAS DE CINCO VECES</option>     
                                </select>
                        </div>

                        <div class="form-group">
                                <label for="expeticia">AREA DE EXPETICIA </label>
                                <select class="form-control" id="expeticia" name="expeticia" required autocomplete="off">
                                    <option value="1">TOMA DE DECISIONES</option>
                                    <option value="2">DISENO DE REDES</option>
                                    <option value="3">OTRA</option>     
                                </select>
                        </div>         
                        
                        <div class="form-group">
                                <label for="habilidad">HABILIDAD CON EL USO DE LAS COMPUTADORAS </label>
                                <select class="form-control" id="habilidad" name="habilidad" required autocomplete="off">
                                    <option value="1">BAJO</option>
                                    <option value="2">PROMEDIO</option>
                                    <option value="3">ALTO</option>     
                                </select>
                        </div>

                        <div class="form-group">
                                <label for="experiencia">EXPERIENCIA DEL PROFESOR USANDO TECNOLOGIA BASADA EN LA WEB PARA LA ENSEÑANZA </label>
                                <select class="form-control" id="experiencia" name="experiencia" required autocomplete="off">
                                    <option value="1">NUNCA</option>
                                    <option value="2">A VECES</option>
                                    <option value="3">A MENUDO</option>     
                                </select>
                        </div>

                        <div class="form-group">
                                <label for="experiencia2">EXPERIENCIA DEL PROFESOR USANDO UN SITIO WEB </label>
                                <select class="form-control" id="experiencia2" name="experiencia2" required autocomplete="off">
                                    <option value="1">NUNCA</option>
                                    <option value="2">A VECES</option>
                                    <option value="3">A MENUDO</option>     
                                </select>
                        </div>                        

                        <!--Se envía los datos-->
                        <button type="submit" class="btn btn-primary">Predecir</button>
                    </form>
                    </div>
                </div>
            </div>
            
        </section>

        <!--Sección que contiene un formulario y esta particionado en columnas, tiene las 12 columnas-->
        <!--id para que el menu pueda navegar sobre ellos-->
        <section id="euclid6">  
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                    
                    <br></br>

                    <!--Este formulario tiene un metodo de tipo POST que enviará los datos a la acción euclid2.php-->
                    <!--Todos los campos del formulario tendrán validaciones simples gracias a los componentes de bootstrap, etiquetas, placeholders y que no se autocompleten, rangos de numeros-->
                    <!--Los select tienen por dentro los valores necesarios segun lo visto en el enunciado de la tarea y lo percibido en los registros de la DB-->
                    <form id="login-form" method="POST" action="euclid6.php">
                        
                        <div class="form-group">
                            <h3> Predecir Red </h3>
                        </div>

                        <div class="form-group">
                                <label for="confiabilidad">Confiablidad (2 a 5)</label>
                                <input type="number" class="form-control" id="confiabilidad" name="confiabilidad" placeholder="CONFIABILIDAD" required autocomplete="off" min="2" max="5">
                        </div>

                        <div class="form-group">
                                <label for="enlaces">Enlaces (7 a 20)</label>
                                <input type="number" class="form-control" id="enlaces" name="enlaces" placeholder="NUMERO DE ENLACES" required autocomplete="off" min="7" max="20">
                        </div>

                        <div class="form-group">
                            <label for="capacidad">CAPACIDAD </label>
                                <select class="form-control" id="capacidad" name="capacidad" required autocomplete="off">
                                    <option value="1">BAJA</option>
                                    <option value="2">MEDIA</option>    
                                    <option value="3">ALTA</option> 
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="costo">COSTO </label>
                                <select class="form-control" id="costo" name="costo" required autocomplete="off">
                                    <option value="1">BAJA</option>
                                    <option value="2">MEDIA</option>    
                                    <option value="3">ALTA</option>      
                                </select>
                        </div>
                        
                        <!--Se envía los datos-->
                        <button type="submit" class="btn btn-primary">Predecir</button>
                    </form>
                    </div>
                </div>
            </div>
            
        </section>

       
    </body>
</html>