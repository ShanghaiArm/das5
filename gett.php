<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAS</title>
    <!-- <link rel="stylesheet" href="index.css"> -->
    <script
  src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"></script>
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
    #bigdiv{
        width: 80%;
    height: 510px;
    display: flex;
    flex-wrap: wrap;
    margin: auto;
    border: solid red;
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
    width: 30%;
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
    background-repeat: no-repeat;
    background-size: cover;
}
#t{
    width: 49%;
    height: 250px;
    margin: auto;
    background-repeat: no-repeat;
    background-size: cover;
}
#th{
    width: 49%;
    height: 250px;
    margin: auto;
    background-repeat: no-repeat;
    background-size: cover;
}
#fo{
    width: 49%;
    height: 250px;
    margin: auto;
    background-repeat: no-repeat;
    background-size: cover;
}
#s{
    width: 40%;
    height: 30px;
    border-radius: 20px;
}
.aja{
    width: 80%;
    height: 150px;
    border:solid;
    display: flex;
    flex-direction:column;
    justify-content: center;
    align-items: center;
    margin: auto;
}
#aj{
    width: 10%;
    height: 40px;
    border-radius: 20px;
}

</style>
<body>

<div class="parent">
        <div id="child1">
            <h1>GET</h1>               
                <h2>BMW</h2>
                <div class="child1a">
            <label for="x5">
                BMW x5
                <input type="radio" class='gt' id='x5' name="x"/>
            </label>
            <label for="m6">
                BMW M6
                <input type="radio" class='gt' id='m5' name="x"/>
            </label><br>
            <label for="x3">
                BMW M3
                <input type="radio" class='gt' id='m3' name="x"/>
            </label>
            <label for="mx6">
                BMW MX6
                <input type="radio" class='gt' id='mx6' name="x"/>
            </label><br>
           
        </div>
        <button id='sendget'>SEND</button>
                
        </div>
        <div class="child2">
            <h1>POST</h1>
            <div class="child2a">
                 <!-- <label for="as">ASTON MARTIN<input type="checkbox" id="as" name="as"/></label>
                 <label for="cadilac">CADILAC<input type="checkbox"id="cadilac"></label><br>
                 <label for="chevrolet">CHEVROLET<input type="checkbox"id="chevrolet"></label>
                 <label for="porshe">PORSHE<input type="checkbox"id="porshe"></label> -->

                 <label for="as">
                 ASTON MARTIN
                <input type="checkbox" class='gg' id='as' name="y"/>
            </label>
            <label for="m6">
            CADILAC
                <input type="checkbox" class='gg' id='cadilac' name="y"/>
            </label><br>
            <label for="x3">
            Chevrolet
                <input type="checkbox" class='gg' id='chevrolet' name="y"/>
            </label>
            <label for="mx6">
            Porshe
                <input type="checkbox" class='gg' id='porshe' name="y"/>
            </label><br>
            </div>
            <button id='sendpost'>SEND</button>
        </div>
        </div>
    </div>
    <button>add text</button>
    <button>delet all</button>
    <input type="text" id='s'>
    <div id='container'>

           
    </div>
    <div id='result'>
        <div id='bigdiv'>
            <div id='f'></div>
            <div id='t'></div>
            <div id='th'></div>
            <div id='fo'></div>
        </div>
    </div>
    
    <div class="aja">
   <h1>AJAX</h1>
    <select name="lux" id="aj">
    <option value="1">bmw</option>
    <option value="2">alfa</option>
    <option value="3">mazda</option>
    <option value="4">eraz</option>
    </select>
    </div>
    <script>
        // get method
        $('#sendget').click(function(e){
           e.preventDefault()
            let car=0;
            if(x5.checked){
                 car=1;
            }
            else if(m5.checked){
                 car=2;
            }
            else if(m3.checked){
                 car=3;
            }
            else if(mx6.checked){
                 car=4;
            }
            else{
                car=3;
            }  
             $.get(
                "get.php",
                {selectedcar:car},
                function(ardyunq){
                $("#f").css({"background-image": "url(" + + ")"});
                $("#t").css({"background-image": "url(" +  +")"});
                $("#th").css({"background-image": "url(" + + ")"});
                $("#fo").css({"background-image": "url(" + + ")"});
                $("#bigdiv").css({"background-image": "url(" + ardyunq+ ")"});
             })
            }
        )
        // post method
        $('#sendpost').click(function(){
            let arr=[];
            if(as.checked){
                 arr.push('data:image/jpeg;base64,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');
            }
            if(cadilac.checked){
                 arr.push('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnXraJvM-xBYvD-g_cTiGExp9s-ob5Gty0zA&usqp=CAU')
            }
            if(chevrolet.checked){
                arr.push('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSoQy6Gvuk7b_rYDlUJoLm4a5q-fHkjlS7xg&usqp=CAU')
            } 
            if(porshe.checked){
                arr.push('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmhl1V3EQH4M6APhRM2e6J42qzMHAomtikEw&usqp=CAU')
            } 
            console.log(arr)      
             $.post(
                "arman.php",
                {array:arr},
                function(ardyunq){
                let norardyunq=JSON.parse(ardyunq)
                console.log(norardyunq)
                $("#bigdiv").css({"background-image": "url(" + + ")"});
                $("#f").css({"background-image": "url(" + norardyunq[0]+ ")"});
                $("#t").css({"background-image": "url(" + norardyunq[1]+ ")"});
                $("#th").css({"background-image": "url(" + norardyunq[2]+ ")"});
                $("#fo").css({"background-image": "url(" + norardyunq[3]+ ")"});
            })
            }
        )
    //    ajax method


        aj.oninput=function(){
            let sv=document.getElementById("aj").value;
            console.log(sv)
        $.ajax({
            type:'POST',
            url:'ajax.php',
            cache:false,
            error:function(tvyalner){
                	console.log(tvyalner.status +' '+tvyalner.statusText)
            },
            data:"svalue="+sv,
            success:function(ardyunq){
                $("#f").css({"background-image": "url("+ +")"});
                $("#t").css({"background-image": "url("+  +")"});
                $("#th").css({"background-image": "url("+ +")"});
                $("#fo").css({"background-image": "url("+ +")"});
                $("#bigdiv").css({"background-image": "url(" + ardyunq+ ")"});
            }
        }
        )   
    } 

    s.oninput=function () {
        let sy=document.getElementById("s").value;
          bigdiv.innerHTML=sy 
    }
    
    
    </script>
</body>
</html>















