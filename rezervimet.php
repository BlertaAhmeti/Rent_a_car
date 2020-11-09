<?php
include_once "includes/header.php";
include_once "sqlFunctions.php";
?>
<div id="main">
    <div id="slide-bar">
        <div class="image">
            <h1>Rezervimet</h1>
        </div>
    </div>
    <div class="tabela">
        <h1>Rezervimet</h1>
        <table id="klientet_table">
            <tr>
                <th>Klienti</th>
                <th>Automjeti</th>
                <th>Data e rezervimit</th>
                <th>Data e kthimit</th>
                <th>Cmimi</th>
                <th>Modifiko</th>
                <th>Fshiej</th>
            </tr>
            

            <?php 
             $rezervimet=getRezervimet();

             while($rezervimi = mysqli_fetch_assoc($rezervimet)){  ?>

               <tr>
                <td><?php echo $rezervimi['k.emri']." ". $rezervimi['k.mbiemri'] ?></td>
                <td>Golf V</td>
                <td><?php echo $rezervimi['h.datamarrjes']?> </td>
                <td>10/06/2020</td>
                <td>35 €</td>
                <td id="modifiko"><i class="fa fa-pencil-square-o"></i></td>
                <td id="fshiej"><i class="fa fa-trash"></i></td>
            </tr>
           
           


           <?php
             }




            ?>
           
          
        </table>
        <button id="shto_klient"><i class="fa fa-plus" aria-hidden="true"></i> Shto rezervim</button>
        <div style="clear: both;"></div>
    </div>
</div>
<hr>

<?php
include_once "includes/footer.php";
?>