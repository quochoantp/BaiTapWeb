<!DOCTYPE html>
<html>
<head>
	<title>Receiving Data</title>
</head>
<body>
<font size=5 color="red">Thank you for your input!</font>
<?php

      $name=$_POST['ten'];
      $class=$_POST['lop'];
      $school=$_POST['truong'];
      $gthieu=$_POST['gthieu'];
      print("<br> Hello, $name");
      if(isset($_POST['submit'])){
      	  print("<br>");
        $gt = $_POST['gender'];
        echo 'Gender: ' . $gt;}
     print("<br> You are s tudying at $class, $school");
      print("<br> Your hobbies is: <br> ");
      $list_hobby = array('1' => "Xem phim",
                          '2' => "Đọc sách",
                          '3' => "Nghe nhạc",
                          '4' => "Chơi game", );
      if(isset($_POST['hob'])){
      foreach ($_POST['hob'] as $v) {
      	# code...
         echo "   + $list_hobby[$v] <br>";
      }
  }
      print("<br>");
      print("Gioi thieu ban than: $gthieu");

?>
</body>
</html>