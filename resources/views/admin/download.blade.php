@extends("layout.layout1")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          .downloadButton{
           
            background-color: darkgreen;
            color:white;
            height:60px;
            width:120px;
            border-radius:50px;
            font-size:20px;
            
        }
        .downloadButton:hover{
          
            background-color: lightgreen;
            height:80px;
            width:140px;
            border-radius:50px;
            
        }
        input{
            margin:20px;
            width:300px;
            border-radius: 50px;
            height: 49px;
            font-size: 30px ;
        }
        label{
           font-size: 20px;
           background-color: white;
           border-radius: 30px;
           color:#545103;
           padding: 20px;;
        }
        #download{
            color:#545103;
            font-size: 50px;
            
        }
        #new{
            margin-bottom:100px;
        
            
        }
        p{

        }
        /* #buttonnew{
            position:absolute;
            top:430px;
        } */
    </style>
   
</head>
<body>
    @section('form')
    <div>
        <h1 id="download"><b>Download</b></h1>
        <br>
        <form id="pincodeForm" action="{{route('download')}}" method="post">
            @csrf
            <label for="pincode"><b>Pincode  </b></label>
            <input id="pincode" name="pincode" type="string" required>
            <br>
            <input class="downloadButton" type="submit" value="search">
        </form>
    </div>
    @if(session('message'))
    <p style="color:red;">{{ session('message') }}</p>
@endif
<br>
<br>
<div id="new">
<form  action="{{route('newdownload')}}" method="post" >
@csrf
<label style="font-size:20px;" ><b>If you want to get total data then press on this button </b>  </label>
<br>
<br>
<input class="downloadButton" id="buttonnew" type="submit" value="All data">
 </form>
</div>
@if(session('message2'))
    <p>{{ session('message2') }}</p>
@endif
@endsection
</body>
</html>