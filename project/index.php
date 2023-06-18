<?php 
include('./inc/db.php');
include('./inc/form.php');
include('./inc/select.php');
?>

<?php 
include_once('./part/hader.php');
?>

 
            
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" onload="startTime() ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <img src="تنزيل.png" alt="">
      <h1 class="display-4 fw-normal">اربح مع مبارك</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="demo" class="c-primary" style="color:dodgerblue;"></h3>
      <p class="lead fw-normal">للسحب على ربح نسخة</p>
      <p class="lead fw-normal">مجانية من برنامج</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
   </div>
   
<ul class="list-group list-group-flush">
  <li class="list-group-item">تاريخ البث المباشر على صفحتي على الفيسبوك</li>
  <li class="list-group-item">ساقوم ببث مباشر لمدة ساعه عباره عن اسئله للجميع</li>
  <li class="list-group-item">خلال مدار الساعه  سيتم فتح صفحة التسجيل هنا حيث سنقوم بتسجيل العملاء واعملك</li>
  <li class="list-group-item">جهاز البث سيقوم باختيار رابح بشكل عشوائي</li>
  <li class="list-group-item">الرابح سيحصل على صفحة</li>
</ul>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form class="mt-5" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
  <div class="mb-3">
    <h1>الرجاء ادخل معلوماتك</h1>
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName"class="form-control" id="exampleInputEmail1" value="<?php $firstName ?>" >
    <div  class="form-text"><?php echo $errors['firstName'] ?></div>
  </div>
  <div class="mb-3">
    <label for="lasttName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="exampleInputEmail1" value="<?php $lastName ?>" >
    <div  class="form-text"><?php echo $errors['lastName'] ?></div>
  </div>
  <div class="mb-3">
    <label for="Email1" class="form-label">البريد الإلكتروني</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php $email ?>" >
    <div  class="form-text"></div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">إرسال المعلومات</button>
</form>
</div>

</div>
<div class="d-grid gap-2 col-6 mx-auto my-5">
  <button id="winner" class="btn btn-primary">اختيار الرابح</button>
</div>

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ali
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">see</button>
      </div>
    </div>
  </div>
</div>

<a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open win</a>
 <div id="cards" class="row mb-5 pb-5">
 
 <?php
      // <div class="col-sm-6">
      //   <div class="card">
      //     <div class="card-body">
      //       <h5 class="card-title">hothyfa</h5>
      //       <p class="card-text">alfkeeh</p>
      //     </div>
      //   </div>
      // </div>
      //     <div class="col-sm-6">

     
      $sql = "SELECT*FROM users ORDER BY RAND() LIMIT 4";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {?>
  
    <div class="col-sm-6">
        <div class="card my-2 bg-light">

<div class="card-body">
  <h5 class="card-title"><?php echo $row['firstName']?></h5>
  <p class="card-text"><?php echo $row['lastName']?></p>
</div>
</div>
</div>

  <?php  
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
    ?>
    </div>

<?php 
include_once('./part/footer.php');
?>