<?php $page = 'cotiza-seguro'; ?>
<?php include('header.php'); ?>
<div class="wrapper cotiza-seguro salud" id="cotiza-seguro salud">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div class="container">
            <h1>
                Seguro de Salud
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
                        <input type="text" name="name" id="name" placeholder="Nombre" required="">
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
                        <input type="text" name="fecha" id="fecha" placeholder="Fecha de Nacimiento" onfocus="(this.type='date')" required="">
                        <input type="email" name="email" id="email" placeholder="Correo electrónico" required="">
                        <input type="text" name="phone" id="phone" placeholder="Lada + Teléfono" required="">
                        <div class="opciones">
                            <div class="col-xs-12">
                                <p>
                                    ¿Fuma?:
                                </p>
                                <p>
                                    Si
                                </p>
                                <input type="radio" name="torf" id="torf1" value="si" required="">
                                <p>
                                    No
                                </p>
                                <input type="radio" name="torf" id="torf2" value="no">
                            </div>
                        </div>
                        <textarea name="mssg" id="mssg" cols="30" rows="5" placeholder="Historial de enfermedades" required=""></textarea>
                        <div class="opciones">
                            <div class="col-xs-12">
                                <p>
                                    Seguro:
                                </p>
                                <p>
                                    Individual
                                </p>
                                <input type="radio" name="grupal" id="grupal1" value="individual" required="">
                                <p>
                                    Grupal
                                </p>
                                <input type="radio" name="grupal" id="grupal2" value="grupal">
                            </div>
                        </div>
                        <textarea class="asegurados" name="asegurados" id="asegurados" cols="30" rows="5" placeholder="Datos de los Asegurados: Nombre - Fecha de Nacimiento - Perentezco con el titular"></textarea>
                        <div class="text-right">
                            <input type="hidden" name="bttnSalud">
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
                    <span>Te asesoramos </span> para brindarte la cobertura que
                    mejor se ajuste a tus necesidades médicas, te brindamos el
                    apoyo que necesitas para sentirte protegido en caso de
                    enfrentar algún percance o imprevisto que ponga en riesgo tu
                    salud.
                    <br>
                    <br>
                    Contáctanos para ofrecerte una solución personalizada.
                </p>
                <img class="tabla" src="img/cotiza/tablas/salud.png" alt="">
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