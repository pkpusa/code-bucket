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

.opc{
    filter: alpha(opacity=60);   
    opacity: 0.9;
    }
        
div.n1{
            background-color: aliceblue;
            color: red; 
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; 
            font-size: 25px;
            align-content: center;
    text-align: center;
            }
div.n2{
            background-color: olivedrab;
            color: red; 
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; 
            font-size: 20px;
            float:right;
            
            
            }

div.n3{
            background-color: yellow;
            color: red; 
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; 
            font-size: 20px;
    margin-top: 40px;
            }


    </style>
    
   <script>
       
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
    
       
      <!--------------------------------ASSOSIATIVE ARRAY -------------------------------------------!-->
      <div class="n2">
      <?php
         /* First method to associate create array. */
         $salaries = array("first" => 2000, "middle" => 1000, "last" => 500);
         echo "Statics Showing No Of Sucessful Marriages in Last Three Years <br>";
         echo "In 2017  = ". $salaries['first'] . "<br />";
         echo "In 2016  = ".  $salaries['middle']. "<br />";
         echo "In 2015  = ".  $salaries['last']. "<br />";
         
         
      ?>
       </div>
      <!--- ---------------------IMPLEMENTING MULTI-DIMENSIONAL ARRAY -----------------------------!-->
      <div class="n3">
       <?php
         $marks = array( 
            "banglore" => array (
               "kormangla" => 'Behind Forum Mall, Kormangla',
               "electronic" => 'Opposite to Gollahali Ganesha Temple, Electronic City',	
               "jaynagar" => 'Beside INOX Plaza Mall, Jaynagar'
            ),
            
            "bihar" => array (
               "patna" => 'Near Gandhi Maidan- PATNA',
               "muz" => 'Opposite to L S College - Muzaffarpur',
               "samastipur" =>'Station Road - Samastipur'
            ),
            
            "delhi" => array (
               "anand" => 'Near Metro Station - Anand Vihar, DELHI',
               "laxmi" => 'Behind ICAI Office - Viswas Nagar,New Delhi',
               "palam" => 'Airport Road- Palam(Indra Gandhi International Airport),Delhi'
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "Our Offices in Banglore :<br> " ;
         echo $marks['banglore']['kormangla'] . "<br />"; 
        echo $marks['banglore']['electronic'] . "<br />"; 
        echo $marks['banglore']['jaynagar'] . "<br /><br>"; 
         
        echo "Our Offices in Bihar :<br>";
        echo $marks['bihar']['patna'] . "<br />";
        echo $marks['bihar']['muz'] . "<br />";
        echo $marks['bihar']['samastipur'] . "<br /><br>";
         
         echo "Our Offices in New Delhi: <br>" ;
         echo $marks['delhi']['anand'] . "<br />";
        echo $marks['delhi']['laxmi'] . "<br />";
       echo $marks['delhi']['palam'] . "<br />";
      ?>
       </div>
        
        <br><br><br><br><br>
        
        <!-- -------------------Indexed array!---------------------------------->
        
         <div class="n1">
       <?php
         /* First method to create array. */
         $numbers = array( 'Prakash Kumar', 'Lakshay Grover', 'Prathana', 'Kumar Navin', 'Anish Lal');
         echo "Our Team Members :<br/>";
         foreach( $numbers as $value ) {
            echo "$value <br />";
         }
         
         
      ?>
      
       </div>
    </div>
    
       
<br><br><br><br><br><br><br><br><br>
       
 
    
       

    
    
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
