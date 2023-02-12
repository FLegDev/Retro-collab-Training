<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIW 52 - 54 retrogames</title>
  <?php wp_head( )?>
  </head>
<body>

<nav class="navbar">
  <div class="navbar-container">
    <!-- Autres éléments de la barre de navigation -->
    <?php if ( is_active_sidebar( 'mynavbar' ) ) : ?>
      <div class="navbar-widget-area">
        <?php dynamic_sidebar( 'mynavbar' ); ?>
      </div>
    <?php endif; ?>
  </div>
</nav>