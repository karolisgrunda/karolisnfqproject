<!DOCTYPE html>
<html lang="en">
<head>
        <title>NFQ akademijos u&#382;duotis</title>
        <link rel="icon" type="image/png" href="../images/icon.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <?php
    $host = 'eu-cdbr-west-01.cleardb.com';
    $db   = 'heroku_fb27e899e9e6887';
    $user = 'bc27a370ba310d';
    $pass = '39f73031';

    $dsn = "mysql:host=$host;dbname=$db";
    $opt = [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);
  ?>

  <table class="table">
   <thead>
    <tr>
      <th>Numeris</th>
      <th>Vardas</th>
      <th>Lytis</th>
      <th>Svoris</th>
      <th>Ugis</th>
      <th>Telefonas</th>
      <th>El. pastas</th>
      <th>Norai</th>
    </tr>
  </thead>
    <tbody>
       <?php
        $sql = $pdo->prepare("SELECT * FROM klientai");
        $sql->execute();
        while($result = $sql->fetch(PDO::FETCH_ASSOC)){
        echo  
        '<tr>' .
        '<td>' . $result['Name'] . '</td> 
         <td>' . $result['Gender'] . '</td>' . '</tr>'  ;
        } ;
        ?>
      </tr>
    </tbody>
  </table>

</body>
</html>