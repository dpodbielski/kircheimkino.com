<?php /* Smarty version Smarty-3.1.18, created on 2014-08-01 07:30:53
         compiled from "C:\Program Files (x86)\wamp\www\kircheimkino.com\wp-content\themes\kircheimkino\templates\events_loop.html" */ ?>
<?php /*%%SmartyHeaderCode:3113853db422d4b7978-33560267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6f5250c88f9a368a8c67ea2a3eeb46ba6d39ae5' => 
    array (
      0 => 'C:\\Program Files (x86)\\wamp\\www\\kircheimkino.com\\wp-content\\themes\\kircheimkino\\templates\\events_loop.html',
      1 => 1406717164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3113853db422d4b7978-33560267',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53db422d4e0006_07392565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53db422d4e0006_07392565')) {function content_53db422d4e0006_07392565($_smarty_tpl) {?><?php if (!is_callable('smarty_function_post_meta')) include 'C:\\Program Files (x86)\\wamp\\www\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.post_meta.php';
if (!is_callable('smarty_function_the_title')) include 'C:\\Program Files (x86)\\wamp\\www\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.the_title.php';
?><time><?php echo smarty_function_post_meta(array('key'=>"time"),$_smarty_tpl);?>
</time><div>
	<h3><?php echo smarty_function_the_title(array(),$_smarty_tpl);?>
</h3><p class="author"><?php echo smarty_function_post_meta(array('key'=>"speaker"),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
