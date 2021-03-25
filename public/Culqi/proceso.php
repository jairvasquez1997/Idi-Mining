<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');


    require "library/Requests.php";
    Requests::register_autoloader();
    require "lib/culqi.php";

    $SECRET_KEY = "sk_test_W0JjhQrKF17scjCM";
    $culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));
    $postdata = file_get_contents("php://input");
    if (isset($postdata)) {
        $request = json_decode($postdata);
        try {
            $culqi->Charges->create(
                array(
                    "amount" => $request->monto,
                    "capture" => true,
                    "currency_code" => "PEN",
                    "description" => $request->producto,
                    "email" => $request->email,
                    "installments" => 0,
                    "source_id" => $request->token
                )
            );
            echo true;
        } catch (Exception $e) {
            echo false;
        }
    }else{
        echo false;
    }




