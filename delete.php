<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link, "delete from table1 where id=$id");
?>

<script type="text/javascript">
//used to go back to the main page as soon as the button is pressed
window.location="insert.php";
alert('Succesfully deleted');

</script>