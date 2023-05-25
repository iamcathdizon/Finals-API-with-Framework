<?php

$this->extend('layout/main');
$this->section('body');
?>


<h1>Add Student</h1>
<form action="/students/store" method="POST" enctype="multipart/form-data">
<div class="mb-3">
  <label for="studentId" class="form-label">Student Id</label>
  <input type="text" class="form-control" name="studentId" value= "<?=$studentId; ?>" readonly >
</div>
<div class="mb-3">
  <label for="studentName" class="form-label">Student Name</label>
  <input type="text" class="form-control" name="studentName" >
</div>
<div class="mb-3">
  <label for="studentLastname" class="form-label">Student Lastname</label>
  <input type="text" class="form-control" name="studentLastname" >
</div>
<div class="mb-3">
  <label for="studentContact" class="form-label">Student Contact</label>
  <input type="text" class="form-control" name="studentContact" >
</div>
<div class="mb-3">
  <label for="studentCourse" class="form-label">Student Course</label>
  <input type="text" class="form-control" name="studentCourse" >
</div>
<div class="mb-3">
  <label for="studentYear" class="form-label">Student Year</label>
  <input type="text" class="form-control" name="studentYear" >
</div>
<div class="mb-3">
  <label for="studentSection" class="form-label">Student Section</label>
  <input type="text" class="form-control" name="studentSection" >
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $this->endSection(); ?>