<?php include('includes/header.php'); ?>

    <!-- Begin Text -->
    <article id="text">
    <h2>Contact Me</h2>  
    
    <!-- Begin Contact Form -->
    <form action="contact.php" method="post" name="contact">
    <label for="name">Name:</label>
    <input name="name" type="text">
    <label for="email">Email:</label>
    <input name="email" type="email">
    <label for="subject">Subject:</label>
    <select name="subject">
      <option value="General Inquiry" selected="selected">General Inquiry</option>
      <option value="Specific Inquiry">Specific Inquiry</option>
      <option value="Stoopid Inquiry">Stoopid Inquiry</option>
    </select>
    </form>
    <!-- End Contact Form -->
    
    </article>
    <!-- End Text -->
    
    <!-- Begin Sidebar -->
    <aside id="sidebar">
    <h2>Contact</h2>
    <ul>
    <li><a href="#">Lorem ipsum dolor</a></li>
    <li><a href="#">Aliquam tincidunt</a></li>
    <li><a href="#">Vestibulum auctor</a></li>
    </ul>
    <aside>
    <!-- End Sidebar -->
    
<?php include('includes/footer.php'); ?>