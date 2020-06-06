<?php
$customer_list = array(
    "0" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/08/20", "address" => "Hà Nội"),
    "1" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/08/21", "address" => "Bắc Giang"),
    "2" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/08/22", "address" => "Nam Định"),
    "3" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hà Tây"),
    "4" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/08/19", "address" => "Hà Nội")
);
$from_date = $_POST['date1'];
$to_date = $_POST['date2'];
function CustomerList($customers,$date1, $date2) {
    if (empty($date1) && empty($date2)) {
        return $customers;
    }
    $arr = [];
    foreach ($customers as $customer) {
        if (strtotime($customer["day_of_birth"]) > strtotime($date1) && strtotime($customer["day_of_birth"]) < strtotime($date2)) {
            $arr[$customer];
        }
    }
    return $arr;
}

$ar = CustomerList($customer_list, $from_date,  $to_date);
echo ('<table>');
    echo ('<tr>');
    echo ('<th>' . 'Stt' . '</th>');
    echo ('<th>' . 'Tên' . '</th>');
    echo ('<th>' . 'Ngày sinh' . '</th>');
    echo ('<th>' . 'Địa chỉ' . '</th>');
    echo ('</tr>');
foreach ($ar as $key => $val) {
    echo ('<tr>');
        echo ('<td>' . $key . '</td>');
        echo ('<td>' . $val['name'] . '</td>');
        echo ('<td>' . $val['day_of_birth'] . '</td>');
        echo ('<td>' . $val['address'] . '</td>');
        echo ('</tr>');
    };
    echo ('</table>');

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
            <td><p>From:</p></td>
            <td>
                <label for="date"></label>
                <input type="date" name="date1" id="date">
            </td>
            <td><p>To:</p></td>
            <td>
            <label for="date"></label>
                <input type="date" name="date2" id="date">
            </td>
            <td>
                <input type="submit">
            </td>
        </tr>
        </table>
    </form>
    
</body>
</html>