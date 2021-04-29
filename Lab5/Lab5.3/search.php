<html>
    <head></head>
    <body>
        <h2 style="color: blue;">Products Data</h2>
         <?php 
         $sear='';
           $connect= new mysqli('localhost','root','','test');
           if($_SERVER["REQUEST_METHOD"]=="GET"){
               if(isset($_GET['search'])){
                $sear=$_GET['search'];
               }
           }
           $sql="SELECT * FROM products where(Product_desc='$sear')";
             $dataset= mysqli_query($connect,$sql); 
         ?>
         <table border="1px">
             <tr>
                <th>Num</th>
                <th>Product</th>
                <th>Cost</th>
                <th>Weight</th>
                <th>Count</th>
            </tr>
            <?php 
            while($row=mysqli_fetch_assoc($dataset)){
            ?>
            <tr>
                <td><?php echo $row['ProductID'] ?></td>
                <td><?php echo $row['Product_desc']?></td>
                <td><?php echo $row['Cost']?></td>
                <td><?php echo $row['Weight'] ?></td>
                <td><?php echo $row['Numb']?></td>
            </tr>
            <?php } ?>
         </table>
    </body>
</html>