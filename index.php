/*
* This is a website created by shamus osler
* last update: 2019-03-15
*/


<?php 
	//counting the amount of files in the dir
	$city = new FilesystemIterator("assets/imgs/city", FilesystemIterator::SKIP_DOTS);
	$city = iterator_count($city);
	
	$nature = new FilesystemIterator("assets/imgs/nature", FilesystemIterator::SKIP_DOTS);
	$nature = iterator_count($nature);
	
	//$misc = new FilesystemIterator("assets/imgs/misc", FilesystemIterator::SKIP_DOTS);
	//$misc = iterator_count($misc);
?>
<!DOCTYPE html>
<html lang="en">
<?php require "head.php" ?>
<body>
	<?php require "header.php" ?>
	<div class="index-paragraph-content">
		<p>
			Please note that all of the pictures displayed on this website
			are taken by Shamus Osler.
		</p>
		<p>
			You can look at the code and projects on this site thought my <a href="https://github.com/Shamoosey/shamoosey.github.io">Github</a>.
			Please note that the projects are not mobile compatible. 
		</p>
	</div>
		<div class="heading">
			<div id="nature">
				<h2>Nature</h2>
			</div>
		</div>
		<div class="image-container">
			<?php for($i = 1; $i < $nature; $i++) : ?>
				<div class="image-row">
					<img src="assets/imgs/nature/<?=$i?>.JPG" alt="nature photos">
				</div>
			<?php endfor ?>
		</div>
		<div class="heading">
			<div id="urban">
				<h2>Urban</h2>
			</div>
		</div>
		<div class="image-container">
			<?php for($i = 1; $i < $city; $i++) : ?>
				<div class="image-row">
					<img src="assets/imgs/city/<?=$i?>.JPG" alt="city/urban photos">
				</div>
			<?php endfor ?>
		</div>
	<?php require "footer.php" ?>
</body>
</html>
