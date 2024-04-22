<?php
if(isset($_FILES['파일'])) {
  $file = $_FILES['파일'];
  $uploadPath = basename($file['name']);
  
  if(move_uploaded_file($file['tmp_name'], $uploadPath)) {
    echo "파일이 성공적으로 업로드되었습니다: $uploadPath";
  } else {
    echo "파일 업로드에 실패했습니다.";
  }
}
?>

<form action="" enctype="multipart/form-data" method="POST">
  <input type="file" name="파일">
  <input type="submit" value="업로드" name="submit">
</form>
