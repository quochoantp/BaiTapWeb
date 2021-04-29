<html>
<head><title>Create Table </title> </head>
<body>
<?php
$username="root";
$password="";
$server="localhost";
$dbname="test";
$table_name='Products';
$connect = new mysqli($server,$username,$password,$dbname);
if(!$connect){
    die("Cannot connect to $server using $username");
} else{ $SQLcmd="CREATE TABLE $table_name(
                 ProductID INT UNSIGNED NOT NULL
                 AUTO_INCREMENT PRIMARY KEY,
                 Product_desc VARCHAR(50),
                 Cost INT,
                 Weight INT,
                 Numb INT)";
    mysqli_select_db($connect,$dbname);
    if($connect->query($SQLcmd)===true){
        print'<font size="4" color="blue">Created Table';
        print"<i>$table_name</i> in database <i>$dbname</i><br></font>";
        print "<br>SQLcmd=$SQLcmd";
    } else{
        die("Table Create Creation Failed SQLcmd=$SQLcmd");
    }   

    mysqli_close($connect);
}
?>
</body>
</html>