<?php $page = 'cotiza-seguro'; ?>
<?php include('header.php'); ?>
<div class="wrapper cotiza-seguro auto" id="cotiza-seguro auto">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div class="container">
            <h1>
                Seguro de Auto
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
                    <img src="img/index/icons/car.png" alt="">
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
                        <div class="col-sm-6 left-side">
                            <input type="text" name="marca" id="marca" placeholder="Marca" required="">
                        </div>
                        <div class="col-sm-6 right-side">
                            <input type="text" name="modelo" id="modelo" placeholder="Modelo" required="">
                        </div>
                        <div class="col-sm-6 left-side">
                            <input type="number" name="year" id="year" placeholder="Año" required="">
                        </div>
                        <div class="col-sm-6 right-side">
                            <input type="text" name="serie" id="serie" placeholder="Numero de Serie" required="">
                        </div>
                        <input type="text" name="desc" id="desc" placeholder="Descripción del Vehículo" required="">
                        <div class="tool-tip">
                            <span href="#" data-toggle="tooltip" title="Una descripción breve del vehiculo (Ej. Chevrolet Malibu LTZ)">
                                *¿Descripción?
                            </span>
                        </div>
                        <div class="opciones">
                            <div class="col-xs-12">
                                <p>
                                    Transmisión:
                                </p>
                                <p>
                                    Aut.
                                </p>
                                <input type="radio" name="trans" id="trans1" value="automatico" required="">
                                <p>
                                    Std.
                                </p>
                                <input type="radio" name="trans" id="trans2" value="standar">
                            </div>
                            <div class="col-xs-12">
                                <p>
                                    Eléctrico:
                                </p>
                                <p>
                                    Si
                                </p>
                                <input type="radio" name="elect" id="elect1" value="si" required="">
                                <p>
                                    No
                                </p>
                                <input type="radio" name="elect" id="elect2" value="no">
                            </div>
                            <div class="col-xs-12">
                                <p>
                                    A/C:
                                </p>
                                <p>
                                    Si
                                </p>
                                <input type="radio" name="ac" id="ac1" value="si" required="">
                                <p>
                                    No
                                </p>
                                <input type="radio" name="ac" id="ac2" value="no">
                            </div>
                            <div class="col-xs-12">
                                <p>
                                    Nacional
                                </p>
                                <input type="radio" name="nacional" id="nacional1" value="nacional" required="">
                                <p>
                                    Fronterizo
                                </p>
                                <input type="radio" name="nacional" id="nacional2" value="fronterizo">
                            </div>
                        </div>
                        <input type="text" name="estado" id="estado" placeholder="Estado" required="">
                        <div class="col-sm-6 left-side">
                            <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" required="">
                        </div>
                        <div class="col-sm-6 right-side">
                            <input type="number" name="cp" id="cp" placeholder="Código Postal" required="">
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
                        <div class="text-right">
                            <input type="hidden" name="bttnAuto">
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
                <img src="img/cotiza/seguros/bg.jpg" alt="" class="hidden-lg hidden-md hidden-sm">
                <p>
                    <span>Porque sabemos que te interesa proteger tu patrimonio, </span>
                    te ofrecemos protección a la medida para que evites sorpresas y
                    gastos imprevistos que afecten tu economía. Con nuestras coberturas
                    a la medida tu auto estará seguro a donde quiera que vayas.
                </p>
                <table>
                    <tr>
                        <th>COBERTURAS</th>
                        <th>PLANES</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Básica</td>
                        <td>Intermedia</td>
                        <td>Completa</td>
                    </tr>
                    <tr>
                        <td>Daños materiales</td>
                        <td>No aplica</td>
                        <td>No aplica</td>
                        <td>Aplica</td>
                    </tr>
                    <tr>
                        <td>Robo total</td>
                        <td>No aplica</td>
                        <td>Aplica</td>
                        <td>Aplica</td>
                    </tr>
                    <tr>
                        <td>Responsabilidad Civil por daños a terceros</td>
                        <td>Aplica</td>
                        <td>Aplica</td>
                        <td>Aplica</td>
                    </tr>
                    <tr>
                        <td>Gastos Médicos Ocupantes</td>
                        <td>Aplica</td>
                        <td>Aplica</td>
                        <td>Aplica</td>
                    </tr>
                    <tr>
                        <td>Defensa Legal</td>
                        <td>Aplica</td>
                        <td>Aplica</td>
                        <td>Aplica</td>
                    </tr>
                    <tr>
                        <td>Servicios de Asistencia</td>
                        <td>Aplica</td>
                        <td>Aplica</td>
                        <td>Aplica</td>
                    </tr>
                    <tr>
                        <td>Responsabilidad Civil personas en exceso</td>
                        <td>Aplica</td>
                        <td>Aplica</td>
                        <td>Aplica</td>
                    </tr>
                    <tr>
                        <td>Accidentes automovilisticos al conductor</td>
                        <td>Opcional</td>
                        <td>Opcional</td>
                        <td>Opcional</td>
                    </tr>
                    <tr>
                        <td>Extención de responsabilidad civil</td>
                        <td>Opcional</td>
                        <td>Opcional</td>
                        <td>Opcional</td>
                    </tr>
                    <tr>
                        <td>Auto sustituto</td>
                        <td>No aplica</td>
                        <td>Opcional</td>
                        <td>Opcional</td>
                    </tr>
                </table>
                <p>
                    <br>
                    <br>
                    <span class="bold">¿Que hacer en caso de un siniestro?</span>
                    <br>
                    A pesar de que manejemos correctamente, no estamos
                    excentos a estar involucrado en un choque, por eso
                    es importante seguir los siguientes consejos.
                    <br>
                    <br>
                    - Mantén la calma y asegúrate que estés bien
                    fisicamente.
                    <br>
                    - No intentes negociar sin los ajustadores.
                    <br>
                    - Marca al 01 800 que corresponde a tu poliza para
                    notificar a los ajustadores el lugar exacto del
                    siniestro.
                    <br>
                    <br>
                    Al momento de reportar el siniestro tenga a
                    la mano los siguientes datos:<br>
                    • No. de póliza.<br>
                    • Fecha de vigencia de la póliza.<br>
                    • Nombre del asegurado.<br>
                    <br>
                    Al proporcionar dicha información permitirá que
                    nuestros ajustadores actúen rápidamente y le
                    ofrezcan un mejor servicio.
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