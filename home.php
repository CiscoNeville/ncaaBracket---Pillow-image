<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Random bracket generator</title>
        <link type="text/css" rel="stylesheet" href="style.css" />
        
   
<meta property="og:image" content="http://marchmadness.playoffpredictor.com/fb-share-image.jpg" />
<meta property="og:description" content="Random bracket generator. 2017 NCAA bracket simulator. Fill your NCAA March Madness bracket the easy way!  Simulate the whole tournament based on your input!" />
<meta property="og:url"content="http://marchmadness.playoffpredictor.com" />
<meta property="og:title" content="2017 NCAA bracket simulator" />




    
        
        
        
        
        
        
    </head>
  
<body onload="all2016Best()">
  

    
<!-- Google Analytics Code-->    
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57061804-1', 'auto');
  ga('send', 'pageview');

</script>

    
    
    
    
    
    
<!--banner and menu-->    
   <?php 
$banner = '/var/www/ncaaBracketDocs/banner-and-menu.html';
$data = file($banner) or die('Could not read file!');
foreach ($data as $line) {
echo "$line";
}
    ?>  




<h2>NCAA tournament bracket simulator</h2>
 
<p>Need to fill out a 64 team NCAA braket? All those matchups - how can I possibly pick them all? <em><b>You have come to the right place!</b></em>  Using Neville's handy NCAA bracket generator is easy and uses your input to decide who to place on all the lines of your bracket!</p>
  
<p>Not sure where to start? You can always <a href="instructions.php">read the instructions</a>, if you must.</p>  
  

  
<hr>
<h4>Assign ping-pong balls to each team and let the computer simulate the tournament with your ratings.</h4> 


<table>
<tr>
<td style="width:20%"><img src="step1.jpg" valign="middle" width="100%" height="20%"></td>

<td style="width:80%">
	
<table>	
	<tr><td align="center" border="0" cellpadding="0" cellspacing="0"> <button id="mybutton5" onclick="bestHistorical()">Historical best guess ratings based on seeds</button></td>
		<td align="center" border="0" cellpadding="0" cellspacing="0"> <button id="mybutton5" onclick="top4Better()">Heavily favor the top 4 seeds in each region</button></td> </tr>
	<tr><td align="center" border="0" cellpadding="0" cellspacing="0"> <button id="mybutton5" onclick="allEqual()">Assign all teams equal ratings</button></td>
		<td align="center" border="0" cellpadding="0" cellspacing="0"> <button id="mybutton5" onclick="allRandom()">Totally Random!</button></td></tr>
	<tr><td align="center" border="0" cellpadding="0" cellspacing="0"> <button id="mybutton5" onclick="all2015Best()">What worked in 2015</button></td>
		<td align="center" border="0" cellpadding="0" cellspacing="0"> <button id="mybutton5" onclick="all2016Best()">What worked in 2016</button></td></tr>
</table>


</td>
</tr>
</table>

<script type="text/javascript">
function allEqual()  {
	var seeds = ["E1", "E2", "E3", "E4", "E5", "E6", "E7", "E8", "E9", "E10", "E11", "E12", "E13", "E14", "E15", "E16", "S1", "S2", "S3", "S4", "S5", "S6", "S7", "S8", "S9", "S10", "S11", "S12", "S13", "S14", "S15", "S16", "MW1", "MW2", "MW3", "MW4", "MW5", "MW6", "MW7", "MW8", "MW9", "MW10", "MW11", "MW12", "MW13", "MW14", "MW15", "MW16", "W1", "W2", "W3", "W4", "W5", "W6", "W7", "W8", "W9", "W10", "W11", "W12", "W13", "W14", "W15", "W16" ];
	var valueSeeds = ["valueE1", "valueE2", "valueE3", "valueE4", "valueE5", "valueE6", "valueE7", "valueE8", "valueE9", "valueE10", "valueE11", "valueE12", "valueE13", "valueE14", "valueE15", "valueE16", "valueS1", "valueS2", "valueS3", "valueS4", "valueS5", "valueS6", "valueS7", "valueS8", "valueS9", "valueS10", "valueS11", "valueS12", "valueS13", "valueS14", "valueS15", "valueS16", "valueMW1", "valueMW2", "valueMW3", "valueMW4", "valueMW5", "valueMW6", "valueMW7", "valueMW8", "valueMW9", "valueMW10", "valueMW11", "valueMW12", "valueMW13", "valueMW14", "valueMW15", "valueMW16", "valueW1", "valueW2", "valueW3", "valueW4", "valueW5", "valueW6", "valueW7", "valueW8", "valueW9", "valueW10", "valueW11", "valueW12", "valueW13", "valueW14", "valueW15", "valueW16"];  
	for ($i = 0; $i < seeds.length; $i++) {
	var y = 100;
    document.getElementById(valueSeeds[$i]).innerHTML = y;
    document.getElementById(seeds[$i]).value = y;
}	
}	
</script>


