<!-- <?php
if (empty($_POST['tache']))
{
  echo "<script>alert('Vous n\'avez pas rempli le champs!')</script>" ;
}
elseif(isset($_POST['tache']))
{
  echo 'Nouvelle tâche : ' . htmlspecialchars($_POST['tache']) . '.';
}
?> -->

<?php
if(file_exists('todo.json'))
{
   $oldDataJSON = file_get_contents('todo.json');
   $oldData = json_decode($oldDataJSON, true);
   if (isset($_POST['tache']) && $_POST['tache'] != "") {
       $firstTask['tache'] = htmlspecialchars($_POST['tache']);
       $firstTask['faitok'] = $_POST['faitok'];
       $extraData[0] = $firstTask;
       $updatedData = array_merge($oldData,$extraData);
       $updatedDataJSON = json_encode($updatedData);
       if(file_put_contents('todo.json', $updatedDataJSON)){
           $addMessage = "<p>Tâche rajoutée!</p>";
       }
       $oldData = $updatedData;
   }

   if (isset($_POST['coche']) && $_POST['coche'] == 'yes') {
     $changes = 'no';
     $i = 0;
     while ($i < count($oldData)) {
         if (isset($_POST[$i])) {
             if ($_POST[$i] == 'yes' || $_POST[$i] == 'no') {
                 $oldData[$i]['faitok'] = $_POST[$i];
                 $changes = 'yes';
             }
         }
         $i++;
     }
     if ($changes == 'yes') {
         $updatedDataJSON = json_encode($oldData);
         if(file_put_contents('todo.json', $updatedDataJSON)){
             $changeMessage = "Changements éffectués!";
         }
     }
 }
}
else
{
   $firstTask['tache'] = 'Pétanque';
   $firstTask['faitok'] = 'oui';
   $baseTask[0] = $firstTask;
   file_put_contents('todo.json', json_encode($baseTask));
}
// echo var_dump($oldData);
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>To Do List</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./style.css">
  <link rel="icon" href="./favicon.ico" type="image/ico" sizes="16x16">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet"> 
</head>

<body>

<?php include 'formulaire.php' ?>
<?php include 'contenu.php' ?>

</body>

</html>
