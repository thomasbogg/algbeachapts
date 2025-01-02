<?php 

    include("variables.php"); 
    
    include('functions.php'); 
    
?>

<!DOCTYPE html>

<html>
    <head> 

        <meta charset='UTF-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <Title><?php echo $site_title;?></Title>    
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
    </head>    
    
    <body bgcolor='#f3f3f3'>

        <?php require_once("navbar.php");?>
        
        <div class='container'>
                    
                <h1 class='display-4'><?php echo strtoupper($site_title);?></h1>
                
                <p><?php echo date("H:i, D, d M Y");?></p>
        </div>

        <?php require_once("footer.php");?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    </body>

</html>