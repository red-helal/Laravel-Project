@extends('layout')

@section('title')
Test Mode
@endsection

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Roll</th>
        </tr>
    </thead>
    <tbody>
        <div class="card card-body">
@foreach ($data  as $d )



        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $d->name }} </td>
            <td>{{ $d->roll }} </td>
        </tr>


@endforeach
 </tbody>

</table>
{{$data->links()}}
</div>



@endsection










