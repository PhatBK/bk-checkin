<!DOCTYPE html>
<html>
  <head>
  <title>Quản Lý Danh Sách Sinh Viên Theo Lớp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body {
      background-color: #e1ffc5;
    }
    header.info {
      width : 100%;
      background-color: white;
      border-radius: 3%;
      z-index: 3;
      margin-bottom: 5%; 
    }
    nav ul li span {
      font-family: ;
      font-size: 20px;
      color: red;
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        background-color: white;
        box-shadow: 20px black;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    h2 {
      text-align: center;
      align-items: center;
    }
    .logout {
      margin-top: 5%; 
      text-align: center;
    }
    .logout div a {
      text-decoration: none;
      text-align: center;
      font-size: 18px;
      font-weight: bold;
      padding: 15px 30px 15px 30px;
      color: red;
      background-color: #00bee8;
      box-shadow: 5px 5px 2px 3px orange;
    }
    .logout div a:hover {
      background-color: #7fff00;
      box-shadow: 5px 5px 2px 3px white;
    }
    footer {
      margin-top: 5%; 
      /*text-align: center;*/
      background-color: #b9b971 ;

    }
    div.help p {
      padding: 2px;
      text-align: center;
    }
    #delete {
    	color:red;
    }
    
  </style>
</head>
<body>
    <header id="header" class="info">
       <h2>Danh Sách Sinh Viên</h2>
       <nav>
         <ul>
           <li>Mã Lớp: &nbsp;&nbsp;{{ $lophoc->ma_lop }}</li>
           <li>Môn:&nbsp;&nbsp;{{ $lophoc->monHoc->ten_mon  }}</li>
           <li>Thứ:&nbsp;&nbsp;{{ $lophoc->thu }}</li>
           <li>Thời Gian Bắt Đầu: &nbsp;&nbsp;{{ $lophoc->bat_dau }}</li>
           <li>Thời Gian Kết Thúc: &nbsp;&nbsp;{{ $lophoc->ket_thuc }}</li>
           
           <li>Số Buổi: &nbsp;&nbsp;{{ $lophoc->thoi_luong }}</li>
           <li>Số Lượng Sinh Viên: &nbsp;&nbsp;{{ $so_luong }}</li>
           <li>Số Lượng Đi Học:&nbsp;&nbsp;</li>
           <li>Số Lượng Vắng Mặt:&nbsp;&nbsp;</li>
         </ul>
       </nav>
    </header><!-- /header -->     
      <section class="table">
        <table>
          <tr>
            <th>MSSV</th>
            <th>Họ và Tên</th>
            <th>Khóa</th>
            <th>Khoa, Viện</th>
            <th>Số Ngày Nghỉ</th>
            <th>Cập Nhật</th>
            <th>Xóa</th>
          </tr>
          @foreach ($danhsachs as $danhsach)
	          <tr>
	            <td>{{ $danhsach->ma_so }}</td>
	            <td>{{ $danhsach->ho_ten }}</td>
	            <td>{{ $danhsach->khoa }}</td>
	            <td>{{ $danhsach->khoa_vien }}</td>
	            <td>0</td>
	            <td><a id="edit" href="../cap-nhat/{{ $danhsach->id }}" title="">Sửa</a></td>
	            <td><a id="delete" href="../xoa-sinh-vien/{{ $danhsach->id  }}" title="">Xóa</a></td>
	          </tr>
          @endforeach
        </table>
      </section>
</body>
</html>
