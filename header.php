<?php $text = file_get_contents('https://pastebin.com/raw/zAu3hNKt'); ?>
<header>
	<div class= "container">
		<div class="row">
			<div class="col">
				<h5 style="margin-top:8px;">
					<?php 
						echo $text; 
					?>
				</h5>
			</div>
			
			<div class="col">
				<nav>
				
					<ul class="nav justify-content-end">
						<li class="nav-item"><a class="nav-link" href="#">Personal</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Business</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Fraud</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Fast Support</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
						<?php echo 	$_SESSION['extra']; ?>
					</ul>
				
				</nav>
			</div>
	</div>
</header>