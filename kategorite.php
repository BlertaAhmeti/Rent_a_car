<?php
include_once "includes/header.php";
include_once "sqlFunctions.php";
?>
<div id="main">
    <div id="slide-bar">
        <div class="image">
            <h1>Kategorite</h1>
        </div>
    </div>
    <div class="tabela">
        <h1>Kategorite</h1>
        <input type="text" name="Search" id="search">
        <table id="klientet_table">
            <tr>
                <th>Emri</th>
                <th>Pershkrimi</th>
                <th>Kostoja</th>

                <th>Modifiko</th>
                <th>Fshiej</th>
            </tr>
            <tbody id="table">
                <?php
                $kategorite = getCategories();

                while ($kategoria = mysqli_fetch_assoc($kategorite)) { ?>
                    <tr>
                        <td><?php echo $kategoria['emri']; ?></td>
                        <td><?php echo $kategoria['pershkrimi']; ?></td>
                        <td><?php echo $kategoria['kostoja']; ?></td>
                
                        <td id="modifiko"><i class="fa fa-pencil-square-o"></i></td>
                        <td id="fshiej"><i class="fa fa-trash"></i></td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
        <button id="shto_kategorite" onclick="window.location.href='shto_modifikoKategorite.php'"><i class="fa fa-plus" aria-hidden="true"></i> Shto klient</button>
        <div style="clear: both;"></div>
    </div>
</div>
<hr>

<script src="jQuery.js"></script>
<script>
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            var vlera = $(this).val().toLowerCase();
            $('#table tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(vlera) > -1);
            });
        });
    });
</script>


<?php
include_once "includes/footer.php";
?>