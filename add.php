<?php include 'database.php'; 
?>
<?php 
if (isset($_POST['submit'])){
    $title=$_POST['title'];
    $texta=$_POST['texta'];
    $query="INSERT INTO articles (title, texta) VALUES ('$title','$texta')";
    $insert=$mysqli->query($query);
    

}
$query="SELECT * FROM articles";
$resault=$mysqli->query($query);
$total=$resault->num_rows;
$next=$total+1;



?>
<?php include 'header.php'; ?>
<div class="container">
      <button type="button" class="btn btn-success" onclick="location.href='admin.php'">back</button>

            <h1>enter new article</h1>
            <form action="#" method="post">
                <label>Enter your command</label></br>
              <input type="text" name="title" style="width: 25%;"/></br>
              <label>article</label></br>
                <textarea name="texta" cols="70" rows="10"></textarea></br></br>  
              <input type="submit" name="submit" value="Add" />
            </form>
</div>
            
<?php include 'footer.php'; ?>
