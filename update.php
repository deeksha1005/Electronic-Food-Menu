<title> EDIT: View Food </title>
<?php
  include("includes/header.php");
  include("includes/db.php");
  $co = db_con();

?>

<head>
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


<?php

/*
	$food_id = mysqli_real_escape_string($co,$_GET['food_id']);
	$price = mysqli_real_escape_string($co,$_GET['price']);

			$ppl="INSERT into food (food_name, price) VALUES ( '$food_name', '$price') ";
			mysqli_select_db('e-menu');
			$result=mysqli_query($co,$ppl);
			if( $result)
			{
				echo "Added successfully";
				//header("Location:view_dish.php");
			}
			else{
				echo "Error: ".$ppl."<br>";
					mysqli_error($co);
			}
			mysqli_close($co);
*/

$cat_id = $_GET['cat_id'];
$food_id = $_GET['food_id'];
$food_name = $_GET['food_name'];
$price = $_GET['price'];
$type = $_GET['type'];


$sql = "INSERT into food (cat_id, food_name,price,type) values ($cat_id,'$food_name','$price','$type')";


  if (empty($_GET["food_name"]) or empty($_GET["price"]) ) {
    echo $nameErr = "Field required !! Re-insert";
  }
  else {
    if(mysqli_query($co,$sql)){
    //$name = test_input($_POST["food_name"]);
      echo "Inserted successfully";
    }
    else {
      echo "insertion failed";
    }
  }

    //header("Location:view_dish.php");
  mysqli_close($co);

?>

 <footer class="fixed-bottom">
	  <p class="navbar-brand ml-auto text-white">
      <a href="http://localhost/e-menu/"><strong>&nbsp FOOD-TABLE</strong></a> E-menu, Copyright &copy 2018
    </p>
    <!--<p class="text-right">
        <a href='view_dish.php?'> View Dishes? &nbsp</a>
    </p> -->
  </footer>

 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>

</body>
</html>
