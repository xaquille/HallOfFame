
<html dir="ltr" lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <title>Report a security vulnerability</title>

  <meta name="description" content="At HallOfFame, we take security issues seriously. If you believe you’ve detected a vulnerability within our products we’d like to hear about it.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- Entypo pictograms by Daniel Bruce — www.entypo.com -->
  <link rel="stylesheet" media="all" href="sec-application.css" id="stylesheet">
  <link rel="stylesheet" type="text/css" href="sec-style.css">
  <link rel="shortcut icon" type="image/x-icon" href="HallOfFame-logo.svg">
 
  
  <!-- add code here that should appear in the document head -->

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>  
<meta name="viewport" content="user-scalable=0, initial-scale=1.0">
  
</head>
<body class="">
  
  <header class="lang-selector" id="lang-selector">
</header>
<div class="expander">  
  <div class="wrapper-main">
    <header class="header">

      <div class="brand">
        <a href="http://www.HallOfFame.com/"><img class="logo" alt="HallOfFame" src="HallOfFame-logo.svg"></a>
      </div>

      <div class="header-title">
      </div>

    </header>
  </div>
</div>


<div class="alert off">
  Site under construction.
</div>

  <main role="main">
    

<article>
   <header class="knowledge-page-header">
    <h1><center><b>Thanks to Keeping HallOfFame stay Secure</center></b></h1>
  </header>
  
  <div class="clearfix"></div>
  <div class="article-column">
    <div class="article-body markdown">
      <div class="article-body markdown">
 <div class="ndas1">
 <?php 
 $db = mysqli_connect('localhost', 'root', 'toor', 'halloffame');

//function load data
function selectYear($db){
	$output = mysql_real_escape_string('');  
	$sql = htmlspecialchars("SELECT year(date) FROM hunter group by date");  
  $result = mysqli_query ($db, $sql);  
  /* $result=htmlspecialchars($result); */
	while($row = mysqli_fetch_array($result))  
	{  
				 $output .= '<option selected=\"selected\" value='.$row["year(date)"].'>'.$row["year(date)"].'</option>'; 
	}  
	return $output;  
}

function showhunter($db){
    $output = '';  
    $date=htmlspecialchars($_POST['date'],ENT_QUOTES);
	  $sql = "SELECT * FROM hunter where year(date) = '$date'";  
    $result = mysqli_query($db, $sql);  
    if(isset($_POST['date'])){
	    while($row = mysqli_fetch_array($result))  
	    {  
            $output .= '<tr><td><a href='.$row["link"].'\"/>'.$row["name"].'</a></td></tr>';
        }  
    } else{
        $sql="select * from hunter";
        $result = mysqli_query($db, $sql);  
        while($row = mysqli_fetch_array($result))  
        {
        $output .='<tr><td><a href='.$row["link"].'/>'.$row["name"].'</a></td></tr>';
        }
    }
	return $output;
}

//query

	  $hunter = "SELECT * FROM hunter";
    $hunterSelect=mysqli_query($db, $hunter);
    $tahun = "SELECT YEAR(date) From hunter group by date";
    $asu=mysqli_query($db, $tahun);
		if (mysqli_num_rows($hunterSelect) >0) {
		//output data row
			echo "<table class=\" asu\">";
			echo "<tr>";
            echo "<th>";
            echo "<form action='' method=\"POST\"><center><select id=\"date\" name=\"date\">";
            
            echo selectYear($db);
            echo "</select><input type=\"submit\" value=\"Submit\">
        </center></form>";
        
            echo "</th>";
		    echo "</tr>";
            echo showhunter($db);
			echo "</table>";
		}else {
			echo "0 result";
		}
			mysqli_close($db);
?> 
            </div>
</div>
    </div>  
  </div>
</div>
  <div class="clearfix"></div>  
  

</article>
</main>
<br>
<br>
<br>
<br>
<footer><center><img src="HallOfFame-logo-grey.png" width="200" height="50"/><br>
<font color="grey" size="2"><a href="mailto:bugbounty@HallOfFame.com">bugbounty@HallOfFame.com</a></font></center></footer>
    