<script type="text/javascript">
function top4Better()  {
	var seeds = ["E1", "S1", "MW1", "W1" ];
	var valueSeeds = ["valueE1",  "valueS1", "valueMW1", "valueW1"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 200;
    document.getElementById(seeds[$i]).value = 200;
   }
 	var seeds = ["E2", "S2", "MW2", "W2" ];
	var valueSeeds = ["valueE2",  "valueS2", "valueMW2", "valueW2"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 180;
    document.getElementById(seeds[$i]).value = 180;
   }
    var seeds = ["E3", "S3", "MW3", "W3" ];
	var valueSeeds = ["valueE3",  "valueS3", "valueMW3", "valueW3"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 140;
    document.getElementById(seeds[$i]).value = 140;
   }
    var seeds = ["E4", "S4", "MW4", "W4" ];
	var valueSeeds = ["valueE4",  "valueS4", "valueMW4", "valueW4"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 130;
    document.getElementById(seeds[$i]).value = 110;   
   }	
}	
</script>



<script type="text/javascript">
function bestHistorical()  {
	var seeds = ["E1", "S1", "MW1", "W1" ];
	var valueSeeds = ["valueE1",  "valueS1", "valueMW1", "valueW1"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 100;
    document.getElementById(seeds[$i]).value = 100;
   }
 	var seeds = ["E2", "S2", "MW2", "W2" ];
	var valueSeeds = ["valueE2",  "valueS2", "valueMW2", "valueW2"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 95;
    document.getElementById(seeds[$i]).value = 95;
   }
    var seeds = ["E3", "S3", "MW3", "W3" ];
	var valueSeeds = ["valueE3",  "valueS3", "valueMW3", "valueW3"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 90;
    document.getElementById(seeds[$i]).value = 90;
   }
    var seeds = ["E4", "S4", "MW4", "W4" ];
	var valueSeeds = ["valueE4",  "valueS4", "valueMW4", "valueW4"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 80;
    document.getElementById(seeds[$i]).value = 80;   
   }
	var seeds = ["E5", "S5", "MW5", "W5" ];
	var valueSeeds = ["valueE5",  "valueS5", "valueMW5", "valueW5"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 70;
    document.getElementById(seeds[$i]).value = 70;
   }
 	var seeds = ["E6", "S6", "MW6", "W6" ];
	var valueSeeds = ["valueE6",  "valueS6", "valueMW6", "valueW6"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 60;
    document.getElementById(seeds[$i]).value = 60;
   }
    var seeds = ["E7", "S7", "MW7", "W7" ];
	var valueSeeds = ["valueE7",  "valueS7", "valueMW7", "valueW7"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 55;
    document.getElementById(seeds[$i]).value = 55;
   }
    var seeds = ["E8", "S8", "MW8", "W8" ];
	var valueSeeds = ["valueE8",  "valueS8", "valueMW8", "valueW8"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 50;
    document.getElementById(seeds[$i]).value = 50;   
   }
	var seeds = ["E9", "S9", "MW9", "W9" ];
	var valueSeeds = ["valueE9",  "valueS9", "valueMW9", "valueW9"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 45;
    document.getElementById(seeds[$i]).value = 45;
   }
 	var seeds = ["E10", "S10", "MW10", "W10" ];
	var valueSeeds = ["valueE10",  "valueS10", "valueMW10", "valueW10"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 40;
    document.getElementById(seeds[$i]).value = 40;
   }
    var seeds = ["E11", "S11", "MW11", "W11" ];
	var valueSeeds = ["valueE11",  "valueS11", "valueMW11", "valueW11"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 30;
    document.getElementById(seeds[$i]).value = 30;
   }
    var seeds = ["E12", "S12", "MW12", "W12" ];
	var valueSeeds = ["valueE12",  "valueS12", "valueMW12", "valueW12"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 20;
    document.getElementById(seeds[$i]).value = 20;   
   }
	var seeds = ["E13", "S13", "MW13", "W13" ];
	var valueSeeds = ["valueE13",  "valueS13", "valueMW13", "valueW13"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 10;
    document.getElementById(seeds[$i]).value = 10;
   }
 	var seeds = ["E14", "S14", "MW14", "W14" ];
	var valueSeeds = ["valueE14",  "valueS14", "valueMW14", "valueW14"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 5;
    document.getElementById(seeds[$i]).value = 5;
   }
    var seeds = ["E15", "S15", "MW15", "W15" ];
	var valueSeeds = ["valueE15",  "valueS15", "valueMW15", "valueW15"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 2;
    document.getElementById(seeds[$i]).value = 2;
   }
    var seeds = ["E16", "S16", "MW16", "W16" ];
	var valueSeeds = ["valueE16",  "valueS16", "valueMW16", "valueW16"];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 0;
    document.getElementById(seeds[$i]).value = 0;   
   }
	
}	
</script>







