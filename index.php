<?php 

    include("variables.php"); 
    
    include('functions.php'); 
    
    $page_title = 'Algarve Beach Apartments'; 

?>

<!DOCTYPE html>

<html>
    <head>
        
        <?php require_once('header.php'); ?>
            
    </head>    
    
    <body bgcolor='#f3f3f3'>

        <?php require_once("navbar.php");?>
        
        <div class='container'>
                    
                <h1 class='display-4'><?php echo strtoupper($page_title);?></h1>
                
                <p><?php echo date("H:i, D, d M Y");?></p>
        </div>

        <?php require_once("footer.php");?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    </body>

</html>