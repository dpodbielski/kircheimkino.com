<?php /* Smarty version Smarty-3.1.18, created on 2014-07-30 11:01:39
         compiled from "C:\xampp\htdocs\kircheimkino.com\wp-content\plugins\copernicus\templates\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:3081553d8d09390f564-15969188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a3ab2d6061dac7c9f4db3f15b7d143514ddef78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus\\templates\\_header.html',
      1 => 1404103800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3081553d8d09390f564-15969188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'header' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d8d093a037a7_36101429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8d093a037a7_36101429')) {function content_53d8d093a037a7_36101429($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus\\lib\\smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['page']->value['language'];?>
" dir="<?php echo cp_autoload_bloginfo::function_autoloader(array('show'=>'text_direction'),$_smarty_tpl);?>
">
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</title>
	<meta charset="<?php echo cp_autoload_bloginfo::function_autoloader(array('show'=>'charset'),$_smarty_tpl);?>
">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['page']->value['content']),200);?>
">
	<meta property="og:locale" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['language'];?>
">
	<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
">
	<meta property="og:description" content="<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['page']->value['content']),200);?>
">
	<meta property="og:url" content="<?php echo cp_autoload_get_permalink::function_autoloader(array(),$_smarty_tpl);?>
">
	<meta property="og:site_name" content="<?php echo cp_autoload_bloginfo::function_autoloader(array('show'=>'name'),$_smarty_tpl);?>
">
	<meta property="og:type" content="website">
	<?php if ($_smarty_tpl->tpl_vars['page']->value['image']) {?><meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['image'];?>
">
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['page']->value['slug'];?>
"><?php }} ?>