<script type="text/javascript">
function allRandom()  {
	var seeds = ["E1", "E2", "E3", "E4", "E5", "E6", "E7", "E8", "E9", "E10", "E11", "E12", "E13", "E14", "E15", "E16", "S1", "S2", "S3", "S4", "S5", "S6", "S7", "S8", "S9", "S10", "S11", "S12", "S13", "S14", "S15", "S16", "MW1", "MW2", "MW3", "MW4", "MW5", "MW6", "MW7", "MW8", "MW9", "MW10", "MW11", "MW12", "MW13", "MW14", "MW15", "MW16", "W1", "W2", "W3", "W4", "W5", "W6", "W7", "W8", "W9", "W10", "W11", "W12", "W13", "W14", "W15", "W16" ];
	var valueSeeds = ["valueE1", "valueE2", "valueE3", "valueE4", "valueE5", "valueE6", "valueE7", "valueE8", "valueE9", "valueE10", "valueE11", "valueE12", "valueE13", "valueE14", "valueE15", "valueE16", "valueS1", "valueS2", "valueS3", "valueS4", "valueS5", "valueS6", "valueS7", "valueS8", "valueS9", "valueS10", "valueS11", "valueS12", "valueS13", "valueS14", "valueS15", "valueS16", "valueMW1", "valueMW2", "valueMW3", "valueMW4", "valueMW5", "valueMW6", "valueMW7", "valueMW8", "valueMW9", "valueMW10", "valueMW11", "valueMW12", "valueMW13", "valueMW14", "valueMW15", "valueMW16", "valueW1", "valueW2", "valueW3", "valueW4", "valueW5", "valueW6", "valueW7", "valueW8", "valueW9", "valueW10", "valueW11", "valueW12", "valueW13", "valueW14", "valueW15", "valueW16"];  
	for ($i = 0; $i < seeds.length; $i++) {
	var y = parseInt(Math.random()*200);
    document.getElementById(valueSeeds[$i]).innerHTML = y;
    document.getElementById(seeds[$i]).value = y;
}	
}	
</script>


<script type="text/javascript">
function all2015Best()  {
	var seeds = ["E6", "E9", "E10", "E12", "E13", "E14", "E15", "E16", "S3", "S6", "S9", "S10", "S12", "S13", "S15", "S16", "MW9", "MW10", "MW11", "MW12", "MW13", "MW14", "MW15", "MW16", "W3", "W7", "W9", "W11", "W12", "W13", "W15", "W16" ];
	var valueSeeds = [ "valueE6", "valueE9", "valueE10", "valueE12", "valueE13", "valueE14", "valueE15", "valueE16", "valueS3", "valueS6", "valueS9", "valueS10", "valueS12", "valueS13", "valueS15", "valueS16", "valueMW9", "valueMW10", "valueMW11", "valueMW12", "valueMW13", "valueMW14", "valueMW15", "valueMW16", "valueW3", "valueW7", "valueW9", "valueW11", "valueW12", "valueW13", "valueW15", "valueW16"           ];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 0;
    document.getElementById(seeds[$i]).value = 0;
}
	var seeds = ["E1", "E5", "E11", "E2", "S8", "S4", "S14", "S7", "MW8", "MW4", "MW6", "MW2", "W8", "W5", "W14", "W10"   ];
	var valueSeeds = [ "valueE1", "valueE5", "valueE11", "valueE2", "valueS8", "valueS4", "valueS14", "valueS7", "valueMW8", "valueMW4", "valueMW6", "valueMW2", "valueW8", "valueW5", "valueW14", "valueW10"   ];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 1;
    document.getElementById(seeds[$i]).value = 1;
}
	var seeds = ["E8", "E3", "S5", "S11", "MW5", "MW7", "W4", "W6"  ];
	var valueSeeds = [ "valueE8", "valueE3", "valueS5", "valueS11", "valueMW5", "valueMW7", "valueW4", "valueW6"  ];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 10;
    document.getElementById(seeds[$i]).value = 10;
}
	var seeds = ["E4", "S2", "MW3", "W2"  ];
	var valueSeeds = [ "valueE4", "valueS2", "valueMW3", "valueW2"  ];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 25;
    document.getElementById(seeds[$i]).value = 25;
}
	var seeds = ["E7", "MW1" ];
	var valueSeeds = [ "valueE7", "valueMW1"  ];  
	for ($i = 0; $i < seeds.length; $i++) {
    document.getElementById(valueSeeds[$i]).innerHTML = 50;
    document.getElementById(seeds[$i]).value = 50;
}
document.getElementById("valueW1").innerHTML = 100;
document.getElementById("W1").value = 100;
document.getElementById("valueS1").innerHTML = 200;
document.getElementById("S1").value = 200;

	
}	
</script>


<script type="text/javascript">
function all2016Best()  {

var seeds = ["S16", "S8", "S12", "S4", "S6", "S14", "S10", "S15", "W16", "W9", "W5", "W13", "W6", "W14", "W7", "W15", "E16", "E8", "E12", "E13", "E11", "E3", "E10", "E15", "MW16", "MW8", "MW5", "MW13", "MW6", "MW14", "MW7", "MW2" ];
for ($i = 0; $i < seeds.length; $i++) {
    var valueSeed = 'value'.concat(seeds[$i]);
    document.getElementById(valueSeed).innerHTML = 0;
    document.getElementById(seeds[$i]).value = 0;
}
var seeds = ["S9", "S13", "S11", "S7", "W8", "W12", "W11", "W10", "E9", "E4", "E14", "E2", "MW9", "MW12", "MW3", "MW15" ];
for ($i = 0; $i < seeds.length; $i++) {
    var valueSeed = 'value'.concat(seeds[$i]);
    document.getElementById(valueSeed).innerHTML = 1;
    document.getElementById(seeds[$i]).value = 1;
}



}	

