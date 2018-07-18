<?php
$textarea = filter_var($_POST['textarea'], FILTER_SANITIZE_STRING);
if (true === filter_var($textarea, FILTER_VALIDATE_BOOLEAN)) {
    echo "Tâche validée";
} else {
	echo "Veuillez entrer du texte";
}

$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

echo json_encode($arr);
 ?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My to do list</title>
  </head>
  <body>
    <form  action="formulaire.php" method="post">
      <h5>A FAIRE</h5>

    <label><input type="checkbox" name="afaire" value="">tache 1</label><br>
    <label><input type="checkbox" name="afaire" value="">tache 2</label><br>
    <label><input type="checkbox" name="afaire" value="">tache 3</label><br>
    <button type="submit" name="enregistrer">Enregistrer</button>

      <h5>ARCHIVE</h5>
      <label><input type="checkbox" name="fait" value="">tache 1</label><br>
      <label><input type="checkbox" name="fait" value="">tache 1</label><br>
      <label><input type="checkbox" name="fait" value="">tache 1</label><br>
    </form>
    <form  action="formulaire.php" method="post">
      <h1>Ajouter une tâche</h1>
      <p>La tâche à effectuer</p>
      <input type="textarea" name="tache" value="">
      <button type="submit" name="ajouter">Ajouter</button>
    </form>
  </body>
</html>
