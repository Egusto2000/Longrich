
<?php include ("connect.php");?>

<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$sql = "INSERT INTO info(name,email,subject,message)
VALUES('$name','$email','$subject','$message')"; 
mysql_query($sql) or die(mysql_error());





?>










<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Acknowledgement Page</title>
<style type="text/css">
.colour {
	font-size: 24px;
	color: #03C;
}
</style>
</head>

<body>
<p class="colour"><strong>ACKNOWLEDGEMENT PAGE</strong></p>
<p>Thanks for filling our online form.</p>
<p>Data Submission was succesfull.</p>
<p>The following information shows your Data as contained in our Database:</p>
<table width="264" border="1" bordercolor="#0000FF">
  <tr>
    <td width="101">name</td>
    <td width="153"><?php echo "$name" ?>&nbsp;</td>
  </tr>
  <tr>
    <td>email</td>
    <td><?php echo "$email" ?>&nbsp;</td>
  </tr>
  <tr>
    <td>subject</td>
    <td><?php echo "$subject" ?>&nbsp;</td>
  </tr>
  <tr>
    <td>message</td>
    <td><?php echo "$message" ?>&nbsp;</td>
  </tr>
</table>
<p>If the data is incorrect, pls send us an email to lamaycleaning@gmail.com or call the Database Administrator - Mr Victor on 08038376197 or 09037373336.</p>
<p>&nbsp;</p>
<p><a href="index.html">Click here to go back to our Home Page...</a></p>
</body>
</html>










