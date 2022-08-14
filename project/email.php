<?php
$sub = "your subject";
$msg = 'message';
$rec = 'jalenvapers@gmail.com';
$mail_sent = mail($rec,$sub,$msg);
if($mail_sent){
    echo '<script type = "text/javascript">alert("Message sent. Thank you We will contact you shortly!)</script>"';
} else { 
    echo '<script type="text/javascript">alert("Submission failed try again")</script>';

}


?>
<?php

if (isset($_POST['submit'])){

    $mailto = "jalenvapers@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['fname'];
    $address = $_POST['add'];
    $time = $_POST['time'];
    $muse = $_POST['museum'];
    $subject2 = "Your message Submitted Successfully";
    $message = "Client Name: ". $name. "Wrote the following";
    $message2 = "Dear ". $name. "Thank you for contacting us! We'll get back to you shortly";
    $headers = "From: ". $from;
    $headers2 = "From: ". $mailto;
    $result = mail($mailto, $message, $headers);
    $result2 = mail($from, $subject2, $message2, $headers2);

    if($result){
        echo '<script type = "text/javascript">alert("Message sent. Thank you We will contact you shortly!)</script>"';
    } else { 
        echo '<script type="text/javascript">alert("Submission failed try again")</script>';

    }
}
?>