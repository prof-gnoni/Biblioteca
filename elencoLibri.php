<?php
require_once 'dbconn.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Elenco Libri</title>
</head>
<body>
 	<h1>Elenco Libri</h1>
    <div>
        <?php
            $query = 'SELECT * FROM libro';
            $results = mysqli_query($conn, $query);
            if(mysqli_num_rows($results) > 0) {
        ?>
        <table style="margin:auto; line-height:25px;">
            <tr><th>Id Libro</th><th>titolo</th><th>prezzo</th><th>Data di Pubblicazione</th></tr>
        <?php
            while($row = mysqli_fetch_assoc($results) ) {
                $phpdate = strtotime( $row['dataPubblicazione'] );
                $mysqldate = date( 'd/m/Y', $phpdate );
        ?>
            <tr>
                <td><?php echo $row['idLibro']; ?></td>
                <td><?php echo $row['titolo']; ?></td>
                <td><?php echo $row['prezzo']; ?></td>

                <td><?php echo $mysqldate; ?></td>

            </tr>

        <?php
            }
            ?>
        </table>
                <?php
        } //CHIUDE IF $RESULTS
        else {
        ?>
            <div id="no_results">
                <p>
                    Nessun libro in archivio.
                </p>
            </div>
    <?php
        } // CHIUDE ELSE
    ?>

    </div>
</body>
</html>