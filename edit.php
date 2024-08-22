<?php
include_once("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
    echo $id=$_POST['id'];
    echo $first_name= $_POST['first_name'];
    echo $last_name=$_POST['last_name'];

    $result=mysqli_query($mysqli,"UPDATE student SET first_name='$first_name',last_name='$last_name' WHERE id = $id");
    header('Location:table.php');
}
?>
<?php
include_once("config.php");
$id=$_GET['id'];
$result=mysqli_query($mysqli,"SELECT * FROM student WHERE id=$id");
while($res=mysqli_fetch_array($result))
{
	$id=$res['id'];
    $first_name= $res['first_name'];
    $last_name=$res['last_name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit.php" method="post">
        <h1>Form Detils</h1>
        <div>
            <div>First Name</div>
            <div><input type="text" name="first_name" value="<?php echo $first_name ?>"/></div>
        </div>
        <div>
            <div>Last Name</div>
            <div><input type="text" name="last_name" value="<?php echo $last_name ?>"/></div>
        </div>
        <input type="hidden" name="id" value="<?php echo $id ?>"/>
        <input type="submit" name="submit" value="submit"/>
    </form>
</body>
</html>