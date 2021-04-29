<html>
    <head></head>
    <body>
        <h2 style="color: blue;">Select Product We Just Sold</h2>
        <form action="sale.php" method="GET">
        <label for="Hammer">Hammer</label>    
        <input type="radio" name="product" value="Hammer">
        <label for="ScrewDriver">ScrewDriver</label>    
        <input type="radio" name="product" value="ScrewDriver">
        <label for="Wrench">Wrench</label>    
        <input type="radio" name="product" value="Wrench">
        <br></br>
        <input type="submit">
        <input type="reset">
        </form>
        <?php 
        $connection= new mysqli('localhost','root','','test');
        if($connection->connect_error){
            die("Error!");
        }else
        $sql="select * from products";
        $dataset=mysqli_query($connection,$sql);
        ?>
        <table border="1px">
          <tr>
              <td>Num</td>
              <td>Product</td>
              <td>Cost</td>
              <td>Weight</td>
              <td>Count</td>
          </tr>
          <?php while($row=mysqli_fetch_assoc($dataset)){?>
            <tr>
                <td><?php echo $row['ProductID']?></td>
                <td><?php echo $row['Product_desc'] ?></td>
                <td><?php echo $row['Cost']?></td>
                <td><?php echo $row['Weight']?></td>
                <td><?php echo $row['Numb'] ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>