<?php
if (isset($_POST['get_airtime'])) {
        $number = $_POST['number'];
        
        $amount = 100;
        // echo $number;
        // die();
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://sandbox.wallets.africa/bills/airtime/purchase",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{\r\n  \"Code\": \"mtn\",\r\n  \"Amount\": $amount,\r\n  \"PhoneNumber\": \"$number\",\r\n  \"SecretKey\": \"hfucj5jatq8h\"\r\n}",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Access-Control-Allow-Origin: *",
            "AUTHORIZATION: Bearer uvjqzm5xl6bw",
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="number" id="" required>
        <input type="submit" name="get_airtime" value="Send">
    </form>

</body>
</html>