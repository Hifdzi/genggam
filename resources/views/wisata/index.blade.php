@extends('wisata.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Wisata Genggam</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('wisata.create') }}"> Create New Wisata</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   <br>
   <br>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>gambar</th>
            <th>judul</th>
            <th>deskripsi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($wisata as $datawisata)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $datawisata->gambar }}</td>
            <td>{{ $datawisata->judul_wisata }}</td>
            <td>{{ $datawisata->deskripsi }}</td>
            <td>
                <form action="{{ route('wisata.destroy',$datawisata->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('wisata.show',$datawisata->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('wisata.edit',$datawisata->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $wisata->links() !!}
      
@endsection