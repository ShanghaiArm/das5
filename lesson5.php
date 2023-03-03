<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Document</title>
    <script>
        $(document).ready(function(){
            $("#uxarkel").click(function() {
                let log=$("#login").val()
                let pass=$("#password").val()
            //   alert(log+pass)  
            $.get("post.php",{logpopox:log,passpopox:pass},
            function (ardyunq) {
               $(".status").html(ardyunq)
            }
            )
            })
        })
    </script>
</head>
<body>
    <input id="login" placeholder="login"><br>
    <input type="password" id="password"  placeholder="password"><br>
    <input type="button" id="uxarkel" value="uxarkel">
    <div class="status"></div>
</body>
</html>