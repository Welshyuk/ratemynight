<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"
      xmlns:fb="https://www.facebook.com/2008/fbml"> 
<head>
  <title>Rate My Night</title>
  <!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/site.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
 <script src="js/bootstrap-tabs.js"></script>

<style>
a {color:#04B486;}

</style>

<div class="page-header">
   <h2>Rate My Night
      <small>Been out tonight?</small>
   </h2>
</div>

<ul class="nav nav-tabs nav-justified" id="myTab">
   <li class="active"><a href="home" data-target="#home" data-toggle="tab">Home</a></li>
   <li><a href="recent" data-target="#recent" data-toggle="tab">My Rates</a></li>
   <li><a href="settings" data-target="#settings" data-toggle="tab">Settings</a></li>
</ul>




<div class="tab-content">
  <div class="tab-pane active" id="home">..1.</div>
  <div class="tab-pane" id="recent">.2..</div>
  <div class="tab-pane" id="settings">.3..</div>
</div>

<script>
  jQuery(function () {
    jQuery('#myTab a').on('click', function() {
        $(this).tab('show');
    });
})
		
		
</script>
</head>
<body>

</body>
</html>