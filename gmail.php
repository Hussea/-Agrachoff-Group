<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<a class="btn btn-primary" href="index.php" role="button">обратно</a>
<div class="container">

<form method="POST" enctype="multipart/form-data">
кому <input class="form-control" type="text" name="from"/>
<br>



<button class="btn btn-outline-danger btn-block mt-3" type="submit" name="send">отправить</button>
</form>


<?php 

if(isset($_POST['send'])){
  if (empty($_POST["from"])) {
    echo 'enter gmail!';
  }else{
    require_once 'mail.php';
    $mail->setFrom('ivanovichandrei793@gmail.com', 'Agrachoff_Group');
    $mail->addAddress($_POST["from"]);
  
    
    $mail->Body    ="Привет";

    $mail->send();
 
if ($mail->send())
{
    
    echo'Сообщение отправлено';
    
}
else{
    echo 'Произошла ошибка, не отправлено.';
    
} 
  }
    
}
?>

</div>


