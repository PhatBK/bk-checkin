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
		
	</style>
</head>
<body>
    <div>
        <h1>Danh Sách Các Lớp</h1>
        
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
    					<li><a href="add-user/{{ $lophoc->ma_lop }}" title="Thêm Sinh Viên">Thêm Sinh Viên</a></li>
    				</ul>
    			</li>
    			<hr style="border: 2px solid;color:red;">
    			@endforeach
    		</ul>	
    	</nav>
    </header><!-- /header -->
</body>
</html>