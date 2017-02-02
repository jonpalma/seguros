<?php $page = 'cotiza-seguro'; ?>
<?php include('header.php'); ?>
<div class="wrapper cotiza-seguro hogar" id="cotiza-seguro hogar">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div class="container">
            <h1>
                Seguro de Hogar y Negocio
            </h1>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTENIDO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="contenido" id="contenido">
        <div class="container spacing">
            <div class="logo vertical-align">
                <div class="img-container">
                    <img src="img/index/icons/house.png" alt="">
                </div>
            </div>
            <div class="col-sm-6 left-side">
                <h1>
                    INGRESA TUS DATOS
                </h1>
                <div class="form-container">
                    <form action="mailer.php" method="POST" id="form">
                        <input type="text" name="name" id="name" placeholder="Nombre" required="">
                        <input type="text" name="lastname" id="lastname" placeholder="Apellido" required="">
                        <input type="email" name="email" id="email" placeholder="Correo electrónico" required="">
                        <input type="text" name="phone" id="phone" placeholder="Lada + Teléfono" required="">
                        <div class="opciones">
                            <div class="col-xs-12">
                                <p>
                                    Seguro para:
                                </p>
                                <p>
                                    Hogar
                                </p>
                                <input type="radio" name="inmueble" id="inmueble1" value="hogar" required="">
                                <p>
                                    Negocio
                                </p>
                                <input type="radio" name="inmueble" id="inmueble2" value="negocio">
                            </div>
                        </div>
                        <p>
                            Datos del Inmueble:
                        </p>
                        <div class="col-sm-6 left-side">
                            <input type="text" name="estado" id="estado" placeholder="Estado/Municipio" required="">
                        </div>
                        <div class="col-sm-6 right-side">
                            <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" required="">
                        </div>
                        <div class="col-sm-6 left-side">
                            <input type="text" name="direccion" id="direccion" placeholder="Dirección (Calle y Numero)" required="">
                        </div>
                        <div class="col-sm-6 right-side">
                            <input type="number" name="cp" id="cp" placeholder="Código Postal" required="">
                        </div>
                        <div class="col-sm-6 left-side">
                            <input type="text" name="colonia" id="colonia" placeholder="Colonia" required="">
                        </div>
                        <div class="col-sm-6 right-side">
                            <input type="number" name="valor" id="valor" placeholder="Valor del Inmueble" required="">
                        </div>
                        <div class="text-right">
                            <input type="hidden" name="bttnHogar">
                            <input type="submit" name="form-submit" id="form-submit" value="COTIZA">
                        </div>
                        <div class="text-left">
                            <p>
                                <br>
                                *Nuestros asesores expertos se pondrán en contacto contigo vía e-mail o teléfono para dar seguimiento a tu cotización.
                            </p>
                        </div>
                        <div class="form-output" id="form-output"></div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 right-side">
                <img src="img/cotiza/seguros/bg.jpg" alt="" class="img-bg hidden-lg hidden-md hidden-sm">
                <p>
                    <span>Sabemos lo mucho que te importa tu casa </span> y el esfuerzo que
                    te ha costado obtenerla, con nuestros planes de protección a hogar tu
                    patrimonio estará protegido ante cualquier imprevisto o eventualidad.
                    <br>
                    <br>
                    Un seguro de bajo costo que cubre a propietarios y arrendatarios de
                    cualquier riesgo que afecte a tu inmueble o lo que se encuéntre dentro
                    de el.
                </p>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PIE */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <?php include('pie.php'); ?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/**********************************/-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</div>
<?php include('footer.php'); ?>