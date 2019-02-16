<?php 
	include "header.php";
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
<body>
	<div class="idex-paragraph-content">
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
		<div id="nature"><a name="nature"></a></div>
				<h2>Nature</h2>
		</div>
		<div class="image-container">
			<?php for($i = 1; $i < $nature; $i++) : ?>
				<div class="image-row">
					<img src="assets/imgs/nature/nature (<?=$i?>).JPG" alt="nature photos">
				</div>
			<?php endfor ?>
		</div>
		<div class="heading">
			<div id="urban"><a name="urban"></a></div>	
			<h2>Urban</h2>
		</div>
		<div class="image-container">
			<?php for($i = 1; $i < $city; $i++) : ?>
				<div class="image-row">
					<img src="assets/imgs/city/urban (<?=$i?>).JPG" alt="city/urban photos">
				</div>
			<?php endfor ?>
		</div>
	<?php include "footer.php"; ?>
</body>
</html>
