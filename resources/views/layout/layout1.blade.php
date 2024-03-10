

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
        #heading{
            border-color: pink;
            padding:20px;
            border-style:groove;
            padding-left: 300px;    
            border-radius:20px;    
            grid-row-start:1;
            grid-row-end: 2;
            grid-column-start: 1;
            grid-column-end: 4;
            font-family: 'Playfair Display', serif; 
            background-color: #f73444;
            color:white;
      

        }
        #leftside{
            border-style:none;
            width:100px;
            height:650px;
            grid-row-start: 2;
            grid-row-end: 3;
            grid-column-start: 1;
            grid-column-end: 2;
        
            background-color: white;;
        }
        #rightside{
            border-style:none;;
            width:100px;
            height:650px;
            grid-row-start: 2;
            grid-row-end: 3;
            grid-column-start: 3;
            grid-column-end: 4;
            justify-self: end;
            background-color: white;
        }
        #main{
            display:grid;
            grid-template-rows: repeat(1fr,3fr,1fr);
            grid-template-columns: repeat(1fr,3fr,1fr);
            background-color: #f5ebd7;;
        }
        #footer{
            border-color: black;
            padding:10px;
            border-style:groove;
            padding-left: 100px;    
            border-radius:20px;    
            grid-row-start:3;
            grid-row-end: 4;
            grid-column-start: 1;
            grid-column-end: 4;
            margin:20px;
            height:100px;
            background-color: black;
        }
        #content{
            border-color: pink;
            padding:20px;
            border-style:groove;
            padding-left: 300px;    
            border-radius:20px;    
            grid-row-start:2;
            grid-row-end: 3;
            grid-column-start: 2;
            grid-column-end: 3;
            background-color: #f5f2a9
            
        }
    </style>
</head>
<body>
    <div id="main">
    <div id="heading">
        <h1 style="margin:10px;"><b>TAMRAKARS</b></h1>
    
    </div>
    <div id="leftside">
        <p>still needs to fill </p>
    </div>
    <div id="content">
        @yield('form')
    </div>
    <div id="rightside">
            <p> still needs to fill</p>
    </div>
    <div id="footer">
        <div>
            <b style="color:white; font-size:larger;">Phone Number - 9399 400 801</b>
        </div>
    </div>
    </div>
   
</body>
</html>