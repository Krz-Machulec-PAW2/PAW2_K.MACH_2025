<?php
/* Smarty version 5.4.3, created on 2025-03-20 22:08:17
  from 'file:C:\xampp\htdocs\Zadanie_3_2\app\../templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67dc83c13a7497_95703076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51485515d509998b3ae32ad0d316327720409f98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_3_2\\app\\../templates/main.html',
      1 => 1742504893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67dc83c13a7497_95703076 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_3_2\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_40275339367dc83c13a24a0_82164962', 'title');
?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<h2>Zadanie 3 by K. Machulec</h2>
								</header>

							<!-- Content -->
							<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_41132772867dc83c13a6d44_45700667', 'content');
?>

								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="/Zadanie_3_2/app/calc_norm.php">Kalkulator zwykły</a></li>
										<li><a href="/Zadanie_3_2/app/calc.php">Kalkulator kredytowy</a></li>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'title'} */
class Block_40275339367dc83c13a24a0_82164962 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_3_2\\templates';
?>
Strona początkowa<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_41132772867dc83c13a6d44_45700667 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_3_2\\templates';
?>
<section>
									<header class="main">
										<h1>Strona początkowa:</h1>
									</header>

									<!-- Content -->
										<h2 id="content">Sample Content</h2>
										<p>Praesent ac adipiscing ullamcorper semper ut amet ac risus. Lorem sapien ut odio odio nunc. Ac adipiscing nibh porttitor erat risus justo adipiscing adipiscing amet placerat accumsan. Vis. Faucibus odio magna tempus adipiscing a non. In mi primis arcu ut non accumsan vivamus ac blandit adipiscing adipiscing arcu metus praesent turpis eu ac lacinia nunc ac commodo gravida adipiscing eget accumsan ac nunc adipiscing adipiscing lorem ipsum dolor sit amet nullam veroeros adipiscing.</p>
										 <div class="row">
										</div>

									<hr class="major" />

										<div class="row gtr-200">
											<div class="col-6 col-12-medium">

													<div class="row">
														<div class="col-6 col-12-small">
															
											            </div>
											            
                                                        <div class="col-6 col-12-medium">

													    </div>
													</div>
													</form>

													<div class="box alt">
														<div class="row gtr-50 gtr-uniform">
											
														</div>
													</div>

											</div>
										</div>
										<?php
}
}
/* {/block 'content'} */
}
