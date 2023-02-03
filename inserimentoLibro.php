<?php
require_once 'dbconn.php';
?>
<!DOCTYPE html>
<html>
<body>

<h2>Inserimento libro</h2>

<form id="mioform" name="mioform" action="inserimentoLibro_action.php" method="post">
    <label for="ftitolo">Titolo:</label><br>
    <input type="text" id="ftitolo" name="ftitolo" value=""><br>

    <label for="fprezzo">Prezzo:</label><br>
    <input type="text" id="fprezzo" name="fprezzo" value=""><br>

    <label for="fdata">Data di pubblicazione:</label><br>
    <input type="date" id="fdata" name="fdata" value=""><br>

    <select id="SelCategoria" name="SelCategoria" required>
        <option></option>
        <?php
            $query = 'SELECT * FROM categoria';
            $results = mysqli_query($conn, $query);
            if(mysqli_num_rows($results) > 0) {
                while($row = mysqli_fetch_assoc($results) ) {
        ?>
                <option value="<?php echo $row['idCategoria'];?>"><?php echo $row['descrizione']; ?></option>
                <?php
                }
                ?>

            <?php
            } //CHIUDE IF $RESULTS
            ?>
    </select>
    <br>
    <input type="submit" value="Submit">
</form>



</body>
</html>
