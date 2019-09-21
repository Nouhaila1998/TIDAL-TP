<?php
/* Smarty version 3.1.33, created on 2019-09-21 21:33:13
  from 'C:\wamp64\www\TIDAL-TP\app\views\FilterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d869719b6dc89_62667067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '067a2cbffc339c867ff6557bb268f35d48ba0fd3' => 
    array (
      0 => 'C:\\wamp64\\www\\TIDAL-TP\\app\\views\\FilterView.tpl',
      1 => 1569098067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:FilterResult.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d869719b6dc89_62667067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="filter-container">
    <h2>List Pathologie</h2>

    <form action="/TIDAL-TP/filter" method="post" id="filterForm"><!-- Post permet de ne pas afficher dans l'URL -->
        <!--Tapper le nom de méridien  -->
        <input name="nom" value="" id="nom" placeholder="Le nom de méridien">
        <!-- List des types des pathologies -->
        <select name="type" id="type">
            <option value="0" selected>Selectioner le type</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pathologies']->value, 'patho');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['patho']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['patho']->value['type'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <!--lister des caractéristiques  -->
        <select name="caracteristique" id="caracteristique">
            <option value="0" selected>Selectioner la caractéristique</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['caracts']->value, 'crt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['crt']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['crt']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['crt']->value;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <!-- le bouton recherche -->
        <button type="submit">Recherche</button>
    </form>
    <!-- le résultat de la recherche qui représente le tableau, on peut le voir dans FilterResult.tpl  -->
    <div id="result">
        <?php $_smarty_tpl->_subTemplateRender("file:FilterResult.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  </div>
  <!-- On appelle la biliotheque JQUERY (Bibliotheque de JS)  -->
  <?php echo '<script'; ?>
 src="/TIDAL-TP/public/js/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/TIDAL-TP/public/js/filter.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
