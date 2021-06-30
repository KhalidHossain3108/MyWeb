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
<img src="inbound2267162410664959340.jpg" width="100%" height="600px">
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
<img src="" weight="100%" height="600px">
আপনার মোবাইল ফোনটিতে 70% চার্জ দেখাচ্ছে।  সম্পূর্ণ চার্জ  হতে কত সময় নেবে?

আমাদের ব্যবহার করা মোবাইল ফোনগুলোর ব্যাটারি চার্জ হতে কত সময় নেবে কিংবা কত পারসেন্ট চার্জ হতে কি সময় নেবে তা সহজ ক্যালকুলেশন করেই বের করা যায়। 
বিষয়টি মূলত ব্যাটারি ও এর চার্জারের প্রকৃতির উপর নির্ভর করে। 

ব্যাটারির জন্য দুটি বিষয় জানতে হবে, 
১. কত ভোল্ট  (V) 
২. কত চার্জ  (mAh)
অথবা, 
১. কত এনার্জি (Wh) 
এসব তথ্য ব্যাটারির গায়েই কিংবা ডিভাইসের সাথে দেয়া কুইক গাইডে লেখা থাকে। 

আর চার্জারের ক্ষেত্রে, 
১. কত ভোল্ট (V) 
২. কত অ্যাম্পিয়ার (A)
এই তথ্য সাধারণত চার্জারের গায়েই লেখা থাকবে। 

তাহলে,  ফুল চার্জ হতে সময় ( ঘন্টা) 

 T = {( ব্যাটারির V)*( ব্যাটারির mAh)} / {( চার্জারের V) * ( চার্জারের A) * 1000} hour

উদাহরণ :

 4100 mAh 3.84 V ব্যাটারি ও 5V  2A চার্জারের 
 জন্য,  
 ফুল চার্জ টাইম = (4100*3.84) / ( 5*2*1000) hour
                         = 1.574 hour
                         = 1 hour 34 min

এখান থেকে নির্দিষ্ট পারসেন্টেজ চার্জের সময় বের করা যাবে।  
যেমন 30% চার্জ হতে, 
        সময় = 1.574 * 0.3 hour
                 = 0.47 hour
                 = 28 min
সুতরাং 70% চার্জ থাকলে সম্পূর্ণ হতে 28 মিনিট লাগবে। 

ব্যাখ্যা :

আমরা প্রথমে ব্যাটারিতে মোট কি পরিমাণ শক্তি জমা হবে তা বের করবো। 
এরপর চার্জারের ক্ষমতা দিয়ে ভাগ করলেই প্রয়োজনীয় সময় পাওয়া যাবে। 

ধরা যাক,  ব্যাটারি q mAh ও  V volt
তাহলে, 
ব্যাটারিতে 
চার্জের পরিমাণ Q = q*3600/1000 coulomb 

শক্তি W = Q*V 
             = q*V*3.6 joule 

এবার চার্জার v volt ও I ampere হলে,

এর ক্ষমতা P = v*I 

সুতরাং সময় (সেকেন্ড)  = (q*V*3.6) / (v*I) s

   সময় (ঘন্টায়)     = (q*V*3.6) / (v*I*3600) hour
 
                             = (q*V)/ (v*I*1000) hour

এখান থেকে সহজেই অনুমান করা যায় যেহেতু ব্যাটারি ফিক্সড থাকে, এবং বেশিরভাগ মোবাইল চার্জার 5 V  তাই চার্জারের Ampere এর উপর নির্ভর করে চার্জিং টাইম। Ampere যতো বেশি হয় সময় তত কম লাগবে। 

মন্তব্য  : এটি মূলত একেবারেই ব্যাসিক ক্যালকুলেশন। মোটামুটি একটা ধারণা পাবার জন্য।  একদম নিখুঁত ক্যালকুলেশন এর জন্য ব্যাটারি প্রকৃতি,  এর ভিতরের রসায়ন জানতে হয়। জটিলতা এড়িয়ে এটি আমাদের অ্যাপ্রক্সিমেট ফলাফল দিতে পারে।
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
