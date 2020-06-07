<?php
$customer_list = array(
    "0" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/08/20", "address" => "Hà Nội"),
    "1" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/08/21", "address" => "Bắc Giang"),
    "2" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/08/22", "address" => "Nam Định"),
    "3" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hà Tây"),
    "4" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/08/19", "address" => "Hà Nội")
);
function searchByDate($customers, $from_date, $to_date)
{
    if (empty($from_date) && empty($to_date)) {
        return $customers;
    }
    $arr = [];
    foreach ($customers as $customer) {
        if (!empty($from_date) && strtotime($customer['day_of_birth']) < strtotime($from_date)) {
            continue;
        }
        if (!empty($to_date) && strtotime($customer['day_of_birth']) > strtotime($to_date)) {
            continue;
        }
        return $arr[] = $customer;
    }
}
$from_date = NULL;
$to_date = NULL;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $from_date = $_POST['date1'];
    $to_date = $_POST['date2'];
}
$filtered_customers = searchByDate($customer_list, $from_date, $from_date);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custtomer List</title>
</head>

<body>
    <form action="CustomerList.php" method="post">
        <table>

            <tr>
                <td>
                    <p>From:</p>
                </td>
                <td>
                    <label for="date"></label>
                    <input type="text" name="date1" id="date" placeholder="yyyyy/mm/dd">
                </td>
                <td>
                    <p>To:</p>
                </td>
                <td>
                    <label for="date"></label>
                    <input type="text" name="date2" id="date" placeholder="yyyyy/mm/dd">
                </td>
                <td>
                    <input type="submit">
                </td>
            </tr>
        </table>
    </form>
    <table>
        <caption>
            <h2>Danh sách khách hàng</h2>
        </caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
        </tr>
         <?php
         if(count($filtered_customers) === 0) {
             echo "<tr>";
             echo "<td>"."Không tìm thấy khách hàng nào."."</td>";
         }
         foreach ($filtered_customers as $key => $value) {
             echo "<tr>";
             echo "<td>".$key."<td>";
             echo "<td>".$value['name']."<td>";
             echo "<td>".$value['day_of_birth']."<td>";
             echo "<td>".$value['address']."<td>";
             echo "</tr>";
         }
         ?>
        
    </table>
</body>

</html>