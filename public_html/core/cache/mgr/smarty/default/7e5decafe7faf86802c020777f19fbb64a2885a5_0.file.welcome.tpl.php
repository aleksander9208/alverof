<?php /* Smarty version 3.1.27, created on 2019-08-09 19:54:29
         compiled from "/home/o/ostrou0v/alferov.ostroushko.rf/public_html/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11147741015d4da545b88441_44593025%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e5decafe7faf86802c020777f19fbb64a2885a5' => 
    array (
      0 => '/home/o/ostrou0v/alferov.ostroushko.rf/public_html/manager/templates/default/welcome.tpl',
      1 => 1565368893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11147741015d4da545b88441_44593025',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5d4da545b8ad12_16410959',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d4da545b8ad12_16410959')) {
function content_5d4da545b8ad12_16410959 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11147741015d4da545b88441_44593025';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>