
<html dir="ltr" lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  

  <title>Report a security vulnerability</title>

  <meta name="description" content="At HallOfFame, we take security issues seriously. If you believe you’ve detected a vulnerability within our products we’d like to hear about it.">

  <!-- Entypo pictograms by Daniel Bruce — www.entypo.com -->
  <link rel="stylesheet" media="all" href="sec-application.css" id="stylesheet">
  <link rel="stylesheet" type="text/css" href="sec-style.css">
  <link rel="shortcut icon" type="image/x-icon" href="HallOfFame-logo.svg">

  

  <!-- add code here that should appear in the document head -->

  
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



  <main role="main">

<article>
   <header class="knowledge-page-header">
    <h1><center><b>ADD Data Hunter</b></center></h1>
  </header>
  
  <div class="clearfix"></div>
  <div class="article-column">
    <div class="article-body markdown">
      <div class="article-body markdown">     
 <div class="ndas">
 <?php 
 $db = mysqli_connect('localhost', 'root', 'toor', 'halloffame');

      $id_hunter=$_REQUEST['id'];
      $nama= $_REQUEST['nama'];
      $title= $_REQUEST['title'];
      $risk= $_REQUEST['risk'];
      $tanggal=$_REQUEST['date'];
      $cerno= $_REQUEST['cerno'];
      $link= $_REQUEST['link'];

//form validation
if(empty($id_hunter)){
  array_push($error, "id hunter required");
}
if(empty($nama)){
  array_push($error, "nama required");
}
if(empty($title)){
  array_push($error, "title required");
}
if(empty($risk)){
  array_push($error, "risk required");
}
if(empty($tanggal)){
  array_push($error, "tanggal required");
}
if(empty($cerno)){
  array_push($error, "certificate number required");
}
if(empty($link)){
  array_push($error, "link required");
}else{

$masukin = "INSERT INTO hunter (id_hunter,name,title,risk,date,nocert,link) values('$id_hunter','$nama','$title','$risk','$tanggal','$cerno','$link')";
if (mysqli_query($db,$masukin)){
          echo "berhasil update.";
       }else{
          echo "error $masukin".mysqli_error($db);
       }mysqli_close($db);
      }
?>
<form action="" method="post">
<table class="jancok">
<?php echo $masukin; ?>
<tr>
    <td><input type="hidden" name="id" placeholder="Name" value="null"/></td>
  </tr>
  <tr>
    <td><h2><b>Hunter Name</b></h2></td>
    <td><input type="text" name="nama" placeholder="Name"/></td>
  </tr>
  <tr>
    <td><h2><b>Title</b></h2></td>
    <td><input type="text" name="title" placeholder="Title"/></td>
  </tr>
  <tr>
    <td><h2><b>Risk</b></h2></td>
    <td><select name="risk">
      <option value="Low">Low</option>
      <option value="Medium">Medium</option>
      <option value="High">High</option>
      <option value="Critical">Critical</option>
      </select>
    </td>
  </tr>
  <tr>
    <td><h2><b>Cert No</b></h2></td>
    <td><input type="text" name="cerno" placeholder="Certificate Number"/></td>
  </tr>
  <tr>
    <td><h2><b>Link</b></h2></td>
    <td><input type="text" name="link" placeholder="Social Media Link"/></td>
  </tr>
  <tr>
    <td><h2><b>Date</b></h2></td>
    <td><input type="date" name="date" placeholder="Date"/></td>
  </tr>
</table>

<center><button type="submit" value="submit">Submit</button>
<form>
            </div>

    </div>  
  </div>
</div>
  <div class="clearfix"></div>  
  

</article>
</main>
