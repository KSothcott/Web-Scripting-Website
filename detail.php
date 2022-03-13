<html>

<head>
    <title>Recipe Details</title>
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
        <a href="http://localhost:8080/Web-Scripting-Website/" style="font-size: 47px;"><i class="fa fa-home"></i></a> 
    </div>

    <div class="heading">
	    <p>Recipe Details</p>
	</div>

    
    
<?php
$id = $_GET['id']; echo 'ID = '.$id;
if (isset($_REQUEST))
    {
        //$ID = $_REQUEST['RecipeID'];
        
        $dbc = mysqli_connect( 'localhost' , 'root' , 'root' , 'products' );
        
        //$query = ' SELECT * FROM `recipes` WHERE RecipeID=$ID';
        
        //$result = mysqli_query($dbc,$query);
        
        //$image_address = '<img src="'.$row['Image'].'" width="200" height="200" />';
        
    }
?>

</body>

</html>

