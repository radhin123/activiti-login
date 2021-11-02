<?php

if(isset($_POST['uname']) && isset($POST['password'])) {
   function validate($data){
        $data = $_POST['uname'];
        $data = $_POST['password'];
        $data = htmlspecialchars($data);
        return$data;
    }

    $uname = validate($_POST['uname']);
    $uname = validate($_POST['password']);

    if(empty($uname)) {
        header(Location: "index.html?error=User Name is required");
        exit();
    }else if(empty($pass){
        header(Location: "index.html?error=Password is required");
        exit();

    }else{
        echo "Valid input";
    }

}else{
    header(Location: "index.html");
    exit();
}
