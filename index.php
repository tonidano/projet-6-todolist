<?php
if (empty($_POST['tache']))
{
  echo 'Vous n\'avez pas rempli le champs!';
}elseif(isset($_POST['tache']))
{
  echo 'Nouvelle tâche : ' . htmlspecialchars($_POST['tache']) . '.';
}
?>

<?php
if(file_exists('todo.json'))
{
   $oldDataJSON = file_get_contents('todo.json');
   $oldData = json_decode($oldDataJSON, true);
   if (isset($_POST['tache']) && $_POST['tache'] != "") {
       $firstTask['tache'] = $_POST['tache'];
       $firstTask['faitok'] = $_POST['faitok'];
       $extraData[0] = $firstTask;
       $updatedData = array_merge($oldData,$extraData);
       $updatedDataJSON = json_encode($updatedData);
       if(file_put_contents('todo.json', $updatedDataJSON)){
           $addMessage = "<p>Tâche rajoutée!</p>";
       }
       $oldData = $updatedData;
   }
}
else
{
   $firstTask['tache'] = 'Pétanque';
   $firstTask['faitok'] = 'oui';
   $baseTask[0] = $firstTask;
   file_put_contents('todo.json', json_encode($baseTask));
}
echo var_dump($oldData);
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>To Do List</title>
</head>

<body>
<?php include 'formulaire.php' ?>

</body>

</html>
