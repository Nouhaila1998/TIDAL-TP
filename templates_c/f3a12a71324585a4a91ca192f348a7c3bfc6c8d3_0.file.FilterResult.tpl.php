<?php
/* Smarty version 3.1.33, created on 2019-09-21 21:35:04
  from 'C:\wamp64\www\TIDAL-TP\app\views\FilterResult.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d869788abe008_93977374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3a12a71324585a4a91ca192f348a7c3bfc6c8d3' => 
    array (
      0 => 'C:\\wamp64\\www\\TIDAL-TP\\app\\views\\FilterResult.tpl',
      1 => 1569101693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d869788abe008_93977374 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
    <?php if (!empty($_smarty_tpl->tpl_vars['pathologies']->value)) {?><!--si le résultat n'est pas vide -->
    <tr>
        <th>Code Méridien</th><th>Nom Méridien</th><th>Type</th><th>Description</th>
    </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pathologies']->value, 'patho');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['patho']->value['code'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['patho']->value['nom'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['patho']->value['type'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['patho']->value['desc'];?>
</td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
    <tr>
        <td>Aucun resultat trouvé</td>
    </tr>
    <?php }?>
</table><?php }
}
