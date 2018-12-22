<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Menu Category</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style>
      .text-muted{
        background-color: #e8491d;
      }
      a{
        color:black;
      }
      a:hover{
        color:black;
        font-weight:lighter;
        text-decoration: none;
      }
      span{
        color: #e8491d;
      }
    </style>
  </head>


  <body>
    <div class="navbar navbar-expand-sm  bg-dark">
      <style>
        .navbar{
          border-bottom: 3px solid #e8491d;
        }
      </style>
         <!--<div class="col-sm-4 offset-md-1 py-4">-->
       <h4 class="text-white">FOOD-TABLE &nbsp</h4>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="http://localhost/e-menu/" class="navbar-brand d-flex align-items-center text-white">
              <strong><span>Home</span></strong>
            </a>
          </li>
          <li> <a class="nav-link text-white " href="../admin_panel.php" >Admin Panel &nbsp</a> </li>
          <li> <a class="nav-link text-white" href="#" > Cashier &nbsp</a> </li>
          <li> <a class="nav-link text-white " href="#"> Records  &nbsp</a> </li>
            <!--</div>-->
        </ul>
    </div>


  <?php
    include("includes/db.php");
    $co = db_con();
  ?>

  <main role="main">
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="card-deck ">

        <?php
          $sql = "select * from Categories";
          $result = mysqli_query($co,$sql);
        ?>

          <div class="row-md-4">
            <div class="card-columns">

            <?php
              while($row = mysqli_fetch_array($result))
              {
            ?>

              <div class="card mb-4  shadow-sm ">

                <h3><?php echo $row['cat_name']; ?></h3>
                <img class="card-img-top " src="<?php echo $row['img_path']; ?>" style="width:100%">
                <div class="card-body ">
                  <div class="btn-group">
                    <a href='view_dish.php?cat=<?php echo $row['cat_id']?>&nam=<?php echo $row['cat_name']?>'> View</a>
                  </div>&nbsp &nbsp
                </div>
              </div>


            <?php
              }
            ?>


          </div>
        </div>

        </div>
      </div>
    </div>
  </main>


    <footer class="text-muted ">
        <p class="float-right ">
          <a href="category.php ">Back to top &nbsp</a>
        </p>
        <p ><a href="more_categories.php">&nbsp Add more categories?</a></p>
        <p class="navbar-brand text-white ">
          <a href="food"><strong>&nbsp FOOD-TABLE</strong></a> E-menu, Copyright &copy 2018
        </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

  </body>
</html>
