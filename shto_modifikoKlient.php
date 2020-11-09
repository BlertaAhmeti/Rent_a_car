<?php include_once "includes/header.php"; 
include_once "sqlFunctions.php";

?>
<style>
    #shtoForma {
        width: 100%;
        margin: 50px 40px;
    }

    #hi {
        color: #009933;
        padding: 20px 0px 10px 10px;
        margin: 0px 15px;
        font-size: 25px;
        border-bottom: 2px solid #009933;
    }

    label,
    input {
        width: 90%;
        padding: 10px;
        margin-left: 30px;
    }

    label {
        color: #009933;
        font-weight: bold;
        margin-left: -10px;
    }

    input {
        outline: none;
        margin: 10px 0px;
    }

    input[type='submit'] {
        width: 120px;
        float: right;
        margin: 30px 0px;
        margin-right: -2px;
        color: #fff;
        background-color: #009933;
        border: none;
    }

    input[type='submit']:hover {
        transform: scale(1.1);
    }
</style>

<?php 

if(isset($_POST['shtoKlient'])){
	$emri=$_POST['emri'];
	$mbiemri=$_POST['mbiemri'];
	$emaili=$_POST['emaili'];
	$nr_personal=$_POST['nr_personal'];
	$telefoni=$_POST['telefoni'];
	$adresa=$_POST['adresa'];
	addClient($emri,$mbiemri,$emaili,$nr_personal,$telefoni,$adresa);

   

}



?>
<div id="main">
    <div id="slide-bar">
        <div class="image">
            <h1 id="h1">Shto Klient</h1>
        </div>
    </div>

 <h1 id="hi">Forma per shtimin e klienteve</h1>
  <form method="post" id="shtoFor#">
  	<label for="emri">Emri:</label><br>
  	<input type="text" name="emri"><br>

  	<label for="mbiemri">Mbiemri:</label><br>
  	<input type="text" name="mbiemri"><br>

  	<label for="email">Emaili:</label><br>
  	<input type="email" name="emaili"><br>

  	<label for="nr_personal">Nr personal:</label><br>
  	<input type="text" name="nr_personal"><br>

  	<label for="telefoni">Telefoni:</label><br>
  	<input type="text" name="telefoni"><br>



  	<label for="adresa">Adresa:</label><br>
  	<input type="text" name="adresa"><br>


  	<input type="submit" name="shtoKlient" value="Shto klient">
  </form>
  

<div style="clear: both"></div>

</div>    




<?php
include_once "includes/footer.php";
?>