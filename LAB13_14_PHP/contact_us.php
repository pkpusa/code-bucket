<!DOCTYPE HTML>
<html>
<head>
    <title>Matrimonial Web Application</title></head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Css coding starts !-->
    <style>
body {
    font-family: Verdana,sans-serif;
    font-size: 0.9em;
    background-image:url(img/newbg.jpg);
   
    background-repeat:repeat ;
   
    
}

header{

    padding:0px;
    margin-top: 0px;
    color: white;
    background-color:lightblack;
    padding-top: 0px;
    color: red;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    
}

#from_bg{
        background-image: url(img/kanyadan.JPG);
       background-size: cover;
        height: 700px;

        
        }
        
div.head{
        float:right;
        }
        
        h1 a{
            
            text-decoration: none;
            color: aliceblue;
            text-decoration-style: solid;
            font-family: cursive;
            font-size: 50px;
            
        }
        
        .nav{
            
            background-color: red;
            color: aliceblue;
            padding: 5px;
        }
        
input[type=text], [type=email], [type=tel], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

form {
    margin-top: 50px;
    margin-bottom: 50px;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    max-width: 300px;
    left: 70%;
    position: absolute;
}

.footer{
 margin-top: 10px;
       position: fixed;
       text-align: center;    
       width: 100%;
        bottom: 0%;
        height: 100px;
        background-color: dimgrey;
        
}


    </style>
    
   <script>
       
    
        function validateAlpha(){
        var textInput = document.getElementById("fname").value;
        textInput = textInput.replace(/[^A-Za-z]/g, "");
        document.getElementById("fname").value = textInput;
            
    
        var textInput = document.getElementById("lname").value;
        textInput = textInput.replace(/[^A-Za-z " " .]/g, "");
        document.getElementById("lname").value = textInput;
            
        var textInput = document.getElementById("name").value;
        textInput = textInput.replace(/[^A-Za-z " "]/g, "");
        document.getElementById("name").value = textInput;
        }
       
        function isNumberKey(){
        var textInput = document.getElementById("tel").value;
        textInput = textInput.replace(/[^0-9 +]/g, "");
        document.getElementById("tel").value = textInput;
        }  
       
        function validateForm() {
        var x = document.forms["form1"]["email"].value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
            {
            document.getElementById('demo').innerHTML = "Wrong Email Input";
        return false;
            }
        }
       
       function validatelog() {
        var x = document.forms["form2"]["mail"].value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
            {
            document.getElementById('demo').innerHTML = "Wrong Email Input";
                alert("wrong email");
        return false;
            }
        }
       

        function mailchk(){
        var fistInput = document.getElementById("email").value;
        var secondInput = document.getElementById("rmail").value;
            if(email!=rmail)
                {
                    alert("emil not")
                }
                
        }
       
        function myFunction(x) {
        x.style.background = "#F28ECE";
        }
       
        function bigimg() {
        document.getElementById("myImg").height = "60";
        document.getElementById("myImg").width = "60";
        }
       function bigimg2(){
        document.getElementById("insta").height = "60";
        document.getElementById("insta").width = "60";
       }
       function bigimg3(){
        document.getElementById("twit").height = "60";
        document.getElementById("twit").width = "60";
       }
       function bigimg4(){
        document.getElementById("whatsapp").height = "60";
        document.getElementById("whatsapp").width = "60";
       }
       function bigimg5(){
        document.getElementById("gplus").height = "60";
        document.getElementById("gplus").width = "60";
        }

        function realimg() {
        document.getElementById("myImg").height = "40";
        document.getElementById("myImg").width = "40";
        }
       function realimg2(){
        document.getElementById("insta").height = "40";
        document.getElementById("insta").width = "40";
       }
       
       function realimg3(){
        document.getElementById("twit").height = "40";
        document.getElementById("twit").width = "40";
       }
       function realimg4(){ 
       document.getElementById("whatsapp").height = "40";
        document.getElementById("whatsapp").width = "40";
       }
       
       function realimg5(){
        document.getElementById("gplus").height = "40";
        document.getElementById("gplus").width = "40";
        }
        
       
       
       function onSubmit(){
           
       validateForm();
        var answer = confirm("Do you want to submit");
            if(answer)
                window.location.href="connected.html"
            else
                alert("you data not submitted");
                window.location.href = "contact_us.html"
        }
        
        
       
       
