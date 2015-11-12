<?php include('includes/header.php');  ?>
    
    <!-- Begin Text -->
    <article id="text">
	<h2>Contact Me</h2> 
    
    <?php


		if ( isset ($_POST['submit']) ) { // if the submit button is clicked...
		
		$mailMessage = ("{$_POST['name']} {$_POST['email']} wrote: \n\n{$_POST['message']}"); // message of the email
		
		$mailSubject = "{$_POST['subject']}"; // subject of the email
		
		$mailRecipient = "sinkum@uw.edu"; // destination email address
		
		$mailSender = "From: {$_POST['email']}"; // the mail sender
		
		mail ($mailRecipient, $mailSubject , $mailMessage, $mailSender); // function to send the email
		
		print ("<p>Thank you for contacting me, <strong>{$_POST['name']}</strong>!</p>\n"); // notice that thanks the user
		
		}
		
		else {
			
			echo '<p>Only send me something if it is important, punk-ass!</p>';
			
		}

	?>
    
    <form action="contact.php" method="post" name="contact">
    <label for="name">Name:</label>
    <input name="name" type="text" required="required" >
    <label for="email">Email:</label>
    <input name="email" type="email" required >
    <label for="subject">Subject:</label>
    <select name="subject">
    <option value="Generic Inquiry" selected="selected">Generic Inquiry</option>
    <option value="Specific Inquiry">Specific Inquiry</option>
    <option value="Stoopid Inquiry">Stoopid Inquiry</option>
    </select>
    <label for="message">Message:</label>
    <textarea name="message" cols="40" rows="5" required ></textarea>
    <input name="swear" type="checkbox" value="swear" required >
    <span>I swear I am human.</span>
    <button type="submit" name="submit" value="Submit Message, Jerk.">Submit Message, Jerky!</button>
    </form>
    
    </article>
    <!-- End Text -->
    
    <!-- Begin Sidebar -->
    <aside id="sidebar">
    <h2 id="sub-navigation-title">Contact</h2>
    <ul id="sub-navigation">
    <li><a href="#">Item One</a></li>
    <li><a href="#">Item Two</a></li>
    <li><a href="#">Item Three</a></li>
    </ul>
    </aside>
    <!-- End Sidebar -->
    
<?php include('includes/footer.php'); ?>