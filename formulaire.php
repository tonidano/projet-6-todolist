<div class="container">
  <h1>My To Do List</h1>

  <form  action="index.php" method="post">
    <div class="input-group">

    <p class="input-group-text">La tâche à effectuer</p>
    <input type="textarea" name="tache" value="">
    <input type="hidden" name="faitok" value="no">
    <div class="input-group-append">
    <button class="btn btn-primary" type="submit" name="ajouter">Ajouter</button>
    <!-- <?php
          if (isset($addMessage)) {
              echo $addMessage;
          }
          ?> -->
        </div>
      </div>
  </form>
</div>
