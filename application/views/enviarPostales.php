
    <main class="page gallery-page">
        <section class="clean-block clean-gallery dark">
            <div class="container">
                <div class="block-heading" style="padding-top: 140px;">
                    <h2 class="text-info">Aeroméxico</h2>
                </div>
                
                
                <form action="" method= "POST">
                    <div align="center" class="row">
                    <div  class="col-md-4 col-lg-6 item">
                    <i id="iconoW" class="fab fa-whatsapp fa-5x green-text"></i> Número de WhatsApp: <input id="whats" name="whats" type="number">
                    </div>
                    <div class="col-md-4 col-lg-6 item">
                    <i id="iconoM" class="fas fa-envelope-square fa-5x red-text"></i> Mail: <input id="mensaje" name="correo" type="text">
                    </div>
</div>
<div class="row">
<div class="col-sm" align="center" id="btnenv">
                   <button id="env" class="btn btn-primary" type="submit">Enviar</button>
                    </div>
</div>
                </form>
                
                <div class="row align-items-center">
                    <div class="col-sm">
                    <br>
                    <img  class="img-thumbnail img-fluid image" id="img1" src="assets/img/factureras/em/aeromexico.jpg"></br>
                    </a></div>
                <div class="col-md-6">
                    <div class=>       
                        <p>Aeroméxico es la aerolínea de bandera mexicana con base en el Aeropuerto Internacional de la 
                        Ciudad de México; realizando vuelos directos hacia/desde México, Estados Unidos, Canadá, el Caribe, 
                        Centro y Sudamérica, Europa y Asia</p>
                    </div>
                </div>
             
                </div>
                

                <div class="block-heading">
                <h2 class="text-info">Localidad</h2>
                <p> Av. Capitán Carlos León S/N, Peñón de los Baños, Venustiano Carranza, 15620 Ciudad de México, CDMX </p>
                <p> </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13554.431622418975!2d-99.07695229381177!3d19.43344534362108!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2d07ef561bad244!2sAeropuerto%20Internacional%20de%20la%20Ciudad%20de%20M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1573708481778!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </section>
    </main>









    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
if($_POST  ){
    
    
    
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'omar1cruz2714721@gmail.com';                     // SMTP username
        $mail->Password   = 'fakiebigflip123';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to
    
        //Recipients
        $mail->setFrom('omar1cruz2714721@gmail.com', 'OmarCruz271');
        $mail->addAddress($_POST["correo"], 'Joe User');     // Add a recipient
        /*$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');
    
        // Attachments
        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    */
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Esta es una Postal de iPostal';
        $mail->Body    = 'Esta es una postal <b>FELICIDADES ESTA ES TU POSTAL</b>';
      //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

$data = [

    'phone' => '52'.$_POST["whats"], // Receivers phone
    'body' => 'Tienes una nueva postal de: , en '.$_POST["correo"].", dale un vistazo!" // Message
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
$url = 'https://eu23.chat-api.com/instance77537/sendMessage?token=ubnxw573jbpbun87';
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    
    ]
]);
$result = file_get_contents($url, false, $options);


}
?>