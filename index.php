<?php 

    include("variables.php"); 
    
    include('functions.php'); 
    
    $page_title = 'Algarve Beach Apartments'; 

?>

<!DOCTYPE html>

<html>
    
    <?php require_once('header.php'); ?>   
    
    <body bgcolor='#f3f3f3'>

        <?php require_once("navbar.php");?>
        
        <div>
        
            <img src='head-background.jpg' class='img-fluid opacity-75'>

            <div class='position-absolute bottom-50 start-50'> Here </div>
        
        </div>
        
        <div class="container text-center">


        <h1 class='display-6 my-3'>Our Locations</h1>

            <div class="row text-nowrap fs-4">
          
                <div class="col">
                    Quinta da Barracuda
                </div>
            
                <div class="col">
                    Clube do Monaco
                </div>
                
                <div class="col">
                    Parque da Corcovada
                </div>

            </div>
                
                <p><?php echo date("H:i, D, d M Y");?></p>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
    </body>
    
    <?php require_once("footer.php");?>

</html>