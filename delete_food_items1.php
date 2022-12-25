<?php




include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}


$cheks = implode("','", $_POST['checkbox']);
$sql = "UPDATE food SET `options` = 'yes' WHERE food_id in ('$cheks')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('Location: delete_food_items.php');
$conn->close();




?>