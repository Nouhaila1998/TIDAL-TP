
{include file='header.tpl'}

<div class="filter-container">
    <h2>List Pathologie</h2>

    <form action="/TIDAL-TP/filter" method="post" id="filterForm"><!-- Post permet de ne pas afficher dans l'URL -->
        <!--  -->
        <input name="nom" value="" id="nom" placeholder="Le nom de méridien">
        <select name="type" id="type">
            <!-- List des types des pathologies -->
            <option value="0" selected>Selectioner le type</option>
            {foreach from=$pathoTypes item=$patho}
                <option value="{$patho.type}">{$patho.type}</option>
            {/foreach}
        </select>
        <select name="caracteristique" id="caracteristique">
            <option value="0" selected>Selectioner le caractéristique</option>
            {foreach from=$caracts item=$crt}
                <option value="{$crt}">{$crt}</option>
            {/foreach}
        </select>
        <button type="submit">Recherche</button>
    </form>
    <div id="result">
        <table>
            <tr>
                <th>Code Méridien</th><th>Nom Méridien</th><th>Type</th><th>Description</th>
            </tr> 
            {foreach from=$pathologies item=$patho}
            <tr>
                <td>{$patho.code}</td>
                <td>{$patho.nom}</td>
                <td>{$patho.type}</td>
                <td>{$patho.desc}</td>
            </tr>
            {/foreach}
        </table>
    </div>
  </div>
  <script src="/TIDAL-TP/public/js/jquery-3.4.1.min.js"></script>
<script>
var inProgress = false;
$('#filterForm').on('submit',function(e){ e.preventDefault(); getResult(e) });
// keydown, keyup, keypress
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

</script>
{include file='footer.tpl'}




