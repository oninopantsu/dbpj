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
    color: white;
    padding: 5px 30px;
  }

  td {
    border: 1px solid black;
    padding: 5px 30px;
    text-align: center;
  }
</style>

<body>
  @section('title','board.index.blade.php')

  @section('content')
  <table>
    <tr>
      <th>Data</th>
    </tr>
    @foreach($items as $item)
    <tr>
      <td>
        {{$item->getData()}}
      </td>
    </tr>
    @endforeach
  </table>
  @endsection
</body>

</html>