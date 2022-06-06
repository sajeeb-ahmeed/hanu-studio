<!-- <?php
  if(isset($_POST['name'])){

    $to = 'balajichoudary@gmail.com';

    $subject = 'Mail From Website';

    $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = '<html><body>';
    $message .= '<h1>Message from Websibte</h1>';
    $message .= '<h4><b>NAME: </b>'.strip_tags($_POST['name']).'</h4>';
    $message .= '<h4><b>EMAIL: </b>'.strip_tags($_POST['email']).'</h4>';
    $message .= '<h4><b>WEBSITE: </b>'.strip_tags($_POST['website']).'</h4>';
    $message .= '<h4><b>MESSAGE: </b><p>'.strip_tags($_POST['message']).'</p></h4>';
    $message .= '</body></html>';

    $a = mail($to, $subject, $message, $headers);

    if ($a === 1) {
    	echo "Sending Successful!";
    }else{
    	echo $to." ".$_POST['email']." ".$_POST['name']." ".$_POST['website']." ".$_POST['message'];
    	echo "Sending Failed!!!";
       
    }

  }
?> -->