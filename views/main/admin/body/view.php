<?php
	global $cimsApp;
	$pageTitle = $cimsApp->getVar("adminPageTitle");
	$pageBody = $cimsApp->getVar("adminPageBody");
?>
				<div class="body">
					<h2><?=$pageTitle?></h2>
					<?=$pageBody?>
				</div>
				<div class="footer">
					<p>2012 &copy; Carrymove IMS 1.0. Разработано в&nbsp;Carrymove Internet Solutions (Россия, Омск).</p>
				</div>
			</div>
		</center>
	</body>
</html>