<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="pica\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>☸ ＡＵＧＵＳＴＲＯ - 𝓢𝓘𝓖𝓝 𝓤𝓟</title>
</head>
<body class="myback" >
    <div class="container">
       
        <div class="row">
            <div class="col "></div>
            <div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
                <table class="table">
                    
                           <h1 >  ⫷  𝓢𝓘𝓖𝓝 𝓘𝓝  ⫸ </h1>
                          
                      
                    <tr>
                        <td>EᗰᗩIᒪ :</td>
                        <td><input id="email" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>ᑭᗩᔕᔕᗯOᖇᗪ : </td>
                        <td><input id="pass" type="text" class="form-control"> </td>
                    </tr>
                   
                    <tr>
                        <td><a class="btn btn-secondary" href="index.php" role="button">🌷 ＢＡＣＫ  
                        </a></td>
                        <td><button onclick="clickbutton()" class="btn btn-dark">ＳＩＧＮ ＩＮ</button></td>
                    </tr>
                </table>
            </div>
            <div class="col"></div>
        </div>
    </div>

   <script>
       function clickbutton(){
           var getEᗰᗩIᒪ=document.getElementById("email").value
           var getᑭᗩᔕᔕᗯOᖇᗪ=document.getElementById("pass").value
           
           console.log(getEᗰᗩIᒪ)
           console.log(getᑭᗩᔕᔕᗯOᖇᗪ)
       }
   </script>
</body>
</html>