<?php 

$host="localhost";
$user="root";
$password="";
$db="demo";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,"demo");

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
       // echo " You Have Successfully Logged in";
       
      // header('Location:aaa.php');
       ?>
<script type="text/javascript">
window.location="aaa.php";
alert('Login Successful');
</script>

<?php
        
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        ?>
<script type="text/javascript">
window.location="login.php";
alert('Wrong password, try again');
</script>

<?php
        exit();
    }
        
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	
	<link rel="stylesheet" a href="css\font-awesome.min.css">
    
    <style>
        body{
	margin: 0 auto;
	background-image: url("travel4.jpg");
	background-repeat: no-repeat;
	background-size: 100% 720px;
}

.container{
	width: 500px;
	height: 450px;
	text-align: center;
	margin: 0 auto;
	background-color: #5F5958  ;
	margin-top: 80px;
    margin-bottom:50px;
}

.container img{
	width: 150px;
	height: 150px;
	margin-top: -60px;
    border-radius: 40%;
}

input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	text-align: ;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}





.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
}

h1{
    text-align: center;
}
h2{
    text-align: center;
}
</style>

</head>
<body>
    <h1>VENTUREintoADV</h1>
    <h2>Welcome to Admin login</h2>
	<div class="container">
	<img src="adminlogo.png"/>
		<form method="POST" action="#">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>