<?php
  include("includes/header.php");

  include("includes/db.php");
    $co = db_con();
?>

<head>
  <title> Add More Categories </title>
<style>
  .fixed-bottom{
    background-color: #e8491d;
  }
  a{
    color:white;
  }
  a:hover{
    color:black;
    font-weight:lighter;
    text-decoration: none;
  }
</style>
</head>

<div class="container text-center">
	<div class="more">

  <br>
		<form action=""  method="GET">
			Cat-Id : <input type="text" name="cat_id" value=""><br><br>
			Category Name : <input type="text" name="cat_name" value=""><br><br>
       Image:<input type ='file'><br><br>

				<!-- $return = edit_result(); -->
			<input a href="categories.php" type = "submit" name="submit" value="Update">
		</form>

	</div>
</div>



<footer class="fixed-bottom">
	<p class="navbar-brand ml-auto text-white">
		<a href="http://localhost/e-menu/"><strong>&nbsp FOOD-TABLE</strong></a> E-menu, Copyright &copy 2018
	</p>
</footer>
