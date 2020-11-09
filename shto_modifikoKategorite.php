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
    input, textarea {
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

if(isset($_POST['shtoKategorite'])){
	$emri=$_POST['emri'];
	$pershkrimi=$_POST['pershkrimi'];
	$kostoja=$_POST['kostoja'];
	
	addCategories($emri,$pershkrimi,$kostoja);
   

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

  	<label for="pershkrimi">Pershkrimi:</label><br>
  	<textarea name="pershkrimi" cols="
    30" rows="30"></textarea>

  	<label for="Kostoja">Kostoja:</label><br>
  	<input type="text" name="kostoja"><br>

 

  	<input type="submit" name="shtoKategorite" value="Shto shtoKategorite">
  </form>
  

<div style="clear: both"></div>

</div>    




<?php
include_once "includes/footer.php";
?>