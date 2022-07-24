<?php

?>

<div class="d-flex justify-content-around">

    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal" data-bs-whatever="@mdo">新增活動</button>
    <!-- <button type="button" class="btn btn-primary">編輯</button> -->
    <!-- <button type="button" class="btn btn-danger">刪除</button> -->
</div>
<hr>


<div class="Edit">
    <form class="row g-3">
    <div class="col-12">
        <label for="exampleInputEmail1" class="form-label">活動名稱</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
    </div>
    <div class="col-md-6">
        <label for="exampleInputPassword1" class="form-label">開始日期</label>
        <input type="text" name="date" class="form-control datepicker" value="02-16-2012">
    </div>
    <div class="col-md-6">
    <label for="exampleInputPassword1" class="form-label">結束日期</label>
        <input type="text" name="date" class="form-control datepicker" value="02-16-2012"> 
    </div>
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    <button type="button" class="btn btn-primary">查詢</button>
    </form>
</div>

<hr>
<table class="table">
  <thead>
    <tr>
     
      <th scope="col">活動名稱</th>
      <th scope="col">活動日期</th>
      <th scope="col">操作</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <td>Mark</td>
      <td>Otto</td>
      <td>
        <button type="button" class="btn btn-info"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">編輯</button>
        |
        <button type="button" class="btn btn-danger">刪除</button>
      </td>
    </tr>
    <tr>
     
      <td>Jacob</td>
      <td>Thornton</td>
      <td>
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">編輯</button>
        |
        <button type="button" class="btn btn-danger">刪除</button>
      </td>
    </tr>

  </tbody>
</table>




<!-- 新增框 -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">新增活動</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">名稱:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>


          <div class="mb-3">
            <label for="message-text" class="col-form-label">日期:</label>
            <input type="text" name="date" class="form-control datepicker" value="02-16-2012"> 
          </div>



          <div class="mb-3">
            <label for="message-text" class="col-form-label">地點:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>

          <div class="mb-3">
            <label for="message-text" class="col-form-label">費用:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>


          <div class="mb-3">
            <label for="message-text" class="col-form-label">參與人員:</label>
            <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
          </div>







        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">新增活動</button>
      </div>
    </div>
  </div>
</div>






<!-- 編輯框 -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">編輯活動</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">名稱:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">日期:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>



          <div class="mb-3">
            <label for="message-text" class="col-form-label">地點:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>

          <div class="mb-3">
            <label for="message-text" class="col-form-label">費用:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>


          <div class="mb-3">
            <label for="message-text" class="col-form-label">參與人員:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>





        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-primary">修改</button>
      </div>
    </div>
  </div>
</div>


<script>
    function Edit_Active(){

    }
</script>