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
  <table width="633" height="101" border="1">
    <tr>
      <td><div align="center">id</div></td>
      <td><div align="center">code</div></td>
      <td><div align="center">name</div></td>
      <td><div align="center">author</div></td>
      <td><div align="center">cost </div></td>
      <td><div align="center">isbn</div></td>
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
        
      </tr>
      <?php
    }
    ?>
    <tr>
    <td colspan="6"><div align="center">
              <input type="submit" name="Submit" value="update">
            </div>
          </td>
    </tr>

    <?php
      mysqli_close($cnn);

      if(isset($_POST["Submit"])){
        header("location:update.php");
      }
    ?>
   
  </table>
</form>
</body>
</html>


