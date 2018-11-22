@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Hoteles de 1ª</h2>

  <table>
    @foreach($hoteles as $hotel)
    <tr>
      <th>Id</th>
      <td>{{ $hotel->id }}</td>
      <th>Nombre</th>
      <td>{{ $hotel->nombre }}</td>
      <th>Direccion</th>
      <td>{{ $hotel->direccion }}</td>
      <th>Telefono</th>
      <td>{{ $hotel->telefono }}</td>
      <th>Categoria</th>
      <td>{{ $hotel->categoria }}</td>
    </tr>

@endforeach
  </table>

@endsection
