<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Registro FIFA 23 11V11</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/teleton/favicon/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/contador.css">

    <script src="https://use.fontawesome.com/9a720c7c53.js"></script>
    <link rel="stylesheet" href="css/flipdown/flipdown.css" />
    <script src="js/flipdown.js"></script>
    <link rel="stylesheet" href="assets/css/contador.css">

    <link rel="stylesheet" href="forms/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="forms/css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>


    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
</head>

<body>


    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <div class="col-md-6 offset-md-3" style="display: flex; justify-content:center;margin: 0px">
                <a href="index.html" class="logo d-flex align-items-center">
                    <img src="assets/img/teleton/header/Logos-RGB-Campana-Teleton-2021-4.png" alt="">
                </a>
            </div>



        </div>
    </header><!-- End Header -->


    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container" style="display: flex; justify-content:center">


                <div class="signup-content" style="display: flex; justify-content:center;">

                    <div class="signup-form">
                        <img src="forms/images/Banner-formulario-fifa-23.png" alt="">


                        <form method="POST" class="register-form" id="register-form">
                            <br>
                            <div style="display: flex;">
                                <p style="color:black;font-family: Poppins;">Nombre completo (Capitán)</p>
                                <p style="color:red;font-family: Poppins;">*</p>
                            </div>
                            <div class="form-group">

                                <label for="nombreCapitan">
                                    <span class="material-symbols-outlined" style="padding-top: 2px;color: black;">
                                        person
                                    </span>
                                </label>

                                <input type="text" name="nombre" id="name" required />
                            </div>
                            <br>
                            <div style="display: flex;">
                                <p style="color:black;font-family: Poppins;">RUT (Capitán)</p>
                                <p style="color:red;font-family: Poppins;">*</p>
                            </div>
                            <div class="form-group">
                                <label for="RUTCapitan">
                                    <span class="material-symbols-outlined" style="padding-top: 2px;color: black;">
                                        badge
                                    </span>
                                </label>
                                <input type="text" name="rut" id="RUTCapitan" placeholder="12.345.678-9"
                                    required />
                            </div>
                            <br>


                            <div style="display: flex;">
                                <p style="color:black;font-family: Poppins;">Género</p>
                                <p style="color:red;font-family: Poppins;">*</p>
                            </div>
                            <div class="form-group">

                                <div style="display: flex;">

                                    <span class="material-symbols-outlined"
                                        style="padding-top:5px; padding-right: 5px;color: black;">
                                        wc
                                    </span>



                                    <select name="genero" class="form-select" aria-label="Default select example"
                                        style="font-size: 13px;color:#999;font-family: Poppins;" required>
                                        <option disabled selected>Selecciona:</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="SinGenero">Prefiero no decir</option>
                                    </select>
                                </div>
                            </div>
                            <br>



                            <div style="display: flex;">
                                <p style="color:black;font-family: Poppins;">Fecha de nacimiento (Capitán)</p>
                                <p style="color:red;font-family: Poppins;">*</p>
                            </div>
                            <div class="form-group">

                                <label for="nacimiento">
                                    <span class="material-symbols-outlined" style="padding-top: 2px;color: black;">
                                        calendar_month
                                    </span>
                                </label>
                                <input type="date" name="nacimiento" id="nacimiento"
                                    style="font-size: 13px;color:#999;font-family: Poppins;"
                                    placeholder="Fecha de nacimiento (Capitán)" required />
                            </div>
                            <br>

                            <div style="display: flex;">
                                <p style="color:black;font-family: Poppins;">Comuna</p>
                                <p style="color:red;font-family: Poppins;">*</p>
                            </div>


                            <div class="container"
                                style="box-shadow: none !important; margin-bottom:10px;padding-left: 0px;">

                                <div class="comuna-container" style="display: flex;">
                                    <span class="material-symbols-outlined"
                                        style="padding-top:5px; padding-right: 5px;color: black;">
                                        location_on
                                    </span>
                                    <div class="row-fluid">
                                        <select name="comuna" class="selectpicker" data-live-search="true" style="color: #999;"
                                            required>
                                            <option selected="selected" disabled>Selecciona</option>
                                            <option label="Algarrobo" value="Algarrobo">Algarrobo</option>
                                            <option label="Alhué" value="Alhué">Alhué</option>
                                            <option label="Alto Biobío" value="Alto Biobío">Alto Biobío</option>
                                            <option label="Alto Del Carmen" value="Alto Del Carmen">Alto Del Carmen
                                            </option>
                                            <option label="Alto Hospicio" value="Alto Hospicio">Alto Hospicio</option>
                                            <option label="Ancud" value="Ancud">Ancud</option>
                                            <option label="Andacollo" value="Andacollo">Andacollo</option>
                                            <option label="Angol" value="Angol">Angol</option>
                                            <option label="Antofagasta" value="Antofagasta">Antofagasta</option>
                                            <option label="Antuco" value="Antuco">Antuco</option>
                                            <option label="Antártica" value="Antártica">Antártica</option>
                                            <option label="Arauco" value="Arauco">Arauco</option>
                                            <option label="Arica" value="Arica">Arica</option>
                                            <option label="Aysén" value="Aisén">Aysén</option>
                                            <option label="Buin" value="Buin">Buin</option>
                                            <option label="Bulnes" value="Bulnes">Bulnes</option>
                                            <option label="Cabildo" value="Cabildo">Cabildo</option>
                                            <option label="Cabo de Hornos" value="Cabo de Hornos">Cabo de Hornos
                                            </option>
                                            <option label="Cabrero" value="Cabrero">Cabrero</option>
                                            <option label="Calama" value="Calama">Calama</option>
                                            <option label="Calbuco" value="Calbuco">Calbuco</option>
                                            <option label="Caldera" value="Caldera">Caldera</option>
                                            <option label="Calera" value="Calera">Calera</option>
                                            <option label="Calera De Tango" value="Calera De Tango">Calera De Tango
                                            </option>
                                            <option label="Calle Larga" value="Calle Larga">Calle Larga</option>
                                            <option label="Camarones" value="Camarones">Camarones</option>
                                            <option label="Camiña" value="Camiña">Camiña</option>
                                            <option label="Canela" value="Canela">Canela</option>
                                            <option label="Carahue" value="Carahue">Carahue</option>
                                            <option label="Cartagena" value="Cartagena">Cartagena</option>
                                            <option label="Casablanca" value="Casablanca">Casablanca</option>
                                            <option label="Castro" value="Castro">Castro</option>
                                            <option label="Catemu" value="Catemu">Catemu</option>
                                            <option label="Cauquenes" value="Cauquenes">Cauquenes</option>
                                            <option label="Cañete" value="Cañete">Cañete</option>
                                            <option label="Cerrillos" value="Cerrillos">Cerrillos</option>
                                            <option label="Cerro Navia" value="Cerro Navia">Cerro Navia</option>
                                            <option label="Chaitén" value="Chaitén">Chaitén</option>
                                            <option label="Chanco" value="Chanco">Chanco</option>
                                            <option label="Chañaral" value="Chañaral">Chañaral</option>
                                            <option label="Chiguayante" value="Chiguayante">Chiguayante</option>
                                            <option label="Chile Chico" value="Chile Chico">Chile Chico</option>
                                            <option label="Chillán" value="Chillán">Chillán</option>
                                            <option label="Chillán Viejo" value="Chillán Viejo">Chillán Viejo</option>
                                            <option label="Chimbarongo" value="Chimbarongo">Chimbarongo</option>
                                            <option label="Cholchol" value="Cholchol">Cholchol</option>
                                            <option label="Chonchi" value="Chonchi">Chonchi</option>
                                            <option label="Chépica" value="Chépica">Chépica</option>
                                            <option label="Cisnes" value="Cisnes">Cisnes</option>
                                            <option label="Cobquecura" value="Cobquecura">Cobquecura</option>
                                            <option label="Cochamó" value="Cochamó">Cochamó</option>
                                            <option label="Cochrane" value="Cochrane">Cochrane</option>
                                            <option label="Codegua" value="Codegua">Codegua</option>
                                            <option label="Coelemu" value="Coelemu">Coelemu</option>
                                            <option label="Coihueco" value="Coihueco">Coihueco</option>
                                            <option label="Coinco" value="Coinco">Coinco</option>
                                            <option label="Colbún" value="Colbún">Colbún</option>
                                            <option label="Colchane" value="Colchane">Colchane</option>
                                            <option label="Colina" value="Colina">Colina</option>
                                            <option label="Collipulli" value="Collipulli">Collipulli</option>
                                            <option label="Coltauco" value="Coltauco">Coltauco</option>
                                            <option label="Combarbalá" value="Combarbalá">Combarbalá</option>
                                            <option label="Concepción" value="Concepción">Concepción</option>
                                            <option label="Conchalí" value="Conchalí">Conchalí</option>
                                            <option label="Concón" value="Concón">Concón</option>
                                            <option label="Constitución" value="Constitución">Constitución</option>
                                            <option label="Contulmo" value="Contulmo">Contulmo</option>
                                            <option label="Copiapó" value="Copiapó">Copiapó</option>
                                            <option label="Coquimbo" value="Coquimbo">Coquimbo</option>
                                            <option label="Coronel" value="Coronel">Coronel</option>
                                            <option label="Corral" value="Corral">Corral</option>
                                            <option label="Coyhaique" value="Coihayque">Coyhaique</option>
                                            <option label="Cunco" value="Cunco">Cunco</option>
                                            <option label="Curacautín" value="Curacautín">Curacautín</option>
                                            <option label="Curacaví" value="Curacaví">Curacaví</option>
                                            <option label="Curaco de Velez" value="Curaco de Velez">Curaco de Velez
                                            </option>
                                            <option label="Curanilahue" value="Curanilahue">Curanilahue</option>
                                            <option label="Curarrehue" value="Curarrehue">Curarrehue</option>
                                            <option label="Curepto" value="Curepto">Curepto</option>
                                            <option label="Curicó" value="Curicó">Curicó</option>
                                            <option label="Dalcahue" value="Dalcahue">Dalcahue</option>
                                            <option label="Diego De Almagro" value="Diego De Almagro">Diego De Almagro
                                            </option>
                                            <option label="Doñihue" value="Doñihue">Doñihue</option>
                                            <option label="El Bosque" value="El Bosque">El Bosque</option>
                                            <option label="El Carmen" value="El Carmen">El Carmen</option>
                                            <option label="El Monte" value="El Monte">El Monte</option>
                                            <option label="El Olivar" value="El Olivar">El Olivar</option>
                                            <option label="El Quisco" value="El Quisco">El Quisco</option>
                                            <option label="El Tabo" value="El Tabo">El Tabo</option>
                                            <option label="Empedrado" value="Empedrado">Empedrado</option>
                                            <option label="Ercilla" value="Ercilla">Ercilla</option>
                                            <option label="Estación Central" value="Estación Central">Estación Central
                                            </option>
                                            <option label="Florida" value="Florida">Florida</option>
                                            <option label="Freire" value="Freire">Freire</option>
                                            <option label="Freirina" value="Freirina">Freirina</option>
                                            <option label="Fresia" value="Fresia">Fresia</option>
                                            <option label="Frutillar" value="Frutillar">Frutillar</option>
                                            <option label="Futaleufú" value="Futaleufú">Futaleufú</option>
                                            <option label="Futrono" value="Futrono">Futrono</option>
                                            <option label="Galvarino" value="Galvarino">Galvarino</option>
                                            <option label="General Lagos" value="General Lagos">General Lagos</option>
                                            <option label="Gorbea" value="Gorbea">Gorbea</option>
                                            <option label="Graneros" value="Graneros">Graneros</option>
                                            <option label="Guaitecas" value="Guaitecas">Guaitecas</option>
                                            <option label="Hijuelas" value="Hijuelas">Hijuelas</option>
                                            <option label="Hualaihue" value="Hualaihue">Hualaihue</option>
                                            <option label="Hualañe" value="Hualañe">Hualañe</option>
                                            <option label="Hualpén" value="Hualpén">Hualpén</option>
                                            <option label="Hualqui" value="Hualqui">Hualqui</option>
                                            <option label="Huara" value="Huara">Huara</option>
                                            <option label="Huasco" value="Huasco">Huasco</option>
                                            <option label="Huechuraba" value="Huechuraba">Huechuraba</option>
                                            <option label="Illapel" value="Illapel">Illapel</option>
                                            <option label="Independencia" value="Independencia">Independencia</option>
                                            <option label="Iquique" value="Iquique">Iquique</option>
                                            <option label="Isla De Maipo" value="Isla De Maipo">Isla De Maipo</option>
                                            <option label="Isla De Pascua" value="Isla De Pascua">Isla De Pascua
                                            </option>
                                            <option label="Juan Fernández" value="Juan Fernández">Juan Fernández
                                            </option>
                                            <option label="La Cisterna" value="La Cisterna">La Cisterna</option>
                                            <option label="La Cruz" value="La Cruz">La Cruz</option>
                                            <option label="La Estrella" value="La Estrella">La Estrella</option>
                                            <option label="La Florida" value="La Florida">La Florida</option>
                                            <option label="La Granja" value="La Granja">La Granja</option>
                                            <option label="La Higuera" value="La Higuera">La Higuera</option>
                                            <option label="La Ligua" value="La Ligua">La Ligua</option>
                                            <option label="La Pintana" value="La Pintana">La Pintana</option>
                                            <option label="La Reina" value="La Reina">La Reina</option>
                                            <option label="La Serena" value="La Serena">La Serena</option>
                                            <option label="La Unión" value="La Unión">La Unión</option>
                                            <option label="Lago Ranco" value="Lago Ranco">Lago Ranco</option>
                                            <option label="Lago Verde" value="Lago Verde">Lago Verde</option>
                                            <option label="Laguna Blanca" value="Laguna Blanca">Laguna Blanca</option>
                                            <option label="Laja" value="Laja">Laja</option>
                                            <option label="Lampa" value="Lampa">Lampa</option>
                                            <option label="Lanco" value="Lanco">Lanco</option>
                                            <option label="Las Cabras" value="Las Cabras">Las Cabras</option>
                                            <option label="Las Condes" value="Las Condes">Las Condes</option>
                                            <option label="Lautaro" value="Lautaro">Lautaro</option>
                                            <option label="Lebu" value="Lebu">Lebu</option>
                                            <option label="Licantén" value="Licantén">Licantén</option>
                                            <option label="Limache" value="Limache">Limache</option>
                                            <option label="Linares" value="Linares">Linares</option>
                                            <option label="Litueche" value="Litueche">Litueche</option>
                                            <option label="Llaillay" value="Llaillay">Llaillay</option>
                                            <option label="Llanquihue" value="Llanquihue">Llanquihue</option>
                                            <option label="Lo Barnechea" value="Lo Barnechea">Lo Barnechea</option>
                                            <option label="Lo Espejo" value="Lo Espejo">Lo Espejo</option>
                                            <option label="Lo Prado" value="Lo Prado">Lo Prado</option>
                                            <option label="Lolol" value="Lolol">Lolol</option>
                                            <option label="Loncoche" value="Loncoche">Loncoche</option>
                                            <option label="Longaví" value="Longaví">Longaví</option>
                                            <option label="Lonquimay" value="Lonquimay">Lonquimay</option>
                                            <option label="Los Alamos" value="Los Alamos">Los Alamos</option>
                                            <option label="Los Andes" value="Los Andes">Los Andes</option>
                                            <option label="Los Angeles" value="Los Angeles">Los Angeles</option>
                                            <option label="Los Lagos" value="Los Lagos">Los Lagos</option>
                                            <option label="Los Muermos" value="Los Muermos">Los Muermos</option>
                                            <option label="Los Sauces" value="Los Sauces">Los Sauces</option>
                                            <option label="Los Vilos" value="Los Vilos">Los Vilos</option>
                                            <option label="Lota" value="Lota">Lota</option>
                                            <option label="Lumaco" value="Lumaco">Lumaco</option>
                                            <option label="Machali" value="Machali">Machali</option>
                                            <option label="Macul" value="Macul">Macul</option>
                                            <option label="Maipú" value="Maipú">Maipú</option>
                                            <option label="Malloa" value="Malloa">Malloa</option>
                                            <option label="Marchihue" value="Marchihue">Marchihue</option>
                                            <option label="Mariquina" value="Mariquina">Mariquina</option>
                                            <option label="María Elena" value="María Elena">María Elena</option>
                                            <option label="María Pinto" value="María Pinto">María Pinto</option>
                                            <option label="Maule" value="Maule">Maule</option>
                                            <option label="Maullín" value="Maullín">Maullín</option>
                                            <option label="Mejillones" value="Mejillones">Mejillones</option>
                                            <option label="Melipeuco" value="Melipeuco">Melipeuco</option>
                                            <option label="Melipilla" value="Melipilla">Melipilla</option>
                                            <option label="Molina" value="Molina">Molina</option>
                                            <option label="Monte Patria" value="Monte Patria">Monte Patria</option>
                                            <option label="Mostazal" value="Mostazal">Mostazal</option>
                                            <option label="Mulchén" value="Mulchén">Mulchén</option>
                                            <option label="Máfil" value="Máfil">Máfil</option>
                                            <option label="Nacimiento" value="Nacimiento">Nacimiento</option>
                                            <option label="Nancagua" value="Nancagua">Nancagua</option>
                                            <option label="Natales" value="Natales">Natales</option>
                                            <option label="Navidad" value="Navidad">Navidad</option>
                                            <option label="Negrete" value="Negrete">Negrete</option>
                                            <option label="Ninhue" value="Ninhue">Ninhue</option>
                                            <option label="Nogales" value="Nogales">Nogales</option>
                                            <option label="Nueva Imperial" value="Nueva Imperial">Nueva Imperial
                                            </option>
                                            <option label="Ñiquén" value="Ñiquén">Ñiquén</option>
                                            <option label="Ñuñoa" value="Ñuñoa">Ñuñoa</option>
                                            <option label="O'Higgins" value="O'Higgins">O'Higgins</option>
                                            <option label="Ollague" value="Ollague">Ollague</option>
                                            <option label="Olmué" value="Olmué">Olmué</option>
                                            <option label="Osorno" value="Osorno">Osorno</option>
                                            <option label="Ovalle" value="Ovalle">Ovalle</option>
                                            <option label="Padre Hurtado" value="Padre Hurtado">Padre Hurtado</option>
                                            <option label="Padre Las Casas" value="Padre Las Casas">Padre Las Casas
                                            </option>
                                            <option label="Paiguano" value="Paiguano">Paiguano</option>
                                            <option label="Paillaco" value="Paillaco">Paillaco</option>
                                            <option label="Paine" value="Paine">Paine</option>
                                            <option label="Palena" value="Palena">Palena</option>
                                            <option label="Palmilla" value="Palmilla">Palmilla</option>
                                            <option label="Panguipulli" value="Panguipulli">Panguipulli</option>
                                            <option label="Panquehue" value="Panquehue">Panquehue</option>
                                            <option label="Papudo" value="Papudo">Papudo</option>
                                            <option label="Paredones" value="Paredones">Paredones</option>
                                            <option label="Parral" value="Parral">Parral</option>
                                            <option label="Pedro Aguirre Cerda" value="Pedro Aguirre Cerda">Pedro
                                                Aguirre
                                                Cerda</option>
                                            <option label="Pelarco" value="Pelarco">Pelarco</option>
                                            <option label="Pelluhue" value="Pelluhue">Pelluhue</option>
                                            <option label="Pemuco" value="Pemuco">Pemuco</option>
                                            <option label="Pencahue" value="Pencahue">Pencahue</option>
                                            <option label="Penco" value="Penco">Penco</option>
                                            <option label="Peralillo" value="Peralillo">Peralillo</option>
                                            <option label="Perquenco" value="Perquenco">Perquenco</option>
                                            <option label="Petorca" value="Petorca">Petorca</option>
                                            <option label="Peumo" value="Peumo">Peumo</option>
                                            <option label="Peñaflor" value="Peñaflor">Peñaflor</option>
                                            <option label="Peñalolén" value="Peñalolén">Peñalolén</option>
                                            <option label="Pica" value="Pica">Pica</option>
                                            <option label="Pichidegua" value="Pichidegua">Pichidegua</option>
                                            <option label="Pichilemu" value="Pichilemu">Pichilemu</option>
                                            <option label="Pinto" value="Pinto">Pinto</option>
                                            <option label="Pirque" value="Pirque">Pirque</option>
                                            <option label="Pitrufquén" value="Pitrufquén">Pitrufquén</option>
                                            <option label="Placilla" value="Placilla">Placilla</option>
                                            <option label="Portezuelo" value="Portezuelo">Portezuelo</option>
                                            <option label="Porvenir" value="Porvenir">Porvenir</option>
                                            <option label="Pozo Almonte" value="Pozo Almonte">Pozo Almonte</option>
                                            <option label="Primavera" value="Primavera">Primavera</option>
                                            <option label="Providencia" value="Providencia">Providencia</option>
                                            <option label="Puchuncaví" value="Puchuncaví">Puchuncaví</option>
                                            <option label="Pucón" value="Pucón">Pucón</option>
                                            <option label="Pudahuel" value="Pudahuel">Pudahuel</option>
                                            <option label="Puente Alto" value="Puente Alto">Puente Alto</option>
                                            <option label="Puerto Montt" value="Puerto Montt">Puerto Montt</option>
                                            <option label="Puerto Octay" value="Puerto Octay">Puerto Octay</option>
                                            <option label="Puerto Varas" value="Puerto Varas">Puerto Varas</option>
                                            <option label="Pumanque" value="Pumanque">Pumanque</option>
                                            <option label="Punitaqui" value="Punitaqui">Punitaqui</option>
                                            <option label="Punta Arenas" value="Punta Arenas">Punta Arenas</option>
                                            <option label="Puqueldón" value="Puqueldón">Puqueldón</option>
                                            <option label="Puren" value="Puren">Puren</option>
                                            <option label="Purranque" value="Purranque">Purranque</option>
                                            <option label="Putaendo" value="Putaendo">Putaendo</option>
                                            <option label="Putre" value="Putre">Putre</option>
                                            <option label="Puyehue" value="Puyehue">Puyehue</option>
                                            <option label="Queilén" value="Queilén">Queilén</option>
                                            <option label="Quellón" value="Quellón">Quellón</option>
                                            <option label="Quemchi" value="Quemchi">Quemchi</option>
                                            <option label="Quilaco" value="Quilaco">Quilaco</option>
                                            <option label="Quilicura" value="Quilicura">Quilicura</option>
                                            <option label="Quilleco" value="Quilleco">Quilleco</option>
                                            <option label="Quillota" value="Quillota">Quillota</option>
                                            <option label="Quillón" value="Quillón">Quillón</option>
                                            <option label="Quilpué" value="Quilpué">Quilpué</option>
                                            <option label="Quinchao" value="Quinchao">Quinchao</option>
                                            <option label="Quinta De Tilcoco" value="Quinta De Tilcoco">Quinta De
                                                Tilcoco
                                            </option>
                                            <option label="Quinta Normal" value="Quinta Normal">Quinta Normal</option>
                                            <option label="Quintero" value="Quintero">Quintero</option>
                                            <option label="Quirihue" value="Quirihue">Quirihue</option>
                                            <option label="Rancagua" value="Rancagua">Rancagua</option>
                                            <option label="Ranquil" value="Ranquil">Ranquil</option>
                                            <option label="Rauco" value="Rauco">Rauco</option>
                                            <option label="Recoleta" value="Recoleta">Recoleta</option>
                                            <option label="Renaico" value="Renaico">Renaico</option>
                                            <option label="Renca" value="Renca">Renca</option>
                                            <option label="Rengo" value="Rengo">Rengo</option>
                                            <option label="Requinoa" value="Requinoa">Requinoa</option>
                                            <option label="Retiro" value="Retiro">Retiro</option>
                                            <option label="Rinconada" value="Rinconada">Rinconada</option>
                                            <option label="Romeral" value="Romeral">Romeral</option>
                                            <option label="Río Bueno" value="Río Bueno">Río Bueno</option>
                                            <option label="Río Claro" value="Río Claro">Río Claro</option>
                                            <option label="Río Hurtado" value="Río Hurtado">Río Hurtado</option>
                                            <option label="Río Ibáñez" value="Río Ibáñez">Río Ibáñez</option>
                                            <option label="Río Negro" value="Río Negro">Río Negro</option>
                                            <option label="Río Verde" value="Río Verde">Río Verde</option>
                                            <option label="Saavedra" value="Saavedra">Saavedra</option>
                                            <option label="Sagrada Familia" value="Sagrada Familia">Sagrada Familia
                                            </option>
                                            <option label="Salamanca" value="Salamanca">Salamanca</option>
                                            <option label="San Antonio" value="San Antonio">San Antonio</option>
                                            <option label="San Bernardo" value="San Bernardo">San Bernardo</option>
                                            <option label="San Carlos" value="San Carlos">San Carlos</option>
                                            <option label="San Clemente" value="San Clemente">San Clemente</option>
                                            <option label="San Esteban" value="San Esteban">San Esteban</option>
                                            <option label="San Fabián" value="San Fabián">San Fabián</option>
                                            <option label="San Felipe" value="San Felipe">San Felipe</option>
                                            <option label="San Fernando" value="San Fernando">San Fernando</option>
                                            <option label="San Gregorio" value="San Gregorio">San Gregorio</option>
                                            <option label="San Ignacio" value="San Ignacio">San Ignacio</option>
                                            <option label="San Javier" value="San Javier">San Javier</option>
                                            <option label="San Joaquín" value="San Joaquín">San Joaquín</option>
                                            <option label="San José De Maipo" value="San José De Maipo">San José De
                                                Maipo
                                            </option>
                                            <option label="San Juan de la Costa" value="San Juan de la Costa">San Juan
                                                de la
                                                Costa</option>
                                            <option label="San Miguel" value="San Miguel">San Miguel</option>
                                            <option label="San Nicolás" value="San Nicolás">San Nicolás</option>
                                            <option label="San Pablo" value="San Pablo">San Pablo</option>
                                            <option label="San Pedro" value="San Pedro">San Pedro</option>
                                            <option label="San Pedro De Atacama" value="San Pedro De Atacama">San Pedro
                                                De
                                                Atacama</option>
                                            <option label="San Pedro de la Paz" value="San Pedro de la Paz">San Pedro de
                                                la
                                                Paz</option>
                                            <option label="San Rafael" value="San Rafael">San Rafael</option>
                                            <option label="San Ramón" value="San Ramón">San Ramón</option>
                                            <option label="San Rosendo" value="San Rosendo">San Rosendo</option>
                                            <option label="San Vicente" value="San Vicente">San Vicente</option>
                                            <option label="Santa Bárbara" value="Santa Bárbara">Santa Bárbara</option>
                                            <option label="Santa Cruz" value="Santa Cruz">Santa Cruz</option>
                                            <option label="Santa Juana" value="Santa Juana">Santa Juana</option>
                                            <option label="Santa María" value="Santa María">Santa María</option>
                                            <option label="Santiago" value="Santiago">Santiago</option>
                                            <option label="Santo Domingo" value="Santo Domingo">Santo Domingo</option>
                                            <option label="Sierra Gorda" value="Sierra Gorda">Sierra Gorda</option>
                                            <option label="Talagante" value="Talagante">Talagante</option>
                                            <option label="Talca" value="Talca">Talca</option>
                                            <option label="Talcahuano" value="Talcahuano">Talcahuano</option>
                                            <option label="Taltal" value="Taltal">Taltal</option>
                                            <option label="Temuco" value="Temuco">Temuco</option>
                                            <option label="Teno" value="Teno">Teno</option>
                                            <option label="Teodoro Schmidt" value="Teodoro Schmidt">Teodoro Schmidt
                                            </option>
                                            <option label="Tierra Amarilla" value="Tierra Amarilla">Tierra Amarilla
                                            </option>
                                            <option label="Tiltil" value="Tiltil">Tiltil</option>
                                            <option label="Timaukel" value="Timaukel">Timaukel</option>
                                            <option label="Tirua" value="Tirua">Tirua</option>
                                            <option label="Tocopilla" value="Tocopilla">Tocopilla</option>
                                            <option label="Toltén" value="Toltén">Toltén</option>
                                            <option label="Tomé" value="Tomé">Tomé</option>
                                            <option label="Torres del Paine" value="Torres del Paine">Torres del Paine
                                            </option>
                                            <option label="Tortel" value="Tortel">Tortel</option>
                                            <option label="Traiguén" value="Traiguén">Traiguén</option>
                                            <option label="Treguaco" value="Treguaco">Treguaco</option>
                                            <option label="Tucapel" value="Tucapel">Tucapel</option>
                                            <option label="Valdivia" value="Valdivia">Valdivia</option>
                                            <option label="Vallenar" value="Vallenar">Vallenar</option>
                                            <option label="Valparaíso" value="Valparaíso">Valparaíso</option>
                                            <option label="Vichuquén" value="Vichuquén">Vichuquén</option>
                                            <option label="Victoria" value="Victoria">Victoria</option>
                                            <option label="Vicuña" value="Vicuña">Vicuña</option>
                                            <option label="Vilcún" value="Vilcún">Vilcún</option>
                                            <option label="Villa Alegre" value="Villa Alegre">Villa Alegre</option>
                                            <option label="Villa Alemana" value="Villa Alemana">Villa Alemana</option>
                                            <option label="Villarrica" value="Villarrica">Villarrica</option>
                                            <option label="Vitacura" value="Vitacura">Vitacura</option>
                                            <option label="Viña Del Mar" value="Viña Del Mar">Viña Del Mar</option>
                                            <option label="Yerbas Buenas" value="Yerbas Buenas">Yerbas Buenas</option>
                                            <option label="Yumbel" value="Yumbel">Yumbel</option>
                                            <option label="Yungay" value="Yungay">Yungay</option>
                                            <option label="Zapallar" value="Zapallar">Zapallar</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>



                            <div style="display: flex;">
                                <p style="color:black;font-family: Poppins;">Correo electrónico (Capitán)</p>
                                <p style="color:red;font-family: Poppins;">*</p>
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    <span class="material-symbols-outlined" style="padding-top: 2px;color: black;">
                                        mail
                                    </span>
                                </label>
                                <input type="email" name="email" id="email" required />
                            </div>
                            <br>

                            <div style="display: flex;">
                                <p style="color:black;font-family: Poppins;">Teléfono (Capitán)</p>
                                <p style="color:red;font-family: Poppins;">*</p>
                            </div>
                            <div class="form-group">
                                <label for="telefonoCapitan">
                                    <span class="material-symbols-outlined" style="padding-top: 2px;color: black;">
                                        phone_iphone
                                    </span>
                                </label>
                                <input type="text" name="telefono" id="telefonoCapitan"
                                    placeholder="+56 9 8765 4321" required />
                            </div>
                            <br>

                            <div style="display: flex;">
                                <p style="color:black;font-family: Poppins;">Usuario de Discord (Capitán)</p>
                                <p style="color:red;font-family: Poppins;">*</p>
                            </div>
                            <div class="form-group">
                                <label for="Discord">
                                    <i class="material-icons" style="padding-top: 2px;color: black;">discord</i>
                                </label>
                                <input type="text" name="discord" id="Discord" placeholder="Usuario#1234" required />
                            </div>
                            <br>


                            

                            <div style="display: flex;">
                                <p style="color:black;font-family: Poppins;">Nombre de Equipo</p>
                                <p style="color:red;font-family: Poppins;">*</p>
                            </div>
                            <div class="form-group">
                                <label for="nombreEquipo">
                                    <span class="material-symbols-outlined" style="padding-top: 2px;color: black;">
                                        groups
                                    </span>

                                </label>
                                <input type="text" name="equipo" id="nombreEquipo" required />
                            </div>
                            <br>

                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>He leído y
                                    acepto las <a href="" style="color:#F03440">bases legales del torneo</a>.</label>
                            </div>
                            <br>
                            <img src="forms/images/Banners-comunidad-Teleton2-2022-5.jpg" alt="">

                            <center>
                                
                                        <button class="form-submit" type="submit" name='register' class="btn btn-info" style="border:white">Enviar</button>

                                
                            </center>
                        </form>

                        <?php 
                                
                            include('database/get_fifa11v11.php');

                         ?>

                    </div>



                </div>
            </div>
        </section>





    </div>

    <!-- JS -->
    <script src="forms/vendor/jquery/jquery.min.js"></script>
    <script src="forms/js/main.js"></script>




    
    
      
      
      <!-- End Clients Section -->
  
      <!-- ======= Recent Blog Posts Section ======= -->
      
      
    </main><!-- End #main -->
  
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer" style="background-color: white;">
  
  
      <div class="container" style="background-color: transparent;border: none !important;box-shadow:none;">
        <div class="copyright">
          &copy; 2022 <strong><a target="_blank" href="https://www.teleton.cl/" style="color:#e63742;">Teletón Chile</a></strong> en conjunto a <a href="https://www.instagram.com/anfv_chile/" target="_blank" style="color:#e63742;">ANFV Chile</a> & <a style="color:#e63742;" target="_blank" href="https://www.instagram.com/gamingarenacl/">Gaming Arena</a>. Todos los Derechos Reservados.
          <div class="social-links mt-3"> 
  
  
            <a href="https://www.facebook.com/teletonchile" target="_blank" class="facebook">
                          <i class="bi bi-facebook"></i>
            </a> 
  
            <a href="https://www.youtube.com/channel/UCfGbXA1P_n-ggNdrxw1E0Aw" target="_blank" class="twitter">
              <i class="bi bi-youtube"></i>
            </a> 
  
            <a href="https://www.instagram.com/teleton_chile/" target="_blank" class="instagram">
                          <i class="bi bi-instagram"></i>
            </a> 
  
            <a href="https://twitter.com/Teleton" target="_blank" class="twitter">
              <i class="bi bi-twitter"></i>
            </a> 
  
            <a href="https://cl.linkedin.com/company/teleton" target="_blank" class="linkedin">
                <i class="bi bi-linkedin"></i>
            </a>
  
            <a href="https://www.tiktok.com/@teletoncl" target="_blank" class="linkedin">
                <i class="bi bi-tiktok"></i>
            </a>
  
            <a href="https://www.twitch.tv/GamingArenaCL" target="_blank" class="linkedin">
                          <i class="bi bi-twitch"></i>
            </a>
  
            <a href="https://discord.gg/2Cj2r6qwjz" target="_blank" class="linkedin">
                <i class="bi bi-discord"></i>
            </a>
  
             
            
            
  
            </div>
        </div>
  
  
      </div>
  
      
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>





</html>