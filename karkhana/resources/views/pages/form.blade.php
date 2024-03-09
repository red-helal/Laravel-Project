<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">





<style>
    li{
        color: red
    }
</style>

<div class="container">
    <div class="card card-body">
<div class="card-header bg-dark text-light text-center">
   <h1> Test Form</h1>
</div>

{!! Form::open(['url' => route('product.store'),'files' => true]) !!}
@if ($errors->any())
    @foreach ($errors->all() as $e)
       <li>{{$e}}</li>
    @endforeach
    <br>
@endif

Data-1
{!! Form::text('name[]', '',['placeholder'=>'Enter your product name','class'=>'form-control']) !!}
<br>

{!! Form::text('price[]', '',['placeholder'=>'Enter your product price','class'=>'form-control']) !!}
<br>
{!! Form::select('category[]', ['1' => 'Fruits', '2' => 'Vegetable']) !!}
<br>
<br>
Data-2
{!! Form::text('name[]', '',['placeholder'=>'Enter your product name','class'=>'form-control']) !!}
<br>

{!! Form::text('price[]', '',['placeholder'=>'Enter your product price','class'=>'form-control']) !!}
<br>
{!! Form::select('category[]', ['1' => 'Fruits', '2' => 'Vegetable']) !!}
<br>
{{-- <br>
@if ($errors->has('email'))
    {{$errors->first('email')}}
@endif
<br>
{!! Form::file('photo') !!}
<br>
{!! Form::select('city', $city,'B',['class'=>'form-control']) !!}
<br> --}}

{!! Form::submit('Click Me!') !!}

{!! Form::close() !!}

</div>
</div>
