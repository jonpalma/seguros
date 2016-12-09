<?php $page = 'cotiza-vida'; ?>
<?php include('header.php'); ?>
<div class="wrapper cotiza-vida" id="cotiza-vida">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div class="container">
            <h1>
                SEGUROS DE VIDA
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
                    <form action="">
                        <input type="text" placeholder="Nombre">
                        <input type="email" placeholder="Correo electrónico">
                        <input type="text" placeholder="Teléfono">
                        <div class="genero">
                            <input type="text" placeholder="Edad">
                            <p>
                                Sexo:
                            </p>
                            <p>
                                H
                            </p>
                            <input type="radio" name="gender" value="male">
                            <p>
                                M
                            </p>
                            <input type="radio" name="gender" value="female">
                        </div>
                        <select class="selectpicker" name="suma">
                            <option value="" class="hidden" disabled selected>Suma asegurada</option>
                            <option value="EJEMPLO">EJEMPLO</option>
                            <option value="EJEMPLO">EJEMPLO</option>
                            <option value="EJEMPLO">EJEMPLO</option>
                        </select>
                        <div class="autorizo">
                            <input type="checkbox" name="autorizo" value="autorizo">
                            <p>
                                Autorizo que me contacten telefónicamente o por correo
                                electrónico a través de un asesor o agente de seguros, para
                                recibir más información de los productos que aquí se
                                comercializan así como para darle seguimiento a mi cotización.
                            </p>
                        </div>
                        <div class="text-right">
                            <input type="submit" value="COTIZA">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 right-side">
                <img src="img/cotiza/seguros/bg.jpg" alt="" class="hidden-lg hidden-md hidden-sm">
                <p>
                    <span>
                        Sabemos que el bienestar de tu
                        familia
                    </span>
                    es lo más importante para ti. Por
                    eso te ofrecemos Protección Efectiva, un
                    seguro de vida fácil y accesible para que tú
                    y tu familia estén protegidos.<br><br>
                    Protección Efectiva es un seguro de vida que
                    te protege en caso de fallecimiento, invalidez
                    total y permanente y pérdidas orgánicas.<br><br>
                    Contrata ahora y podrás contar con:<br><br>
                    -Un seguro de vida a un precio accesible y
                    fácil de contratar.<br><br>
                    -Protección para tu familia en caso de que
                    llegues a faltar.<br><br>
                    -Servicios de asistencia médica para ti y tu
                    familia sin costo.<br><br>
                    -Conoce más acerca de Protección Efectiva.
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