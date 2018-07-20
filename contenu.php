<div class="container">
  <form  action="index.php" method="post">


<div class="row">
   <div class="col colgauche">

   <div class="card bg-primary text-white">
       <div class="card-body">A FAIRE</div>
     </div>

         <?php
               foreach ($oldData as $key => $value) {
                   if ($value['faitok'] != 'yes') {
                       $newLine = '<div class="input-group-prepend"><div class="input-group-text box"><label><input type="checkbox" name="' . $key . '" value="yes">';
                       $newLine = $newLine . $value['tache'] . '</label></div></div>';
                       echo $newLine;
                   }
               }
               ?>



    <label><input type="hidden" name="coche" value="yes"></label><br>
    <button class="btn btn-primary" type="submit" name="enregistrer">Enregistrer</button>
    <!-- <?php
          if (isset($changeMessage)) {
              echo $changeMessage;
          }
          ?> -->
</div>
<div class="col coldroite">
        <div class="card bg-primary text-white">
        <div class="card-body">ARCHIVE</div>
      </div>

    <?php
          foreach ($oldData as $key => $value) {
              if ($value['faitok'] == 'yes') {
                  $newLine = '<div class="input-group-prepend"><div class="input-group-text box"<input type="checkbox" name="' . $key . '" value="no">';
                  $newLine = $newLine . '<del>' . $value['tache'] . '</label></div></div></del>';
                  echo $newLine;
              }
          }
          ?>
      </div>
      </div>
  </form>
</div>
