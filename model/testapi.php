<?php
    // header("Access-Control-Allow-Origin: *");
    // // get request method
    // $method = $_SERVER['REQUEST_METHOD'];
    // if ($method == 'GET') {
    //     echo "THIS IS A GET REQUEST";
        
    // }
    // if ($method == 'POST') {
    //     echo "THIS IS A POST REQUEST";
    //     $abc = ["1", "2"];
    //     $abc = (object)$abc;
    //     echo json_encode($abc);
    // }
    // if ($method == 'PUT') {
    //     echo "THIS IS A PUT REQUEST";
    // }
    // if ($method == 'DELETE') {
    //     echo "THIS IS A DELETE REQUEST";
    // }
    

    header("Content-Type:application/json");
    abc();
    // if (isset($_POST['id'])) {
	//     abc();
	// }

    function abc(){
        $abc = ["1", "2"];
        echo "aa";
        return json_encode($abc);
    }


?>