<?php 

use PHPMailer\PHPMailer\PHPMailer;
require_once 'librerias_Externas/PHPMailer.php';
require_once 'librerias_Externas/SMTP.php';

function sendMsg(){
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();                         
        $mail->Host       = 'smtp.gmail.com';                 
        $mail->SMTPAuth   = true;                              
        $mail->Username   = 'ejemplo@mail.com';            
        $mail->Password   = 'contraseña';               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
        $mail->Port       = 465;                      
    
        $mail->setFrom('email@gmail.com', 'REDO');
        $mail->addAddress('emailDestino@mail.com');
    
        $mail->Subject = 'Contexto';
        $mail->Body    = 'mensaje';
    
        $mail->send();
        echo 'Mensaje enviado';
    
    } catch (Exception $e) {
        echo "Error al enviar el mensaje";
    }
}




