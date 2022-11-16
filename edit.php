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
<?php
include("cnn.php");

$id=$_GET["id"];

$qry="select * from book where id=$id";

$res=mysqli_query($cnn,$qry);

while ($row=mysqli_fetch_array($res)) {
    $code=$row["code"];
    $name=$row["name"];
    $aname=$row["author"];
    $cost=$row["cost"];
    $isbn=$row["isbn"];
}

?>


<form name="form1" method="post" action="">
  <table width="444" border="1">
    <tr>
      <td width="148"><div align="center"></div></td>
      <td width="280"><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">code:</div></td>
      <td><div align="center">
        <input type="text" name="code" value="<?php echo $code ;?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">Name:</div></td>
      <td><div align="center">
        <input type="text" name="name" value="<?php echo $name ;?>">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Author:</div></td>
      <td><div align="center">
        <input type="text" name="author" value="<?php echo $aname ;?>">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">cost:</div></td>
      <td><div align="center">
        <input type="text" name="cost" value="<?php echo $cost ;?>">
      </div></td>
    </tr>
    <tr>
        <td><div align="center">isbn:</div></td>
        <td><div align="center">
            <input type="text" name="isbn" value="<?php echo $isbn ;?>">
        </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
      </div></td>
    </tr>
  </table>
</form>


<?php


if(isset($_POST['Submit'])) {

    
  $code=$_POST["code"];
  $name=$_POST["name"];
  $aname=$_POST["author"];
  $cost=$_POST["cost"];
  $isbn=$_POST["isbn"];

  $qry="update book set code='$code',name='$name',author='$aname',cost='$cost',isbn='$isbn' where id=$id";

  mysqli_query($cnn,$qry);
  
  ?>
  <script>
    alert("Update Succcessfully");

    window.location="update.php";
  </script>

  <?php
}

?>
</body>
</html>
