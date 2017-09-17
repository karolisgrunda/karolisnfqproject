<!DOCTYPE html>
<html lang="en">
<head>
        <title>NFQ akademijos u&#382;duotis</title>
        <link rel="icon" type="image/png" href="images/icon.png">
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
  <div class="container ">
    <br />
    <a href="index.php"><button type="button" class="btn btn-default">Grįžti į puslapį</button></a>
  </div>
  <div class="container text-center">
    <h2>Užsakovų sąrašas</h2>
  </div>
  <?php
    $host = '';
    $db   = '';
    $user = '';
    $pass = '';

    $dsn = "mysql:host=$host;dbname=$db";
    $opt = [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);
  ?>
  <div class="container">
    <table class="table table-striped table-bordered">
    <thead class="">
      <tr>
        <!-- <th>Numeris</th> -->
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
        <tr>
        <?php
            $limit = 10;
            $query = "SELECT * FROM klientai";

            $s = $pdo->prepare($query);
            $s->execute();
            $total_results = $s->rowCount();
            $total_pages = ceil($total_results/$limit);

            if (!isset($_GET['page'])) {
                $page = 1;
            } else{
                $page = $_GET['page'];
            }

            $starting_limit = ($page-1) * $limit;
            $show  = "SELECT * FROM klientai ORDER BY id DESC LIMIT $starting_limit, 
                                $limit";

            $stmt = $pdo->query($show);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):

                    echo '<tr>' .
                   /* '<td>' . $row['id'] . '</td>' . */
                    '<td>' . $row['Name'] . '</td>' .
                    '<td>' . $row['Gender'] . '</td>' .
                    '<td>' . $row['Weight'] . '</td>' .
                    '<td>' . $row['Height'] . '</td>'.
                    '<td>' . $row['Phone'] . '</td>' .
                    '<td>' . $row['Mail'] . '</td>'.
                    '<td>' . $row['Comment'] . '</td> </tr>' ;

            
            ?>
            <?php 
            endwhile;
            ?>
        </tr>
      </tbody>    
    </table>
    
    <ul class="pagination">
    <?php
        for ($i=1; $i <= $total_pages ; $i++):
    ?>
    <?php
    echo '<li><a href="?page='.$i.'"';
        if ($i==$page)  echo ' class="abold"';
    echo '>'.$i.'</a></li>'; 
    ?>
    <?php 
        endfor; 
    ?>
    </ul>
  </div>
</body>
</html>