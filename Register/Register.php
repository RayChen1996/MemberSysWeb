<?php
//session 
?>





<form class="row g-3">
  <div class="col-12">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail">
  </div>

  <div class="col-12">
    <label for="inputName" class="form-label">姓名</label>
    <input type="text" class="form-control" id="inputName" placeholder="">
  </div>

  <div class="col-12">
    <label for="inputPhone" class="form-label">手機</label>
    <input type="text" class="form-control" id="inputPhone" placeholder="0918-XXX-XXX">
  </div>


  <div class="col-12">
    <label for="inputPassword" class="form-label">密碼</label>
    <input type="password" class="form-control" id="inputPassword">
  </div>

  <div class="col-12">
    <label for="inputCFPassword" class="form-label">確認密碼</label>
    <input type="password" class="form-control" id="inputCFPassword">
  </div>


   
 
  <div class="col-12">
    <button type="submit" onclick='RegSys()'  id="liveAlertBtn" class="btn btn-primary" >註冊</button>
  </div>
</form>


<script>

function RegSys(){

  let Member = {
    Email:'',
    Name:'',
    Phone:'',
    Password:'',
    ConfirmPassword:''    
  }


  Member.Email = $("#inputEmail")
  Member.Name = $("#inputEmail")
  Member.Phone = $("#inputEmail")
  Member.Password = $("#inputEmail")
  Member.ConfirmPassword = $("#inputEmail")

  if(Member.Password !=  Member.ConfirmPassword){
    main_page.ShowAlert("","");
    return
  }






}








</script>