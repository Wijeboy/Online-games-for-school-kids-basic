<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>game details</title>
	<link rel="stylesheet" href="styles [CSS]/styles1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
	
	
	
	<div class="category">
		
        <ul class="category-list">
            <li class="item2" ><img class="itimage" src="<?=$image?>"></li>
		</ul>
	</div>
	
	<div class="category1">
		<p>Name :<?=$name?></p>
	</div>
	
	<div class="category2">
		<p>About :<?=$description?></p>
	</div>
	
	<div class="category3">
		<p>System Requirements :<?=$sysreq?></p>
	</div>
	
	<div class="category4">
		<p>Developer :<?=$dev?></p>
	</div>
	
	<div class="category5">
		<p>Publisher :<?=$pub?></p>
	</div>
	
	<a href="#" class="button-link1">Play</a>
	<a href="#" class="button-link2">Buy</a>
		
</body>
</html>
