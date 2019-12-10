<html>
<head>
  
    <script>
    function submitChat(){
        if(form1.uname.value==''||form1.msg.value==''){
            alert("both field are mandotry !!!");
            return;
        } 
        var uname=form1.uname.value;
        var msg=form1.msg.value;
        var xmlhttp= new XMLHttpRequest();
           xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
        xmlhttp.send();
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
              document.getElementById("chatlogs").innerHTML =xmlhttp.responseText;
            }
        }
     
    }
    </script> 
    <title>
    My chat Box</title>
</head>
<body>
    
    <form action="" name="form1">
     Enter Your Chatname:   <input type="text>" name="uname"><br> 
     Your Message:
     <br>
     <textarea name="msg" id="" cols="30" rows="10"></textarea><br>
    <button onClick="submitChat()">Send</button><br><br>
     <div id="chatlogs">
     
     </div>
    </form> 
</body>
</html>