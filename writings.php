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

a:link{
 text-decoration:none;
}
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
<img src="inbound3685138015984383230.webp" weight="100%" height="600px"> <br><br><br>
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
<br>
“When we do the best we can, we never know what miracle is wrought in our life, or in the life of another.”– Helen Keller 

Disclaimer [ i haven’t any intention of criticising strongly to any ideology or system. I am just going to mention my personal thinking.]

We are now living in a time where inability word doesn’t exist or we do not let it exist. Any type of discrimination today are totally condemned and banned by our educated society. We have bundles of theory about mankind and they are really working so nice.
 
Empowerment of women is one of the most significant thing in our world and we are observing the sacrifices and amount of sweat to establish the idea. We all know the importances of it and really feeling it in our real life. But the question is why this potential was unrevealed in the past centuries over centuries? The proportion between the male and female marked in the pages of history is quite a good number.If we look behind, we will find maximum civilization has the priority of men than women and the opposite case is truly rare. How we will explain it?

Okay,  the very common explanation would like the lack practices of women.It was the system like this, if you think a war between the Ottoman and the Byzantine, you will not probably think about the women soilders.Reason would not be their physical fitness rather it would the matter of practices.Thinking of being a soilder you will find rare in women.

But the thing what bring the changes is our thinking differently. Like we are now more dependent on our mental capabilities than physical. Our believes,  thoughts are changed, we are investing more on our practices and we are getting the result. They are strongly proving their latent ability. They are welcomed cordially to the fields of contribution.

And finally we have our modern feminism. Feminist are working to establish the power of women, representing the victimhood. They are worthy of appreciation in this case.

 But i think here some problem arise. Their motive is not the the equality, the superiority.
The clashes occur when the equality revolution of empowering something turns to  disempowerment of the opposite.Why?

Whole part of the educated society including men and women believe in women ability. But some WRONG ideas are playing against it. Its found to make them powerful in making decision, leading to angry and forceful behavior. Does it really go with our modern thinking? 

We male and female should form our family with both of our sacrifices. And why we want domination? Why we thinking our reaching to equality by domination? We are many of us thinking the achievement of equality by this way? Why? Male are cordial for their improvement. But forcefulness can never achieve our ultimate goal, the PEACE.

We all have our conscience. End of the day, we want the optimum betterment. If we think these way we can not say " its my freedom " while those freedom possibly harm others freedom. We want the betterment of everyone,  ever in mankind. Allah may help us to use our conscience. 

“Any woman who understands the problems of running a home will be nearer to understanding the problems of running a country.”– Margaret Thatcher

I will suggest you to visit those links. Constructive criticism will be appreciate. Thank you.   <br>
<br><br>
<a href="https://youtu.be/lgIgytWyo_A">
TED talks
</a>
<br><br>
<a href="https://www.google.com/amp/s/www.forbes.com/sites/kathycaprino/2017/03/08/what-is-feminism-and-why-do-so-many-women-and-men-hate-it/amp/">
About feminism
</a>
<br><br>
<a href="https://www.newscientist.com/article/mg23831740-400-the-origins-of-sexism-how-men-came-to-rule-12000-years-ago/">
About history 

</a>

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
