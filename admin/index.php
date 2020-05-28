<?php

include("../db.php");
session_start();


if(isset($_POST['submit']))
{
  $product_name=$_POST['product_name'];
  $details=$_POST['details'];
  $price=$_POST['price'];
  $c_price=$_POST['c_price'];
  $product_type=$_POST['product_type'];
  $brand=$_POST['brand'];
  $tags=$_POST['tags'];
  $picture_name=$_FILES['picture']['name'];
  $picture_type=$_FILES['picture']['type'];
  $picture_tmp_name=$_FILES['picture']['tmp_name'];
  $picture_size=$_FILES['picture']['size'];

  if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
  {
    if($picture_size<=50000000)
    
       $pic_name=time()."_".$picture_name;
      move_uploaded_file($picture_tmp_name,"../product_images/".$pic_name);
      mysqli_query($con,"insert into products (product_cat, product_brand,product_title,product_price, product_desc, product_image,product_keywords) values ('$product_type','$brand','$product_name','$price','$details','$pic_name','$tags')") or die ("query incorrect");
  }
  mysqli_close($con );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<body>
   	<div class="container" style="margin-top:30px">
    <div class="col-md-12 content" style="margin-left:10px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#c9d6df">
	<h1>Add Product  </h1></div>
	<div class="panel-body" style="background-color:#c9d6df;">
		<div class="col-lg-6">
        <div class="well">
        <form action="index.php" method="post" name="form" enctype="multipart/form-data">
        <p>Title</p>
        <input class="form-control" type="text" name="product_name" id="product_name" autofocus style="width:100%" placeholder="Product Name" required>
      <p>Description</p>
      <textarea class="thumbnail form-control" name="details" id="details" style="width:100%; height:90px" placeholder="Write Description" required></textarea>
      <p>Add Image</p>
      <div style="background-color:#CCC">
      <input type="file" style="width:100%" name="picture" class="btn thumbnail" id="picture" >
      </div>
      </div>
      <div class="well">
      <h3>Enter Product Price</h3>
      <div class="input-group">
            <div class="input-group-addon">Rs</div>
            <input type="text" class="form-control" name="price" id="price"  placeholder="0.00" required>
          </div><br>


          </div>
              </div>  
    <div class="col-lg-6">
    <div class="well">
      <h3>Category</h3>  
      <p>Product type</p>
      <input type="number" name="product_type" id="product_type" class="form-control" placeholder=" Enter Category ID">
      <br>
      <p>Vendor / Brand</p>
      <input type="number" name="brand" id="brand" class="form-control" placeholder="Enter Brand ID">
      <br>
      <p>Other tags</p>
      <input type="text" name="tags" id="tags" class="form-control" placeholder="Add tags">
</div>          
</div>

<div>
    <button type="submit" name="submit" id="submit" class="btn btn-primary" style="margin-left:15px"> Add Product</button>
    </div>
        </form>
	</div>
</div></div></div>
<script src="style/js/jquery-1.11.1.min.js"></script>
<script src="style/js/bootstrap.min.js"></script>
</body>
</html>