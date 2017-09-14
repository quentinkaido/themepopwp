
<?php get_header();?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="wp-content/themes/popschool/front/assets/css/style.css">
  <link rel="stylesheet" href="wp-content/themes/popschool/back/css/article.css">
  <link rel="stylesheet" href="wp-content/themes/popschool/front/assets/css/hamburger.css">

  <title>CV Leroux Quentin</title>
</head>


<body>
  <!-- Première page -->
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
      <li class="red">menu 1</li>
      <li class="pink">menu 2</li>
      <li class="yellow">menu 3</li>
      <li class="green">menu 4</li>
      <li class="blue">menu 4</li>
      <li class="blue">menu 4</li>
      <li class="blue">menu 4</li>
    </ul>
  </footer>

  <div class="container-fluid">
    <div class="zeroscroll">
      <div class="firstscroll">
        <h3 class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
        <h1 class="titlehomepage02">Titre 1</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>

  <div class="container-fluid" id="iteminfo">
    <div class="row" id="menu-item">
      <div class="col menu-item">
        <div class="imgcercle">
        </div>
        <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="col menu-item">
        <div class="imgcercle">
        </div>
        <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="col menu-item">
        <div class="imgcercle">
        </div>
        <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>


  <!-- Ajout d'article -->
  <!-- titre -->
  <h2><a class="post_title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
  <!-- contenue article -->
  <div id="content">
    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
      <div class="post">
        <h2>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
        <div class="post_content"> <?php the_content(); ?>
        </div>
      </div> <?php endwhile; ?> <?php endif; ?>
    </div>
    <!-- postmetadata -->






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="wp-content/themes/popschool/front/assets/js/hamburger.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  </body>
  </html>
