<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
@extends('layouts.hello')
<style>
  th {
    background-color: black;
    color: burlywood;
    padding: 5px 30px;
  }

  td {
    border: 1px solid black;
    padding: 5px 30px;
    text-align: center
  }
</style>

<body>
  @section('title', 'show.blade.php')
  @section('content')
  @if ($items != null)
  @foreach ($items as $item)
   <table>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>age</th>
    </tr>
    <tr>
      <td>
        {{$item->id}}
      </td>
      <td>
        {{$item->name}}
      </td>
      <td>
        {{$item->age}}
      </td>
    </tr>
  </table>
  @endforeach
  @endif
  @endsection
</body>

</html>