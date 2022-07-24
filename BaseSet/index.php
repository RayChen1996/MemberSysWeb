<?php
?>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">加入會員時間</label>
    <div class="col-sm-10">
    <input type="text" readonly class="form-control-plaintext" id="staticJoinDate" value="2022/07/10">
      <!-- <input type="password" class="form-control" id="inputPassword"> -->
    </div>
  </div>


  <hr>



  <form class="row g-3">


<div class="text-center">
  <img src="./img/NoPhoto.jpg" class="rounded" alt="pic">
</div>
    <div>
        <label for="formFileLg" class="form-label">大頭照</label>
        <input class="form-control form-control-lg" id="formFileLg" type="file">
    </div>



  <div class="col-12">
    <label for="inputName" class="form-label">姓名</label>
    <input type="text" class="form-control" id="inputName" placeholder="Name">
  </div>

  <div class="col-12">
    <label for="inputEnName" class="form-label">英文姓名</label>
    <input type="text" class="form-control" id="inputEnName" placeholder="Eng Name">
  </div>
 
  <div class="col-12">
    <label for="inputAddress" class="form-label">地址</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
 
  <div class="col-12">
    <label for="inputPhone" class="form-label">手機</label>
    <input type="text" class="form-control" id="inputPhone">
  </div>



  <div class="col-6">
    <label for="inputState" class="form-label">性別</label>
    <select id="inputState" class="form-select">
      <option selected>男</option>
      <option>女</option>
    </select>
  </div>



  <div class="col-6">
    <label for="inputZip" class="form-label">生日</label>
    <input type="text" name="date" class="form-control datepicker" value="02-16-2012">
  </div>



  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        是否訂閱電子報
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">儲存</button>
  </div>
</form>










<script>
  $('.datepicker').datepicker()
</script>