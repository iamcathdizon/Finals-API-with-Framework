<?php

$this->extend('layout/main');
$this->section('body');
?>


<h1>Add Student</h1>
<form action="/students/store" method="POST" enctype="multipart/form-data">
<div class="mb-3">
  <label for="studentId" class="form-label">Student Id</label>
  <input type="text" class="form-control" name="studentId" value="<?=$student['id']; ?>" readonly >
</div>
<div class="mb-3">
  <label for="studentName" class="form-label">Student Name</label>
  <input type="text" class="form-control" name="studentName" value="<?=$student['student_name']; ?>">
</div>
<div class="mb-3">
  <label for="studentLastname" class="form-label">Student Lastname</label>
  <input type="text" class="form-control" name="studentLastname" value="<?=$student['student_lastname']; ?>">
</div>
<div class="mb-3">
  <label for="studentContact" class="form-label">Student Contact</label>
  <input type="text" class="form-control" name="studentContact" value="<?=$student['student_contact']; ?>">
</div>
<div class="mb-3">
  <label for="studentCourse" class="form-label">Student Course</label>
  <input type="text" class="form-control" name="studentCourse"  value="<?=$student['student_course']; ?>">
</div>
<div class="mb-3">
  <label for="studentYear" class="form-label">Student Year</label>
  <input type="text" class="form-control" name="studentYear" value="<?=$student['student_year']; ?>">
</div>
<div class="mb-3">
  <label for="studentSection" class="form-label">Student Section</label>
  <input type="text" class="form-control" name="studentSection" value="<?=$student['student_section']; ?>">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $this->endSection(); ?>