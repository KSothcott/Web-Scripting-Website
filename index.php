<?php

//$dbc = mysqli_connect( 'localhost' , 'root' , 'root' , 'products' );

//$query = "SELECT * FROM `recipes`"; 

//$result = $dbc->query($query); 

//while($row = $result->fetch_assoc())
//{
    //print_r($row);
//}

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
    
    .image {
        height: 200;
        width: 200;

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

    <img src="Logo.png" style="float: right;width: 200px;height: 200px;padding-right: 50px;"/>

    <p>Text</p>
    <br />

    
<?php
    $dbc = mysqli_connect( 'localhost' , 'root' , 'root' , 'products' );
    
    $query = ' SELECT Image, RecipeName, Price FROM `recipes` ';

    //$result = $dbc->query($query);
    $r = mysqli_query($dbc,$query);
    
    if ($r)
    {   
        while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
        {
            echo '<br />' . $row['RecipeName'] . "_____" . $row['Price'];
        }
    }

    //$row = $result->fetch_assoc();

    $image_address = $row['Image'];
    $recipe_name = $row['RecipeName'];
    $price = $row['Price'];

    //echo '<img src="'.$image_address.'" alt="Baklava" class="image"/>'
    
    
    
    //<tr>
        //<td align="left" width="33%">' SELECT `Image` FROM `recipes` WHERE  `RecipeID` = "2"'</td>
        //<td align="center" width="33%">#</td>
        //<td align="right" width="33%">#</td>
    //</tr>';


?>


</body>

</html>

