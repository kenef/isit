<?PHP
	
	if ($_POST["submit"]){
		
		if (!$_POST["name"]){
			
			$error.="<br/>Please enter your name.";
		}
		
		if (!$_POST["email"]){
			
			$error.="<br/>Please enter your Email address.";
		}
		
		if (!$_POST["comment"]){
			
			$error.="<br/>Please enter a comment.";
		}
		
		if ($error){
			
			$result="There were errors in your form.".$error;	
		} else {
			
			if (mail("jmsword@gmail.com", "Comment from website", "Name: ".$_POST['name']."
			
			Email: ".$_POST['email']."
			
			Comment: ".$_POST['comment'])) {
				
				$result="form submitted";
				
			} else {
				
				$result="there was an error";
				
			}
			
		}	

		
		
	}	
	
	
?>


<html>
<head>
    <title>My First Webpage</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
</head>

<body>



	<form method="post">
	
		<h1>My email form</h1>
		
		<?PHP echo $result; ?> <br/>
	
		<label for="name">Your Name:</label>
		<input type="text" name="name" placeholder="Your Name"/> <br/>
		
		<label for="email">Your Email:</label>
		<input type="email" name="email" placeholder="Your Email"/> <br/>
		
		<label for="comment">Your Comment:</label>
		<textarea name="comment"></textarea> <br/>
		
		<input type="submit" value="Submit" name="submit"/>
	
	</form>






</body>
</html>