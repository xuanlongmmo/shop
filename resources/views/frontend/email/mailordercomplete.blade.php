Cảm ơn quý khách Nguyễn Xuân Long đã đặt hàng tại Áo Bóng Đá

<div class="container">
<div class='row'>
<div class='col-sm-8'>
  {{-- <h2>{{$cate->name}}</h2> --}}
  {{-- <img src="{{$cate->img}}" height="300px" width="450px" alt="">           --}}
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>Thông tin thanh toán</th>
        <th></th>
        {{-- <th  style="width:60%">{{$id}}</th> --}}
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Mã đơn</td>
        <td>{{ $id }}</td>
      </tr>
      <tr>
        <td>Họ tên</td>
        <td>{{ $name }}</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>{{ $email }}</td>
      </tr>
      <tr>
        <td>Tổng tiền</td>
        <td>{{ number_format($total) }} vnđ</td>
      </tr>
    </tbody>
  </table>
 </div>
</div>
</div>