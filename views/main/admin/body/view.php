<?php
	global $cimsApp;
	$pageTitle = $cimsApp->getVar("adminPageTitle");
	$pageBody = $cimsApp->getVar("adminPageBody");
?>
				<div class="body">
					<h2><?=$pageTitle?></h2>
					<?include $pageBody?>
				</div>
			</div>
			<div class="footer">
				<p>2012 &copy; Carrymove IMS 1.0. Разработано в&nbsp;<a href="http://carrymove.com/ru/">Carrymove Internet Solutions</a></p>
			</div>
		</center>
	</body>
</html>