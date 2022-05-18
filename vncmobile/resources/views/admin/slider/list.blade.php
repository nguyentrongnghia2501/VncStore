@extends('admin.main')
@section('content')
          <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>Tên</td>
                        <td>Đường dẫn</td>
                        <td>ảnh</td>
                        <td>sort_by</td>
                        
                       
                        <td>Chức Năng</td>
                    </tr>
                    <tbody>
                        @foreach($silder as $key =>$silders  )
                            <tr>
                                <td>{{$key +1}}</td>
                                <td>{{ $silders->name}}</td>
                                <td>{{ $silders->url}}</td>
                                <td>
                                   <img src="/nvs/{{$silders->thumb}}" alt="">     
                               </td>
                                <td>{{ $silders->sort_by}}</td>
                                <td> active </td>
                                <td>
                                    <a href="/admin/slider/delete/{{$silders->id}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-delete-left"></i></a>
                                    <a href="/admin/slider/edit/{{$silders->id}}" class="btn btn-success btn-sm"> <i class="fa-solid fa-file-pen"></i></a>
                                </td>
                            </tr>

                    </tbody>
                    @endforeach

             
          </table>

@endsection