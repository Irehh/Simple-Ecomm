<?php
require("db.php");
$id=$_GET['id'];
//select data from database
$select="SELECT * FROM product WHERE id='$id'";
$result=mysqli_query($conn,$select)or die("could not select");
while($row=mysqli_fetch_array($result)){
    $oldname=$row['name'];
    $oldamount = $row['amount'];
    $olddesc = $row['descp'];

}
?>
<!--update data from database-->
<?php 
if(isset($_POST['submit'])){
    $image1 = $_FILES["image1"]["name"];
        $movin = $_FILES["image1"]["tmp_name"];
        $name = $_POST["name"];
        $amount = $_POST["amount"];
        $color = $_POST["color"];
        $type = $_POST["type"];
        $desc = $_POST["desc"];
     
    // update image from folder
    include ("pathunlink.php");
    //for image upload
    move_uploaded_file($movin,"./images/".$image1);
    //update query
    $update = "UPDATE `product` SET `image`='$image1',`type`='$type',`amount`='$amount',`color`='$color',`descp`='$desc',`name`='$name' WHERE id = $id";
    
    $query =mysqli_query($conn,$update);
    if($query){
        echo"<script>
        alert('datqa update succssfully');
        window.location.href='admin.php';
        </script>";

    }
   
}
?>
 
<html>
    <head>
        <title>update data</title>
    </head>
    <body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">

<?php if(!empty($msg)){ ?>
<div class="alert <?php echo $css_class; ?>">
<?php echo $msg; ?>
 </div>
<?php } ?>

<div class="login__field">
          <input type="file" placeholder="file" name="image1" value="" required value="<?php echo "$file_name"; ?>">
      </div>

      <div class="login__field">
          <input type="name" class="login__input" placeholder="name" name="name" value="<?php echo "$oldname"; ?>">
      </div>

      <div class="login__field">
          <input type="radio" placeholder="shoe" name="type" value="shoe" checked><span>shoe</span> <br>
          <input type="radio" placeholder="bag" name="type" value="bag"><span>bag</span>
      </div>

      <div class="login__field">
          <input type="number" name="amount"
               min="1000" max="100000"  value="<?php echo "$oldamount"; ?>" required>
      </div>
      <div class="login__field">
      <textarea name="desc" rows="7" cols="30" value="<?php echo "$olddesc"; ?>"><?php echo "$olddesc"; ?></textarea>
      </div>

      <div class="login__field">
          <i class="login__icon fas fa-user"></i>
          <input type="text" placeholder="color" name="color" value="<?php echo ""; ?>">
      </div>

      <button class="button" name="submit" value="submit">
          <span> <h3> Change</h3></span>
      </button>

</form>
    </body>
</html>