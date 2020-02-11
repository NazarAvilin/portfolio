<?php

	$error = "";
	$successMsg = ""; 
	
	
    
	if ($_POST) {

         if (!$_POST['email']) {

            $error .= 'The email field is required!<br>';

        }

        if (!$_POST['subject']) {

            $error .= 'The subject field is required!<br>';

        }

        if (!$_POST['content']) {

            $error .= 'The content field is required!<br>';

        }

        if ($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= 'The email address is invalid!<br>';

        }

        if ($error != "") {

            $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>'.$error.'</div>';
            

        } else {

              $emailTo = "avilin1@outlook.com";  
              $subject = $_POST['subject'];
              $content = $_POST['content'];
              $headers = "From: ".$_POST['email'];

              if (mail($emailTo, $subject, $content, $headers)) {

               $successMsg = '<div class="alert alert-success" role="alert"><strong>Your message was sent, we\'ll get back to you ASAP!</strong></div>';

              } else {

                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - Please try again later!</div>';

              }

        }



    } else {
    	
      	unset($_POST['mail'], $_POST['subject'], $_POST['content']); 
      	$successMsg = "";
      	
    
    }


?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="google-site-verification" content="1wXoJUzMFLarXsBfsAwF-9ayI3M1mJay5NzznRlJLTs" />
    <meta name="yandex-verification" content="a2314e1cfbcd8671" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" href="tools/Logo.png">

    <title>Nazar Avilin</title>

    
  </head>
  <body data-spy="scroll" data-target="#spyScroll">

    <div class="header" id="home">    
     
      <nav class="navbar navbar-expand-md navbar-light" id="spyScroll">
        <a class="navbar-brand mr-auto" href="contact.php" id="brand"><img id="logo" src="tools/Logo.png" alt="Logo"> Nazar Avilin</a>
        <button class="navbar-toggler  justify-content-end" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo">
          <ul class="navbar-nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link text-info" href="index.html">Home<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
  </div>


  <!------------Contact Me------------>

  <section class="jumbotron center" id="contactMe">
    <h1 class="conatcts display-4 center title">Conatct Me</h1>

    <div class="d-flex flex-column bd-highlight mb-3">
     <a href="https://outlook.live.com/mail/0/inbox" target="_blank"> 
       <div class="p-2 bd-white">
         <img src="tools/email.jpg" class="rounded-circle float-left email-image" alt="My Email Address">
         <span><h3 class="float-left p-1 my-email"> avilin1@outlook.com</h3></span>
       </div>
     </a>
    </div>
    <div class="d-flex flex-column bd-highlight mb-3">
         <a href="#"> 
           <div class="p-2 bd-white">
             <img src="tools/email.jpg" class="rounded-circle float-left email-image" alt="My Email Address">
             <span><h3 class="float-left p-1 my-email">info@nazaravilin.tk</h3></span>
           </div>
         </a>
    </div>

    <hr>

    <div class="container center">

      <h1 class="write-me title">Get in touch!</h1>

      <div id="error"><?php echo $error.$successMsg; ?></div>

      <form method="POST">
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label text-left title">Email address</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
            </div>
          </div>

          <div class="form-group row">
            <label for="subject" class="col-sm-2 col-form-label text-left title">Subject</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="subject" name="subject">
            </div>
          </div>
          
          
          <div class="form-group row">
            <label for="content" class="col-sm-2 col-form-label text-left title">Your Message</label>
            <div class="col-sm-8">
              <textarea class="form-control" id="content" rows="7" name="content"></textarea>
            </div>
          </div>

          <button type="submit" class="btn btn-primary col-sm-2 title">Send</button>

        </form>

    </div>

    <hr>

    <div class="row size-me center">
      <a href="https://github.com/NazarAvilin" target="_blank">
        <img src="tools/github-icon.png" alt="My GitHub" class="rounded-circle float-left">
      </a>
      <a href="https://www.linkedin.com/in/nazar-avilin-669142180/" target="_blank">
        <img src="tools/linkedin-icon.png" alt="My Linkedin" class="rounded-circle float-left">
      </a>
      <a href="https://my.indeed.com/p/nazara-wqhax6e/profile" target="_blank">
        <img src="tools/indeed.png" alt="My indeed" class="rounded-circle float-left">
      </a>
      <a href="https://www.facebook.com/profile.php?id=100041841724500&ref=bookmarks" target="_blank">
        <img src="tools/facebook.png" alt="My facebook" class="rounded-circle float-left">
      </a>
      <a href="https://twitter.com/NezarAvilin" target="_blank">
        <img src="tools/twitter.png" alt="My facebook" class="rounded-circle float-left">
      </a>  
    </div>
    
  </section>

  
  
    
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript">
    
        $('form').submit( function(){

            var error = '';
            
            if ($('#email').val() == '') {

                error += 'The email field is required!<br>';

            }

            if ($('#subject').val() == '') {

                error += 'The subject field is required!<br>';

            }

            if ($('#content').val() == '') {

                error += 'The content field is required!<br>';

            }

            if (error != '') {

                $('#error').html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>'+error+'</div>');
                return false;

            } else {

                return true;

            }

        });

    
    </script>
  
  </body>
</html>