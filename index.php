<?php
if (isset($_POST['get_airtime'])) {
        $number = $_POST['number'];
        
        $amount = $_POST['amount'];
        
        $network = $_POST['network'];

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
        CURLOPT_POSTFIELDS =>"{\r\n  \"Code\": \"$network\",\r\n  \"Amount\": $amount,\r\n  \"PhoneNumber\": \"$number\",\r\n  \"SecretKey\": \"hfucj5jatq8h\"\r\n}",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Access-Control-Allow-Origin: *",
            "AUTHORIZATION: Bearer uvjqzm5xl6bw",
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
        echo $response['message'];
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
        <input type="number" name="number" placeholder="Provide Number" required>
        <input type="number" name="amount" size="4" id="provice Amount" required>
        <select value="" name="network">
            <option selected name="mtn" id="">MTN</option>
            <option name="airtel" id="">Airtel</option>
            <option name="glo" id="">GLO</option>
        </select>
        <input type="submit" name="get_airtime" value="Send Airtime">
    </form>

</body>
</html>