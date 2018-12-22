<?php
  include("includes/header.php");

  include("includes/db.php");
    $co = db_con();
?>

<head>
  <title> View Dish </title>
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


<div class="navbar navbar-expand-sm bg-dark text-light border-bottom border-dark">

<?php
  $cat_id = $_GET['cat'];
  echo "Category id: ".$_GET['cat'];
  $cat_name = $_GET['nam'];
  echo "  ---> ".$cat_name;
?>

</div>

  <br>
  <div class="row">
    <div class="col-md-2"> <strong>  &nbsp &nbsp Id </strong> </div>
    <div class="col-md-2"> <strong>  Name </strong> </div>
    <div class="col-md-2"> <strong> Price </strong> </div>
    <div class="col-md-2"> <strong> Type </strong> </div>
  </div>
  <br>


<?php

$result = getTableContent($co, $cat_id, $cat_name);

  while($row = mysqli_fetch_array($result)){
?>
      <div class="row">
        <div class="col-md-2"> <?php echo " &nbsp &nbsp".$row['food_id'];?> </div>
        <div class="col-md-2"> <?php echo $row['food_name']; ?> </div>
        <div class="col-md-2"> <?php echo $row['price']; ?> </div>
        <div class="col-md-2">
          <?php
           echo $row['type'];
           if (empty($row['type']) ) {
             echo "---";
           }
          ?>
        </div>
      </div>

  <?php
    }
  ?>


  <footer class="fixed-bottom">

    <!-- <a href='delete.php?fd=<?php //echo $row['food_id']?> '> Delete</a>  -->

    <p >
      <form action="" method="get">
        <strong>&nbsp Delete</strong> : <input type="text" name="food_id" placeholder="Enter ID">
        <input type="submit" name="submit" value="confirm">
      </form>
      <?php

      
        $food_id = $_GET['fd'];
      	$sql = "DELETE from food WHERE food_id=$food_id ";


      	if(mysqli_query($co,$sql)){
      		echo "Deleted";
      	}
      	else{
      		echo "Error";
      	}



      /*function getFoodId($co, $food_name){
      	$sql= "select * from food WHERE food_name='$food_name' ";
        $res = mysqli_query($co, $sql);
        return $res;
      }

      $res = getFoodId($co, $food_name);
      $food_id = $_GET['food_name'];

        $query = "DELETE from food where food_id=$food_id";
        if (mysqli_query($co,$query)){
          echo "Deleted";
        } */

      ?>
    </p>

  <p class="text-right">
      <a href='edit.php?'> Add more? &nbsp</a>
  </p>
  </footer>

  </body>
</html>
