<?php /* Smarty version 3.1.27, created on 2019-08-09 22:15:28
         compiled from "/home/o/ostrou0v/alferov.ostroushko.rf/public_html/manager/templates/default/element/tv/renders/input/richtext.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19304346955d4dc650e6df62_82527117%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c20c92332b263346824a5a27e6601098c197eb88' => 
    array (
      0 => '/home/o/ostrou0v/alferov.ostroushko.rf/public_html/manager/templates/default/element/tv/renders/input/richtext.tpl',
      1 => 1565368893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19304346955d4dc650e6df62_82527117',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5d4dc650f051d8_42231365',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d4dc650f051d8_42231365')) {
function content_5d4dc650f051d8_42231365 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19304346955d4dc650e6df62_82527117';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
?>