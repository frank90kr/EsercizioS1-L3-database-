<?php
// connessione al database
// preparazione della query
// esecuzione della query
// usare i dati


$host = 'localhost';
$db   = 'esercizio s1-l3';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);

$stmt = $pdo->query('SELECT * FROM utenti');




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
      
      
      <!-- Tabella -->
      
      <div class="container">
    <h1>Lista utenti</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">title</th>
    </tr>
  </thead>
  <tbody>

<?php
foreach ($stmt as $row)
{ ?>
   

        <tr>
        <th scope="row"><?= $row["id"] ?>
        <a href="/EsercizioS1-L3(database)/dettagli.php?id=
<?= $row['id'] ?>" class="btn btn-info ms-2 mt-2">Details</a>

<a href="/EsercizioS1-L3(database)/elimina.php?id=<?= $row['id'] ?>" class="btn btn-danger mt-2">elimina</a>
</th>


</th>

               
        <td><?= "$row[nome] "?></td>
        <td><?= "$row[email] "?></td>
        <td><?= "$row[phone] "?></td>
        <td><?= "$row[title] "?></td>        
       
  </tr>
  
<?php  
}
?>

    
  </tbody>
</table>


<a href="/EsercizioS1-L3(database)/insert.php?id=<?= $row['id'] ?>" class="btn btn-success mt-2">aggiungi</a>


</div>















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>