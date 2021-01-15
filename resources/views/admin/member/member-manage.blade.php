@extends('admin.master')
@section('title')
CATEGORY
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="well">
        @if ($message=Session::get('message'))
                <h2 id="xyz" class="text-center text-success">{{$message}}</h2>
            @endif
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">SI No</th>
                  <th scope="col">Member Name</th>
                  <th scope="col">Member Email</th>
                  <th scope="col">Member Phone</th>
                  <th scope="col">action</th>                  
                </tr>
              </thead>
              @php ($i=1)
              @foreach($members as $member)
              <tbody>
                <td>{{$i++}}</td>
                <td>{{ $member->name}}</td>
                <td>{{$member->email}}</td>
                <td>{{$member->phone}}</td>
                <td>
                    <a href="{{url('/member/delete',['id'=>$member->id])}}" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash    "></i>
                    </a>

                </td>
              </tbody>
              @endforeach
            </table>
        </div>
    </div>
</div>
  <!-- /.content -->
@endsection