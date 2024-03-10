@extends("layout.layout1")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          #downloadButton{
            background-color: darkgreen;
            color:white;
            height:40px;
            width:100px;
            margin-left:50px;
            
        }
        #downloadButton:hover{
            background-color: lightgreen;
            height:50px;
            width:110px;
            
        }
        input{
            margin:20px;
        }
        label{
           font-size: 30px;
        }
        #download{
            color:#545103;
            font-size: 50px;
            
        }
        #new{
            margin-top:100px;
            
        }
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
            <input id="downloadButton" type="submit" value="search">
        </form>
    </div>
    @if(session('message'))
    <p>{{ session('message') }}</p>
@endif
<div id="new">
<form  action="{{route('newdownload')}}" method="post" >
@csrf
<b>If you want to get total data then press down button</b>
<input id="downloadButton" type="submit" value="all data">
    </form>
</div>
@if(session('message2'))
    <p>{{ session('message2') }}</p>
@endif
@endsection
<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        let pincodeForm = document.getElementById('pincodeForm');

        pincodeForm.addEventListener('submit', function(event) {
            event.preventDefault();

            fetch(pincodeForm.getAttribute('action'), {
                method: pincodeForm.getAttribute('method'),
                body: new FormData(pincodeForm)
            })
            .then(response => {
                if (response.ok) {
                    return response.blob();
                } else {
                    throw new Error('No data found for this pincode.');
                }
            })
            .then(blob => {
                let url = window.URL.createObjectURL(blob);
                let a = document.createElement('a');
                a.href = url;
                a.download = 'analysis.xlsx';
                document.body.appendChild(a);
                a.click();
                window.URL.revokeObjectURL(url);
            })
            .catch(error => {
                alert(error.message);
            });
        });
    });
</script> -->

</body>
</html>