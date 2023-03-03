<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
    <script type="text/javascript" src="/jquery/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<style>
    body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background: url("https://www.webex.com/content/dam/wbx/us/images/virtual-backgrounds/thumbs/Virtual_Background_1_thumb.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}

.parent {
    width: 80%;
    height: 500px;
    border: solid;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;


}
h1{
    color: aqua;
}

#child1 {
    width: 40%;
    height: 400px;
    color: orange;
    border: solid;
    display: flex;
    flex-direction: column;
    align-items: center;
}



.child2 {
    width: 40%;
    height: 400px;
    border: solid;
    color: orange;
    display: flex;
    flex-direction: column;
    align-items: center;

}

.child2a {
   width: 60%;
   height: 100px;
   margin-top: 20px;
   

}

.parent2 {
    width: 80%;
    height: 100px;
    border: solid;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: auto;
    background-color: blueviolet;
}
button {
    width: 20%;
    height: 50px;
    border: solid;
    border-radius: 20px;
    background-color: aqua;
}
#inp {
    width: 30%;
    height: 40px;
    border: solid  aqua;
    border-radius: 20px;
    background-color:black;
}

#parent3{
    width: 80%;
    height: 510px;
    display: flex;
    flex-wrap: wrap;
    margin: auto;
    border: solid red;
    
}
#f{
    width: 49%;
    height: 250px;
    margin: auto;
    border: solid red;  
}
#t{
    width: 49%;
    height: 250px;
    margin: auto;
    border: solid red;  
}
#th{
    width: 49%;
    height: 250px;
    margin: auto;
    border: solid red;  
}
#fo{
    width: 49%;
    height: 250px;
    margin: auto;
    border: solid red;  
}

</style>
<body>
    <div class="parent">
        <div id="child1">
            <h1>GET</h1>               
                <h2>BMW</h2>
                <div class="child1a">
                   <label for="x5">X5<input type="radio" id="x5" class="gt" name="x5"/></label>
                   <label for="M5">M5<input type="radio" id="m5" class="gt" name="m5"/></label><br>
                   <label for="M3">M3<input type="radio" id="m3" class="gt" name="m3"/></label>
                   <label for="MX6">MX6<input type="radio" id="mx6" class="gt" name="mx6"/></label>

                </div>
        </div>
        <div class="child2">
            <h1>POST</h1>
            <div class="child2a">
                 <label for="as">ASTON MARTIN<input type="checkbox" id="as" name="as"/></label>
                 <label for="cadilac">CADILAC<input type="checkbox"id="cadilac"></label><br>
                 <label for="chevrolet">CHEVROLET<input type="checkbox"id="chevrolet"></label>
                 <label for="porshe">PORSHE<input type="checkbox"id="porshe"></label>
    
            </div>
        </div>
    </div>
    <div class="parent2">
        <button id="remove">DELETE ALL</button>
        <button id="sendpost">ADD TEXT</button>
       <input type="text" name="inp" id="inp">
    </div>
    <div id="parent3">
        <div id="f"></div>
        <div id="t"></div>
        <div id="th"></div>
        <div id="fo"></div>
    </div>
   <script>
  
        let car=0;
        if(x5.checked){
            car=1;
        }else if(x6.checked){
            car=2
        }else{
            car=3
        }
        $.get(
            "get.php"
            {selectedcar:car},
            function(ardyunq){
                $("#f").css({"background-image":"url("++")","background-size":"cover"});
                $("#t").css({"background-image":"url("++")","background-size":"cover"});
                $("#th").css({"background-image":"url("++")","background-size":"cover"});
                $("#fo").css({"background-image":"url("++")","background-size":"cover"});
                $("#parent3").css({"background-image":"url("+ardyunk+")","background-size":"cover"});
            })
        
        $('#sendpost').click(function())
        {
            let arr=[];
            if(golf.checked){
                arr.push("");
            }
            if(golf.checked){
                arr.push("");
                
            }
            if(golf.checked){
                arr.push("");
            }
            if(golf.checked){
                arr.push("");
            }
        }
        
   
   </script>
       
</body>

</html>