<!--Adam "Welshy" Drake 2014-->

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

#rating{
 width:620px;   
}

</style>

<table>
<td>
</br>
</td>
	<td>
	<div class="span8 offset2">

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
		  <div align="left" class="tab-pane active" id="home">
		  
			  <form>
				<select class="form-control" id="rating" align="center">
				<option>Legendary</option>
				<option>Epic</option>
				<option>Awesome</option>
				<option>Fail</option>
				<option>Lame</option>
				</select>
			  <br />
				<button type="file" class="btn btn-success btn-lg btn-block">Upload that photo</button><hr>
				<button type="submit" class="btn btn-default btn-lg btn-block">Rate that night</button>
			  </form>
		  
		  </div>
		  <div class="tab-pane" id="recent">
		  
			<table class="table table-striped">
			
			 <tr>
                <th></th>
                <th>Date</th>
                <th>Rating</th>
                <th>Location</th>
            </tr>
			
        </thead>
        <tbody>
			                 <tr>
                <td></td>
				<td>05/11/2014</td>
				<td>Awesome</td>
				<td><a href ="http://www.dennys.com/" target="_blank">Dennys</td>
           
            </tr>
                                    <tr>
    
                <td></td>
				<td>05/08/2014</td>
				<td>Lame</td>
				<td><a href ="http://www.rbc.com/" target="_blank">RBC</td>
               
            </tr>
			
			</tr>
                                    <tr>
    
                <td></td>
				<td>05/02/2014</td>
				<td>Epic</td>
				<td><a href ="http://www.starbucks.com/" target="_blank">Starbucks</td>
               
            </tr>
			
			</table>
		  
		  </div>
		  <div class="tab-pane" id="settings">App settings go here</div>
		</div>

		<script>
		  jQuery(function () {
			jQuery('#myTab a').on('click', function() {
				$(this).tab('show');
			});
		})	
				
		</script>
</div>
	</td>
	</td>
</head>
<body>

</body>
</html>