#!/usr/bin/perl
use strict;
use CGI;





my $q = CGI->new;

#East Region plays South Region.    MW region plays West region in final four

print "Content-type: text/html\n\n";
print " <html> <head> <title>Your Tournament Simulation</title>";
print " <link type=\"text\/css\" rel=\"stylesheet\" href=\"\/style.css\" \/> ";
print '<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">';
print "<script src=\"https:\/\/ajax.googleapis.com\/ajax\/libs\/jquery\/1.12.0\/jquery.min.js\"><\/script>";
print "<script src=\"http:\/\/maxcdn.bootstrapcdn.com/bootstrap\/3.3.6\/js\/bootstrap.min.js\"><\/script>";



print '<meta property="og:image" content="http://marchmadness.playoffpredictor.com/nevilles-banner.jpg" />';

print '<meta property="og:description" content="Fill your NCAA March Madness bracket the better and easy way! " />';

print '<meta property="og:url"content="http://marchmadness.playoffpredictor.com" />';

print '<meta property="og:title" content="March Madness Bracket Filler" />';











print "<\/head>";
print " <body>";


print '<script>  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');  ga(\'create\', \'UA-57061804-1\', \'auto\');  ga(\'send\', \'pageview\'); </script>   ';



print '<script> $(document).ready(function(){    $(\'[data-toggle="tooltip"]\').tooltip();   });</script> ';

print '  <div id="fb-root"></div><script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";  fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));</script>    ';  #facebook

print '<script>  $(document).ready(function() {    $(".delayPost1").delay(500).fadeIn(400); });   </script>';
print '<script>  $(document).ready(function() {    $(".delayPost2").delay(1000).fadeIn(500); });   </script>';
print '<script>  $(document).ready(function() {    $(".delayPost4").delay(000).fadeIn(5000); });   </script>';
print '<script>  $(document).ready(function() {    $(".delayPost6").delay(3000).fadeIn(500); });   </script>';
print '<script>  $(document).ready(function() {    $(".delayPost8").delay(6000).fadeIn(900); });   </script>';






my $data;
my $banner = '/var/www/ncaaBracketDocs/banner-and-menu.html';
open (BANNER, "<$banner") or die "$! error trying to open";  
for $data (<BANNER>) {
print "$data";
}
close BANNER;


print "<h2>With your rankings, here is your simulated tournament results</h2> <p></p>";




my %team = ("E1" => "North Carolina", "E2" => "Xavier", "E3" => "West Virginia", "E4" => "Kentucky", "E5" => "Indiana", "E6" => "Notre Dame", "E7" => "Wisconsin", "E8" => "Southern Cal", "E9" => "Providence", "E10" => "Pittsburgh", "E11" => "Michigan", "E12" => "Chattanooga", "E13" => "Stony Brook", "E14" => "Stephen F Austin", "E15" => "Weber State", "E16" => "Northern Kentucky");
%team = (%team, "S1" => "Kansas", "S2" => "Villanova", "S3" => "Miami", "S4" => "California", "S5" => "Maryland", "S6" => "Arizona", "S7" => "Iowa", "S8" => "Colorado", "S9" => "Connecticut", "S10" => "Temple", "S11" => "Wichita State", "S12" => "South Dakota State", "S13" => "Hawaii", "S14" => "Buffalo", "S15" => "NC-Asheville", "S16" => "Austin Peay");
%team = (%team, "MW1" => "Virginia", "MW2" => "Michigan State", "MW3" => "Utah", "MW4" => "Iowa State", "MW5" => "Purdue", "MW6" => "Seton Hall", "MW7" => "Dayton", "MW8" => "Texas Tech", "MW9" => "Butler", "MW10" => "Syracuse", "MW11" => "Gonzaga", "MW12" => "Little Rock", "MW13" => "Iona", "MW14" => "Fresno State", "MW15" => "Middle Tennessee", "MW16" => "Hampton");
%team = (%team, "W1" => "Oregon", "W2" => "Oklahoma", "W3" => "Texas A&M", "W4" => "Duke", "W5" => "Baylor", "W6" => "Texas", "W7" => "Oregon State", "W8" => "St Joes", "W9" => "Cincinnati", "W10" => "VCU", "W11" => "Northern Iowa", "W12" => "Yale", "W13" => "NC-Wilmington", "W14" => "Green Bay", "W15" => "CSU Bakersfield", "W16" => "Holy Cross");

my %teamIcon; #declare it here and then fill in the College name -> icon name mapping below. No problem here having more than 68 definitions below. Put all 300 if you want
$teamIcon{"Abilene Christian"} = "ABIL" ;
$teamIcon{"Air Force "} = "AF" ;
$teamIcon{"Akron"} = "AKRON" ;
$teamIcon{"Alabama A&M"} = "ALAM" ;
$teamIcon{"Albany"} = "ALBANY" ;
$teamIcon{"Alcorn State"} = "ALCORN" ;
$teamIcon{"Alabama State"} = "ALST" ;
$teamIcon{"American"} = "AMER" ;
$teamIcon{"Arizona"} = "ARIZ" ;
$teamIcon{"Arizona State"} = "ARIZST" ;
$teamIcon{"Arkansas"} = "ARK" ;
$teamIcon{"Little Rock"} = "ARKLR" ;
$teamIcon{"Arkansas-Pine Bluff"} = "ARKPB" ;
$teamIcon{"Arkansas State"} = "ARKST" ;
$teamIcon{"Army West Point"} = "ARMY" ;
$teamIcon{"Auburn"} = "AUBURN" ;
$teamIcon{"Ball State"} = "BALLST" ;
$teamIcon{"Alabama"} = "BAMA" ;
$teamIcon{"Baylor"} = "BAYLOR" ;
$teamIcon{"Boston College"} = "BC" ;
$teamIcon{"Bethune-Cookman"} = "BCU" ;
$teamIcon{"Bowling Green"} = "BGREEN" ;
$teamIcon{"Binghamton"} = "BING" ;
$teamIcon{"Boise State"} = "BOISE" ;
$teamIcon{"Bradley"} = "BRAD" ;
$teamIcon{"Brown"} = "BROWN" ;
$teamIcon{"Bryant University"} = "BRYANT" ;
$teamIcon{"Boston University"} = "BU" ;
$teamIcon{"Bucknell"} = "BUCK" ;
$teamIcon{"Buffalo"} = "BUFF" ;
$teamIcon{"Butler"} = "BUTLER" ;
$teamIcon{"Brigham Young"} = "BYU" ;
$teamIcon{"California"} = "CAL" ;
$teamIcon{"Campbell"} = "CAMP" ;
$teamIcon{"Canisius"} = "CAN" ;
$teamIcon{"Central Arkansas"} = "CARK" ;
$teamIcon{"Central Connecticut State"} = "CCTST" ;
$teamIcon{"Charlotte"} = "CHARLO" ;
$teamIcon{"College of Charleston"} = "CHARLS" ;
$teamIcon{"Charleston Southern"} = "CHARSO" ;
$teamIcon{"Chattanooga"} = "CHATT" ;
$teamIcon{"Chicago State"} = "CHIST" ;
$teamIcon{"Cincinnati"} = "CINCY" ;
$teamIcon{"The Citadel"} = "CIT" ;
$teamIcon{"Clemson"} = "CLEM" ;
$teamIcon{"Cleveland State"} = "CLEVST" ;
$teamIcon{"Columbia"} = "CLMB" ;
$teamIcon{"Colgate"} = "COLG" ;
$teamIcon{"Colorado"} = "COLO" ;
$teamIcon{"Colorado State"} = "COLOST" ;
$teamIcon{"Coppin State"} = "COPPST" ;
$teamIcon{"Cornell"} = "CORN" ;
$teamIcon{"Cal Poly"} = "CPOLY" ;
$teamIcon{"Creighton"} = "CREIGH" ;
$teamIcon{"CSU Bakersfield"} = "CSBAK" ;
$teamIcon{"Cal State Fullerton"} = "CSFULL" ;
$teamIcon{"Northridge"} = "CSN" ;
$teamIcon{"Coastal Carolina"} = "CSTCAR" ;
$teamIcon{"Syracuse"} = "CUSE" ;
$teamIcon{"Dartmouth"} = "DART" ;
$teamIcon{"Davidson"} = "DAVID" ;
$teamIcon{"Dayton"} = "DAYTON" ;
$teamIcon{"Delaware"} = "DEL" ;
$teamIcon{"Delaware State"} = "DELST" ;
$teamIcon{"Denver"} = "DENVER" ;
$teamIcon{"DePaul"} = "DEPAUL" ;
$teamIcon{"Drake"} = "DRAKE" ;
$teamIcon{"Drexel"} = "DREXEL" ;
$teamIcon{"Detroit"} = "DTROIT" ;
$teamIcon{"Duke"} = "DUKE" ;
$teamIcon{"Duquesne"} = "DUQ" ;
$teamIcon{"East Carolina"} = "ECU" ;
$teamIcon{"Eastern Illinois"} = "EILL" ;
$teamIcon{"Eastern Kentucky"} = "EKY" ;
$teamIcon{"Elon"} = "ELON" ;
$teamIcon{"Evansville"} = "EVAN" ;
$teamIcon{"Eastern Washington"} = "EWASH" ;
$teamIcon{"Fairfield"} = "FAIR" ;
$teamIcon{"Florida A&M"} = "FAMU" ;
$teamIcon{"Florida Atlantic"} = "FAU" ;
$teamIcon{"Fairleigh Dickinson"} = "FDU" ;
$teamIcon{"Florida Gulf Coast"} = "FGC" ;
$teamIcon{"Florida International"} = "FIU" ;
$teamIcon{"Florida"} = "FLA" ;
$teamIcon{"Fordham"} = "FORD" ;
$teamIcon{"Fresno State"} = "FRESNO" ;
$teamIcon{"Florida State"} = "FSU" ;
$teamIcon{"Furman"} = "FURMAN" ;
$teamIcon{"Georgia Southern"} = "GASOU" ;
$teamIcon{"Georgia State"} = "GAST" ;
$teamIcon{"Georgia Tech"} = "GATECH" ;
$teamIcon{"Grand Canyon"} = "GC" ;
$teamIcon{"George Mason"} = "GMASON" ;
$teamIcon{"Gonzaga"} = "GONZAG" ;
$teamIcon{"Grambling"} = "GRAM" ;
$teamIcon{"Georgetown"} = "GTOWN" ;
$teamIcon{"George Washington"} = "GWASH" ;
$teamIcon{"Gardner-Webb"} = "GWEBB" ;
$teamIcon{"Hampton"} = "HAMP" ;
$teamIcon{"Hartford"} = "HARTFD" ;
$teamIcon{"Harvard"} = "HARV" ;
$teamIcon{"Hawaii"} = "HAWAII" ;
$teamIcon{"Hofstra"} = "HOFSTRA" ;
$teamIcon{"Holy Cross"} = "HOLY" ;
$teamIcon{"Houston"} = "HOU" ;
$teamIcon{"Houston Baptist"} = "HOUBP" ;
$teamIcon{"Howard"} = "HOW" ;
$teamIcon{"Idaho"} = "IDAHO" ;
$teamIcon{"Idaho State"} = "IDST" ;
$teamIcon{"Illinois"} = "ILL" ;
$teamIcon{"Illinois-Chicago"} = "ILLCHI" ;
$teamIcon{"Illinois State"} = "ILLST" ;
$teamIcon{"Indiana"} = "IND" ;
$teamIcon{"Indiana State"} = "INDST" ;
$teamIcon{"Iona"} = "IONA" ;
$teamIcon{"Iowa"} = "IOWA" ;
$teamIcon{"Iowa State"} = "IOWAST" ;
$teamIcon{"IPFW"} = "IPFW" ;
$teamIcon{"IUPUI"} = "IUPUI" ;
$teamIcon{"Jackson State"} = "JACKST" ;
$teamIcon{"Jacksonville State"} = "JAXST" ;
$teamIcon{"James Madison"} = "JMAD" ;
$teamIcon{"Jacksonville"} = "JVILLE" ;
$teamIcon{"Kansas"} = "KANSAS" ;
$teamIcon{"Kennesaw State"} = "KENSAW" ;
$teamIcon{"Kent State"} = "KENTST" ;
$teamIcon{"Kansas State"} = "KSTATE" ;
$teamIcon{"Lafayette"} = "LAFAY" ;
$teamIcon{"UL Lafayette"} = "LALAF" ;
$teamIcon{"Lamar"} = "LAMAR" ;
$teamIcon{"Louisiana-Monroe"} = "LAMON" ;
$teamIcon{"Louisiana Tech"} = "LATECH" ;
$teamIcon{"Lehigh"} = "LEHIGH" ;
$teamIcon{"LIU-Brooklyn"} = "LIU" ;
$teamIcon{"Long Beach State"} = "LNGBCH" ;
$teamIcon{"Loyola-Chicago"} = "LOYCHI" ;
$teamIcon{"Loyola-Maryland"} = "LOYMD" ;
$teamIcon{"Loyola Marymount"} = "LOYMRY" ;
$teamIcon{"Lipscomb"} = "LPSCMB" ;
$teamIcon{"La Salle"} = "LSALLE" ;
$teamIcon{"LSU"} = "LSU" ;
$teamIcon{"Louisville"} = "LVILLE" ;
$teamIcon{"Maine"} = "MAINE" ;
$teamIcon{"Manhattan"} = "MANH" ;
$teamIcon{"Marist"} = "MARIST" ;
$teamIcon{"Marquette"} = "MARQET" ;
$teamIcon{"St. Mary's"} = "MARYCA" ;
$teamIcon{"UMass Lowell"} = "MASLOW" ;
$teamIcon{"McNeese State"} = "MCNSE" ;
$teamIcon{"Maryland"} = "MD" ;
$teamIcon{"Memphis"} = "MEMP" ;
$teamIcon{"Mercer"} = "MERCER" ;
$teamIcon{"Miami"} = "MIAMI" ;
$teamIcon{"Miami (Ohio)"} = "MIAOH" ;
$teamIcon{"Michigan"} = "MICH" ;
$teamIcon{"Michigan State"} = "MICHST" ;
$teamIcon{"Wisconsin-Milwaukee"} = "MILW" ;
$teamIcon{"Minnesota"} = "MINN" ;
$teamIcon{"Monmouth"} = "MNMTH" ;
$teamIcon{"Montana"} = "MNTNA" ;
$teamIcon{"Montana State"} = "MONST" ;
$teamIcon{"Morehead State"} = "MOREHD" ;
$teamIcon{"Morgan State"} = "MORGAN" ;
$teamIcon{"Missouri State"} = "MOST" ;
$teamIcon{"Mount St. Mary's"} = "MOUNT" ;
$teamIcon{"Marshall"} = "MRSHL" ;
$teamIcon{"Middle Tennessee"} = "MTSU" ;
$teamIcon{"Murray State"} = "MURYST" ;
$teamIcon{"Mississippi Valley State"} = "MVSU" ;
$teamIcon{"Northern Arizona"} = "NAU" ;
$teamIcon{"Navy"} = "NAVY" ;
$teamIcon{"NC-Asheville"} = "NCASHV" ;
$teamIcon{"North Carolina A&T"} = "NCAT" ;
$teamIcon{"North Carolina Central"} = "NCCU" ;
$teamIcon{"NC-Greensboro"} = "NCGRN" ;
$teamIcon{"Northern Colorado"} = "NCOLO" ;
$teamIcon{"NC State"} = "NCST" ;
$teamIcon{"NC-Wilmington"} = "NCWILM" ;
$teamIcon{"Notre Dame"} = "ND" ;
$teamIcon{"North Dakota"} = "NDAK" ;
$teamIcon{"North Dakota State"} = "NDAKST" ;
$teamIcon{"Northern Kentucky"} = "NKY";
$teamIcon{"Northeastern"} = "NEAST" ;
$teamIcon{"Nebraska"} = "NEB" ;
$teamIcon{"Nebraska Omaha"} = "NEBOM" ;
$teamIcon{"Nevada"} = "NEVADA" ;
$teamIcon{"New Hampshire"} = "NH" ;
$teamIcon{"Niagara"} = "NIAGARA" ;
$teamIcon{"Nicholls State"} = "NICHST" ;
$teamIcon{"Northern Iowa"} = "NIOWA" ;
$teamIcon{"New Jersey Tech"} = "NJTECH" ;
$teamIcon{"Northern Kentucky"} = "NKY" ;
$teamIcon{"New Mexico"} = "NMEX" ;
$teamIcon{"New Mexico State"} = "NMEXST" ;
$teamIcon{"Norfolk State"} = "NORFLK" ;
$teamIcon{"New Orleans"} = "NORL" ;
$teamIcon{"Villanova"} = "NOVA" ;
$teamIcon{"North Texas"} = "NTEXAS" ;
$teamIcon{"Northwestern"} = "NWEST" ;
$teamIcon{"Northwestern State"} = "NWST" ;
$teamIcon{"Oakland"} = "OAK" ;
$teamIcon{"Ohio"} = "OHIO" ;
$teamIcon{"Ohio State"} = "OHIOST" ;
$teamIcon{"Oklahoma"} = "OKLA" ;
$teamIcon{"Oklahoma State"} = "OKLAST" ;
$teamIcon{"Oral Roberts"} = "ORAL" ;
$teamIcon{"Oregon"} = "OREG" ;
$teamIcon{"Oregon State"} = "OREGST" ;
$teamIcon{"Austin Peay"} = "PEAY" ;
$teamIcon{"Pennsylvania"} = "PENN" ;
$teamIcon{"Pepperdine"} = "PEPPER" ;
$teamIcon{"Pittsburgh"} = "PITT" ;
$teamIcon{"Portland"} = "PORT" ;
$teamIcon{"Portland State"} = "PORTST" ;
$teamIcon{"Presbyterian"} = "PRESBY" ;
$teamIcon{"Princeton"} = "PRINCE" ;
$teamIcon{"Providence"} = "PROV" ;
$teamIcon{"Penn State"} = "PSU" ;
$teamIcon{"Purdue"} = "PURDUE" ;
$teamIcon{"Quinnipiac"} = "QUINN" ;
$teamIcon{"Rider"} = "RIDER" ;
$teamIcon{"Robert Morris"} = "ROBERT" ;
$teamIcon{"Rutgers"} = "RUT" ;
$teamIcon{"Sacred Heart"} = "SACHRT" ;
$teamIcon{"Sacramento State"} = "SACST" ;
$teamIcon{"South Alabama"} = "SALAB" ;
$teamIcon{"Samford"} = "SAMFORD" ;
$teamIcon{"Sam Houston State"} = "SAMHOU" ;
$teamIcon{"San Francisco"} = "SANFRAN" ;
$teamIcon{"Savannah State"} = "SAV" ;
$teamIcon{"South Carolina State"} = "SCST" ;
$teamIcon{"South Dakota"} = "SDAK" ;
$teamIcon{"South Dakota State"} = "SDAKST" ;
$teamIcon{"San Diego State"} = "SDGST" ;
$teamIcon{"Seattle"} = "SEATTLE" ;
$teamIcon{"Southeastern Louisiana"} = "SELOU" ;
$teamIcon{"Southeast Missouri State"} = "SEMO" ;
$teamIcon{"Seton Hall"} = "SETON" ;
$teamIcon{"Stephen F Austin"} = "SFA" ;
$teamIcon{"South Florida"} = "SFLA" ;
$teamIcon{"Siena"} = "SIENA" ;
$teamIcon{"Southern Illinois"} = "SILL" ;
$teamIcon{"SIU-Edwardsville"} = "SIUE" ;
$teamIcon{"San Jose State"} = "SJST" ;
$teamIcon{"SMU"} = "SMU" ;
$teamIcon{"Santa Clara"} = "SNCLRA" ;
$teamIcon{"St. Bonaventure"} = "STBON" ;
$teamIcon{"Stetson"} = "STETSON" ;
$teamIcon{"St. John's"} = "STJOHN" ;
$teamIcon{"Saint Louis"} = "STLOU" ;
$teamIcon{"Stanford"} = "STNFRD" ;
$teamIcon{"Stony Brook"} = "STNYBRK" ;
$teamIcon{"St. Peter's"} = "STPETE" ;
$teamIcon{"Southern Utah"} = "SUTAH" ;
$teamIcon{"TCU"} = "TCU" ;
$teamIcon{"Tennessee"} = "TENN" ;
$teamIcon{"Texas A&M"} = "TEXAM" ;
$teamIcon{"Texas"} = "TEXAS" ;
$teamIcon{"Texas-Rio Grande Valley"} = "TEXPA" ;
$teamIcon{"Texas State-San Marcos"} = "TEXST" ;
$teamIcon{"UT Martin"} = "TNMART" ;
$teamIcon{"Tennessee State"} = "TNST" ;
$teamIcon{"Tennessee Tech"} = "TNTECH" ;
$teamIcon{"Towson"} = "TOWSON" ;
$teamIcon{"Troy"} = "TROY" ;
$teamIcon{"Texas A&M-Corpus Christi"} = "TXAMCC" ;
$teamIcon{"Texas-Arlington"} = "TXARL" ;
$teamIcon{"Texas-San Antonio"} = "TXSA" ;
$teamIcon{"Texas Tech"} = "TXTECH" ;
$teamIcon{"UAB"} = "UAB" ;
$teamIcon{"UC Davis"} = "UCDAV" ;
$teamIcon{"UC Irvine"} = "UCIRV" ;
$teamIcon{"UCLA"} = "UCLA" ;
$teamIcon{"Connecticut"} = "UCONN" ;
$teamIcon{"California Riverside"} = "UCRIV" ;
$teamIcon{"Santa Barbara"} = "UCSB" ;
$teamIcon{"Georgia"} = "UGA" ;
$teamIcon{"Incarnate Word"} = "UIW" ;
$teamIcon{"Kentucky"} = "UK" ;
$teamIcon{"Maryland-Baltimore County"} = "UMBC" ;
$teamIcon{"Maryland-Eastern Shore"} = "UMES" ;
$teamIcon{"UMKC"} = "UMKC" ;
$teamIcon{"North Carolina"} = "UNC" ;
$teamIcon{"North Florida"} = "UNF" ;
$teamIcon{"UNLV"} = "UNLV" ;
$teamIcon{"Pacific"} = "UOP" ;
$teamIcon{"Southern Cal"} = "USC" ;
$teamIcon{"South Carolina Upstate"} = "USCUP" ;
$teamIcon{"San Diego"} = "USD" ;
$teamIcon{"Utah"} = "UTAH" ;
$teamIcon{"Utah State"} = "UTAHST" ;
$teamIcon{"Utah Valley"} = "UTVALL" ;
$teamIcon{"Virginia"} = "UVA" ;
$teamIcon{"Vermont"} = "UVM" ;
$teamIcon{"Valparaiso"} = "VALPO" ;
$teamIcon{"Vanderbilt"} = "VANDY" ;
$teamIcon{"Virginia Tech"} = "VATECH" ;
$teamIcon{"VCU"} = "VCU" ;
$teamIcon{"VMI"} = "VMI" ;
$teamIcon{"Wake Forest"} = "WAKE" ;
$teamIcon{"Washington"} = "WASH" ;
$teamIcon{"Washington State"} = "WASHST" ;
$teamIcon{"Western Carolina"} = "WCAR" ;
$teamIcon{"Weber State"} = "WEBER" ;
$teamIcon{"Wichita State"} = "WICHST" ;
$teamIcon{"Western Illinois"} = "WILL" ;
$teamIcon{"Winthrop"} = "WINTHR" ;
$teamIcon{"Wisconsin"} = "WISC" ;
$teamIcon{"Green Bay"} = "WISGB" ;
$teamIcon{"Western Kentucky"} = "WKY" ;
$teamIcon{"Western Michigan"} = "WMICH" ;
$teamIcon{"William & Mary"} = "WMMARY" ;
$teamIcon{"Wofford"} = "WOFF" ;
$teamIcon{"Wright State"} = "WRIGHT" ;
$teamIcon{"West Virginia"} = "WVU" ;
$teamIcon{"Wyoming"} = "WYO" ;
$teamIcon{"Xavier"} = "XAVIER" ;
$teamIcon{"Yale"} = "YALE" ;
$teamIcon{"Youngstown State"} = "YOUNG" ;
$teamIcon{"TBD"} = "FIU" ;
$teamIcon{"Play in - South"} = "FIU" ;
$teamIcon{"Belmont"} = "FIU" ;
$teamIcon{"Layfayette"} = "FIU" ;
$teamIcon{"East Washington"} = "FIU" ;
$teamIcon{"Hampton/Manhattan"} = "MANH" ;
$teamIcon{"Texas Southern"} = "FIU" ;
$teamIcon{"St Joes"} = "STJOHN" ;
$teamIcon{"Temple"} = "TEMPLE" ;




#get value for team rating. corresponds to how many ping pong balls they have for winning a game. 
# rating of 100 vs 1 means teamA beats teamB 99 times out of 100. 
# for 2 / 7 ratings of 95 and 55, then 2 beats 7 95 times out of 55+95=140


my %teamRating;

$teamRating{E1} = $q->param('E1');
$teamRating{E2} = $q->param('E2');
$teamRating{E3} = $q->param('E3');
$teamRating{E4} = $q->param('E4');
$teamRating{E5} = $q->param('E5');
$teamRating{E6} = $q->param('E6');
$teamRating{E7} = $q->param('E7');
$teamRating{E8} = $q->param('E8');
$teamRating{E9} = $q->param('E9');
$teamRating{E10} = $q->param('E10');
$teamRating{E11} = $q->param('E11');
$teamRating{E12} = $q->param('E12');
$teamRating{E13} = $q->param('E13');
$teamRating{E14} = $q->param('E14');
$teamRating{E15} = $q->param('E15');
$teamRating{E16} = $q->param('E16');

$teamRating{S1} = $q->param('S1');
$teamRating{S2} = $q->param('S2');
$teamRating{S3} = $q->param('S3');
$teamRating{S4} = $q->param('S4');
$teamRating{S5} = $q->param('S5');
$teamRating{S6} = $q->param('S6');
$teamRating{S7} = $q->param('S7');
$teamRating{S8} = $q->param('S8');
$teamRating{S9} = $q->param('S9');
$teamRating{S10} = $q->param('S10');
$teamRating{S11} = $q->param('S11');
$teamRating{S12} = $q->param('S12');
$teamRating{S13} = $q->param('S13');
$teamRating{S14} = $q->param('S14');
$teamRating{S15} = $q->param('S15');
$teamRating{S16} = $q->param('S16');

$teamRating{MW1} = $q->param('MW1');
$teamRating{MW2} = $q->param('MW2');
$teamRating{MW3} = $q->param('MW3');
$teamRating{MW4} = $q->param('MW4');
$teamRating{MW5} = $q->param('MW5');
$teamRating{MW6} = $q->param('MW6');
$teamRating{MW7} = $q->param('MW7');
$teamRating{MW8} = $q->param('MW8');
$teamRating{MW9} = $q->param('MW9');
$teamRating{MW10} = $q->param('MW10');
$teamRating{MW11} = $q->param('MW11');
$teamRating{MW12} = $q->param('MW12');
$teamRating{MW13} = $q->param('MW13');
$teamRating{MW14} = $q->param('MW14');
$teamRating{MW15} = $q->param('MW15');
$teamRating{MW16} = $q->param('MW16');

$teamRating{W1} = $q->param('W1');
$teamRating{W2} = $q->param('W2');
$teamRating{W3} = $q->param('W3');
$teamRating{W4} = $q->param('W4');
$teamRating{W5} = $q->param('W5');
$teamRating{W6} = $q->param('W6');
$teamRating{W7} = $q->param('W7');
$teamRating{W8} = $q->param('W8');
$teamRating{W9} = $q->param('W9');
$teamRating{W10} = $q->param('W10');
$teamRating{W11} = $q->param('W11');
$teamRating{W12} = $q->param('W12');
$teamRating{W13} = $q->param('W13');
$teamRating{W14} = $q->param('W14');
$teamRating{W15} = $q->param('W15');
$teamRating{W16} = $q->param('W16'); 












#my @round1 = qw (E1 E16 E8 E9 E5 E12 E4 E13 E6 E11 E3 E14 E7 E10 E2 E15 S1 S16 S8 S9 S5 S12 S4 S13 S6 S11 S3 S14 S7 S10 S2 S15 MW1 MW16 MW8 MW9 MW5 MW12 MW4 MW13 MW6 MW11 MW3 MW14 MW7 MW10 MW2 MW15 W1 W16 W8 W9 W5 W12 W4 W13 W6 W11 W3 W14 W7 W10 W2 W15);
my @round1 = qw (S1 S16 S8 S9 S5 S12 S4 S13 S6 S11 S3 S14 S7 S10 S2 S15 W1 W16 W8 W9 W5 W12 W4 W13 W6 W11 W3 W14 W7 W10 W2 W15 E1 E16 E8 E9 E5 E12 E4 E13 E6 E11 E3 E14 E7 E10 E2 E15 MW1 MW16 MW8 MW9 MW5 MW12 MW4 MW13 MW6 MW11 MW3 MW14 MW7 MW10 MW2 MW15 );
my @round2;  
my @round3;  #will contain the sweet 16 teams
my @round4;
my @round5;  #will contain the final 4
my @round6;
my @round7;  #will contain the NC
my $a = 0;
my $b = 0;
my $team1;
my $team2;
my $team1Rand;
my $team2Rand;
my $winners;
my @winners;
my @losers;
my $gameWinner;
my $gameLoser;
my @upsetInGame = qw (0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 );  #initialize. set a game to 1 if an upset occured.
my $gameNumber = 0;  
my @scores;


my $bestCorrect = 0;


#play the games and see who comes out the winners
sub playOneGame {
my (@ops) = @_;
$team1 = $ops[0];
$team2 = $ops[1];

$team1Rand = rand();
$team2Rand = rand();
$team1Rand = $team1Rand * $teamRating{$team1};
$team2Rand = $team2Rand * $teamRating{$team2};

if ($team1Rand > $team2Rand) {
     $gameWinner=$team1;
     $gameLoser=$team2;
} else {
     $gameWinner=$team2;
     $gameLoser=$team1;
}

my ($team1Seed) = $team1 =~ /(\d+)/;
my ($team2Seed) = $team2 =~ /(\d+)/;

#print "$team1 seed is $team1Seed<br>";
#print "$team2 seed is $team2Seed<br>";

if ( (($gameWinner eq $team1) && ($team1Seed > $team2Seed))  ||   (($gameWinner eq $team2) && ($team2Seed > $team1Seed))  )  {  #an upset happened
#print "an upset happened. $team1 and $team2 played and $gameWinner won<br>\n";  
$upsetInGame[$gameNumber] = 1;
} 

$gameNumber++;  #have to keep track of what game this is for upset purposes, since I am not pushing the game number to this subroutine


my $baseScore = (rand()*30)+50;
my $team1Score = int (($team1Rand/5)+$baseScore);
my $team2Score = int (($team2Rand/5)+$baseScore);
my $gameScore;

if ( ($team1Score eq $team2Score) && ($gameWinner eq $team1)  )  {  #give team1 a win by a point to make the int() different
$team1Score = $team1Score +1;
$gameScore = "$team1 beats $team2 ";
}

if ( ($team1Score eq $team2Score) && ($gameWinner eq $team2)  )  {  #give team1 a win by a point to make the int() different
$team2Score = $team2Score +1;
$gameScore = "$team2 beats $team1 ";
}

if ( $gameWinner eq $team1 )  {  #
$gameScore = "#$team1Seed $team{$team1} beats #$team2Seed $team{$team2} by a score of $team1Score - $team2Score";
}
if ( $gameWinner eq $team2  )  {  #
$gameScore = "#$team2Seed $team{$team2} beats #$team1Seed $team{$team1} by a score of $team2Score - $team1Score";
}





#$gameScore = "$gameScore"."by a score of $team1Score - $team2Score";

if ( (rand() < .05) &&  ( ($team1Score-$team2Score) <= 5 )          ) {
$gameScore = "$gameScore" . " (OT)";     
     }

#print "$gameScore <br>";


return ($gameWinner, $gameScore);
}





#play one simulated tournament

#round 1

for (my $i = 0; $i<63; $i +=2 ) {
$team1=$round1[$i];
$team2=$round1[$i+1];

#print "team1 is $team1\n";
#print "team2 is $team2\n";

my ($winner,$score) = playOneGame ($team1, $team2);

push (@winners, $winner);
push (@round2, $winner);
push (@scores, $score);
}


#print "The round 2 matchups are @round2\n";
#print "The winners are @winners\n";
#print "A bracket winners $winners[0] $winners[1] $winners[2] $winners[3] $winners[4] $winners[5] $winners[6] $winners[7] \n";




#2nd round
for (my $i = 0; $i<31; $i +=2 ) {
$team1=$round2[$i];
$team2=$round2[$i+1];

my ($winner,$score) = playOneGame ($team1, $team2);

push (@winners, $winner);
push (@round3, $winner);
push (@scores, $score);
}
#print "The round 3 matchups are @round3\n";

#3rd round
for (my $i = 0; $i<15; $i +=2 ) {
$team1=$round3[$i];
$team2=$round3[$i+1];

my ($winner,$score) = playOneGame ($team1, $team2);

push (@winners, $winner);
push (@round4, $winner);
push (@scores, $score);
}
#print "The round 4 matchups are @round4\n";

#4th round
for (my $i = 0; $i<7; $i +=2 ) {
$team1=$round4[$i];
$team2=$round4[$i+1];

my ($winner,$score) = playOneGame ($team1, $team2);

push (@winners, $winner);
push (@round5, $winner);
push (@scores, $score);
}
#print "The round 5 matchups are @round5\n";

#5th round
for (my $i = 0; $i<3; $i +=2 ) {
$team1=$round5[$i];
$team2=$round5[$i+1];

my ($winner,$score) = playOneGame ($team1, $team2);

push (@winners, $winner);
push (@round6, $winner);
push (@scores, $score);
}
#print "The round 6 matchups are @round6\n";

#6th round
for (my $i = 0; $i<1; $i +=2 ) {
$team1=$round6[$i];
$team2=$round6[$i+1];

my ($winner,$score) = playOneGame ($team1, $team2);

push (@winners, $winner);
push (@round7, $winner);
push (@scores, $score);
}
#print "The round 6 winner is @round7\n";


#print "The winners are @winners[0 .. 62]\n";
















###############################################33
#print header();
#print start_html(-title => "your tournament simulation",  -style=>{-src=>'/style.css'});

my $j;
sub printWinner {
my ($teamSeed) = $winners[$j] =~ /(\d+)/;
if ($upsetInGame[$j] == 1) {
print "<div id=\"upset\">";
} else {
print "<div id=\"notUpset\">";    
}
print "<img src=\"http://sports.cbsimg.net/images/collegebasketball/logos/50x50/$teamIcon{$team{@winners[$j]}}.png\" valign=\"middle\" width=\"13%\">      <span class=\"seed\">   $teamSeed   </span>        <a href=\"#\" data-toggle=\"tooltip\" title=\"$scores[$j]\">               $team{@winners[$j]} <\/a> ($teamRating{@winners[$j]})<br>";
print "</div>";
return;
}
     
sub printWinnerFinalFour {
my ($teamSeed) = $winners[$j] =~ /(\d+)/;
if ($upsetInGame[$j] == 1) {
print "<div id=\"upset\" class=\"\">";
} else {
print "<div id=\"notUpset\" class=\"\">";  
}
print "<img src=\"http://sports.cbsimg.net/images/collegebasketball/logos/50x50/$teamIcon{$team{@winners[$j]}}.png\" valign=\"middle\" width=\"35%\">      <span class=\"seedFinalFour\">   $teamSeed   </span>        <a href=\"#\" data-toggle=\"tooltip\" title=\"$scores[$j]\">           $team{@winners[$j]} <\/a>   ($teamRating{@winners[$j]})<br>";
print "</div>";
return;
}

sub printWinnerFinalTwo {
my ($teamSeed) = $winners[$j] =~ /(\d+)/;
if ($upsetInGame[$j] == 1) {
print "<div id=\"upset\" >";
} else {
print "<div id=\"notUpset\" >";  
}
print "<img src=\"http://sports.cbsimg.net/images/collegebasketball/logos/50x50/$teamIcon{$team{@winners[$j]}}.png\" valign=\"middle\" width=\"40%\">       <span class=\"seedFinalFour\">   $teamSeed   </span>           <a href=\"#\" data-toggle=\"tooltip\" title=\"$scores[$j]\">               $team{@winners[$j]} <\/a>  ($teamRating{@winners[$j]})<br>";
print "</div>";
return;
}










#print "The winners are @winners[0 .. 62]<br>";
print "<table class=\"buckets\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
print "<tr>";
print "<td>";
print "<table class=\"buckets\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
print "<tr><td><hr></hr></td></tr>";
print "<tr><td class=\"bucket3\">South Region</td></tr>";
print "<tr>";
print "<td class=\"bucket7\">";
for ($j = 0; $j<8; $j++ ) {
printWinner;
}
print "</td>";



print "<td class=\"bucket7\">";
for ($j = 32; $j<34; $j++ ) {
printWinner;
}
print "<div id=\"empty\"><br><br><br></div>";
for ($j = 34; $j<36; $j++ ) {
printWinner;
}
print "</td>";



print "<td class=\"bucket7\">";
for ($j = 48; $j<50; $j++ ) {
printWinner;
}
print "</td>";
print "</tr>";


print "<tr><td><hr></hr></td></tr>";
print "<tr><td class=\"bucket3\">West Region</td></tr>";
print "<tr>";
print "<td class=\"bucket7\">";
for ($j = 8; $j<16; $j++ ) {
printWinner;
}
print "</td>";
print "<td class=\"bucket7\">";
for ($j = 36; $j<38; $j++ ) {
printWinner;
}
print "<br><br>";
for ($j = 38; $j<40; $j++ ) {
printWinner;
}
print "</td>";
print "<td class=\"bucket7\">";
for ($j = 50; $j<52; $j++ ) {
printWinner;
}
print "</td>";
print "</tr>";




print "<tr><td><hr></hr></td></tr>";
print "<tr><td class=\"bucket3\">East Region</td></tr>";
print "<tr>";
print "<td class=\"bucket7\">";
for ($j = 16; $j<24; $j++ ) {
printWinner;
}
print "</td>";
print "<td class=\"bucket7\">";
for ($j = 40; $j<42; $j++ ) {
printWinner;
}
print "<br><br>";
for ($j = 42; $j<44; $j++ ) {
printWinner;
}

print "</td>";
print "<td class=\"bucket7\">";
for ($j = 52; $j<54; $j++ ) {
printWinner;
}
print "</td>";
print "</tr>";

print "<tr><td><hr></hr></td></tr>";
print "<tr><td class=\"bucket3\">Midwest Region</td></tr>";
print "<tr>";
print "<td class=\"bucket7\">";
for ($j = 24; $j<32; $j++ ) {
printWinner;
}
print "</td>";
print "<td class=\"bucket7\">";
for ($j = 44; $j<46; $j++ ) {
printWinner;
}
print "<br><br>";
for ($j = 46; $j<48; $j++ ) {
printWinner;
}


print "</td>";
print "<td class=\"bucket7\">";
for ($j = 54; $j<56; $j++ ) {
printWinner;
}
print "</td>";
print "</tr>";

print "</td>";
print "</tr>";
print "</table>";


print "<td>";

print "<table class=\"buckets\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";

print "<meta property=\"og:description\" content=\"Fill your NCAA March Madness bracket the better and easy way! @scores[62] \" />";  #I dont think a meta tag in the body works, but i want them to post their results, not something generic

print "<tr><td align=\"center\" class=\"delayPost4\"> <img src=\"/step4.jpg\"  width=\"40%\" > <br><br> <div class=\"fb-share-button\" data-href=\"http://marchmadness.playoffpredictor.com\" data-layout=\"button_count\"></div><br><br>";

print " <a href=\"https://twitter.com/intent/tweet?button_hashtag=MarchMadness&text=I\'ve got my bracket filled - @scores[62] \" class=\"twitter-hashtag-button\" data-size=\"large\" data-url=\"http://marchmadness.playoffpredictor.com\">Tweet #MarchMadness</a>"; 
print "<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>   ";



#print "<br><br> Create a spark room with this final four<br>   ";













print "<br><br><br></td> </tr>  ";

print "<tr><td class=\"bucket3\"></td></tr>";

print "<tr><td><hr></hr></td></tr>";
print "<tr><td>Final Four</td></tr>";



print "<tr>";
print "<td>";

print "<table class=\"bigBlock\" border=\"0\"><tr><td>";   #put it in one big cell not to mess the parent table
print "<td class=\"bucket5\">";
for ($j = 56; $j<60; $j++ ) {
printWinnerFinalFour;
}
print "</td>";

print "<td class=\"bucket5\">";
for ($j = 60; $j<62; $j++ ) {
printWinnerFinalTwo;
}
print "</td>";

print "<td class=\"bucket5\">";
my ($teamSeed) = $winners[62] =~ /(\d+)/;
if ($upsetInGame[62] == 1) {
print "<div class=\"upsetNationalFinal\">";
} else {
print "<div class=\"notUpsetNationalFinal\" >";    
}
print "<img src=\"http://sports.cbsimg.net/images/collegebasketball/logos/50x50/$teamIcon{$team{@winners[62]}}.png\" valign=\"middle\" width=\"50%\">  <span class=\"seedFinalFour\">   $teamSeed   </span>     <a href=\"#\" data-toggle=\"tooltip\" title=\"$scores[62]\">     $team{@winners[62]}  </a> ($teamRating{@winners[$j]})<br>";
print "</div>";
  
print "</td>";
print "</td></tr></table>";  #end the 1 big table
print "</td>";


print "</tr>";

print "<tr><td align=\"center\">  <div class=\"delayPost4\"> <br><br><br><b>Tournament champion is:<img src=\"http://sports.cbsimg.net/images/collegebasketball/logos/50x50/$teamIcon{$team{@winners[62]}}.png\">     $team{@winners[62]}</b><br> with a championship game result of:<br> $scores[62] <br><br><br><br><br><br> </div></td> </tr>  ";



print "</table>";


print "</td>";
print "</tr>";
print "</table>";








my $numberOfUpsets = eval join '+', @upsetInGame;




my ($seedFF1) = $winners[56] =~ /(\d+)/;
my ($seedFF2) = $winners[57] =~ /(\d+)/;
my ($seedFF3) = $winners[58] =~ /(\d+)/;
my ($seedFF4) = $winners[59] =~ /(\d+)/;

my $averageFinalFourSeed = (($seedFF1 + $seedFF2 + $seedFF3 + $seedFF4)/4);

my ($seedChampion) = $winners[62] =~ /(\d+)/;


my $bracketMetric = ($numberOfUpsets/5) + $averageFinalFourSeed + $seedChampion;


my $comment1;
my $comment2;


if ($bracketMetric <= 6) {
$comment1 = "an awesome chance to predict the tournament outcome based on historical results!";
$comment2 = "you rule! Bet the farm on this bracket";
}
elsif ($bracketMetric <= 9) {
$comment1 = "a reasonable chance to predict the tournament outcome based on historical results.";
$comment2 = "beware March Madness";     
}   
else {
$comment1 = "no chance to predict the tournament outcome based on historical results.";
$comment2 = "Good luck with these selections. You're going to need it.";     
} 

     
print "<center><br> Overall, you are predicting <b>$numberOfUpsets total upsets</b><br>";
print "The average seed of the final 4 teams equal to <b> $averageFinalFourSeed </b><br>";
print "And the tournament winner as <b>a #$seedChampion seed</b><br><br><br>";




print "Based on the above numbers, your bracket has <b> $comment1 </b><br><br>$comment2<br><br></center>";
#print "$bracketMetric <br>";








print "</body>";
print "</html>";



