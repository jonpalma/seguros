<?php $page = 'cotiza-seguro'; ?>
<?php include('header.php'); ?>
<div class="wrapper cotiza-seguro vida" id="cotiza-seguro vida">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div class="container">
            <h1>
                Seguro de Vida
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
                    <img src="img/index/icons/healt.png" alt="">
                </div>
            </div>
            <div class="col-sm-6 left-side">
                <h1>
                    INGRESA TUS DATOS
                </h1>
                <div class="form-container">
                    <form action="mailer.php" method="POST" id="form">
                        <div class="col-sm-6 left-side">
                            <input type="text" name="name" id="name" placeholder="Nombre" required="">
                        </div>
                        <div class="col-sm-6 right-side">
                            <input type="text" name="lastname" id="lastname" placeholder="Apellido" required="">
                        </div>
                        <input type="email" name="email" id="email" placeholder="Correo electrónico" required="">
                        <input type="text" name="phone" id="phone" placeholder="Lada + Teléfono" required="">
                        <input type="text" name="fecha" id="fecha" placeholder="Fecha de Nacimiento" onfocus="(this.type='date')" required="">
                        <div class="opciones">
                            <div class="col-xs-12">
                                <p>
                                    Genero:
                                </p>
                                <p>
                                    H
                                </p>
                                <input type="radio" name="gender" id="gender1" value="hombre" required="">
                                <p>
                                    M
                                </p>
                                <input type="radio" name="gender" id="gender2" value="mujer">
                            </div>
                        </div>
                        <input type="number" name="suma" id="suma" placeholder="Suma asegurada" required="">
                        <div class="tool-tip">
                            <span href="#" data-toggle="tooltip" title="La Suma Asegurada es la cantidad por la cual se desea asegurar en caso de fallecimiento. (Ej. $100,000.00)">
                                *¿Suma Asegurada?
                            </span>
                        </div>
                        <div class="text-right">
                            <input type="hidden" name="bttnVida">
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
                    <span>Un seguro que todos deberían de tener,</span> pero pocos
                    contratan.<br>
                    El seguro de vida te protege a ti y a los que más quieres a un
                    costo accesible. Te ofrece el apoyo que necesitas en los momentos
                    más difíciles y protección para tu familia cuando llegues a faltar.
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