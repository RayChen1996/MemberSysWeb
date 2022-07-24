<?php
  include("./DB/dbconn.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>歡迎光臨！會員系統</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css"> -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

    <!-- DateTimePicker -->
    <link href="./jslib/Jquery_Plug/DateTimePicker/jquery.datetimepicker.css" rel="stylesheet" />
    <script src="./jslib/Jquery_Plug/DateTimePicker/jquery.datetimepicker.full.min.js"></script>
  
    <link rel="stylesheet" href="./jslib/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="./jslib/jquery-ui/jquery-ui.structure.css">
    <script src="./jslib/jquery-ui/jquery-ui.js"></script>
    <script src="index.js"></script>
 </head>
  <body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">
                歡迎！X X 系統
            </span>
          </a>
    
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">首頁</a></li>
         
            <li class="nav-item"><a href="#" class="nav-link">註冊</a></li>
            <li class="nav-item"><a href="#" class="nav-link">登入</a></li>
            <li class="nav-item"><a href="#" class="nav-link">個人</a></li>
          </ul>
        </header>
      </div>


      
      <div id='navgationBar' class="container">
        

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">首頁</a></li>
              <li class="breadcrumb-item active" aria-current="page">主畫面</li>
            </ol>
          </nav>

      </div>


      <div id='main_page' class="container">
        
      </div>

      <div class="container fixed-bottom d-flex justify-content-center">
            CopyRight©2022  All Rights Reserved. ver 1.0.0
      </div>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- <script src=“https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>   -->


</body>
</html>

<script>
    $(function(){
        $("#main_page").load("./HomePage/home.php");
    })
</script>