<!doctype html>
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
  $username = "root";
  $password = "";
  $host = "localhost";

  $connector = mysqli_connect($host,$username,$password)
      or die("Unable to connect");
    echo "Connections are made successfully:";
  $selected = mysqli_select_db("nfqtest", $connector)
    or die("Unable to connect");

  //execute the SQL query and return records
  ?>
  <table class="table">
  <thead>
    <tr>
      <th>Numeris</th>
      <th>Vardas</th>
      <th>Lytis</th>
      <th>Svoris</th>
      <th>Ugis</th>
      <th>Numeris</th>
      <th>El. pastas</th>
      <th>Norai</th>
    </tr>
    <tbody>
            <tr>
            <?php
                if (!$connector) {
                    die(mysqli_error($connector));
                }
    
                $results = mysqli_query($connector,"SELECT * FROM 'klientai'");
                
                while($row = mysqli_fetch_array($results)) {
                ?>
                        <?php echo '<td>'.$row['id'].'</td>'; ?>
    
    
    
                <?php
                }
                ?>
                </tr>
                </tbody>
</table>
 <?php mysql_close($connector); ?>
</body>
</html>