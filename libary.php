<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libary</title>
    <link rel="stylesheet" href="css/libary.css">
</head>
<body>

<div id="container">

<h2>Libary</h2>

</div>

<div id="content">

<?php

require_once('config.php'); #calling the config file and passing the path as a parameter

$sql ="SELECT AuthorName,Age,Genre,BookID FROM libary","SELECT BookID,BookName,Year,Genre,AgeGroup";
$respond = @mysqli_query($connection, $sql);

if($respond) {

    echo'<table>
    
    <tr>

    <th>Author Name</th>
    <th>Age</th>
    <th>Genre</th>
    <th>Book ID</th>
    <th>Book Name</th>
    <th>Year</th>
    <th>Genre</th>
    <th>Age Group</th>

    </tr>';

    while($row = mysqli_fetch_array($response)){
        echo '
          <tr>
          <td>'.$row['AuthorName'].'</td>
          <td>'.$row['Age'].'</td>
          <td>'.$row['Genre'].'</td>
          <td>'.$row['BookID'].'</td>
          <td>'.$row['BookName'].'</td>
          <td>'.$row['Year'].'</td>
          <td>'.$row['Genre'].'</td>
          <td>'.$row['AgeGroup'].'</td>
          </tr>';

    }


    echo '</table>';

}

else{
    echo "Could not get a responce from database".mysqli_error($connection);
}

mysqli_close($connection);

?>

</div>

</body>
</html>
    