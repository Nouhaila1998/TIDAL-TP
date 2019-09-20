<?php
include __DIR__ . "/header.php";
?>


<div class="filter-container">
    <h2>List Pathologie</h2>

    <form action="<?php echo $GLOBALS['project_folder'] ?>/filter" method="post"><!-- Post permet de ne pas afficher dans l'URL -->
        <!--  -->
        <input name="nom" value="<?php echo isset($_POST['nom']) ? $_POST['nom'] : '' ?>" id="nom" placeholder="Le nom de méridien">
        <select name="type" id="type">
            <!-- List des types des pathologies -->
            <option value="0" selected>Selectioner le type</option>
            <?php foreach($pathos as $patho): ?>
                <option <?php echo isset($_POST['type']) && $_POST['type'] == $patho['type'] ? 'selected' : '' ?> value="<?php echo $patho['type'] ?>"><?php echo $patho['type'] ?></option>
            <?php endforeach; ?>
        </select>
        <select name="caracteristique" id="caracteristique">
            <option value="0" selected>Selectioner le caractéristique</option>
            <?php foreach($caracts as $crt): ?>
                <option <?php echo isset($_POST['caracteristique']) && $_POST['caracteristique'] == $crt ? 'selected' : '' ?> value="<?php echo $crt ?>"><?php echo $crt ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Get Result</button>
    </form>

    <table>
        <tr>
            <th>Code Méridien</th><th>Nom Méridien</th><th>Type</th><th>Description</th>
        </tr> 
        
        <?php foreach($pathologies as $patho): ?>
        <tr>
            <td><?php echo $patho['code'] ?></td>
            <td><?php echo $patho['nom'] ?></td>
            <td><?php echo $patho['type'] ?></td>
            <td><?php echo $patho['desc'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
  </div>


<?php
include __DIR__ . "/footer.php";
?>




