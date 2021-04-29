<html>
    <head>
    </head>
    <body>
        <h2 style="color:blue">Products Data</h2>
        <?php
        $connect= new mysqli('localhost','root','','test');
        $sql="select * from products";
        $recordset= mysqli_query($connect,$sql);
        ?>
        <table border="1">
            <tr>
                <th>Num</th>
                <th>Product</th>
                <th>Cost</th>
                <th>Weight</th>
                <th>Count</th>
            </tr>
            <?php
            while($row = mysqli_fetch_assoc($recordset)){
            ?>
            <tr>
                <td><?php echo $row['ProductID'] ?></td>
                <td><?php echo $row['Product_desc']?></td>
                <td><?php echo $row['Cost']?></td>
                <td><?php echo $row['Weight']?></td>
                <td><?php echo $row['Numb'] ?></td>
            </tr>
            <?php } ?>
        </table>
        <?php 
         mysqli_close($connect);
        ?>
    </body>
</html>