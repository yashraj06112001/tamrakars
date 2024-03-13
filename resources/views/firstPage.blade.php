@extends('layout.layout1')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
    .add{
        width: 200px;
        height:200px;
        margin:50px;
       background-color:lightgreen;
        color:white;
        border-radius: 30px;
        font-weight: bolder;
        font-size: larger
        

    }
    .add:hover{
        width: 220px;
        height:220px;
        margin: 50px;
       background-color:lightgreen;
        color:white;
        font-size: larger;
        font-weight: bolder;
    }
    #hello{
        margin-left:100px;
       text-decoration:underline;
       text-decoration-style:solid;
       text-decoration-color: black;
       text-underline-offset: 10px;
    }
   #button2{
    position:absolute;
    margin-left:100px;
    background-color:aqua;
    color:black;
    border-color: darkblue;
   }
   
   </style>
</head>
<body>
    @section('form');

        <h1 id="hello"><b>Hello Thanks for your visit </b></h1>
        <br>
        
            <form action="{{route('take')}}">
            @csrf
            <button style="border-color:dark green;" class="add" id="button1" type="submit" value="add" name="button"><b>Add your information</b></button>
            <button class="add" id="button2" type="submit" value="data" name="button"><b>All your data</b></button>
            </form>
 
    @endsection
</body>
</html>