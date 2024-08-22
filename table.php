<?php
include_once("config.php");
$result=mysqli_query($mysqli,"SELECT * FROM student ORDER BY id DESC");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <table class="table table-striped table-hover table-responsive">
            <tr>
                <td>FIRST NAME</td>
                <td>LAST NAME</td>
                <td>EDIT</td>
                <td>DTELETE</td>
            </tr>
            <?php
            while($res=mysqli_fetch_array($result))
            {
                echo"<tr>";
                echo"<td>".$res['first_name']."</td>";
                echo"<td>".$res['last_name']."</td>";
                echo"<td><a href='edit.php?id=".$res['id']."'>EDIT</a></td>";
                echo"<td><a href='delete.php?id=".$res['id']."'>DELETE</a></td>";
                echo"</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>