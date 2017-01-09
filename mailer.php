<?php
if (!function_exists('http_response_code'))
{
    function http_response_code($code = NULL)
    {
        if ($code !== NULL)
        {
            switch ($code)
            {
                case 100: $text = 'Continue'; break;
                case 101: $text = 'Switching Protocols'; break;
                case 200: $text = 'OK'; break;
                case 201: $text = 'Created'; break;
                case 202: $text = 'Accepted'; break;
                case 203: $text = 'Non-Authoritative Information'; break;
                case 204: $text = 'No Content'; break;
                case 205: $text = 'Reset Content'; break;
                case 206: $text = 'Partial Content'; break;
                case 300: $text = 'Multiple Choices'; break;
                case 301: $text = 'Moved Permanently'; break;
                case 302: $text = 'Moved Temporarily'; break;
                case 303: $text = 'See Other'; break;
                case 304: $text = 'Not Modified'; break;
                case 305: $text = 'Use Proxy'; break;
                case 400: $text = 'Bad Request'; break;
                case 401: $text = 'Unauthorized'; break;
                case 402: $text = 'Payment Required'; break;
                case 403: $text = 'Forbidden'; break;
                case 404: $text = 'Not Found'; break;
                case 405: $text = 'Method Not Allowed'; break;
                case 406: $text = 'Not Acceptable'; break;
                case 407: $text = 'Proxy Authentication Required'; break;
                case 408: $text = 'Request Time-out'; break;
                case 409: $text = 'Conflict'; break;
                case 410: $text = 'Gone'; break;
                case 411: $text = 'Length Required'; break;
                case 412: $text = 'Precondition Failed'; break;
                case 413: $text = 'Request Entity Too Large'; break;
                case 414: $text = 'Request-URI Too Large'; break;
                case 415: $text = 'Unsupported Media Type'; break;
                case 500: $text = 'Internal Server Error'; break;
                case 501: $text = 'Not Implemented'; break;
                case 502: $text = 'Bad Gateway'; break;
                case 503: $text = 'Service Unavailable'; break;
                case 504: $text = 'Gateway Time-out'; break;
                case 505: $text = 'HTTP Version not supported'; break;
                default:
                    exit('Unknown http status code "' . htmlentities($code) . '"');
                    break;
            }
            $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');
            header($protocol . ' ' . $code . ' ' . $text);
            $GLOBALS['http_response_code'] = $code;
        }
        else
        {
            $code = (isset($GLOBALS['http_response_code']) ? $GLOBALS['http_response_code'] : 200);
        }
        return $code;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    //something posted
    if (isset($_POST['bttnContacto']))
    {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["mssg"]);

        // Check that data was sent to the mailer.
        if (empty($name) OR empty($message))
        {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! Ocurrió un error, intentelo nuevamente.";
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! Ocurrió un error, intentelo nuevamente.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "pedro.borunda@mixen.mx";

        // Set the email subject.
        $subject = "Contactar a $name";

        // Build the email content.
        $email_content = "Mensaje enviado desde la forma de contacto de Seguros<br><br>";
        $email_content .= "Nombre: $name<br>";
        $email_content .= "Email: $email<br><br>";
        $email_content .= "Mensaje:<br>$message<br>";

        // Build the email headers.
        $email_headers = "Content-Type: text/html; charset=UTF-8\n";
        $email_headers .= "De: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers))
        {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "¡Gracias! Su mensaje ha sido envíado.";
        }
        else
        {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Ocurrió un error, intentelo nuevamente.";
        }
    }
    
    if (isset($_POST['bttnAuto']))
    {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $lastname = strip_tags(trim($_POST["lastname"]));
        $lastname = str_replace(array("\r","\n"),array(" "," "),$lastname);
        $marca = trim($_POST["marca"]);
        $modelo = trim($_POST["modelo"]);
        $year = trim($_POST["year"]);
        $serie = trim($_POST["serie"]);
        $desc = trim($_POST["desc"]);
        $transmision = trim($_POST["trans"]);
        $electrico = trim($_POST["elect"]);
        $ac = trim($_POST["ac"]);
        $nacional = trim($_POST["nacional"]);
        $estado = trim($_POST["estado"]);
        $ciudad = trim($_POST["ciudad"]);
        $cp = trim($_POST["cp"]);
        $fecha = trim($_POST["fecha"]);
        $genero = trim($_POST["gender"]);
        if(isset($_POST["phone"]))
        {
            $tel = trim($_POST["phone"]);
        }
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

        // Check that data was sent to the mailer.
        if (empty($name) OR empty($email) OR empty($tel))
        {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! Ocurrió un error, intentelo nuevamente.";
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! Ocurrió un error, intentelo nuevamente.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "pedro.borunda@mixen.mx";

        // Set the email subject.
        $subject = "Cotizacion Auto para: $name";

        // Build the email content.
        $email_content = "Mensaje enviado desde la forma de contacto de Seguros de Auto<br><br>";
        $email_content .= "Nombre: $name $lastname<br><br>";
        $email_content .= "Email: $email<br><br>";
        $email_content .= "Telefono: $tel<br><br>";
        $email_content .= "Marca: $marca<br><br>";
        $email_content .= "Modelo: $modelo<br><br>";
        $email_content .= "Año: $year<br><br>";
        $email_content .= "Numero de Serie: $serie<br><br>";
        $email_content .= "Descripcion: $desc<br><br>";
        $email_content .= "Transmision: $transmision<br><br>";
        $email_content .= "Electrico: $electrico<br><br>";
        $email_content .= "A/C: $ac<br><br>";
        $email_content .= "Origen: $nacional<br><br>";
        $email_content .= "Estado: $estado<br><br>";
        $email_content .= "Ciudad: $ciudad<br><br>";
        $email_content .= "Codigo Postal: $cp<br><br>";
        $email_content .= "Fecha de nacimiento: $fecha<br><br>";
        $email_content .= "Genero: $genero";

        // Build the email headers.
        $email_headers = "Content-Type: text/html; charset=UTF-8\n";
        $email_headers .= "De: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers))
        {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "¡Gracias! Su mensaje ha sido envíado.";
        }
        else
        {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Ocurrió un error, intentelo nuevamente.";
        }
    }
    
    if (isset($_POST['bttnHogar']))
    {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $lastname = strip_tags(trim($_POST["lastname"]));
        $lastname = str_replace(array("\r","\n"),array(" "," "),$lastname);
        $seguro = trim($_POST["inmueble"]);
        $estado = trim($_POST["estado"]);
        $direccion = trim($_POST["direccion"]);
        $ciudad = trim($_POST["ciudad"]);
        $colonia = trim($_POST["colonia"]);
        $cp = trim($_POST["cp"]);
        $valor = trim($_POST["valor"]);
        if(isset($_POST["phone"]))
        {
            $tel = trim($_POST["phone"]);
        }
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

        // Check that data was sent to the mailer.
        if (empty($name) OR empty($email) OR empty($tel))
        {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! Ocurrió un error, intentelo nuevamente.";
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! Ocurrió un error, intentelo nuevamente.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "pedro.borunda@mixen.mx";

        // Set the email subject.
        $subject = "Cotizacion Hogar para: $name";

        // Build the email content.
        $email_content = "Mensaje enviado desde la forma de contacto de Seguros de Hogar<br><br>";
        $email_content .= "Nombre: $name $lastname<br><br>";
        $email_content .= "Email: $email<br><br>";
        $email_content .= "Telefono: $tel<br><br>";
        $email_content .= "Seguro para: $seguro<br><br>";
        $email_content .= "Estado/Municipio: $estado<br><br>";
        $email_content .= "Ciudad: $ciudad<br><br>";
        $email_content .= "Direccion: $direccion<br><br>";
        $email_content .= "Colonia: $colonia<br><br>";
        $email_content .= "Codigo Postal: $cp<br><br>";
        $email_content .= "Valor del Inmueble: $valor";

        // Build the email headers.
        $email_headers = "Content-Type: text/html; charset=UTF-8\n";
        $email_headers .= "De: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers))
        {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "¡Gracias! Su mensaje ha sido envíado.";
        }
        else
        {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Ocurrió un error, intentelo nuevamente.";
        }
    }
    
    if (isset($_POST['bttnSalud']))
    {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $fecha = trim($_POST["fecha"]);
        $genero = trim($_POST["gender"]);
        $fuma = trim($_POST["torf"]);
        $historial = trim($_POST["mssg"]);
        $tipo = trim($_POST["grupal"]);
        $asegurados = trim($_POST["asegurados"]);
        if(isset($_POST["phone"]))
        {
            $tel = trim($_POST["phone"]);
        }
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

        // Check that data was sent to the mailer.
        if (empty($name) OR empty($email) OR empty($tel))
        {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! Ocurrió un error, intentelo nuevamente.";
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! Ocurrió un error, intentelo nuevamente.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "pedro.borunda@mixen.mx";

        // Set the email subject.
        $subject = "Cotizacion Salud para: $name";

        // Build the email content.
        $email_content = "Mensaje enviado desde la forma de contacto de Seguros de Salud<br><br>";
        $email_content .= "Nombre: $name<br><br>";
        $email_content .= "Email: $email<br><br>";
        $email_content .= "Telefono: $tel<br><br>";
        $email_content .= "Fecha de nacimiento: $fecha<br><br>";
        $email_content .= "Genero: $genero<br><br>";
        $email_content .= "Fuma: $fuma<br><br>";
        $email_content .= "Historial Medico:<br>$historial<br><br>";
        $email_content .= "Tipo de Seguro: $tipo<br><br>";
        $email_content .= "Asegurados:<br>$asegurados";

        // Build the email headers.
        $email_headers = "Content-Type: text/html; charset=UTF-8\n";
        $email_headers .= "De: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers))
        {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "¡Gracias! Su mensaje ha sido envíado.";
        }
        else
        {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Ocurrió un error, intentelo nuevamente.";
        }
    }
    
    if (isset($_POST['bttnVida']))
    {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $lastname = strip_tags(trim($_POST["lastname"]));
        $lastname = str_replace(array("\r","\n"),array(" "," "),$lastname);
        $fecha = trim($_POST["fecha"]);
        $genero = trim($_POST["gender"]);
        $suma = trim($_POST["suma"]);
        if(isset($_POST["phone"]))
        {
            $tel = trim($_POST["phone"]);
        }
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        
        // Check that data was sent to the mailer.
        if (empty($name) OR empty($email) OR empty($tel))
        {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! Ocurrió un error, intentelo nuevamente.";
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! Ocurrió un error, intentelo nuevamente.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "pedro.borunda@mixen.mx";

        // Set the email subject.
        $subject = "Cotizacion Vida para: $name";

        // Build the email content.
        $email_content = "Mensaje enviado desde la forma de contacto de Seguros de Vida<br><br>";
        $email_content .= "Nombre: $name $lastname<br><br>";
        $email_content .= "Email: $email<br><br>";
        $email_content .= "Telefono: $tel<br><br>";
        $email_content .= "Fecha de Nacimiento: $fecha<br><br>";
        $email_content .= "Genero: $genero<br><br>";
        $email_content .= "Suma asegurada: $suma";

        // Build the email headers.
        $email_headers = "Content-Type: text/html; charset=UTF-8\n";
        $email_headers .= "De: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers))
        {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "¡Gracias! Su mensaje ha sido envíado.";
        }
        else
        {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Ocurrió un error, intentelo nuevamente.";
        }
    }
    else
    {
        // FAILED TO ENTER ANY IF STATEMENT
    }
}
else
{
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "Oops! Ocurrió un error, intentelo nuevamente.";
}