<nav class="navbar navbar-expand-md">

  <div class="container sticky-top">
  
    <a class="navbar-brand my-0 d-md-none d-xl-block mx-xxl-4" href="#">
      <img src="website-logo-full.png" class='img-fluid' alt="Algarve Beach Apartments">
    </a>
   
    
    <a class="navbar-brand my-0 d-none d-md-block d-lg-block d-xl-none" href="#">
      <img src="website-logo-circle.png" class='img-fluid' alt="Algarve Beach Apartments">
    </a>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
      <ul class="navbar-nav my-2 my-md-0">

        <?php

          $nav_items_full = array(

              'Home' => '#',
              
              'Quinta da Barracuda' => '#',
              
              'Clube do Monaco' => '#',
              
              'Parque da Corcovada' => '#',
              
              'Booking Conditions' => '#',

          );
          
          foreach ($nav_items_full as $nav_item_name => $nav_item_link) {
            
            echo "<li class='nav-item px-2 px-lg-3 px-xxl-4 d-md-none d-lg-block text-nowrap text-center'>
            
            <a class='nav-link' href='$nav_item_link'>$nav_item_name</a>
            
            </li>";
            
          }
          
          $nav_items_part = array(
            
              'Home' => '#',
              
              'Qta. da Barracuda' => '#',
                
              'Cl. do Monaco' => '#',
              
              'Pq. da Corcovada' => '#',
              
              'Conditions' => '#',
              
            );
          
          foreach ($nav_items_part as $nav_item_name => $nav_item_link) {
          
            echo "<li class='nav-item px-2 d-none d-md-block d-lg-none text-nowrap text-center'>
            
            <a class='nav-link' href='$nav_item_link'>$nav_item_name</a>
          
            </li>";
            
          }
          
          ?>
      </ul>
    </div>
  </div>
</nav>