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