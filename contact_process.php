<?php
	$to = 'menztailor@gmail.com'; 
    $name = $_POST["name"];
    $email= $_POST["email"];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; 
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
    $message ='<table style="width:100%">
        <tbody><tr>
            <td>'.$name.' </td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
    </tbody></table>';
 
    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
    echo 'failed';
}
?>