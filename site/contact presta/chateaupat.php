<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
       <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="../images/structure.png" type="">
      <title>Planete Animation</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="../css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="../css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="../css/responsive.css" rel="stylesheet" />
   </head>
   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="../index.html"><img width="250" src="../images/Planete.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="../index.html">Acceuil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="../product.html">Prestations</a>
                        </li>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="../contact.php">Contact</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Château Pat Patrouille</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form method="post" >
                        <fieldset>
                           <!--<input type="text" placeholder="Entrer votre prénom" name="name" required />-->
                           <input type="email" placeholder="Entrer votre adresse mail" name="email" required />
                           <!--<input type="text" placeholder="Entrer votre sujet" name="subject" required />-->
                           <textarea  name="message" placeholder="Entrer votre message..." required></textarea>
                           <input type="submit" value="Envoyer" />
                        </fieldset>
                     </form>
                     <?php 
                        if (isset($_POST['message'])) {
                        $entete  = 'MIME-Version: 1.0' . "\r\n";
                        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                        $entete .= 'From: planeteanimation.000webhostapp.com' . "\r\n";
                        $entete .= 'Reply-to: ' . $_POST['email'];

                        $message = '<p>Château Pat Patrouille planeteanimation.com</p>
                        <p><b>Email : </b>' . $_POST['email'] . '<br>
                        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

                        $retour = mail('prencipelouis@gmail.com', 'Château Pat Patrouille', $message, $entete);
                        if($retour)
                        echo '<p>Votre message a bien été envoyé.</p>';
                        }
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->
      <!-- arrival section -->
      <section class="client_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Vos avis compte !
               </h2>
            </div>
            <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="../images/client.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Pauline
                           </h5>
                           <h6>
                              Château Pat Patrouille
                           </h6>
                           <p>
                              "Le château gonflable Pat Patrouille était la star de la fête d'anniversaire de mon fils! Les enfants ont adoré explorer les différentes zones de jeux et la qualité de la structure était excellente. Je recommande vivement ce château pour les fêtes d'anniversaire."
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="../images/client.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Louis
                           </h5>
                           <h6>
                              Toboggan Géant
                           </h6>
                           <p>
                              "Le toboggan géant gonflable était un hit absolu pour notre fête d'anniversaire enfants! Les enfants ont passé des heures à glisser et à s'amuser. La qualité de la structure était excellente."
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="../images/client.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Christophe
                           </h5>
                           <h6>
                              Parcours Sportif
                           </h6>
                           <p>
                              "Le parcours sportif gonflable a été un grand succès lors de notre fête de jardin! Les invités ont apprécié les défis stimulants et la qualité de la structure était très impressionnante. Je recommande fortement ce parcours sportif pour les fêtes en extérieur."
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel_btn_box">
                  <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                  <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- end arrival section -->
      <!-- footer section -->
<footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#"><img width="210" src="../images/Planete.png" alt="#" /></a>
                      </div>
                      <div class="information_f">
                        <p><strong>Adresses:</strong> 11 rue ravières, 25300 Dommartin <br>11 rue de l'hopital, 21000 Dijon</p>
                        <p><strong>Téléphones:</strong> +33 6 22 75 00 72<br>+33 7 71 86 95 85</p>
                        <p><strong>EMAIL:&nbsp;</strong> <a href="mailto:planeteanimation@gmail.com">planeteanimation@gmail.com</a></p>
                      </div>
                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="../index.html">Acceuil</a></li>
                           
                           <li><a href="../product.html">Prestation</a></li>
                           <li><a href="../contact.php">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                 
                     </div>
                  </div>     
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>Nous faire un retour</h3>
                        <div class="information_f">
                          <p>Vos commentaires nous intéressent.</p>
                        </div>
                        <div class="form_sub">
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <a href="mailto:planeteanimation@gmail.com">planeteanimation@gmail.com</a>
                                    
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer section -->
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>