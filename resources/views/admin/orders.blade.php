@extends('admin/admin')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Người mua</th>
      <th scope="col">Ngày xuất hóa đơn</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Thông tin chi tiết</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>danh11@</td>
      <td>11/01/2019</td>
      <td>
        <form method="GET" action="{{route('admin')}}">
        <select name="dropdown" onchange="this.form.submit()">
          <option name="1" value="1">Đang đóng gói</option>
          <option name="2" value="2">Đang giao</option>
        </select>
      </form>
      </td>
      <td><a href="#">Chi tiết</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>danh11@</td>
      <td>11/01/2019</td>
      <td>
        <select name="dropdown" onchange="this.form.submit()">
          <option name="1" value="1">Đang đóng gói</option>
          <option name="2" value="2">Đang giao</option>
        </select>
      </td>
      <td><a href="#">Chi tiết</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>danh11@</td>
      <td>11/01/2019</td>
      <td>
        <select name="dropdown" onchange="this.form.submit()">
          <option name="1" value="1">Đang đóng gói</option>
          <option name="2" value="2">Đang giao</option>
        </select>
      </td>
      <td><a href="#">Chi tiết</a></td>
    </tr>
  </tbody>
</table>
</form>
@endsection 