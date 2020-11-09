<?php
include_once "includes/header.php";
include_once "sqlFunctions.php";

?>
<div id="main">
    <div id="slide-bar">
        <div class="image">
            <h1>Automjetet</h1>
        </div>
    </div>
    <div class="tabela">
        <h1>Automjetet</h1>
        <table id="klientet_table">
            <tr>
                <th>Emri</th>
                <th>Kategoria </th>
                <th>Numri i regjistrimit</th>
                <th>Pershkrimi</th>
                <th>Modifiko</th>
                <th>Fshiej</th>
            </tr>
            <?php
            $automjetet = getAutomjetet();
            while ($automjeti = mysqli_fetch_assoc($automjetet)) { ?>
                <tr>
                    <td><?php echo $automjeti['emri'] ;?></td>
                    <td><?php echo $automjeti['kategoriaID']; ?></td>
                    <td><?php echo $automjeti['nr_regjistrimit']; ?></td>
                    <td><?php echo $automjeti['pershkrimi']; ?></td>
                    <td id="modifiko"><i class="fa fa-pencil-square-o"></i></td>
                    <td id="fshiej"><i class="fa fa-trash"></i></td>
                </tr>
            <?php
            }
            ?>

        </table>
        <button id="shto_klient"><i class="fa fa-plus" aria-hidden="true"></i> Shto automjet</button>
        <div style="clear: both;"></div>
    </div>
</div>
<hr>
<?php
include_once "includes/footer.php";
?>