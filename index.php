<?php get_header();?>

<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="wp-content/themes/popschool/front/assets/css/style.css">
  <link rel="stylesheet" href="wp-content/themes/popschool/back/css/article.css">
  <link rel="stylesheet" href="wp-content/themes/popschool/front/assets/css/mediaquery.css">
  <link rel="stylesheet" href="wp-content/themes/popschool/front/assets/css/formulaire.css">
  <link rel="stylesheet" href="wp-content/themes/popschool/front/assets/css/particle.css">
  <title>CV Leroux Quentin</title>
</head>

<body>

  <!-- Première page -->
  <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?> <?php endwhile; ?> <?php endif; ?>

  <div id="particles-js"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div id="txt_header">
          <br><br><br>
          <img class="logopop" src="wp-content/themes/popschool/front/assets/img/pop.svg" alt="logo">
          <div class="titlehomepage01">
          </div>
          <h1>PopSchool, fabrique du numérique</h1>
          <h4>Site en construction, revenez plus tard !</h4>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <ul class="test">
      <button id="btn_home" name="singlebutton" class="btn btn-primary red"><p class="txt_btn_home">Formations</p></button>
      <button id="btn_home" name="singlebutton" class="btn btn-primary pink"><p class="txt_btn_home">Formations</p></button>
      <button id="btn_home" name="singlebutton" class="btn btn-primary yellow"><p class="txt_btn_home">Formations</p></button>
      <button id="btn_home" name="singlebutton" class="btn btn-primary green"><p class="txt_btn_home">Formations</p></button>
      <button id="btn_home" name="singlebutton" class="btn btn-primary blue"><p class="txt_btn_home">Formations</p></button>
      <button id="btn_home" name="singlebutton" class="btn btn-primary blue"><p class="txt_btn_home">Formations</p></button>
      <button id="btn_home" name="singlebutton" class="btn btn-primary blue"><p class="txt_btn_home">Formations</p></button>
    </ul>
  </footer>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="zeroscroll">
          <div class="firstscroll">
            <div id="content"> </div>
            <h3 class="description"><?php the_content(); ?></h3>
          </div>


          <div class="row">
            <div class="col-md-12 center">
              <h1 class="titlehomepage02"><?php the_title(); ?></h1>
              <p><?php the_content(); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" id="iteminfo">
    <div class="row" id="menu-item">
      <div class="col-md-3 menu-item">
        <div class="imgcercle">
        </div>
        <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="col-md-3 menu-item">
        <div class="imgcercle">
        </div>
        <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="col-md-3 menu-item">
        <div class="imgcercle">
        </div>
        <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="zeroscroll">
      <div class="firstscroll_02">
        <h3 class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="img_replacement">
          <p>img 100%*400px</p>
        </div>
        <div class="btnforinscri">
          <button  id="btn_inscri" name="singlebutton" class="btn btn-primary pink"><a data-target='#create_student' data-toggle='modal'><i class="glyphicon glyphicon-plus" >
            <p class="btn_inscri" id=>Inscription en ligne</p>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid" id="iteminfo">
    <div class="row" id="menu-item">
      <div class="col-md-3 menu-item">
        <div class="imgcercle">
        </div>
        <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="col-md-3 menu-item">
        <div class="imgcercle">
        </div>
        <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="col-md-3 menu-item">
        <div class="imgcercle">
        </div>
        <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>







  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <!-- <script type="text/javascript" src="wp-content/themes/popschool/front/assets/js/hamburger.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="wp-content/themes/popschool/front/assets/js/particles.js-master/particles.js"></script>
  <script src="wp-content/themes/popschool/front/assets/js/particles.js"></script>
</body>
</html>
