<?php

require_once "api/conex.php";
require_once "api/sec.php"; 

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />

    <title>Servidor Email</title>
  </head>
  <body>
  <section style="margin-top: 100px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <h5 class="card-header" style="background-color:#000;color:white">Envio de Email</h5>
                        <div class="card-body">
                            <form class="contact__form" method="post" action="mailer.php">
                                
            
   <!-- form message -->
                                                             <!-- end message -->
                                <!-- form element -->
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input name="from" type="email" class="form-control" placeholder="Desde:" required="">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="to" type="email" class="form-control" placeholder="Para:" required="">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input name="subject" type="text" class="form-control" placeholder="Asunto" required="">
                                    </div>
                                    <div class="col-12 form-group">
                                        <textarea name="message" class="form-control" rows="4" placeholder="Mensaje" required=""></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input name="submit" type="submit" class="btn btn-success" value="Enviar mensaje">
                                    </div>
                                </div>
                                <!-- end form element -->
                            </form>
                                                           </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </body>
</html>
