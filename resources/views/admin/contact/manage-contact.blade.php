@extends('admin.master')
@section('title')
Contact Manage
@endsection
@section('content')
<style>
  .add-scrl{
    max-width: 100%;
    height: auto;
    overflow: scroll;
  }
  .add-scrl::-webkit-scrollbar{
    width: 4px;
  }
  .add-scrl::-webkit-scrollbar-track{
    background-color: #ddd;
  }
  .add-scrl::-webkit-scrollbar-thumb{
    background-color: #333;
      }
</style>
<div class="row add-scrl">
    <div class="col-sm-12">
        <div class="well">
           @if ($message=Session::get('message'))
                <h2 id="xyz" class="text-center text-success">{{$message}}</h2>
            @endif
            <table class="table ">
              <thead>
                <tr>
                  <th scope="col">SI No</th>
                  <th scope="col">Owner Name</th>
                  <th scope="col">Owner Degree</th>
                  <th scope="col">Owner Institute</th>
                  <th scope="col">Others</th>
                  <th scope="col">Owner Phone</th>
                  <th scope="col">Owner Email</th>
                  <th scope="col">Publication Status</th>
                  <th scope="col">action</th>                  
                </tr>
              </thead>
              @php ($i=1)
              @foreach($contacts as $contact)
              <tbody>
                <td>{{$i++}}</td>
                <td>{{ $contact->ownername}}</td>
                <td>{{ $contact->ownerdegree}}</td>
                <td>{{ $contact->ownerinstitute}}</td>
                <td>{{ $contact->other}}</td>
                <td>{{ $contact->phone}}</td>
                <td>{{ $contact->email}}</td>
                <td>{{$contact->publication_status == 1? 'published' : 'Unpublished'}}</td>
                <td>
                    @if($contact->publication_status == 1)
                    <a href="{{url('/contact/unpublish',['id'=>$contact->id])}}" class="btn btn-info btn-sm">
                        <span class=""><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
                    </a>
                    @else
                    <a href="{{url('/contact/publish',['id'=>$contact->id])}}" class="btn btn-warning btn-sm">
                        <span class=""><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
                    </a>
                    @endif
                    </a>
                    <a href="{{url('/contact/edit',['id'=>$contact->id])}}" class="btn btn-success btn-sm">
                        <i class="fas fa-edit    "></i>
                    </a>
                    <a href="{{url('/contact/delete',['id'=>$contact->id])}}" class="btn btn-danger btn-sm">
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