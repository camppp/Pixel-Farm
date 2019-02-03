<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    $image = $_FILES['image']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'camppp111';
    $dbPassword = '1999422';
    $dbName     = 'camppp111';
    
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }

    $dataTime = date("Y-m-d H:i:s");
    
    $insert = $db->query("INSERT into Hack (image, created) VALUES ('$imgContent', '$dataTime')");
    if($insert){
        $_POST["succ"] = "true";
        header("Location: http://lyuxuan.com/HACK/hack.html");
    }
    else{
        echo "Oops, something went wrong";
    }
}
else{
    echo "Oops, something went wrong";
}

?>