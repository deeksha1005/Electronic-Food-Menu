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


<body>
  <br>
  <?php

    //$sql = "SELECT * FROM drinks";  //select query
  //$result = mysqli_query($co, $sql); //execute query
  ?>
  <div class="container text-center">
		<div class="more">

      <form action="update.php"  method="GET">
        Cat-id : <input type="text" name="cat_id">
         <input type="hidden" name="food_id">
        Name : <input type="text" name="food_name">
        Price : <input type="text" name="price">
        Type: <input type="text" name="type">
        <!-- Image:<input type ='file'>  -->

        <!-- $return = edit_result(); -->
        <input type="submit" name="submit">
      </form>

    </div>
  </div>
  


 <footer class="fixed-bottom">
    <p class="navbar-brand ml-auto text-white">
      <a href="http://localhost/e-menu/"><strong>&nbsp FOOD-TABLE</strong></a> E-menu, Copyright &copy
    </p>
  </footer>

 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>

</body>
</html>
