<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>traitement</title>
</head>

<body>
  <?php
  $errors = [];

  if (empty($_POST['user_name'])) {
    $errors['firstname'] = 'username can\'t be empty';
  }

  if(empty($_POST['user_lastname'])) {
    $errors['lastname'] = 'lastname can\'t be empty';
  }

  if(empty($_POST['user_email'])) {
    $errors['email'] = 'email can\'t be empty';
  }

  if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
    $errors['emailFormat'] = 'Your email isn\'t at the good format';
  }

  if(empty($_POST['user_phoneNumber'])) {
    $errors['phoneNumber'] = 'phone number can\'t be empty';
  }

  if (count($errors) == 0) {
  ?>
    <p>
      Merci <?php echo $_POST['user_name'] . ' ' . $_POST['user_lastname'] ?> de nous
      avoir contacté à propos de "<?php echo $_POST['subject'] ?>". <br>
      Un de nos conseiller vous contactera soit à l'adresse <?php echo $_POST['user_email'] ?>
      ou par téléphone au <?php echo $_POST['user_phoneNumber'] ?> dans les plus brefs délais
      pour traiter votre demande : <br>
      <?php echo $_POST['user_message'] ?>
    </p>

  <?php
  } else {
    foreach($errors as $error) {
      echo nl2br($error . PHP_EOL);
    }
  }
  ?>
  <p>


  </p>
</body>

</html>