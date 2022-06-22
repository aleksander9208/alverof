<?php /* Smarty version 3.1.27, created on 2019-08-09 22:15:29
         compiled from "/home/o/ostrou0v/alferov.ostroushko.rf/public_html/manager/templates/default/resource/weblink/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11627931775d4dc6512b08b2_38356668%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22b435626aa6cf38f1af6ce9cc8ec6943d6e64b5' => 
    array (
      0 => '/home/o/ostrou0v/alferov.ostroushko.rf/public_html/manager/templates/default/resource/weblink/update.tpl',
      1 => 1565368893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11627931775d4dc6512b08b2_38356668',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5d4dc6512c5235_85763869',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d4dc6512c5235_85763869')) {
function content_5d4dc6512c5235_85763869 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11627931775d4dc6512b08b2_38356668';
?>
<div id="modx-panel-weblink-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>