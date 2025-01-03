<nav class="navbar navbar-expand-md">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="ABA_Logo_FAW.png" width='300' alt="Algarve Beach Apartments">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse fs-5" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto my-2 my-md-0 text-center">

        <?php

          foreach ($nav_items as $nav_item_name => $nav_item_link) {
          
            echo "<li class='$navbar_item_class'>
                  <a class='nav-link' href='$nav_item_link'>$nav_item_name</a>
                  </li>";
          
          }

        ?>
      </ul>
    </div>
  </div>
</nav>