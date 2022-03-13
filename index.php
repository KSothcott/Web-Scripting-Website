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
    <title>Recipes for You</title>
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
        padding-left: 50px;
        transition: all 0.3s ease;
        color: white;
        font-size: 36px;
    }   
    
    .icon-bar a:hover {
    background-color: #747875;
    }    
    
    .table {
        width: 100%;
        padding-left: 50px;
        padding-right: 50px;
        padding-bottom: 20px;
        padding-top: 20px;
        cursor: pointer; 
    }
    
    

</style>
</head>

<body style="background-color: #F5ECEB; font-family: verdana;">

    <div class="icon-bar">
        <a href="http://localhost/Web-Scripting-Website/" style="font-size: 47px;"><i class="fa fa-home"></i></a> 
    </div>
       
    <div class="heading">
	    <p>Recipes for You</p>
     	</div>
     
    <img src="Logo.png" style="float: right;width: 200px;height: 200px;padding-right: 50px;"/>
    
    <p style="padding-left: 50px;">Welcome to Recipes for You. <br /> <br /> Please choose from our selection of recipes below for more details.</p>
    <br /><br /><br />

    
<?php
    $dbc = mysqli_connect( 'localhost' , 'root' , 'root' , 'products' );
    
    $query = ' SELECT * FROM `recipes` ';

    $result = mysqli_query($dbc,$query);
    
    if ($result)
    {   
        echo '<table class="table"><tr>';
        $counter=0;
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            $image_address = '<img src="'.$row['Image'].'" width="200" height="200" onclick="window.location.href='."' detail.php?id=".$row['RecipeID']."'".'" />';
            $recipe_name = $row['RecipeName'];
            $price = '&pound;'.$row['Price']/100;
            $recipe_id = $row['RecipeID'];
            
            if($counter >=3)
                { echo '</tr><tr>'; $counter=1;}     
                else $counter++;                 

        
        echo '<td>'.$image_address.'<br />'.$recipe_name.'<br />'.$price.'</td>';
        }
        echo '</tr></table>';
    }




?>


</body>

</html>

