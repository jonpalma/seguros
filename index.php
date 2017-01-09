<?php $page = 'index'; ?>
<?php include('header.php'); ?>
<div class="wrapper index" id="index">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="container">
                    <div class="vertical-align">
                        <div class="cotiza">
                            <h2>
                                Cotiza fácil y rápido
                            </h2>
                            <p>
                                Elige tu tipo de seguro
                            </p>
                            <select class="selectpicker" name="seguro" id="selectSeguro">
                                <option value="auto">Seguro de Auto</option>
                                <option value="salud">Seguro de Salud</option>
                                <option value="vida">Seguro de Vida</option>
                                <option value="hogar">Seguro de Hogar y Negocio</option>
                            </select>
                            <button type="button" id="bttnCotiza">COTIZA</button>
                        </div>
                    </div>
                </div>
                <div class="item active">
                    <div class="img-container">
                        <img class="banner-bg" src="img/index/banner/banner1.jpg" alt="">
                        <div class="texto">
                            <p>
                                <span class="black big">EVITA PÉRDIDAS IMPREVISTAS, </span><br>
                                <span class="white small">Protege tu auto eligiendo una cobertura que se ajuste a tu presupuesto.</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img-container">
                        <img class="banner-bg" src="img/index/banner/banner2.jpg" alt="">
                        <div class="texto">
                            <p>
                                <span class="red big">AUN SIGUES SIN SEGURO DE AUTO? </span><br>
                                <span class="black small">Asegurarte es más barato y sencillo de lo que imaginas.</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img-container">
                        <img class="banner-bg" src="img/index/banner/banner3.jpg" alt="">
                        <div class="texto">
                            <p>
                                <span class="red big">PROMOCIÓN: </span>
                                <span class="white small">EN LA COMPRA DE UN SEGURO DE AUTO LLEVATE GRATIS UN SEGURO DE VIDA.</span>
                                <span class="white small">*aplican restricciones.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOSOTROS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="nosotros" id="nosotros">
        <div class="container spacing">
            <h1>
                ¿Porque asegurarte con nosotros?
            </h1>
            <p>
                Somos un broker de seguros que te asesora para elegir la
                cobertura que más se ajuste a tus necesidades y tu
                presupuesto, contamos con el respaldo de las principales
                compañias aseguradoras.
                <br>
                <br>
                <span class="bold">Nuestros principales valores son:</span>
                <br>
                <br>
                Honestidad, Ética, Responsabilidad, Confianza
            </p>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">
                        <div class="img-container">
                            <img src="img/index/icons/car.png" alt="">
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">
                        <div class="img-container">
                            <img src="img/index/icons/healt.png" alt="">
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">
                        <div class="img-container">
                            <img src="img/index/icons/fam.png" alt="">
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#tab-4" aria-controls="tab-4" role="tab" data-toggle="tab">
                        <div class="img-container">
                            <img src="img/index/icons/house.png" alt="">
                        </div>
                    </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="tab-1">
                    <h2>
                        AUTO
                    </h2>
                    <p>
                        La seguridad que necesitas para manejar siempre tranquilo.
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab-2">
                    <h2>
                        SALUD
                    </h2>
                    <p>
                        No existe mejor tratamiento que sentirte siempre protegido.
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab-3">
                    <h2>
                        VIDA
                    </h2>
                    <p>
                        Disfruta tu vida al máximo protegiéndote a ti y asegurando el
                        futuro de los que más quieres.
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab-4">
                    <h2>
                        HOGAR
                    </h2>
                    <p>
                        Proteger tu mayor patrimonio cuesta muy poco, evita sorpresas.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* SEGUROS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="seguros" id="seguros">
        <div class="container spacing">
            <!-- TOP LOGOS -->
            <div class="col-sm-4">
                <img src="img/index/seguros/general.png" alt="">
            </div>
            <div class="col-sm-4">
                <img src="img/index/seguros/inbursa.png" alt="">
            </div>
            <div class="col-sm-4">
                <img src="img/index/seguros/atlas.png" alt="">
            </div>
            <!-- BOTTOM LOGOS -->
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <img src="img/index/seguros/axa.png" alt="">
            </div>
            <div class="col-sm-4">
                <img src="img/index/seguros/ana.png" alt="">
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTANOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="contactanos-top" id="contactanos-top">
        <div class="container light-spacing">
            <h1>
                Contáctanos
            </h1>
            <p>
                Te ofrecemos atención personalizada las 24
                horas del día.
                <br>
                <br>
                Dirección de oficina: Calle 49 #1204, Col.
                Roma, C.P. 31350, Chihuahua, Chihuahua.
            </p>
            <a href="mailto:contacto@empresa.com.mx">
                contacto@empresa.com.mx
            </a>
        </div>
    </div>
    <div class="contactanos-bottom" id="contactanos-bottom">
        <div class="container light-spacing">
            <div class="form-container">
                <form action="mailer.php" method="POST" id="form">
                    <input type="text" name="name" id="name" placeholder="Nombre" required="">
                    <input type="email" name="email" id="email" placeholder="Correo electrónico" required="">
                    <textarea name="mssg" id="mssg" cols="30" rows="3" placeholder="Mensaje" required=""></textarea>
                    <input type="hidden" name="bttnContacto">
                    <input type="submit" name="form-submit" id="form-submit" value="ENVIAR">
                    <div class="form-output" id="form-output"></div>
                </form>
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