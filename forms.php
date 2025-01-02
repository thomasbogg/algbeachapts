<?php if (!empty($_POST['name'])) : ?>

<p>Hello, <?php echo $_POST['name'];?>!</p>

<?php else: ?>

<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='post'>
    
    Name: <input type='text' name='name'><br/>
    
    <input type='submit' value='Submit' class='btn btn-secondary'>
    
</form>

<?php endif;?>
