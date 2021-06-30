<html>
<head>
<meta charset="utf-8">
<title>Writings
</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Viaoda+Libre&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kranky&display=swap" rel="stylesheet">

<style type="text/css">

.a1
{ 
font-family: cursive;
font-size:180px;
text-shadow:4px 4px 2px grey;

}

.a2
{ 
font-family: 'Benne', serif;
font-size:80px;
text-shadow:1px 1px 1px grey;
}

.collapsible {
  
  background-color: #3EBCAF;
  color: #444;
  cursor: pointer;
  width: 100%;
  height:350px;
  border: none;
  padding:18px;
  font-size: 100px;
  
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .collapsible:hover {
  background-color: #F8A6AC;
}

/* Style the collapsible content. Note: hidden by default */
.content {
  padding:18px;
  display: none;
  overflow: hidden;
  background-color: #DCFEFB;
  font-size:20px;
}



</style>



<body>
<center>
<font class="a1"> Writings</font>
</center>
<hr size="+12" color="05007A"><br>
<hr size="+12" color="05007A"><br><br>
<br><br>
<img src="" width="100%" height="600px">
<br><br><br>
<hr size="+12" color="05007A"><br><br>
<hr size="+12" color="05007A"><br><br>
<hr size="+12" color="05007A"><br><br><br>

<button type="button" class="collapsible"> 
<center>

<font class="a2" > চার্জিং টাইম ক্যালকুলেশন  </font>
</center>
</button>
<div class="content">
  <p>

  </p>
</div>
<br><br>
<hr size="+12" color="05007A"><br><br>
<hr size="+12" color="05007A"><br><br>
<br>
<button type="button" class="collapsible"> 
<center>

<font class="a2" > Feminism </font>
</center>
</button>
<div class="content">
  <p>

  </p>
</div>
<br><br>
<hr size="+12" color="05007A"><br><br>
<hr size="+12" color="05007A"><br><br>



<script type="text/javascript">
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}






</script>
</body>
</html>
