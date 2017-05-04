<?php include 'database.php'; 
?>
<?php 
if (isset($_POST['submit'])){
    $mail=$_POST['mail'];
    $pass=$_POST['pass'];
    $query="INSERT INTO users (email, pass) VALUES ('$mail','$pass')";
    $insert=$mysqli->query($query);
    

}
$query="SELECT * FROM articles";
$resault=$mysqli->query($query);

?>
<?php include 'header.php'; ?>
<div class="container">
      <button type="button" class="btn btn-success" onclick="location.href='admin.php'">back</button>

            <h1>create new account</h1>
            <form action="#" method="post">
                <label>enter your email</label></br>
              <input type="text" name="mail" style="width: 25%;" required="" autofocus="" /></br>
              <label>enter password</label></br>
                <input type="password" name="pass" required=""> </br></br>  
              <input type="submit" name="submit" value="Add" />
            </form>
</div>
            
<?php include 'footer.php'; ?>
