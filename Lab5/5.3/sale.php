<html>
    <head>
    </head>
    <body>
        <h2 style="color: blue;">Update Results fpr Table Products</h2>
        <?php
        $connection = new mysqli('localhost','root','','test');
        $bien='';
        if(isset($_GET['product'])){
            $bien=$_GET['product'];
        }
        $sql="UPDATE products set Numb=Numb-1 WHERE(Product_desc='$bien')";
        if(mysqli_query($connection,$sql)){
            echo "The query is UPDATE Products SET Numb=Numb-1 WHERE(Product_desc='Hammer')";
        }else{
            die("Error!");
        }
        $sqlTable="SELECT * from products";
        $dataset=mysqli_query($connection,$sqlTable);
        ?>
        <table border="1px">
        <tr>
         <td>Num</td>
              <td>Product</td>
              <td>Cost</td>
              <td>Weight</td>
              <td>Count</td>
         </tr>
        <?php while($row=mysqli_fetch_assoc($dataset)){ ?>
         
         <tr>
             <td><?php echo $row['ProductID'] ?></td>
             <td><?php echo $row['Product_desc']?></td>
             <td><?php echo $row['Cost']?></td>
             <td><?php echo $row['Weight']?></td>
             <td><?php echo $row['Numb']?></td>
         </tr>
         <?php }?>
        </table>
    </body>
</html>