<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <<link rel="stylesheet" href="style.css">
    <titleStudent</title>
	<style>
	body{
		background-color:whitesmoke;
		font-family:'Tajawal', sans-serif;
	}
	#mother{
		width:100%;
		font-size:20px;
	}
	main{
		float:left;
		border:1px solid gray;
		padding:5px;
	}
	input{ 
		padding:4px;
		border:2px solid black;
		text-align:center;
		font-size:17px;
		font-family:'Tajawal', sans-serif;
	}
	aside{
	text-align:center;
	width:300px;
	float:right;
	border:2px solid black;
	padding:10px;
	font-size:20px;
	background-color:silver;
	color:white;
	
	}
	#tbl{
		width:890px;
		font-size:20px;
		text-align:center;
	}
	#tbl:hover{
		color:red;
	}
	#tbl th {
	
	background-color:silver;
	color:black;
	font-size:20px;
	padding:10px;
	
	}
	aside button{
		width:190px;
		padding:8px;
		margin-top:7px;
		ont-size:17px;
		font-family:'Tajawal', sans-serif;
		font-weight:blod;

	}
	</style>
</head>
<body dir='rtl'>
<?php
#ÇáÇÊÕÇá ãÚ ÞÇÚÏÉ ÇáÈíÇäÇÊ
$host='localhost';
$user='root';
$pass='';
$db='student1';
$con=mysqli_connect($host,$user,$pass,$db);
$res=mysqli_query($con,"select * from student");
#button variable
$id='';
$name='';
$address='';
if(isset($_POST['id'])){
	$id= $_POST['id'];
}
if(isset($_POST['name'])){
	$name= $_POST['name'];

}
if(isset($_POST['address'])){
	$address= $_POST['address'];
}
$sqls='';
if(isset($_POST['add'])){
   $sqls="insert into student value('$id','$name','$address')";
   mysqli_query($con,$sqls);
   header("location:home.php");
}
if(isset($_POST['del'])){
   $sqls="delete from student where name='$name'";
   mysqli_query($con,$sqls);
   header("location:home.php");
}
?>
<div id='mother'>
<form method='POST'>
<aside>
<div id='div'>
<img src='img/office.jpg' alt='logo' width='200'>
<h3>admin board</h3>
<label> student id</label><br>
<input type='text' name='id' id='id'><br>
<label> student name</label><br>
<input type='text' name='name' id='name'><br>
<label> student address</label><br>
<input type='text' name='address' id='addres'><br><br>
<button name='add'>add student</button>
<button name='del'>delete student  </button>
</div>

</aside>
<!--ÚÑÖ ÈíÇäÇÊ ÇáØáÇÈ-->
<main>
<table id='tbl'>
<tr>
<th>id</th>
<th> student name</th>
<th> student address </th>
</tr>
<?php
while($row = mysqli_fetch_array($res)){
    echo"<tr>";
	echo"<td>".$row['id']."</td>";
	echo"<td>".$row['name']."</td>";
	echo"<td>".$row['address']."</td>";
	echo"<tr>";
}

?>
</table>  
</main>
</form>

</div>
</body>
</html>
