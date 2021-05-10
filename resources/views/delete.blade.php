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
    color: white;
    padding: 5px 30px;
  }

  td {
    border: 1px solid pink;
    padding: 5px 30px;
    text-align: center;
  }

  button {
    padding: 10px 20px;
    background: pink;
    color: white;
  }
</style>

<body>
  @section('title', 'delete.blade.php')
  @section('content')

  <form action="/delete" method="post">
    <table>
      @csrf
      <input type="hidden" name="id" value="{{$form->id}}">
      <tr>
        <th>
          name
        </th>
        <td>
        {{$form->name}}
        </td>
      </tr>
      <tr>
        <th>
          age
        </th>
        <td>
        {{$form->age}}
        </td>
      </tr>
    </table>
    <button>送信</button>
  </form>
  @endsection
</body>

</html>