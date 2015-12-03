<?PHP
	
	if ($_POST["submit"]){
		
		if (!$_POST["name"]){
			$error.='<br/><span style="color:#A91919;">Please enter your name.</span>';
		}
		
		if (!$_POST["email"]){
			$error.='<br/><span style="color:#A91919;">Please enter a valid Email address.</span>';
		}
		
		if (!$_POST["comment"]){
			$error.='<br/><span style="color:#A91919;">Please enter a comment.</span>';
		}
		
		if ($error){
			$result='<span style="color:#A91919;">Please correct the following:</span>'.$error;	
		} else {
			
			if (mail("kvosti@sandiego.edu", "Comment from website", "Name: ".$_POST['name']."
			
			Email: ".$_POST['email']."
			
			Comment: ".$_POST['comment'])) {
				
				$result='<span style="color:#19A950;">Thank you! We will contact you shortly.</span>';
				
			} else {
				$result="Error";
			}
		}	
	}	
	
?>

<html class="no-js" lang="en">
  <head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="keywords" content="isit, isit movement, isit contact, meditation, student mindfulness, student meditation, mindfulness, compassion"/>
	<meta name="description" content="The iSIT Movement raises awareness about the benefits of mindfulness and meditation practice for college students."/>
	<meta name="author" content="Jeff Sword 2015"/>
    <title>iSIT | Contact</title>
	
    <link rel="stylesheet" href="../css/foundation.css" />
	<link rel="stylesheet" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lucida+Sans|Indie+Flower"/>
	<link rel="normalize" href="../css/normalize.css" />
	
    <script type="text/javascript" src="../js/vendor/modernizr.js"></script>

  </head>
  <body>
  
		<div class="topbar">
		
			<div class="coverphoto">
					
					<h1><a href="../index.html"><span style="font-size:1.5em;">iSIT</span></a><br/>The Mindfulness & Meditation Student Movement</h1>
		
			</div>
		
		</div>
	
	<div class="page-description">
	
		<div class="row">
		
			<div class="large-12 columns">
		
				<h3>Contact</h3>
			
			</div>
		
		</div>
		
		<div class="row">
	
			<div class="large-6 columns">
		
				<p>Want to join the movement? Share your work? Please let us know! We would love to hear from you.</p>
		
			</div>
	
			<form method="post">
	
				<div class="large-6 columns">
		
					<?PHP echo $result; ?>
		
					<label>Name:<input type="text" name="name" placeholder="Name" value="<?PHP if ($error) { echo $_POST['name'];} else { echo ""; } ?>"/></label>
		
					<label>Email:<input type="email" name="email" placeholder="Email" value="<?PHP if ($error) { echo $_POST['email'];} else { echo ""; } ?>"/></label>
		
					<label>Question/Comment:<textarea name="comment" placeholder="Your comment here..."><?PHP if ($error) { echo $_POST['comment'];} else { echo ""; } ?></textarea></label>
					
					<input type="submit" value="Submit" name="submit" class="button"/> <br/>
		
				</div>
		
			</form>
	
		</div>
		
	</div>
	
	<div class="footer">
		
		<ul>
			<li><a href="../index.html">Home</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="profiles.html">Connect</a></li>
			<li><a href="resources.html">Inspiration for Transformation</a></li>
			<li><a href="testimonies.html">Testimonials</a></li>
			<li><a href="leadership.html">Leadership</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
		
	<br />
	
	<p>&copy; 2015 iSIT The Mindfulness & Meditation Student Movement. All rights reserved.</p>
	
	</div>
	
	<script type="text/javascript" src="../js/vendor/jquery.js"></script>
    <script type="text/javascript" src="../js/vendor/fastclick.js"></script>
	<script type="text/javascript" src="../js/foundation.min.js"></script>
	
    <script>
      $(document).foundation();
    </script>
	
  </body>

</html>