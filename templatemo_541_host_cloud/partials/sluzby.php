<div class="services-section services-page">
<div class="container">
<div class="row">
      <?php
        $services = $Services->get_service();
        for ($i=0;$i<count($services);$i++){
          echo '<div class="col-md-4 col-sm-6 col-xs-12">';
          echo '<div class="service-item">';
          echo '<img width="150" src="'.$services[$i]->image.'">';
          echo '<h4>'.$services[$i]->name.'</h4>';
          echo '<p>'.$services[$i]->description.'</p>';
          echo '</div>';
          echo '</div>';
      }
      ?>
</div>
</div>
</div>