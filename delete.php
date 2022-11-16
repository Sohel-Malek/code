<?php
include("cnn.php");

$id=$_GET["id"];

$qry="delete from book where id=$id";

mysqli_query($cnn,$qry);

mysqli_close($cnn);

?>
<script>
    alert("deleted Successfullyy!!!!!!!!!!!!!!!!")

</script>

<?php
header("location:update.php");

?>