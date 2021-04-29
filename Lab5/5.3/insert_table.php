<html>
    <head></head>
    <body>
        <?php
        $t1="";
        $t2="";
        $t3="";
        $t4="";
        if($_SERVER["REQUEST_METHOD"]=="GET"){
        if(isset($_GET["product"])){$t1=$_GET["product"];}
        if(isset($_GET["weight"])){$t2=$_GET["weight"];}
        if(isset($_GET["cost"])){$t3=$_GET["cost"];}
        if(isset($_GET["numb"])){$t4=$_GET["numb"];}
    };
        $username="root";
        $password="";
        $dbname="test";
        $server="localhost";
        $table_name="products";
        $connect= new mysqli($server,$username,$password,$dbname);
        if(!$connect){
            die("Cannot connect to server!");
        }else{
            $SQLcmd="INSERT INTO products(Product_desc,Cost,Weight,Numb) VALUES('$t1','$t2','$t3','$t4')";

        }
        if(mysqli_query($connect,$SQLcmd)){
            echo"The Query is INSERT INTO products VALUES($t1,$t2,$t3,$t4)<br>";
            die("Insert successfully!");
        }else{
          die("Error!");  
        }
        mysqli_close($connect);
        ?>
    </body>
</html>