</script> 
    
<body>
    
    <header><a href = "9th.html" style = "color : red;"><img src="img/wed_logo.png" > </a>
        <div class="head"><img src="img/whatss.png"><strong style="font-size: 30px;">+91-9931021948</strong><br><br><br>
        <a href="form1.html" style="font-size: 30px;">Register For Free</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="form.html" style="font-size: 30px;">Login</a></div>
    </header>
        
    <div class="nav">
        <center><h1><a href ="contact_us.html">Contact Us</a></h1>
            <p><b>Fill Your Details Our Executive will Call You.......</b></p>    
        </center>
    </div>    
    
   
    
   <div id="from_bg"> 
       
<!----------------Form 1 Using GET Method to print Data-------------------------------!-->
       
  <form action="connected.php" name="form1" method = "get">
      
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required oninput="validateAlpha();" onfocus="myFunction(this);"><br><br>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." oninput="validateAlpha();" onfocus="myFunction(this);"><br><br>
      
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your Email.." required onfocus="myFunction(this);" oninvalid="validateForm();"><br><p id="demo" style ="color:red; font-size:10px;"></p><br>
      
    <label for="lname">Mobile No</label>
    <input type="tel" id="tel" name="tel" placeholder="Enter Mobile No.(Only 10 digits)" required oninput="isNumberKey();" pattern="[789+][0-9]{11}" onfocus="myFunction(this);"><br><br>
      <br>
    <input type="submit" value="Submit" onclick="href=connected.html" onmouseover="validateForm();">
  </form>
</div>
    
<div style=" right:70%; top:60%; position:absolute; max-height:500px; width:1000px; "><span style=" color:darkred; font-size: 40px; font-family: cursive;"></span>
    

<!----------------------       Second Form Using Post Method       -------------- ------------------!-->
    
    
    <form action="post.php" name="form2" method = "post">
        <fieldset>
            <legend>Login Here :- <br></legend>
    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." required oninput="validateAlpha();" onfocus="myFunction(this);"><br><br>

    <label for="email">Email</label>
    <input type="email" id="mail" name="mail" placeholder="Your Email.." required onfocus="myFunction(this);" oninvalid="validateForm();"><br><p id="demo" style ="color:red; font-size:10px;"></p><br>
      
    <input type="submit" value="Submit" onclick="validatelog();" onmouseover="validateForm();">
    </fieldset>
    </form>
        
       </div>
    
       

    
    
<div class="footer">    
    <div>
    All rights reserved © 2016 PerfectJodi Matrimonial Services.
    <br/> Designed and developed by Pr@kash Thakur(1747246)
    </div>
    <div style="right:80">
        
<!------------- onmouseenter and and onmouseleave events on social media icons---------------!-->
        
        <a href ="https://www.facebook.com/"><img id="myImg" src="img/fb-art.png" height="40px" width="40px" onmouseenter="bigimg();" onmouseleave="realimg();"></a>&nbsp;&nbsp;&nbsp;
        
        <a href="https://www.instagram.com"><img id="insta" src="img/insta.png" height="40px" width="40px" onmouseenter="bigimg2();" onmouseleave="realimg2();" ></a>&nbsp;&nbsp;&nbsp;
        
        <a href="https://www.twitter.com"><img id="twit" src="img/twit.png" height="40px" width="40px" onmouseenter="bigimg3();" onmouseleave="realimg3();"></a>&nbsp;&nbsp;&nbsp;
        
        <a href="https://web.whatsapp.com"><img id="whatsapp" src="img/what.jpg" height="40px" width="40px" onmouseenter="bigimg4();" onmouseleave="realimg4();"></a>&nbsp;&nbsp;&nbsp;
        
        <a href="https://www.google.co.in"><img id="gplus" src="img/gggg.jpg" height="40px" width="40px" onmouseenter="bigimg5();" onmouseleave="realimg5();"></a>
        
    </div>
</div>
 
</body>
    
</html>
