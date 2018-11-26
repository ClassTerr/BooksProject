<header>
	<span class="title">Books Project: free online books for you</span>
	<div class="navbar-right">
		<?php
            if(!isset($_SESSION)) 
            { 
                session_start(); 
            } 
            if ($_SESSION['email']) {
                echo '<span style="font-size: 1.3em; margin: 15px;">Hi, ' . $_SESSION['email'] . '!</span>';
            }
        ?>
		<a href="logout.php">
			<button class="btn btn-danger logout">Logout</button>
		</a>
	</div>
</header>