<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
<input type="text" name="name">
<input type="submit" name="add" value="upload">
<input type="submit" name="show" value="show">
    </form>
</body>
</html>
<?php
include('connection.php');
if(isset($_POST['add'])){
    $sql = "INSERT INTO test(name)
VALUES('$_POST[name]')";
if($con->query($sql)===true){
    echo 'success';
}

}
if(isset($_POST['show'])){
    $sql = "SELECT * FROM test";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result)){
    echo $row['name'];

}}
?>