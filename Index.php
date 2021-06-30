<html>
<head>
<title>Khalid Hossain 
</title>




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
.collapsible {
  
  background-color: #3EBCAF;
  color: #444;
  cursor: pointer;
  width: 100%;
  height:150px;
  border: none;
  padding:18px;
  font-size: 100px;
  font-family:cursive;
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
  font-size:30px;
  font-family:cursive;
}




a:link
{ text-decoration:none;}
.a1{
height:370px;
font-family:'Viaoda Libre', cursive;;
font-size:130px;
background-color:black;
font-color:white;
text-align:center;
}

.a2
{ 
font-family:cursive;
font-size:115px;
font-color:#6600A3;
text-align:center;
text-shadow:4px 4px 2px grey;
}

.a3
{ 
font-family:'Kranky', cursive;
font-size:115px;
text-shadow:4px 4px 2px grey;
}
.a4
{ 
font-family: 'Benne', serif;
font-size:150px;
text-shadow:4px 4px 2px grey;
}

</style>


</head>

<body>
<p class="a1">
<font color="white">
Hi ! <br>
I&#39m Khalid Hossain
</font>
</p>

<hr size="+12" color="05007A"><br><br>

<marquee behavior="slide" scrollamount="170">
<p class="a2">
<font >
Welcome to my Website. </font>
</p>
</marquee>


<hr size="+12" color="05007A"><br>
<hr size="+12" color="05007A"><br><br>
<br><br><br><br>
<img src="131981332_687416125295516_8241565612227350279_n.jpg" width="100%" height="900px">
<br><br><br><br><br><br>
<hr size="+12" color="05007A"><br>
<hr size="+12" color="05007A"><br>
<hr size="+12" color="05007A"><br>
<br><br><br><br><br><br>

<p class="a4"> 
Explore now! 
</p>
<p class="a3">

<a href="Aboutme.php">
<font color="191F1E"> About me </font>

</a><br>

<a href="writings.php">
<font color="191F1E"> My Writings </font>

</a><br>

<a href="Gallery.php">
<font color="191F1E"> Gallery </font>

</a><br>

<a href="Myvision.php">
<font color="191F1E"> My Vision </font>

</a><br>

</p>

<button type="button" class="collapsible">About The Website</button>
<div class="content">
  <p>
  Actually i am at the beginner level of Web Designing, i tried to make a simple website that contains my information.<br><br>
  So you are watching that version of the website. I hope i will develop it gradually. <br><br>
  I am thankful to Sakirul Alam Sakir, who helped me a lot making this Website, Thanks Sakir again.  <br><br>
  And I&#39m thanking you also for having a visit! 
  
  </p>
</div>

<br><br><br><br>
<hr size="+12" color="05007A"><br>
<hr size="+12" color="05007A"><br>
<hr size="+12" color="05007A"><br>
<br><br><br><br>


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
