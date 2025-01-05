<nav class="navbar navbar-expand-md">

  <div class="container-fluid sticky-top">
  
    <a class="navbar-brand text-center" href="#">
      <img src="website-logo.png" class='img-fluid' alt="Algarve Beach Apartments">
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
              
              'Conditions' => '#',

          );

          foreach ($nav_items as $nav_item_name => $nav_item_link) {
          
            echo "<li class='nav-item ps-md-2 ps-lg-3 ps-xl-4 text-nowrap text-center'>
             
                    <a class='nav-link' href='$nav_item_link'>$nav_item_name</a>
                  
                  </li>";
          
          }

        ?>
      </ul>
    </div>
  </div>
</nav>