@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Consulter toutes les annonces</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ads.create') }}"> Créer de nouvelles annonces</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Num</th>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Localisation</th>
            <th>Price</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($ads as $ad)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ad->title }}</td>
            <td><img src="/storage/{{ $ad->image }}" height="75" width="75" alt="" /></td>
            
            <td>{{ $ad->description }}</td>
            <td>{{ $ad->localisation }}</td>
            <td>{{ $ad->price}}</td>
            <td>
                <form action="{{ route('ads.destroy',$ad->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('ads.show',$ad->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('ads.edit',$ad->id) }}">édit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
  
    {!! $ads->links() !!}
      
@endsection