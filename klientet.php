<?php
include_once "includes/header.php";
include_once "sqlFunctions.php";
?>
<div id="main">
    <div id="slide-bar">
        <div class="image">
            <h1>Klientet</h1>
        </div>
    </div>
    <div class="tabela">
        <h1>Klientet</h1>
        <input type="text" name="Search" id="search">
        <table id="klientet_table">
            <tr>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Nr personal</th>
                <th>Email</th>
                <th>Nr telefonit</th>
                <th>Komuna</th>
                <th>Modifiko</th>
                <th>Fshiej</th>
            </tr>
            <tbody id="table">
                <?php
                $klientet = getClinets();

                while ($klienti = mysqli_fetch_assoc($klientet)) { ?>
                    <tr>
                        <td><?php echo $klienti['emri']; ?></td>
                        <td><?php echo $klienti['mbiemri']; ?></td>
                        <td><?php echo $klienti['nr_personal']; ?></td>
                        <td><?php echo $klienti['emaili']; ?></td>
                        <td><?php echo $klienti['telefoni']; ?></td>
                        <td><?php echo $klienti['adresa']; ?></td>
                        <td id="modifiko">
                            <a href="shto_modifikoKlient.php?klientID <?php echo $klienti['klientID']; ?>">
                        	<i class="fa fa-pencil-square-o"></i></a>
                     </td>
                        <td id="fshiej"><i class="fa fa-trash"></i></td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
        <button id="shto_klient" onclick="window.location.href='shto_modifikoKlient.php'"><i class="fa fa-plus" aria-hidden="true"></i> Shto klient</button>
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