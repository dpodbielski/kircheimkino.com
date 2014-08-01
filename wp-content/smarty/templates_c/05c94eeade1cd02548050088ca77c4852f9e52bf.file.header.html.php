<?php /* Smarty version Smarty-3.1.18, created on 2014-07-08 18:28:40
         compiled from "C:\xampp\htdocs\kircheimkino.com\wp-content\themes\copernicus-start\templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:578253bc3858efa209-18066165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05c94eeade1cd02548050088ca77c4852f9e52bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\themes\\copernicus-start\\templates\\header.html',
      1 => 1404844013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '578253bc3858efa209-18066165',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53bc3859257433_30878711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc3859257433_30878711')) {function content_53bc3859257433_30878711($_smarty_tpl) {?><?php if (!is_callable('smarty_function_customize')) include 'C:\\xampp\\htdocs\\kircheimkino.com/wp-content/themes/copernicus-start/lib/smarty-plugins\\function.customize.php';
if (!is_callable('smarty_function_page_menu')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.page_menu.php';
if (!is_callable('smarty_modifier_translate')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\modifier.translate.php';
if (!is_callable('smarty_function_post_meta')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.post_meta.php';
if (!is_callable('smarty_function_language_menu')) include 'C:\\xampp\\htdocs\\kircheimkino.com/wp-content/themes/copernicus-start/lib/smarty-plugins\\function.language_menu.php';
if (!is_callable('smarty_block_loop')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\block.loop.php';
?><!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Kirche im Kino</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />
test3
		<meta name="viewport" content="width=device-width,initial-scale=1" />
test4		
		<!--[if lt IE 9]>
			<script type='text/javascript' src='js/html5.min.js'></script>
		<![endif]-->
test5		
		<link rel="stylesheet" href="css/style.css" />
test6		
	</head>
	<body>
		<aside>
			<nav>
				<a href="<?php echo cp_autoload_home_url::function_autoloader(array(),$_smarty_tpl);?>
" id="logo"><img src="<?php echo smarty_function_customize(array('key'=>"logo"),$_smarty_tpl);?>
" alt="<?php echo cp_autoload_bloginfo::function_autoloader(array('key'=>"name"),$_smarty_tpl);?>
" /></a>
				<?php echo smarty_function_page_menu(array('id'=>'main'),$_smarty_tpl);?>

			</nav>
<p> a tetaz main-nav	 </p>
			<nav id="main-nav">
				<ul>
					<li><a href="uberuns.html">über uns</a></li>
					<li><a href="podcast.html">podcast</a></li>
					<li><a href="kontakt.html" class="active">kontakt</a></li>
					<li><a href="feedback.html">feedback</a></li>
				</ul>
			</nav>
			<h2>Adresse</h2>
			<address><strong>Kirche im Kino</strong><br />Kino Linde<br />5400 Baden</address>
			<p><a href="mailto:info@kircheimkino.com">info@kircheimkino.com</a><br />0041 56 288 02 10</p>
		</aside>
		<header>
			<a href="index.html" id="logo">Kirche im Kino</a>
			<div id="next-event">
				<h2>Nächster Sonntag</h2>
				<time>10 Uhr</time><div>
					<h3>Alles kleibt anders</h3><p class="author">Thomas Lorenz</p>
				</div>
			</div>
		</header>
<!--
<div class="page-wrap">
	<header>
		<nav>
			<a href="<?php echo cp_autoload_home_url::function_autoloader(array(),$_smarty_tpl);?>
" id="logo"><img src="<?php echo smarty_function_customize(array('key'=>"logo"),$_smarty_tpl);?>
" alt="<?php echo cp_autoload_bloginfo::function_autoloader(array('key'=>"name"),$_smarty_tpl);?>
" /></a>
			<span class="show_menu"><?php echo smarty_modifier_translate("Show menu");?>
</span>
			<?php echo smarty_function_page_menu(array('id'=>'main'),$_smarty_tpl);?>

		</nav>
	</header>
	<section id="header_img" <?php ob_start();?><?php echo smarty_function_post_meta(array('key'=>'slider_max'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?> class="max_slider"<?php }?>>
		<div id="header_tools">
			<section>
				<a href="#" class="show_search_form">Show search form</a>
				<div id="search_form"><?php echo cp_autoload_get_search_form::function_autoloader(array(),$_smarty_tpl);?>
</div><div id="lang">
				<?php echo smarty_modifier_translate("select language");?>
: <ul class="languages"><?php echo smarty_function_language_menu(array(),$_smarty_tpl);?>
</ul>
			</div>
			</section>
		</div>
		<?php ob_start();?><?php echo cp_autoload_is_front_page::function_autoloader(array(),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2) {?>
			<?php ob_start();?><?php echo smarty_function_post_meta(array('key'=>'slider_max'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3) {?>
			<section class="slider">
				<?php echo $_smarty_tpl->getSubTemplate ('slider-max.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</section>
			<?php } else {?><?php ob_start();?><?php echo smarty_function_post_meta(array('key'=>'slider_mini'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4) {?>
			<section class="slider">
				<?php echo $_smarty_tpl->getSubTemplate ('slider-mini.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</section>
			<?php }}?>
		<?php } else { ?>
			<div class="page_title"><h1><?php ob_start();?><?php echo cp_autoload_is_search::function_autoloader(array(),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5) {?><?php echo smarty_modifier_translate("Search results");?>
<?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array()); $_block_repeat=true; echo smarty_block_loop(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			{if $post->post_type == 'post'}<span>{"Blog"|translate}</span>
			{elseif $post->post_type == 'news'}{"News"|translate}
			{elseif $post->post_type == 'gallery'}{"Gallery"|translate}
			{else}{the_title id={topid}}{/if}
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></h1></div>	
		<?php }?>
	</section>
--><?php }} ?>
