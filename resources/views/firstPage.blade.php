@extends('layout.layout1')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
    .add{
        width: 150px;
        height:60px;
        margin:50px;
       background-color:darkgreen;
        color:white;

    }
    .add:hover{
        width: 160px;
        height:80px;
        margin: 50px;
       background-color:lightgreen;
        color:white;
        font-size: larger;
        font-weight: bolder;
    }
   
   </style>
</head>
<body>
    @section('form');
    <div id="newform">
        <h1><b>Hello Thanks for your visit </b></h1>
        <br>
        <div id="options">
            <form action="{{route('take')}}">
            @csrf
            <button class="add" id="button1" type="submit" value="add" name="button">add your information</button>
            <button class="add" id="button2" type="submit" value="data" name="button">All your data</button>
            </form>
        </div>
    </div>
    @endsection
</body>
</html>