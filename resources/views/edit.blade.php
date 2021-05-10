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
    border: 1px solid black;
    padding: 5px 30px;
    text-align: center;
  }

  button {
    padding: 10px 20px;
    background: black;
    color: yellow;
  }
</style>

<body>
  @section('title', 'edit.blade.php')
  @section('content')
  @if(count($errors) > 0)
  <ul>
    @foreach($errors->all() as $error)
    <li>
      {{$error}}
    </li>
    @endforeach
  </ul>
  @endif
  <form action="/edit" method="post">
    <table>
      @csrf
      <tr>
        <th>
          id
        </th>
        <td>
          <input type="hidden" name="id" value="{{$form->id}}">
        </td>
      </tr>
      <tr>
        <th>
          name
        </th>
        <td>
          <input type="text" name="name" value="{{$form->name}}">
        </td>
      </tr>
      <tr>
        <th>
          age
        </th>
        <td>
          <input type="text" name="age" value="{{$form->age}}">
        </td>
      </tr>
    </table>
    <button>送信</button>
  </form>
  @endsection
</body>

</html>