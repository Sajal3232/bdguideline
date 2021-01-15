@extends('admin.master')
@section('title')
Information Manage
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
                  <th scope="col">info Name</th>
                  <th scope="col">information</th>
                  <th scope="col">Publication Status</th>
                  <th scope="col">action</th>                  
                </tr>
              </thead>
              @php ($i=1)
              @foreach($informations as $information)
              <tbody>
                <td>{{$i++}}</td>
                <td>{{ $information->infoname}}</td>
                <td>{{ $information->information}}</td>
                <td>{{$information->publication_status == 1? 'published' : 'Unpublished'}}</td>
                <td>
                    @if($information->publication_status == 1)
                    <a href="{{url('/information/unpublish',['id'=>$information->id])}}" class="btn btn-info btn-sm">
                        <span class=""><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
                    </a>
                    @else
                    <a href="{{url('/information/publish',['id'=>$information->id])}}" class="btn btn-warning btn-sm">
                        <span class=""><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
                    </a>
                    @endif
                    </a>
                    <a href="{{url('/information/delete',['id'=>$information->id])}}" class="btn btn-danger btn-sm">
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