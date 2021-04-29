<?php
$server = 'Localhost';
$user = 'root';
$pass = '';
$mydb = 'datalab5';
$table_name = 'Products';

// Kết nối database tintuc
$connect = new mysqli($server, $user, $pass, $mydb);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$Product_desc = "";
$Cost = "";
$Weight = "";
$Numb = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["Product_desc"])) { $Product_desc = $_POST['Product_desc']; }
    if(isset($_POST["Cost"])) { $Cost = $_POST['Cost']; }
    if(isset($_POST["Weight"])) { $Weight = $_POST['Weight']; }
    if(isset($_POST["Numb"])) { $Numb = $_POST['Numb']; }

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO $table_name (Product_desc, Cost, Weight, Numb)
    VALUES ('$Product_desc', '$Cost', '$Weight', '$Numb')";

    if ($connect->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
//Đóng database
$connect->close();
?>

<form action="" method="post">
    <table>
        <tr>
            <th>Item Descripttion</th>
            <td><input type="text" name="Product_desc" value=""></td>
        </tr>

        <tr>
            <th>Weight</th>
            <td><input type="text" name="Weight" value=""></td>
        </tr>

        <tr>
            <th>Cost</th>
            <td><input type="text" name="Cost" value=""></td>
        </tr>

        <tr>
            <th>Number Available</th>
            <td><input type="text" name="Numb" value=""></td>
        </tr>
    </table>
    <button type="submit">Gửi</button>
</form>