<nav class="navbar navbar-expand-md">

  <div class="container sticky-top">
  
    <a class="navbar-brand px-md-2 px-lg-3 px-xl-4 my-0 d-md-none d-xl-block" href="#">
      <img src="website-logo-full.png" class='img-fluid' alt="Algarve Beach Apartments">
    </a>
   
    
    <a class="navbar-brand px-md-1 px-lg-3 px-xl-4 my-0 d-none d-lg-block d-xl-none" href="#">
      <img src="website-logo-circle.png" class='img-fluid' alt="Algarve Beach Apartments">
    </a>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
      <ul class="navbar-nav my-2 my-md-0">

        <?php

          $nav_items = array(

              'Home' => '#',
              
              'Quinta da Barracuda' => '#',
              
              'Clube do Monaco' => '#',
              
              'Parque da Corcovada' => '#',
              
              'Booking Conditions' => '#',

          );

          foreach ($nav_items as $nav_item_name => $nav_item_link) {
          
            echo "<li class='nav-item ps-1 px-lg-3 px-xl-4 text-nowrap text-center'>
             
                    <a class='nav-link' href='$nav_item_link'>$nav_item_name</a>
                  
                  </li>";
          
          }

        ?>
      </ul>
    </div>
  </div>
</nav>