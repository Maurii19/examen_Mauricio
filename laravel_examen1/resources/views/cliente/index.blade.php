@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Clientes</h2>

  <table>
    @foreach($clientes as $cliente)
    <tr>
      <th>Id</th>
      <td>{{ $cliente->id }}</td>
      <th>NIF</th>
      <td>{{ $cliente->nif }}</td>
      <th>Nombre</th>
      <td>{{ $cliente->nombre }}</td>
      <th>Apellido</th>
      <td>{{ $cliente->apellido }}</td>
      <th>Telefono</th>
      <td>{{ $cliente->telefono }}</td>
    </tr>


    @endforeach
  </table>

@endsection
