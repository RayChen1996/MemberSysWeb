<?php


?>

<div class="row">

<div class="col-sm-6">
    <div class="card" style="width: 18rem;">
    <!-- <img src="..." class="card-img-top" alt="..."> -->
    <i class="fa-solid fa-bullhorn"></i>

    <!-- <span class="material-symbols-outlined font-size-150"> -->
        <!-- favorite -->
        <!-- </span> -->
    <div class="card-body ">
        
        <svg   width="200" height="100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M480 179.6C498.6 188.4 512 212.1 512 240C512 267.9 498.6 291.6 480 300.4V448C480 460.9 472.2 472.6 460.2 477.6C448.3 482.5 434.5 479.8 425.4 470.6L381.7 426.1C333.7 378.1 268.6 352 200.7 352H192V480C192 497.7 177.7 512 160 512H96C78.33 512 64 497.7 64 480V352C28.65 352 0 323.3 0 288V192C0 156.7 28.65 128 64 128H200.7C268.6 128 333.7 101 381.7 53.02L425.4 9.373C434.5 .2215 448.3-2.516 460.2 2.437C472.2 7.39 480 19.06 480 32V179.6zM200.7 192H192V288H200.7C280.5 288 357.2 317.8 416 371.3V108.7C357.2 162.2 280.5 192 200.7 192V192z"/></svg>
            
        <br>
        <hr>
        <h5 class="card-title ">
        新增活動
        </h5>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        <a href="#" class="btn btn-primary" onclick='gotoActivePage();'>前往</a>
    </div>
    </div>
</div>

<div class="col-sm-6">
    <div class="card" style="width: 18rem;">
    <!-- <img src="..." class="card-img-top" alt="..."> -->
    <!-- <i class="fa-solid fa-bullhorn"></i> -->
    <!-- <i class="fa-solid fa-user-large"></i> -->

    <!-- <span class="material-symbols-outlined font-size-150"> -->
        <!-- favorite -->
        <!-- </span> -->
    <div class="card-body ">
        


        <svg  width="200" height="100"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 288c79.53 0 144-64.47 144-144s-64.47-144-144-144c-79.52 0-144 64.47-144 144S176.5 288 256 288zM351.1 320H160c-88.36 0-160 71.63-160 160c0 17.67 14.33 32 31.1 32H480c17.67 0 31.1-14.33 31.1-32C512 391.6 440.4 320 351.1 320z"/></svg>
        
        <br>
        <hr>
        <h5 class="card-title ">
            會員資料
        </h5>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        <a href="#" class="btn btn-primary" onclick='gotoMemberPage();'>前往</a>
    </div>
  </div>

  
</div>

</div>




<script>
    function gotoActivePage(){
        $("#main_page").load("./Active/Active.php");
    }

    function gotoMemberPage(){
        $("#main_page").load("./Member/view.php");
    }



</script>