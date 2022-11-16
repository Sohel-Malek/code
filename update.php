<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include("navbar.php");

?>
<form name="form1" method="post" action="">
  <table width="916" border="1">
    <tr>
      <td>id</td>
      <td>code</td>
      <td>name</td>
      <td>author</td>
      <td>cost</td>
      <td>isbn</td>
      <td>update</td>
      <td>delete</td>
    </tr>
    <?php
    include("cnn.php");

    $qry="select * from book";

    $res=mysqli_query($cnn,$qry);

    while ($row=mysqli_fetch_array($res)) {
      ?>
      <tr>
        <td><div align="center"><?php echo $row["id"];?></div></td>
        <td><div align="center"><?php echo $row["code"];?></div></td>
        <td><div align="center"><?php echo $row["name"];?></div></td>
        <td><div align="center"><?php echo $row["author"];?></div></td>
        <td><div align="center"><?php echo $row["cost"];?></div></td>
        <td><div align="center"><?php echo $row["isbn"];?></div></td>
        <td><div align="center"> <a href="edit.php?id=<?php echo $row["id"]?>">Update</a> </div></td>
        <td><div align="center"><a href="delete.php?id=<?php echo $row["id"]?>">Delete</a></div></td>
        
      </tr>
      <?php
    }
    ?>
  </table>
</form>
</body>
</html>
