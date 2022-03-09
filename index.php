<?php

$dbc = mysqli_connect( 'localhost' , 'root' , 'root' , 'products' );

$query = "SELECT * FROM `recipes`"; 

$result = $dbc->query($query); 

while($row = $result->fetch_assoc())
{
    print_r($row);
}

?>

<html>

<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

    .heading {
        float: center;
		font-size: 34px;
		margin: 20px;
		text-align: center;
        font-family: verdana;
    }
      
	.icon-bar {
        width: 100%;
        background-color: #509D8A;
        overflow: auto;
    }

    .icon-bar a {
        float: left;
        text-align: center;
        padding: 12px;
        transition: all 0.3s ease;
        color: white;
        font-size: 36px;
    }   
    
    .icon-bar a:hover {
    background-color: #747875;
    }    
    
</style>
</head>

<body style="background-color: #F5ECEB; font-family: verdana;">

    <div class="icon-bar">
        <a href="http://localhost/Web-Scripting-Website/" style="font-size: 47px;"><i class="fa fa-home"></i></a> 
    </div>

    <div class="heading">
	    <p>Homepage</p>
	</div>

    <img src="Logo.png" style="float: right;width: 300px;height: 300px;padding-right: 50px;"/>

    <p>Text</p>

<?php

    $query = ' SELECT `Image` FROM `recipes` WHERE  `RecipeID` = "2"';

    $result = $dbc->query($query);

    $row = $result->fetch_assoc();

    $image_address = $row['Image'];

    echo '<img src="'.$image_address.'" alt="Burger" width="200" height="200" />'

?>


</body>

</html>

