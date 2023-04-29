<?php
   $firsname = $name = $email = $telephone = $message ="";
   $firsnameError = $nameError = $emailError = $telephoneError = $messageError ="";
   if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
    $firsname = verifyinput($_POST["firsname"]);
    $firsname = verifyinput($_POST["name"]);
    $firsname = verifyinput($_POST["email"]);
    $firsname = verifyinput($_POST["telephone"]);
    $firsname = verifyinput($_POST["message"]);

    if (empty($firsname) )
      {
         $firsnameError= "je veux connaitre votre nom";
      }
    if (empty($name))
       {
         $nameError= "je veux tout savoir même ton nom."; 
       }

       if (empty($message))
       {
         $messageError= "que veux tu nous dires"; 
       }
       if (! (isemail($email)))
       {
          $emailError= "c' est pas un email ca" ;  
       }
   }
   function isemail($var)
   {
      return filter_var($var,FILTER_VALIDATE_EMAIL);
   }
   function verifyinput($var)
   {
    $var=trim($var);
    return $var;
   }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/Styles.css">

    <title>Contactez-Moi !</title>
</head>
<body >

 
     <div class="container">
        <div class="divider"></div>
        <div class="heading">
            <h2>contatez-moi</h2>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 "> 
                <form  id="contact_form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firsname">Prénom <span class="blue"> *</span></label> <br>
                            <input type="text" id="firsname" name="firsname"   class="form-control" placeholder="Votre prénom" 
                            value="  <?php echo $firsname; ?> ">
                            <p class="comment"> <?php Echo $firsnameError ?> </p>
                        </div>

                        <div class="col-md-6">
                            <label for="name">Nom <span class="blue"> *</span></label>
                            <input type="text" id="name" name="name"   class="form-control" placeholder="Votre nom"
                            value=" <?php echo $name; ?> ">
                            <p class="comment"> <?php echo $nameError; ?> </p>
                        </div>

                        <div class="col-md-6">
                            <label for="email">Email<span class="blue"> *</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Votre email"
                            value=" <?php echo $email; ?>" >
                            <p class="comment"><?php echo $emailError; ?></p>
                        </div>
                        <div class="col-md-6">
                            <label for="telephone">Télephone</label>
                            <input type="tel" id="tel" name="tel" class="form-control" placeholder="Votre telephone"
                            value=" <?php echo $telephone; ?>" >
                            <p class="comment"><?php echo $telephoneError; ?></p>
                        </div>

                        <div class="col-md-12">
                            <label for="mesage">Message <span class="blue"> *</span></label><br>
                            <textarea id="message" name="message"  placeholder="Votre message" rows="4" cols="" class="form-control"
                             ><?php echo $message; ?></textarea>
                            <p class="comment"><?php echo $messageError; ?></p>
                        </div>

                        <div class="col-md-12">
                            <p class="blue"> <strong>* Ces informations sont requises</strong></p>
                        </div>

                        
                        <div class="col-md-12">
                            <input type="submit"  value="Envoyer"  class="button">
                        </div>
                    </div>

                    <p class="merci">Votre message a bien été envoyé. Merci de m' avoir contater :)</p>

                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
     </div>


     <script src="CSS/bootstrap.js"></script>
    
</body>
</html>
