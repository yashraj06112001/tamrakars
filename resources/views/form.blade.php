@extends('layout.layout1')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin:30px;
            border-radius:20px;
            width:300px;
            height:30px;
            font-size:19px;
        }
        #a{
            margin-left:100px;
            margin-top:50px;
            border-style: none;
            border-radius: 50px;
            padding:10px;
            border-width:5px;
            font-size: 20px;
        }
        #submit_button{
            background-color: darkgreen;
            color:white;
            height:50px;
            width:100px;
        }
        #submit_button:hover{
            background-color: lightgreen;
        }
        </style>
        <script>
            function func1(){

            }
        </script>
</head>
<body>
    @section('form')
    <div>
        <form id="a" action="{{route('formpost')}}" method="post">
        @csrf
            <label for="name"><b>1) नाम </b></label>
            <input  type="text" name="name" id="name" required>
            <br>
            <label for="phone" ><b>2) मोबाइल नंबर</b></label>
            <input type="tel" name="phone" required id="phone" pattern="[1-9][0-9]{9}">
            <br>
            <label for="pincode"><b>3) पिन कोड </b></label>
            <input type="pincode" name="pincode" required id="pincode"  pattern="[1-9][0-9]{5}">
            <br>
            <label for="total"><b>4) परिवार के कुल सदस्य</b></label>
            <input type="number" required name="total" id="total">
            <br>
            <label for="male"><b>5) पुरुष</b> </label>
            <input type="number" required name="male" id="male">
            <br>
            <label for="female"><b>6) महिला</b> </label>
            <input type="number" required name="female" id="female">
            <br>
            <label for="children"><b>7) बच्चे</b> </label>
            <input type="number" required name="children" id="children">
            <input id="submit_button" type="submit" value="submit">
        </form>
    </div>
    @endsection
</body>
</html>