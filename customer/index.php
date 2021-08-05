<?php
    require_once "../response.php";
    require_once "../connect.php";

    $sql = "SELECT * FROM customer";
    $statement = $con->query($sql);
    $statement->execute();
    $result = $statement->fatchAll(PDO::FATCH_ASSOC);

    if(count($result)) {
        
        response::success($result, 'Success', 200);

        // $response = array(
        //     'status' => true,
        //     'response' => $result
        // );
        // http_response_code(200);
        // echo json_encode($response);
    } else {

        response::error('Customer Not Found!', 404);
        // http_response_code(404);
        // echo json_encode(array('status' => false));
    }
    


?>