</script>







<br><br>



<form action="/cgi-bin/ncaaBracketSimulator.cgi">



<table class="buckets" width="90%" border="0" cellpadding="0" cellspacing="0" summary="layout for 2 columns">
  		
<tr height="550px">
<td  class="bucketAlignBottom" style="width:4%"> <img src="step2a.jpg" width="100%"> </td>

<td class="bucket1" style="width:45%"> <center><b>East Region</b></center>   <hr>


<table>
<tr><td style="width:50%" align="right">E1: North Carolina <img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/UNC.png"  valign="middle" width="15%"> </td>
<td style="width:50%"><input name="E1" id="E1" type="range" min="0" max="200" value="160" onchange="showValueE1(this.value)" 
/>
<span id="valueE1">160</span>

<script type="text/javascript">
function showValueE1(newValue)
{
        document.getElementById("valueE1").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">E2: Xavier <img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/XAVIER.png" valign="middle" width="15%"> </td>
<td><input name="E2" id="E2" type="range" min="0" max="200" value="150" onchange="showValueE2(this.value)"
/>
<span id="valueE2">150</span>
<script type="text/javascript">
function showValueE2(newValue)
{
        document.getElementById("valueE2").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">E3: West Virginia <img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/WVU.png" valign="middle" width="15%"> </td>
<td><input name="E3" id="E3" type="range" min="0" max="200" value="140" onchange="showValueE3(this.value)"
/>
<span id="valueE3">140</span>
<script type="text/javascript">
function showValueE3(newValue)
{
        document.getElementById("valueE3").innerHTML=newValue;
}
</script></td></tr>



<tr><td align="right">E4: Kentucky <img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/UK.png" valign="middle" width="15%"> </td>
<td><input name="E4" id="E4" type="range" min="0" max="200" value="130" onchange="showValueE4(this.value)"
/>
<span id="valueE4">130</span>
<script type="text/javascript">
function showValueE4(newValue)
{
        document.getElementById("valueE4").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">E5: Indiana<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/IND.png" valign="middle" width="15%"> </td>
<td><input name="E5" id="E5" type="range" min="0" max="200" value="120" onchange="showValueE5(this.value)"
/>
<span id="valueE5">120</span>
<script type="text/javascript">
function showValueE5(newValue)
{
        document.getElementById("valueE5").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">E6: Notre Dame<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/ND.png" valign="middle" width="15%"> </td>
<td><input name="E6" id="E6" type="range" min="0" max="200" value="110" onchange="showValueE6(this.value)"
/>
<span id="valueE6">110</span>
<script type="text/javascript">
function showValueE6(newValue)
{
        document.getElementById("valueE6").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">E7: Wisconsin<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/WISC.png" valign="middle" width="15%"> </td>
<td><input name="E7" id="E7" type="range" min="0" max="200" value="100" onchange="showValueE7(this.value)"
/>
<span id="valueE7">100</span>
<script type="text/javascript">
function showValueE7(newValue)
{
        document.getElementById("valueE7").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">E8: USC<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/USC.png" valign="middle" width="15%"> </td>
<td><input name="E8" id="E8" type="range" min="0" max="200" value="90" onchange="showValueE8(this.value)"
/>
<span id="valueE8">90</span>
<script type="text/javascript">
function showValueE8(newValue)
{
        document.getElementById("valueE8").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">E9: Providence<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/PROV.png" valign="middle" width="15%"></td>
<td><input name="E9" id="E9" type="range" min="0" max="200" value="80" onchange="showValueE9(this.value)"
/>
<span id="valueE9">80</span>
<script type="text/javascript">
function showValueE9(newValue)
{
        document.getElementById("valueE9").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">E10: Pittsburgh<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/PITT.png" valign="middle" width="15%"></td>
<td><input name="E10" id="E10" type="range" min="0" max="200" value="70" onchange="showValueE10(this.value)"
/>
<span id="valueE10">70</span>
<script type="text/javascript">
function showValueE10(newValue)
{
        document.getElementById("valueE10").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">E11: Michigan <img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/MICH.png" valign="middle" width="15%"> </td>
<td><input name="E11" id="E11"  type="range" min="0" max="200" value="60" onchange="showValueE11(this.value)"
/>
<span id="valueE11">60</span>
<script type="text/javascript">
function showValueE11(newValue)
{
        document.getElementById("valueE11").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">E12: Chattanooga<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/CHATT.png" valign="middle" width="15%">  </td>
<td><input name="E12" id="E12"  type="range" min="0" max="200" value="50" onchange="showValueE12(this.value)"
/>
<span id="valueE12">50</span>
<script type="text/javascript">
function showValueE12(newValue)
{
        document.getElementById("valueE12").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">E13: Stony Brook<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/STNYBRK.png" valign="middle" width="15%"> </td>
<td><input name="E13" id="E13"  type="range" min="0" max="200" value="40" onchange="showValueE13(this.value)"
/>
<span id="valueE13">40</span>
<script type="text/javascript">
function showValueE13(newValue)
{
        document.getElementById("valueE13").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">E14: Stephen F Austin<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/SFA.png" valign="middle" width="15%"> </td>
<td><input name="E14" id="E14" type="range" min="0" max="200" value="30" onchange="showValueE14(this.value)"
/>
<span id="valueE14">30</span>
<script type="text/javascript">
function showValueE14(newValue)
{
        document.getElementById("valueE14").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">E15: Weber State<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/WEBER.png" valign="middle" width="15%"> </td>
<td><input name="E15" id="E15" type="range" min="0" max="200" value="20" onchange="showValueE15(this.value)"
/>
<span id="valueE15">20</span>
<script type="text/javascript">
function showValueE15(newValue)
{
        document.getElementById("valueE15").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">E16: Northern Kentucky<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/NKY.png" valign="middle" width="15%"> </td>
<td><input name="E16" id="E16" type="range" min="0" max="200" value="10" onchange="showValueE16(this.value)"
/>
<span id="valueE16">10</span>
<script type="text/javascript">
function showValueE16(newValue)
{
        document.getElementById("valueE16").innerHTML=newValue;
}
</script></td></tr>

</table>
</td>


<td  style="width:2%"  ></td>


<td class="bucket1" style="width:45%"  ><center><b>South Region</b></center><hr>
	<table>
<tr><td align="right">S1: Kansas <img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/KANSAS.png" valign="middle" width="15%"> </td> <td> 
<input name="S1" id="S1" type="range" min="0" max="200" value="160" onchange="showValueS1(this.value)"
/>
<span id="valueS1">160</span>
<script type="text/javascript">
function showValueS1(newValue)
{
        document.getElementById("valueS1").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">S2: Villanova<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/NOVA.png"  valign="middle" width="15%"> </td> <td> 
<input name="S2" id="S2" type="range" min="0" max="200" value="150" onchange="showValueS2(this.value)"
/>
<span id="valueS2">150</span>
<script type="text/javascript">
function showValueS2(newValue)
{
        document.getElementById("valueS2").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">S3: Miami<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/MIAMI.png"  valign="middle" width="15%"> </td> <td> 
<input name="S3" id="S3" type="range" min="0" max="200" value="140" onchange="showValueS3(this.value)"
/>
<span id="valueS3">140</span>
<script type="text/javascript">
function showValueS3(newValue)
{
        document.getElementById("valueS3").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">S4: California <img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/CAL.png"  valign="middle" width="15%"> </td> <td> 
<input name="S4" id="S4" type="range" min="0" max="200" value="130" onchange="showValueS4(this.value)"
/>
<span id="valueS4">130</span>
<script type="text/javascript">
function showValueS4(newValue)
{
        document.getElementById("valueS4").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">S5: Maryland<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/MD.png"  valign="middle" width="15%"> </td> <td> 
<input name="S5" id="S5" type="range" min="0" max="200" value="120" onchange="showValueS5(this.value)"
/>
<span id="valueS5">120</span>
<script type="text/javascript">
function showValueS5(newValue)
{
        document.getElementById("valueS5").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">S6: Arizona<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/ARIZ.png"  valign="middle" width="15%"> </td> <td> 
<input name="S6" id="S6" type="range" min="0" max="200" value="110" onchange="showValueS6(this.value)"
/>
<span id="valueS6">110</span>
<script type="text/javascript">
function showValueS6(newValue)
{
        document.getElementById("valueS6").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">S7: Iowa<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/IOWA.png"  valign="middle" width="15%"> </td> <td> 
<input name="S7" id="S7" type="range" min="0" max="200" value="100" onchange="showValueS7(this.value)"
/>
<span id="valueS7">100</span>
<script type="text/javascript">
function showValueS7(newValue)
{
        document.getElementById("valueS7").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">S8: Colorado <img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/COLO.png"  valign="middle" width="15%"> </td> <td>
<input name="S8" id="S8" type="range" min="0" max="200" value="90" onchange="showValueS8(this.value)"
/>
<span id="valueS8">90</span>
<script type="text/javascript">
function showValueS8(newValue)
{
        document.getElementById("valueS8").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">S9: Connecticut <img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/UCONN.png"  valign="middle" width="15%"> </td> <td>
<input name="S9" id="S9" type="range" min="0" max="200" value="80" onchange="showValueS9(this.value)"
/>
<span id="valueS9">80</span>
<script type="text/javascript">
function showValueS9(newValue)
{
        document.getElementById("valueS9").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">S10: Temple <img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/TEMPLE.png"  valign="middle" width="15%"> </td> <td> 
<input name="S10" id="S10" type="range" min="0" max="200" value="70" onchange="showValueS10(this.value)"
/>
<span id="valueS10">70</span>
<script type="text/javascript">
function showValueS10(newValue)
{
        document.getElementById("valueS10").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">S11: Wichita St <img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/WICHST.png"  valign="middle" width="15%"> </td> <td>  
<input name="S11" id="S11" type="range" min="0" max="200" value="60" onchange="showValueS11(this.value)"
/>
<span id="valueS11">60</span>
<script type="text/javascript">
function showValueS11(newValue)
{
        document.getElementById("valueS11").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">S12: S Dakota St <img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/SDAKST.png"  valign="middle" width="15%"> </td> <td> 
<input name="S12" id="S12" type="range" min="0" max="200" value="50" onchange="showValueS12(this.value)"
/>
<span id="valueS12">50</span>
<script type="text/javascript">
function showValueS12(newValue)
{
        document.getElementById("valueS12").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">S13: Hawaii <img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/HAWAII.png"  valign="middle" width="15%"> </td> <td> 
<input name="S13" id="S13" type="range" min="0" max="200" value="40" onchange="showValueS13(this.value)"
/>
<span id="valueS13">40</span>
<script type="text/javascript">
function showValueS13(newValue)
{
        document.getElementById("valueS13").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">S14: BUFFALO<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/BUFF.png"  valign="middle" width="15%"> </td> <td>  
<input name="S14" id="S14" type="range" min="0" max="200" value="30" onchange="showValueS14(this.value)"
/>
<span id="valueS14">30</span>
<script type="text/javascript">
function showValueS14(newValue)
{
        document.getElementById("valueS14").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">S15: UNCA<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/NCCU.png"  valign="middle" width="15%"> </td> <td> 
<input name="S15" id="S15" type="range" min="0" max="200" value="20" onchange="showValueS15(this.value)"
/>
<span id="valueS15">20</span>
<script type="text/javascript">
function showValueS15(newValue)
{
        document.getElementById("valueS15").innerHTML=newValue;
}
</script></td></tr>



<tr><td align="right">S16: Austin Peay<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/PEAY.png"  valign="middle" width="15%"> </td> <td> 
<input name="S16" id="S16" type="range" min="0" max="200" value="10" onchange="showValueS16(this.value)"
/>
<span id="valueS16">10</span>
<script type="text/javascript">
function showValueS16(newValue)
{
        document.getElementById("valueS16").innerHTML=newValue;
}
</script></td></tr>


</table>
</td>


<td style="width:4%"  >  </td>
</tr>
<tr height="25px">
	<td style="width:4%" bgcolor="#FFFFFF"></td>
	<td style="width:45%"></td>
	<td style="width:2%"></td>
	<td style="width:45%"></td>
	<td style="width:4%"></td>
	
</tr>

<tr height="550px">
<td  class="bucketAlignTop" style="width:8%"> <img class="top" src="step2b.jpg" width="100%"> </td>

<td class="bucket1" style="width:40%"  ><center><b>Midwest Region</b></center><hr>
	<table>
<tr><td align="right">MW1: Virginia<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/UVA.png"  valign="middle" width="15%"> </td> <td> 
<input name="MW1" id="MW1" type="range" min="0" max="200" value="160" onchange="showValueMW1(this.value)"
/>
<span id="valueMW1">160</span>
<script type="text/javascript">
function showValueMW1(newValue)
{
        document.getElementById("valueMW1").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">MW2: Michigan St<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/MICHST.png"  valign="middle" width="15%"> </td> <td> 
<input name="MW2" id="MW2" type="range" min="0" max="200" value="150" onchange="showValueMW2(this.value)"
/>
<span id="valueMW2">150</span>
<script type="text/javascript">
function showValueMW2(newValue)
{
        document.getElementById("valueMW2").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">MW3: Utah<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/UTAH.png"  valign="middle" width="15%"> </td> <td>
<input name="MW3" id="MW3" type="range" min="0" max="200" value="140" onchange="showValueMW3(this.value)"
/>
<span id="valueMW3">140</span>
<script type="text/javascript">
function showValueMW3(newValue)
{
        document.getElementById("valueMW3").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">MW4: Iowa St<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/IOWAST.png"  valign="middle" width="15%"> </td> <td> 
<input name="MW4" id="MW4" type="range" min="0" max="200" value="130" onchange="showValueMW4(this.value)"
/>
<span id="valueMW4">130</span>
<script type="text/javascript">
function showValueMW4(newValue)
{
        document.getElementById("valueMW4").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">MW5: Purdue<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/PURDUE.png"  valign="middle" width="15%"> </td> <td> 
<input name="MW5" id="MW5" type="range" min="0" max="200" value="120" onchange="showValueMW5(this.value)"
/>
<span id="valueMW5">120</span>
<script type="text/javascript">
function showValueMW5(newValue)
{
        document.getElementById("valueMW5").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">MW6: Seton Hall<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/SETON.png"  valign="middle" width="15%"> </td> <td> 
<input name="MW6" id="MW6" type="range" min="0" max="200" value="110" onchange="showValueMW6(this.value)"
/>
<span id="valueMW6">110</span>
<script type="text/javascript">
function showValueMW6(newValue)
{
        document.getElementById("valueMW6").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">MW7: Dayton<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/DAYTON.png"  valign="middle" width="15%"> </td> <td>
<input name="MW7" id="MW7" type="range" min="0" max="200" value="100" onchange="showValueMW7(this.value)"
/>
<span id="valueMW7">100</span>
<script type="text/javascript">
function showValueMW7(newValue)
{
        document.getElementById("valueMW7").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">MW8: Texas Tech<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/TXTECH.png"  valign="middle" width="15%"> </td> <td> 
<input name="MW8" id="MW8" type="range" min="0" max="200" value="90" onchange="showValueMW8(this.value)"
/>
<span id="valueMW8">90</span>
<script type="text/javascript">
function showValueMW8(newValue)
{
        document.getElementById("valueMW8").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">MW9: Butler<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/BUTLER.png"  valign="middle" width="15%"> </td> <td> 
<input name="MW9" id="MW9" type="range" min="0" max="200" value="80" onchange="showValueMW9(this.value)"
/>
<span id="valueMW9">80</span>
<script type="text/javascript">
function showValueMW9(newValue)
{
        document.getElementById("valueMW9").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">MW10: Syracuse <img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/CUSE.png"  valign="middle" width="15%"> </td> <td> 
<input name="MW10" id="MW10" type="range" min="0" max="200" value="70" onchange="showValueMW10(this.value)"
/>
<span id="valueMW10">70</span>
<script type="text/javascript">
function showValueMW10(newValue)
{
        document.getElementById("valueMW10").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">MW11: Gonzaga <img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/GONZAG.png"  valign="middle" width="15%"> </td> <td> 
<input name="MW11" id="MW11" type="range" min="0" max="200" value="60" onchange="showValueMW11(this.value)"
/>
<span id="valueMW11">60</span>
<script type="text/javascript">
function showValueMW11(newValue)
{
        document.getElementById("valueMW11").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">MW12: Little Rock<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/ARKLR.png"  valign="middle" width="15%"> </td> <td> 
<input name="MW12" id="MW12" type="range" min="0" max="200" value="50" onchange="showValueMW12(this.value)"
/>
<span id="valueMW12">50</span>
<script type="text/javascript">
function showValueMW12(newValue)
{
        document.getElementById("valueMW12").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">MW13: Iona<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/IONA.png"  valign="middle" width="15%"> </td> <td> 
<input name="MW13" id="MW13" type="range" min="0" max="200" value="40" onchange="showValueMW13(this.value)"
/>
<span id="valueMW13">40</span>
<script type="text/javascript">
function showValueMW13(newValue)
{
        document.getElementById("valueMW13").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">MW14: Fresno State<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/FRESNO.png"  valign="middle" width="15%"> </td> <td> 
<input name="MW14" id="MW14" type="range" min="0" max="200" value="30" onchange="showValueMW14(this.value)"
/>
<span id="valueMW14">30</span>
<script type="text/javascript">
function showValueMW14(newValue)
{
        document.getElementById("valueMW14").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">MW15: Middle Tennessee<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/MTSU.png"  valign="middle" width="15%"> </td> <td>
<input name="MW15" id="MW15" type="range" min="0" max="200" value="20" onchange="showValueMW15(this.value)"
/>
<span id="valueMW15">20</span>
<script type="text/javascript">
function showValueMW15(newValue)
{
        document.getElementById("valueMW15").innerHTML=newValue;
}
</script></td></tr>



<tr><td align="right">MW16: Hampton<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/HAMP.png"  valign="middle" width="15%"> </td> <td> 
<input name="MW16" id="MW16" type="range" min="0" max="200" value="10" onchange="showValueMW16(this.value)"
/>
<span id="valueMW16">10</span>
<script type="text/javascript">
function showValueMW16(newValue)
{
        document.getElementById("valueMW16").innerHTML=newValue;
}
</script></td></tr>

</table>
</td>


<td  style="width:2%"  ></td>


<td class="bucket1" style="width:40%"  ><center><b>West Region</b></center><hr>
<table>
<tr><td align="right">W1: Oregon<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/OREG.png"  valign="middle" width="15%"> </td> <td> 
<input name="W1" id="W1" type="range" min="0" max="200" value="160" onchange="showValueW1(this.value)"
/>
<span id="valueW1">160</span>
<script type="text/javascript">
function showValueW1(newValue)
{
        document.getElementById("valueW1").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">W2: Oklahoma<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/OKLA.png"  valign="middle" width="15%"> </td> <td> 
<input name="W2" id="W2" type="range" min="0" max="200" value="150" onchange="showValueW2(this.value)"
/>
<span id="valueW2">150</span>
<script type="text/javascript">
function showValueW2(newValue)
{
        document.getElementById("valueW2").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">W3: Texas A&M<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/TEXAM.png"  valign="middle" width="15%"> </td> <td> 
<input name="W3" id="W3" type="range" min="0" max="200" value="140" onchange="showValueW3(this.value)"
/>
<span id="valueW3">140</span>
<script type="text/javascript">
function showValueW3(newValue)
{
        document.getElementById("valueW3").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">W4: Duke<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/DUKE.png"  valign="middle" width="15%"> </td> <td> 
<input name="W4" id="W4" type="range" min="0" max="200" value="130" onchange="showValueW4(this.value)"
/>
<span id="valueW4">130</span>
<script type="text/javascript">
function showValueW4(newValue)
{
        document.getElementById("valueW4").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">W5: Baylor<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/BAYLOR.png"  valign="middle" width="15%"> </td> <td> 
<input name="W5" id="W5" type="range" min="0" max="200" value="120" onchange="showValueW5(this.value)"
/>
<span id="valueW5">120</span>
<script type="text/javascript">
function showValueW5(newValue)
{
        document.getElementById("valueW5").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">W6: Texas<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/TEXAS.png"  valign="middle" width="15%"> </td> <td> 
<input name="W6" id="W6" type="range" min="0" max="200" value="110" onchange="showValueW6(this.value)"
/>
<span id="valueW6">110</span>
<script type="text/javascript">
function showValueW6(newValue)
{
        document.getElementById("valueW6").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">W7: Oregon St<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/OREGST.png"  valign="middle" width="15%"> </td> <td> 
<input name="W7" id="W7" type="range" min="0" max="200" value="100" onchange="showValueW7(this.value)"
/>
<span id="valueW7">100</span>
<script type="text/javascript">
function showValueW7(newValue)
{
        document.getElementById("valueW7").innerHTML=newValue;
}
</script></td></tr>

<tr><td align="right">W8: St Joes<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/STJOHN.png"  valign="middle" width="15%"> </td> <td> 
<input name="W8" id="W8" type="range" min="0" max="200" value="90" onchange="showValueW8(this.value)"
/>
<span id="valueW8">90</span>
<script type="text/javascript">
function showValueW8(newValue)
{
        document.getElementById("valueW8").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">W9: Cincinnatti<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/CINCY.png"  valign="middle" width="15%"> </td> <td> 
<input name="W9" id="W9" type="range" min="0" max="200" value="80" onchange="showValueW9(this.value)"
/>
<span id="valueW9">80</span>
<script type="text/javascript">
function showValueW9(newValue)
{
        document.getElementById("valueW9").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">W10: VCU<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/VCU.png"  valign="middle" width="15%"> </td> <td> 
<input name="W10" id="W10" type="range" min="0" max="200" value="70" onchange="showValueW10(this.value)"
/>
<span id="valueW10">70</span>
<script type="text/javascript">
function showValueW10(newValue)
{
        document.getElementById("valueW10").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">W11: Northern Iowa<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/NIOWA.png"  valign="middle" width="15%"> </td> <td> 
<input name="W11" id="W11" type="range" min="0" max="200" value="60" onchange="showValueW11(this.value)"
/>
<span id="valueW11">60</span>
<script type="text/javascript">
function showValueW11(newValue)
{
        document.getElementById("valueW11").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">W12: Yale<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/YALE.png"  valign="middle" width="15%"> </td> <td> 
<input name="W12" id="W12" type="range" min="0" max="200" value="50" onchange="showValueW12(this.value)"
/>
<span id="valueW12">50</span>
<script type="text/javascript">
function showValueW12(newValue)
{
        document.getElementById("valueW12").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">W13:  UNC Wilmington<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/NCWILM.png"  valign="middle" width="15%"> </td> <td>
<input name="W13" id="W13" type="range" min="0" max="200" value="40" onchange="showValueW13(this.value)"
/>
<span id="valueW13">40</span>
<script type="text/javascript">
function showValueW13(newValue)
{
        document.getElementById("valueW13").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">W14: Green Bay<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/WISGB.png"  valign="middle" width="15%"> </td> <td>
<input name="W14" id="W14" type="range" min="0" max="200" value="30" onchange="showValueW14(this.value)"
/>
<span id="valueW14">30</span>
<script type="text/javascript">
function showValueW14(newValue)
{
        document.getElementById("valueW14").innerHTML=newValue;
}
</script></td></tr>


<tr><td align="right">W15: CSU Bakersfield<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/CSBAK.png"  valign="middle" width="15%"> </td> <td> 
<input name="W15" id="W15" type="range" min="0" max="200" value="20" onchange="showValueW15(this.value)"
/>
<span id="valueW15">20</span>
<script type="text/javascript">
function showValueW15(newValue)
{
        document.getElementById("valueW15").innerHTML=newValue;
}
</script></td></tr>



<tr><td align="right">W16: Holy Cross<img src="http://sports.cbsimg.net/images/collegebasketball/logos/50x50/HOLY.png"  valign="middle" width="15%"> </td> <td>
<input name="W16" id="W16" type="range" min="0" max="200" value="10" onchange="showValueW16(this.value)"
/>
<span id="valueW16">10</span>
<script type="text/javascript">
function showValueW16(newValue)
{
        document.getElementById("valueW16").innerHTML=newValue;
}
</script></td></tr>
</table>

</td>
	<td style="width:8%"  ></td>
</tr>

</table>











<br><br>

<img src="step3.jpg" valign="middle" width="20%" height="20%">

<input type="submit" id="mybutton2" value="After selecting your ratings above, Click here to simulate the tournament"><br>

<br>





<br><br><br>
<a href="http://marchmadness.playoffpredictor.com">marchmadness.playoffpredictor.com</a> and <a href="http://football.playoffpredictor.com">football.PlayoffPredictor.com</a> site by <a href="http://blog.agafamily.com">Neville Aga</a>    <br>
<a href="https://twitter.com/CiscoNeville" class="twitter-follow-button" data-show-count="false">Follow @CiscoNeville</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

  
  

    </body>
 
</html>
