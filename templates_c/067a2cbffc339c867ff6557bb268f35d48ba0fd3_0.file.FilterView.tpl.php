<?php
/* Smarty version 3.1.33, created on 2019-09-20 20:20:44
  from 'C:\wamp64\www\TIDAL-TP\app\views\FilterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d85349cadf347_05992658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '067a2cbffc339c867ff6557bb268f35d48ba0fd3' => 
    array (
      0 => 'C:\\wamp64\\www\\TIDAL-TP\\app\\views\\FilterView.tpl',
      1 => 1569010825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d85349cadf347_05992658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="filter-container">
    <h2>List Pathologie</h2>

    <form action="/TIDAL-TP/filter" method="post" id="filterForm"><!-- Post permet de ne pas afficher dans l'URL -->
        <!--  -->
        <input name="nom" value="" id="nom" placeholder="Le nom de méridien">
        <select name="type" id="type">
            <!-- List des types des pathologies -->
            <option value="0" selected>Selectioner le type</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pathoTypes']->value, 'patho');
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
        <select name="caracteristique" id="caracteristique">
            <option value="0" selected>Selectioner le caractéristique</option>
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
        <button type="submit">Recherche</button>
    </form>
    <div id="result">
        <table>
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
        </table>
    </div>
  </div>
  <?php echo '<script'; ?>
 src="/TIDAL-TP/public/js/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
var inProgress = false;
$('#filterForm').on('submit',function(e){ e.preventDefault(); getResult(e) });
$('#nom').on('keyup',function(e){ getResult() });
$('#type').on('change',function(e){ getResult() });
$('#caracteristique').on('change',function(e){ getResult() });

function getResult(){
    if(inProgress == false){
        inProgress = true;
        $.ajax({
            method:'post',
            url:$('#filterForm').attr('action'),
            data : $('#filterForm').serialize()
        }).done(function(result){
            inProgress = false;
            $('#result').html(result);
        });
    }
}

<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
