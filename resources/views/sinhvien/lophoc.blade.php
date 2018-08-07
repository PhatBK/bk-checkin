<!DOCTYPE html>
<html>
  <head>
  <title>Student Checkin Class</title>
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
  </style>
</head>
<body>
    <header id="header" class="info">
       <h2>Danh Sách Các Môn Học Hôm Nay Của Sinh Viên</h2>
       <nav>
         <ul>
           <li>Sinh Viên:&nbsp;&nbsp;<span>{{Auth::user()->ho_ten}}</span></li>
           <li>Mã Số Sinh Viên:&nbsp;&nbsp;<span>{{Auth::user()->ma_so}}</span></li>
           <li>Khóa:&nbsp;&nbsp;<span>{{Auth::user()->khoa}}</span></li>
           <li>Ngành Học:&nbsp;&nbsp;<span>{{Auth::user()->khoa_vien}}</span></li>
         </ul>
       </nav>
    </header><!-- /header -->     
      <section class="table">
        <table>
          <tr>
            <th>Môn Học</th>
            <th>Mã Lớp</th>
            <th>Thứ</th>
            <th>Số Buổi Học</th>
            <th>Phòng Học</th>
            <th>Bắt Đầu</th>
            <th>Kết Thúc</th>
            <th>Trạng Thái</th>
            <th>Hoàn Thành</th>
          </tr>
          <tr>
          @foreach ($lophocs as $lophoc)
        
            <td>{{ $lophoc->monHoc->ten_mon }}</td>
            <td>{{ $lophoc->ma_lop }}</td>
            <td>{{ $lophoc->thu }}</td>
            <td>{{ $lophoc->thoi_luong }}</td>
            <td>{{ $lophoc->vi_tri }}</td>
            <td>{{ $lophoc->bat_dau }}</td>
            <td>{{ $lophoc->ket_thuc }}</td>
            <td 
            @if ($trangthai)
              data-toggle="modal" data-target="#myModal{{ $lophoc->ma_lop }}"
            @endif
            >
            @if ($trangthai)
              <span style="color: green;">Điểm Danh</span>
            @elseif(!$trangthai)
              <span style="color: black;">Đóng Điểm Danh</span>
            @endif
            </td>
            <td></td>
            <!-- Modal -->
            <div class="modal fade" id="myModal{{ $lophoc->ma_lop }}" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center;">Bảng Điểm Danh Sinh Viên</h4>
                  </div>
                  <div class="modal-body">
                    <p style="color:red;text-align: center;">Bạn Đã Điểm Danh Thành Công</p>
                    <p>Lớp Học: &nbsp;&nbsp;&nbsp;{{ $lophoc->ma_lop }}</p>
                    <p>Học Phần: &nbsp;&nbsp;&nbsp;{{ $lophoc->monHoc->ten_mon }}</p>
                    <p>Thời Gian Điểm Danh: {{ $thoigian }} </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                  </div>
                </div>
              </div>
            </div>
          </tr>
          @endforeach
       {{--    <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td>Germany</td>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td>Germany</td>
          </tr> --}}
        </table>
      </section>
      <section class="logout">
        <div>
          <a href="logout" title="Đăng xuất khỏi hệ thống">Logout</a>
        </div>
      </section>
      <footer>
        <div class="help">
          <p>1: Sinh Viên Kiểm Tra Các Môn Học Trong Thời Khóa Biểu</p>
          <p>2: Chọn Lớp Mà Trạng Thái Của Nó Là: Điểm Danh</p>
          <p>3: Điểm Danh</p>
          <p>4: Logout</p>
        </div>
      </footer>
</body>
</html>
