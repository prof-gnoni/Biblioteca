<?php
require_once 'dbconn.php';
?>
<!DOCTYPE html>
<html>
<body>
<h2>Inserimento libro</h2>

    <?php
        $idc = $_POST['SelCategoria'];
        $tit = $_POST['ftitolo'];
        $prez = $_POST['fprezzo'];
        $ddp = $_POST['fdata'];
        echo "$idc,$tit,$prez,$ddp";
        $query = "INSERT INTO libro (idCategoria,titolo,prezzo,dataPubblicazione) VALUES (".$idc.",'".$tit."',".$prez.",'".$ddp."');";
        $results = mysqli_query($conn, $query);
        if($results) {
    ?>
            <div id="success">
                <p>Inserimento eseguito con successo.</p>
            </div>
    <?php
        }
        else {
    ?>
            <div id="ins_error">
                <p>Inserimento non eseguito.</p>
            </div>
    <?php
        }
    ?>
    <a href="elencoLibri.php" >Torna all'elenco dei libri</a>
</body>
</html>
