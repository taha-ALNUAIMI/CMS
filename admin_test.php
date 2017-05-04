<?php
include 'header.php';
include 'database.php';
session_start();
if (isset($_POST['submit1'])){
    $no=$_POST['nno'];
    $query="Delete  FROM articles WHERE no=".$no;
    $insert=$mysqli->query($query);
  }
$query="SELECT * FROM articles";
$conn=$mysqli->query($query) or die('error_log(message)');


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
        <button type="button" class="btn btn-lg btn-danger" onclick="location.href='home.php' " >sign out</button>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Admin Page</h1>
        <p class="lead">you can delet or add articles</p>
      </div>
      <button type="button" class="btn btn-success" onclick="location.href='add.php'">Add Articles</button>
      <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>title</th>
                <th>text</th>
                 <th>modify</th>
              </tr>
            </thead>
            <tbody>
            <?php
           while ($disp = $conn->fetch_assoc()) :
            echo "
          <form method='POST' action='admin.php'>
              <tr>
                <td width=15%><input style='width:15%;' type='text' name='nno' value=".$disp['no']."></td>
                <td>".$disp['title']."</td>
                <td>".$disp['texta']."</td>
                <td width=15%><input type='submit' name='submit1' class='btn btn-xs btn-danger' value='Delete' />
                  <input type='submit' name='submit2' class='btn btn-xs btn-info' value='Modify' /></td>
              </tr>
              </form>
        </div>";
            
          endwhile
      ?>
            </tbody>
          </table>

<?php
include 'footer.php';
?>