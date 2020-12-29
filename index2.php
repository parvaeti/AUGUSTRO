<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="pica\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>☸ ＡＵＧＵＳＴＲＯ - 𝓢𝓘𝓖𝓝 𝓤𝓟</title>
</head>
<body class="mybackground" >
    <div class="container">
        <div class="row">
            <div class="col "></div>
            <div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
                <table class="table" >
                    
                           <h1>  ⫷  𝘚𝘐𝘎𝘕 𝘜𝘗  ⫸ </h1>
                        <tr>
                        <td>ᖴIᖇᔕT ᑎᗩᗰE :</td>
                        <td><input id="fname" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>   ᒪᗩᔕT ᑎᗩᗰE :
                          </td>
                        <td><input id="lname" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>  EᗰᗩIᒪ :
                        </td>
                        <td><input id="email" type="text" class="form-control"></td>
                    </tr>
                    
                    <tr>
                        <td>ᑭᗩᔕᔕᗯOᖇᗪ :
                           </td>
                        <td><input id="pass" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td> ᑕOᑎᖴIᖇᗰ ᑭᗩᔕᔕᗯOᖇᗪ :</td>
                        <td><input id="cpass" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><a class="btn btn-secondary" href="index.php" role="button">🌷 ＢＡＣＫ  
                        </a></td>
                        <td><button onclick="clickonthebutton()" class="btn btn-dark">ＣＲＥＡＴＥ</button></td>
                    </tr>
                </table>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <script>
    function clickonthebutton(){
        var getᖴIᖇᔕTᑎᗩᗰE=document.getElementById("fname").value
        var getᒪᗩᔕTᑎᗩᗰE=document.getElementById("lname").value
        var getEᗰᗩIᒪ=document.getElementById("email").value
        var getᑭᗩᔕᔕᗯOᖇᗪ=document.getElementById("pass").value
        var getᑕOᑎᖴIᖇᗰᑭᗩᔕᔕᗯOᖇᗪ=document.getElementById("cpass").value
        
        console.log(getᖴIᖇᔕTᑎᗩᗰE)
        console.log( getᒪᗩᔕTᑎᗩᗰE)
        console.log(getEᗰᗩIᒪ)
        console.log(getᑭᗩᔕᔕᗯOᖇᗪ)
        console.log(getᑕOᑎᖴIᖇᗰᑭᗩᔕᔕᗯOᖇᗪ)
    }
    </script>
</body>
</html>