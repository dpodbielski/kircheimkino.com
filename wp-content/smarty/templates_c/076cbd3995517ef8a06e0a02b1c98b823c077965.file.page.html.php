<?php /* Smarty version Smarty-3.1.18, created on 2014-07-30 11:01:39
         compiled from "C:\xampp\htdocs\kircheimkino.com\wp-content\themes\kircheimkino\templates\page.html" */ ?>
<?php /*%%SmartyHeaderCode:1522753d8d093b34a73-35381482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '076cbd3995517ef8a06e0a02b1c98b823c077965' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\themes\\kircheimkino\\templates\\page.html',
      1 => 1406717869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1522753d8d093b34a73-35381482',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d8d093b71b01_93690152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8d093b71b01_93690152')) {function content_53d8d093b71b01_93690152($_smarty_tpl) {?><?php if (!is_callable('smarty_function_the_content')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.the_content.php';
if (!is_callable('smarty_function_the_post')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.the_post.php';
if (!is_callable('smarty_function_list_pages')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.list_pages.php';
if (!is_callable('smarty_function_dynamic_sidebar')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.dynamic_sidebar.php';
?><section class="main-section">
	<article>
		<?php echo smarty_function_the_content(array('html'=>1),$_smarty_tpl);?>

	</article><aside>
		<ul>
			<?php ob_start();?><?php echo smarty_function_the_post(array('key'=>'post_parent'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?>
				<?php ob_start();?><?php echo smarty_function_the_post(array('key'=>'post_parent'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_list_pages(array('id'=>'submenu','child_of'=>$_tmp2),$_smarty_tpl);?>

			<?php } else { ?>
				<?php ob_start();?><?php echo cp_autoload_the_id::function_autoloader(array(),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_list_pages(array('id'=>'submenu','child_of'=>$_tmp3),$_smarty_tpl);?>

			<?php }?>
		</ul>
		<?php echo smarty_function_dynamic_sidebar(array('index'=>"aside"),$_smarty_tpl);?>

	</aside>
</section>
<?php }} ?>
