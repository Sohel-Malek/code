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
  <table width="444" border="1">
    <tr>
      <td width="148"><div align="center"></div></td>
      <td width="280"><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">code:</div></td>
      <td><div align="center">
        <input type="text" name="code">
</div></td>
    </tr>
    <tr>
      <td><div align="center">Name:</div></td>
      <td><div align="center">
        <input type="text" name="name">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Author:</div></td>
      <td><div align="center">
        <input type="text" name="author">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">cost:</div></td>
      <td><div align="center">
        <input type="text" name="cost">
      </div></td>
    </tr>
    <tr>
        <td><div align="center">isbn:</div></td>
        <td><div align="center">
            <input type="text" name="isbn">
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
include("cnn.php");

if(isset($_POST['Submit'])) {
  $code=$_POST["code"];
  $name=$_POST["name"];
  $aname=$_POST["author"];
  $cost=$_POST["cost"];
  $isbn=$_POST["isbn"];

  $qry="insert into book values(null,'$code','$name','$aname','$cost','$isbn')";

  mysqli_query($cnn,$qry);
  
  ?>
  <script>
    alert("Insert Succcessfully");

    window.location="disp.php";
  </script>

  <?php
}

?>
</body>
</html>
