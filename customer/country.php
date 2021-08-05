<?php
    require_once "../response.php";
    require_once "../connect.php";

    $params = array(
        'country' => $_GET['key']
    );

    $sql = "SELECT * FROM customer WHERE cust_country = :country " ;
    $statement = $con->prepare($sql);
    $statement->execute($params);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if(count($result)) {
        
        response::success($result, 'Success', 200);

        // $response = array(
        //     'status' => true,
        //     'response' => $result
        // );
        // http_response_code(200);
        // echo json_encode($response);
    } else {

        response::error('error not found!', 404);
        // http_response_code(404);
        // echo json_encode(array('status' => false));
    }

?>