<form  action="index.php" method="post">
 <h5>A FAIRE</h5>
  <label><input type="checkbox" name="afaire1" value="">tache 1</label><br>
  <label><input type="checkbox" name="afaire2" value="">tache 2</label><br>
  <label><input type="checkbox" name="afaire3" value="">tache 3</label><br>
  <button type="submit" name="enregistrer">Enregistrer</button>

  <h5>ARCHIVE</h5>
   <label><input type="checkbox" name="fait" value="">tache 1</label><br>
   <label><input type="checkbox" name="fait" value="">tache 1</label><br>
   <label><input type="checkbox" name="fait" value="">tache 1</label><br>
</form>

<form  action="index.php" method="post">
  <h1>Ajouter une tâche</h1>
  <p>La tâche à effectuer</p>
  <input type="textarea" name="tache" value="">
  <input type="hidden" name="faitok" value="no">
  <button type="submit" name="ajouter">Ajouter</button>
</form>
