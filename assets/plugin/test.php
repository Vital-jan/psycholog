<!DOCTYPE html>
<html lang="uk">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="description" content="">
<meta name="author" content="Vitalii Kolomiiets, Kyiv, Ukraine, vitaljan@gmail.com">
<title></title>
<!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/css/styles.css"> -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="explorer.js"></script>
<link rel="stylesheet" href="explorer.css">
<style>
    body {
        width: 100%;
    }
    .scr1 {
        height: 300px;
        width: 20%;
        display:block;
        background-color: blue;
    }
</style>
</head>
<body>

    <div class="scr1">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis soluta obcaecati hic in iste rerum expedita corrupti placeat! Nostrum labore magni est beatae cupiditate dicta, dolorem iusto eos voluptate molestias?
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto officiis quibusdam exercitationem dolore hic nulla, quas eius vel nihil, earum porro. Molestias rerum praesentium est animi quidem, officia sit dolorum tempore consequatur nostrum pariatur neque assumenda eos non ab. Dolorum ducimus quidem esse blanditiis culpa, voluptatibus ullam cupiditate facilis expedita?
    </div>
    
</body>
    <script>
        setScroll(document.querySelector('.scr1'));
        document.body.addEventListener('DOMAttrModified', function(e){
            console.log(e);
        })
 
        // var oScope = {
        //     $privateScope:{},
        //     notify:function(sPropertyPath) {
        //         console.log(sPropertyPath,"changed");
        //     }
        // };

        // Object.defineProperties(oScope, {
        //     myPropertyA: {

        //         get:function() {
        //             return oScope.$privateScope.myPropertyA
        //         },

        //         set:function(oValue){
        //             oScope.$privateScope.myPropertyA = oValue;
        //             oScope.notify("myPropertyA");
        //         }
        //     }
        // });

        // oScope.myPropertyA = "Some Value";

    </script>
</html>