<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://kit.fontawesome.com/e577c3d19d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
    .container-cards{
        display: flex;
        justify-content:space-evenly;
        height:350px;
        align-items:center;
    }
    .card{
      margin-top: 20px;
      margin-left: 50px;
      width:300px;
      height:160px;
      border-radius: 30px;
      box-shadow: 2px 2px 1px black;
      transition:.1s;
    }
    .text_icon{
      padding-top:20px;
      padding-left:20px;
      font-size:1.5vw;

    }
    p{
      margin-top:20px;
      margin-bottom:0;
    }
    #number{
        margin-left:30px;
    }
    .number{
      float:right;
      font-size:2vw;
      padding-left:20px;
    }
    .card:hover{
      transform:scale(1.1);
      cursor: pointer;
      box-shadow: 3px 3px 2px black;
    }
  </style>
    <title>Sayuri International Education Ltd. Pvt.</title>
</head>

<body>
<div class="d-flex" id="wrapper">
    
    
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- /#sidebar-wrapper -->

        <!-- Drop Down Menu -->
    <div id="page-content-wrapper">
            
        @include('layouts.menu')
        <!-- Drop Down menu end -->


        <!-- page content -->
      
       
<div class="container-cards">
   
<div class="card bg-light">
      <div class="text_icon">
      <i class="fa-solid fa-face-smile"></i>
        <p>Total Students</p>
      </div>
      <div class="number"><?php
      $connection=mysqli_connect("localhost","root","","student_management_system");

      $query="SELECT course FROM students";
      $query_run=mysqli_query($connection,$query);
      $row=mysqli_num_rows($query_run);
      echo "<h1>$row</h1>";
      ?></div>
    </div>


        <div class="card bg-light">
      <div class="text_icon">
      <i class="fa-solid fa-diagram-project"></i>
        <p>Registered Students</p>
      </div>
      <div class="number" id="num"><?php
      $connection=mysqli_connect("localhost","root","","student_management_system");

      $query="SELECT id FROM exams ORDER BY id";
      $query_run=mysqli_query($connection,$query);
      $row=mysqli_num_rows($query_run);
      echo "<h1>$row</h1>";
      ?>
      </div>
    </div>


    

    
 
    <div class="card bg-light">
      <div class="text_icon">
      <i class="fa-solid fa-circle-arrow-right"></i>
        <p>Total Courses</p>
      </div>

      <h1 id="number">5</h1>
         </div> 
        
  
       
</div>

  
</div>

</div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>



</body>
</html>