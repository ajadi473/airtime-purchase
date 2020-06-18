<?php
if (isset($_POST['get_airtime'])) {
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://sandbox.wallets.africa/bills/airtime/purchase',
        'Content-Type: application/json',
    ]);

    $result = curl_exec($curl);

    echo $result;
}

// curl --location --request POST 'https://sandbox.wallets.africa/bills/airtime/purchase' \
// --header 'Content-Type: application/json' \
// --data-raw '{
//   "Code": "airtel",
//   "Amount": 100,
//   "PhoneNumber": "07068260000",
//   "SecretKey": "apisecret"
// }'
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
        <input type="text" name="number" id="">
        <input type="submit" name="get_airtime" value="Send">
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
    crossorigin="anonymous"></script>
    <script>
        var settings = {
            "url": "https://sandbox.wallets.africa/bills/airtime/purchase",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({"Code":"airtel","Amount":100,"PhoneNumber":"07068260000","SecretKey":"60m1fdz9shbd "}),
            };

            $.ajax(settings).done(function (response) {
            console.log(response);
            });
    </script>
</body>
</html>