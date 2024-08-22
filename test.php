<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<a class="btn btn-primary" href="index.php" role="button">обратно</a>
<div class="container">

<form method="POST" enctype="multipart/form-data">
Введите артикул <input class="form-control" type="text" name="from"/>
<br>



<button class="btn btn-outline-danger btn-block mt-3" type="submit" name="send">отправить</button>
</form>
<?php
if (empty($_POST["from"])) {
    echo ' Введите артикул в поле !';
  }else{
// Инициализация SOAP-клиента

$client = new SoapClient('https://api.forum-auto.ru/wsdl', ["exceptions" => false]);

$login = '493358_stroyzar'; 
    $pass = 'sAVDkrEbqd'; 
    $art = $_POST["from"];
// Выполнение запроса к серверу API Форум-Авто

$result = $client->listGoods($login, $pass, $art);

if (is_soap_fault($result)) {

    // Обработка ошибки

    echo "SOAP Fault: (faultcode: {$result->faultcode}, faultstring: {$result->faultstring}, detail: {$result->detail})";

} else {

    // Результат запроса

    if (is_soap_fault($result)) {
        echo "SOAP Fault: (faultcode: {$result->faultcode}, faultstring: {$result->faultstring}, detail: {$result->detail})";
    } else {
        
        if (!empty($result)) {
            echo '<table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th>GID</th>
                            <th>Brand</th>
                            <th>Art</th>
                            <th>Name</th>
                            <th>D Delivery</th>
                            <th>Kr</th>
                            <th>Num</th>
                            <th>Price</th>
                            <th>Warehouse</th>
                            <th>Is Returnable</th>
                        </tr>
                    </thead>
                    <tbody>';
            foreach ($result as $item) {
                echo '<tr>
                        <td>' . htmlspecialchars($item['gid']) . '</td>
                        <td>' . htmlspecialchars($item['brand']) . '</td>
                        <td>' . htmlspecialchars($item['art']) . '</td>
                        <td>' . htmlspecialchars($item['name']) . '</td>
                        <td>' . htmlspecialchars($item['d_deliv']) . '</td>
                        <td>' . htmlspecialchars($item['kr']) . '</td>
                        <td>' . htmlspecialchars($item['num']) . '</td>
                        <td>' . htmlspecialchars($item['price']) . '</td>
                        <td>' . htmlspecialchars($item['whse']) . '</td>
                        <td>' . htmlspecialchars($item['is_returnable'] ? 'Yes' : 'No') . '</td>
                    </tr>';
            }
            echo '</tbody></table>';
        } else {
            echo '<p>No results found.</p>';
        }
    }
    

     
   
}
  }
