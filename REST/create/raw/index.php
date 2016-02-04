<?php
header("Content-Type:application/json");
include 'functions.php';
if(!empty($_GET['name'])){
    //
    $name=$_GET['name'];
    $price=get_price($name);
    if(empty($price)):
        // book no found
        deliver_response(404,"book not found",NULL);
    else:
        deliver_response(200,"book found",$price);
        // respond book price
     endif;
}else{
    // throw invalid request
}

function deliver_response($status,$status_message,$data){
    header("HTTP/1.1 $status $status_message");
    $response['status']=$status;
    $response['status_message']=$status_message;
    $response['data']=$data;

    echo  json_encode($response);

}