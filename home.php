<?php
include 'header.php';
include 'database.php';
session_start();

?>
  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">connection</h3>
        <?php 
            if (isset($_SESSION ['user'])){
               echo $_SESSION ['user'];
        }
        ?>
        <button type="button" class="btn btn-lg btn-success" onclick="location.href = 'signin.php';">sign in</button>
        <button type="button" class="btn btn-lg btn-danger" onclick="<?php session_unset();?>" >sign out</button>
        <button type="button" class="btn btn-lg btn-primary" onclick="location.href = 'signin.php';">create</button>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Marketing stuff!</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
        <p><a class="btn btn-lg btn-success" href="http://getbootstrap.com/examples/justified-nav/#" role="button">Get started today</a></p>
      </div>

      <!-- Example row of columns -->
      <div class='row'>
      <?php
           while ($disp = $conn->fetch_assoc()) :
            echo "<div class='col-lg-4'>
          <h2>".$disp['title']."</h2>
          <p>".$disp['texta']."</p>
          <p><a class='btn btn-primary' href='#' role='button'>View details »</a></p>
        </div>";
            
          endwhile
      ?>

      
        
      </div>

<?php
include 'footer.php';
?>