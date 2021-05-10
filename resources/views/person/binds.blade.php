<!DOCTYPE html>
<html lang="ja">

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
    color: yellow;
    padding: 5px 30px;
  }

  td {
    border: 1px solid black;
    padding: 5px 30px;
    text-align: center;
  }
</style>

<body>
  @section('title', 'binds.index.blade.php')

  @section('content')
  <p>Person</p>
  <table>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>AGE</th>
    </tr>
    <tr>
      <td> {{$item->id}} </td>
      <td> {{$item->name}} </td>
      <td> {{$item->age}} </td>
    </tr>
  </table>
  @endsection
</body>

</html>