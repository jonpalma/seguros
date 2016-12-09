<?php $page = 'index'; ?>
<?php include('header.php'); ?>
<div class="wrapper index" id="index">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="container">
                    <div class="cotiza">
                        <h2>
                            Cotiza fácil y rápido
                        </h2>
                        <p>
                            Elige tu tipo de seguro
                        </p>
                        <select class="selectpicker" name="seguro" id="selectSeguro">
                            <option value="vida">Seguro de Vida</option>
                        </select>
                        <button type="button" id="bttnCotiza">COTIZA</button>
                    </div>
                </div>
                <div class="item active">
                    <div class="img-container">
                        <img class="banner-bg" src="img/index/banner/banner1.jpg" alt="">
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
                ¿QUIENES SOMOS?
            </h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.
            </p>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">
                        <div class="img-container">
                            <img src="img/index/icons/house.png" alt="">
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">
                        <div class="img-container">
                            <img src="img/index/icons/car.png" alt="">
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">
                        <div class="img-container">
                            <img src="img/index/icons/healt.png" alt="">
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#tab-4" aria-controls="tab-4" role="tab" data-toggle="tab">
                        <div class="img-container">
                            <img src="img/index/icons/fam.png" alt="">
                        </div>
                    </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="tab-1">
                    <h2>
                        DE HOGAR
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab-2">
                    <h2>
                        DE AUTO
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab-3">
                    <h2>
                        DE GASTOS MEDICOS
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab-4">
                    <h2>
                        DE VIDA
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
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
                CONTÁCTANOS
            </h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </div>
    <div class="contactanos-bottom" id="contactanos-bottom">
        <div class="container light-spacing">
            <div class="form-container">
                <form action="mailer.php" method="POST" id="contact-form">
                    <input type="text" name="name" id="name" placeholder="Nombre">
                    <input type="email" name="email" id="email" placeholder="Correo electrónico">
                    <textarea name="mssg" id="mssg" cols="30" rows="3" placeholder="Mensaje"></textarea>
                    <input type="submit" value="ENVIAR" id="form-submit">
                    <div id="contact-form-output"></div>
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