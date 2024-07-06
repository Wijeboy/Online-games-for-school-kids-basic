<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../IWT Project/styles [CSS]/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title></title>
</head>
<body>

<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['name'])) {
        $gameName = $_GET['name'];
        
        $sql = "SELECT * FROM games WHERE Name
         = $gameName";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name = $row["Name"];
            $image = $row["G_Image"];
            $description = $row["G_Description"];
            $sysreq = $row["System_Req"];
            $dev = $row["Developer"];
            $pub = $row["Publisher"];
            
        } else {
            http_response_code(404);
            echo json_encode(array('error' => 'Product not found'));
        }
    } else {
        http_response_code(400);
        echo json_encode(array('error' => 'Bad Request'));
    }
} else {
    http_response_code(405);
    echo json_encode(array('error' => 'Method Not Allowed'));
}

$conn->close();
?>

<div class="gameName">
    <h3 id="name"><?=$name?></h3>
</div><!--gameName-->

<div class="gameImage">
    <img src="<?=$image?>" id="image">
</div><!--gameImage-->


<div class="gameDescription">
    <p id="description"><?=$description?></p>
</div><!--gameDescription-->

<div calss="gameSysReq">
    <p id="sysreq"><?=$sysreq?></p>
</div><!--gameSysReq-->

<div class="gameDev">
    <p id="dev"><?=$dev?></p>
</div><!--gameDev-->

<div class="gamePub">
    <p id="pub"><?=$pub?></p>
</div><!--gamePub-->



</body>
</html>