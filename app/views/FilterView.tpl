
{include file='header.tpl'}

<div class="filter-container">
    <h2>List Pathologie</h2>

    <form action="/TIDAL-TP/filter" method="post" id="filterForm"><!-- Post permet de ne pas afficher dans l'URL -->
        <!--Tapper le nom de méridien  -->
        <input name="nom" value="" id="nom" placeholder="Le nom de méridien">
        <!-- List des types des pathologies -->
        <select name="type" id="type">
            <option value="0" selected>Selectioner le type</option>
            {foreach from=$pathologies item=$patho}
                <option value="{$patho.type}">{$patho.type}</option>
            {/foreach}
        </select>
        <!--lister des caractéristiques  -->
        <select name="caracteristique" id="caracteristique">
            <option value="0" selected>Selectioner la caractéristique</option>
            {foreach from=$caracts item=$crt}
                <option value="{$crt}">{$crt}</option>
            {/foreach}
        </select>
        <!-- le bouton recherche -->
        <button type="submit">Recherche</button>
    </form>
    <!-- le résultat de la recherche qui représente le tableau, on peut le voir dans FilterResult.tpl  -->
    <div id="result">
        {include file="FilterResult.tpl"}
    </div>
  </div>
  <!-- On appelle la biliotheque JQUERY (Bibliotheque de JS)  -->
  <script src="/TIDAL-TP/public/js/jquery-3.4.1.min.js"></script>
  <script src="/TIDAL-TP/public/js/filter.js"></script>

{include file='footer.tpl'}




