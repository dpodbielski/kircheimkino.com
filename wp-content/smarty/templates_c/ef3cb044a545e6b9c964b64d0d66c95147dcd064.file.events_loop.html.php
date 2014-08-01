<?php /* Smarty version Smarty-3.1.18, created on 2014-07-30 11:01:39
         compiled from "C:\xampp\htdocs\kircheimkino.com\wp-content\themes\kircheimkino\templates\events_loop.html" */ ?>
<?php /*%%SmartyHeaderCode:180253d8d093af79e3-78969107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef3cb044a545e6b9c964b64d0d66c95147dcd064' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\themes\\kircheimkino\\templates\\events_loop.html',
      1 => 1406717165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180253d8d093af79e3-78969107',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d8d093af79e4_47193632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8d093af79e4_47193632')) {function content_53d8d093af79e4_47193632($_smarty_tpl) {?><?php if (!is_callable('smarty_function_post_meta')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.post_meta.php';
if (!is_callable('smarty_function_the_title')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.the_title.php';
?><time><?php echo smarty_function_post_meta(array('key'=>"time"),$_smarty_tpl);?>
</time><div>
	<h3><?php echo smarty_function_the_title(array(),$_smarty_tpl);?>
</h3><p class="author"><?php echo smarty_function_post_meta(array('key'=>"speaker"),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
