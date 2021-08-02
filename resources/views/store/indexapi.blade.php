@extends('layouts.app')

@section('content')
<h1>Tienda de Zapatos API</h1>

<script>
    let contenido = document.getElementById('res');

    fetch('/api/products')
    .then(data => data.json())
    .then(data => {
        //console.log(data);
        for (let index = 0; index < data.length; index++) {
            document.getElementById('res').innerHTML += '<li class="list-group-item">'+data[index].name+'</li>'
        }

    })
</script>

<ul class="list-group" id="res">
  </ul>
@endsection
