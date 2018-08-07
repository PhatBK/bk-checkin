<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quan Ly Danh Sach Lop Sinh Vien</title>
	<style type="text/css" media="screen">
		a {
			text-decoration: none;
		}
        h1 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 50px; 
        }
        .logout {
          margin-top: 4%; 
          margin-bottom: 2%;
          text-align: center;

        }
        .logout a {
          text-decoration: none;
          text-align: center;
          font-size: 18px;
          font-weight: bold;
          padding: 15px 30px 15px 30px;
          color: red;
          background-color: #00bee8;
          box-shadow: 5px 5px 2px 3px orange;
        }
        .logout a:hover {
          background-color: #7fff00;
          box-shadow: 5px 5px 2px 3px white;
        }
	</style>
</head>
<body>
    <div>
        <h1>Danh Sách Các Lớp</h1>
    </div>
    <div class="logout">
        <a href="logout" title="Đăng xuất khỏi hệ thống">Đăng Xuất</a>
    </div>
    <header id="header" class="">
    	<nav>
    		<ul>
    			@foreach ($lophocs as $lophoc)
    			<li>
    				<label>Lớp: &nbsp;{{ $lophoc->ma_lop }}</label><br>
    				<label>Môn: &nbsp;{{ $lophoc->monHoc->ten_mon }}</label><br>
    				<label>Địa Điểm: &nbsp;{{ $lophoc->vi_tri }}</label><br>
    				<label>Thứ: &nbsp;{{ $lophoc->thu  }}</label><br>
    				<label>Bắt Đầu: &nbsp;{{ $lophoc->bat_dau }}</label><br>
    				<label>Kết Thúc: &nbsp;{{ $lophoc->ket_thuc }}</label>
    				<ul>
    					<li><a href="danh-sach-sinh-vien/{{ $lophoc->ma_lop }}" title="Danh sách sinh viên">Danh Sách Sinh Viên</a></li>
    					<li><a href="add-user/{{ $lophoc->ma_lop }}" title="Thêm Sinh Viên Mới">Thêm Sinh Viên Mới</a>
                        </li>
                        <li>
                            <a href="add-user-danh-sach/{{  $lophoc->ma_lop }}" title="Thêm sinh viên từ danh sách sinh viên">Thêm Sinh Viên Từ Danh Sách</a>
                        </li>
    				</ul>
    			</li>
    			<hr style="border: 2px solid;color:gray;">
    			@endforeach
    		</ul>	
    	</nav>
    </header><!-- /header -->
</body>
</html>