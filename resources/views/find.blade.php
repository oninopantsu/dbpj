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
    color: blueviolet;
    padding: 5px 30px;
  }

  td {
    border: 1px solid black;
    padding: 5px 30px;
    text-align: center;
  }
</style>

<body>
  @section('title', 'find.blade.php')


  @section('content')
  <form action="find" method="POST">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="見つける">
  </form>
  @if (@isset($item))
  <table>
    <tr>
      <th>Data</th>
    </tr>
    <tr>
      <td>
        {{$item->getData()}}
      </td>
    </tr>
  </table>
  @endif
  @endsection
</body>

</html>