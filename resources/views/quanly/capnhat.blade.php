<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quan Ly Cap Nhat User</title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
		* {
		  margin: 0;
		  padding: 0;
		  box-sizing: border-box;
		  -webkit-box-sizing: border-box;
		  -moz-box-sizing: border-box;
		  -webkit-font-smoothing: antialiased;
		  -moz-font-smoothing: antialiased;
		  -o-font-smoothing: antialiased;
		  font-smoothing: antialiased;
		  text-rendering: optimizeLegibility;
		}

		body {
		  font-family: "Roboto", Helvetica, Arial, sans-serif;
		  font-weight: 100;
		  font-size: 12px;
		  line-height: 30px;
		  color: #777;
		  background: #4CAF50;
		}

		.container {
		  max-width: 700px;
		  width: 100%;
		  margin: 0 auto;
		  position: relative;
		}

		#contact input[type="text"],
		#contact input[type="email"],
		#contact input[type="number"],
		#contact input[type="password"],
		#contact button[type="submit"] {
		  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
		}

		#contact {
		  background: #F9F9F9;
		  padding: 25px;
		  margin: 50px 0;
		  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}

		#contact h3 {
		  display: block;
		  font-size: 30px;
		  font-weight: 300;
		  margin-bottom: 10px;
		}

		#contact h4 {
		  margin: 5px 0 15px;
		  display: block;
		  font-size: 13px;
		  font-weight: 400;
		}

		fieldset {
		  display: inline;
		  border: medium none !important;
		  margin: 0 0 10px;
		  min-width: 100%;
		  padding: 0;
		  width: 100%;
		}

		#contact input[type="text"],
		#contact input[type="email"],
		#contact input[type="number"],
		#contact input[type="password"] {
		  width: 70%;
		  border: 1px solid #ccc;
		  background: #FFF;
		  margin: 0 0 5px 30%;
		  padding: 10px;
		}

		#contact input[type="text"]:hover,
		#contact input[type="email"]:hover,
		#contact input[type="number"]:hover,
		#contact input[type="password"]:hover {
		  -webkit-transition: border-color 0.3s ease-in-out;
		  -moz-transition: border-color 0.3s ease-in-out;
		  transition: border-color 0.3s ease-in-out;
		  border: 1px solid #aaa;
		}

		#contact button[type="submit"] {
		  cursor: pointer;
		  width: 100%;
		  border: none;
		  background: #4CAF50;
		  color: #FFF;
		  margin: 0 0 5px;
		  padding: 10px;
		  font-size: 15px;
		}

		#contact button[type="submit"]:hover {
		  background: #43A047;
		  -webkit-transition: background 0.3s ease-in-out;
		  -moz-transition: background 0.3s ease-in-out;
		  transition: background-color 0.3s ease-in-out;
		}

		#contact button[type="submit"]:active {
		  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
		}

		.copyright {
		  text-align: center;
		}

		#contact input:focus,
		#contact textarea:focus {
		  outline: 0;
		  border: 1px solid #aaa;
		}

		::-webkit-input-placeholder {
		  color: #888;
		}

		:-moz-placeholder {
		  color: #888;
		}

		::-moz-placeholder {
		  color: #888;
		}

		:-ms-input-placeholder {
		  color: #888;
		}
		h3 {
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">  
	  <form id="contact" action="../capnhat/{{$sinhvien->id}}" method="post">
	  	    @csrf
		    <h3>Thông Tin Tài Khoản</h3>
		    <fieldset>
		      <label>MSSV:</label>
		      <input value="{{$sinhvien->ma_so}}" name="ma_so" placeholder="Mã Số Sinh Viên" type="number" required autofocus>
		    </fieldset>
		    <fieldset>
		    <label>Tên Đăng Nhập:</label>
		      <input value="{{ $sinhvien->username}}" name="username" placeholder="Tài Khoản Đăng Nhập" type="text"  required autofocus>
		    </fieldset>

		    <fieldset>
		    	<label>Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    	<label>Đổi Mật Khẩu: &nbsp;&nbsp;</label><input type="checkbox" name="change_pass" />
		      <input title="Bạn cần check vào đổi mật khẩu để có thể thay đổi mật khẩu" disabled value="{{ $sinhvien->password}}" name="password" placeholder="Mật Khẩu" type="password" required>
		    </fieldset>
		    <fieldset>
		      <input disabled value="{{ $sinhvien->password}}" name="confirmPass" placeholder="Xác Nhận Mật Khẩu" type="password" required>
		    </fieldset>
		    <fieldset>
		    	<label>Email:</label>
		      <input value="{{ $sinhvien->email}}" name="email" placeholder="Mail" type="email" required>
		    </fieldset>
		    <fieldset>
		    	<label>Level:</label>
		      <input title="Bạn không thể thay đổi trường này" value="{{$sinhvien->level}}" disabled name="level" placeholder="Level" type="number" required>
		    </fieldset>
		    <fieldset>
		    	<label>Họ & Tên:</label>
		    	<input value="{{ $sinhvien->ho_ten}}" type="text" name="hoten" placeholder="Tên đầy đủ của sinh viên" required>
		    </fieldset>
		    <fieldset>
		    	<label>Khoa, Viện:</label>
		    	<input value="{{ $sinhvien->khoa_vien}}" type="text" name="khoavien" placeholder="Khoa, Viện" required>
		    </fieldset>
		    <fieldset>
		    	<label>Khóa:</label>
		    	<input value="{{ $sinhvien->khoa}}" type="number" name="khoa" placeholder="Khóa">
		    </fieldset>
		    <fieldset>
		      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Cập Nhật</button>
		    </fieldset>
	  </form>
	</div>
</body>
</html>