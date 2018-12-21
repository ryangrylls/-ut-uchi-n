
<html>
	<head>
		<title>Register</title>
	</head>
	<body>
		<?php
		require_once("connection.php");
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["pass"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
				if ($username == "" || $password == "" ) {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
						}
			
				else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from myDb.member where username='$username'";
					$kt=mysqli_query($conn, $sql);
 
					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO myDb.member(
	    					username,
	    					password
	    					
	    					) VALUES (
	    					'$username',
	    					'$password'
						   
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				   		echo "Đăng ký thành công";
						}
					
				}
				
	}
	if(isset($_POST["dangnhap"])) {
					header("Location: login.php");
					}
?>
	<form action="register.php" method="post">
		<table>
			<tr>
				<td colspan="2">Register Form</td>
			</tr>	
			<tr>
				<td>Username :</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" id="pass" name="pass"></td>
			</tr>
		
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Register"></td>
			</tr>
 
		</table>
			<tr>
				<td>If you want to login. PRESS   </td>
				
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="dangnhap" value="LOGIN NOW"></td>
			</tr>
	</form>
	</body>
	</html>