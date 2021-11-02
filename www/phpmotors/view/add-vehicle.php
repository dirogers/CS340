<?php 
$classificationList = '<select name="classificationId">';
foreach ($classifications as $classification) {
    $classificationList .= "<option value='$classification[classificationId]'";
    if(isset($classificationId)){
        if($classification['classificationId'] === $classificationId){
            $classificationList .= ' selected ';
        }
    }
    $classificationList .= ">$classification[classificationName]</option>";
}
$classificationList .= '</select>';

?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/modules/header.php'; ?>
<nav>
    <?php echo $navList; ?>
</nav>
<main>
    <div class="main_content">
        <h1>Add Vehicle</h1>
        <?php
                    if (isset($message)) {
                    echo $message;
                    }
                    ?>
        <form action="/phpmotors/vehicles/index.php" method="post">
            <p>*Note all Fields are Required</p>
            <label>Select a Classification:</label><br>
                <?php echo $classificationList ?><br>
            
            <label for="make">Make:</label><br>
            <input type="text" name="make" id="make" required><br>
            <label for="model">Model:</label><br>
            <input type="text" name="model" id="model" required><br>
            <label for="description">Description:</label><br>
            <textarea name="description" id="description" cols="30" rows="10" required></textarea><br>
            <label for="imagepath">Image Path:</label><br>
            <input type="text" name="imagepath" id="imagepath" value="images/no-image.png" required><br>
            <label for="thumbnailpath">Thumbnail Path:</label><br>
            <input type="text" name="thumbnailpath" id="thumbnailpath" value="images/no-image.png" required><br>
            <label for="price">Price:</label><br>
            <input type="number" name="price" id="price" required><br>
            <label for="stock">Stock:</label><br>
            <input type="number" name="stock" id="stock" required><br>
            <label for="color">Color:</label><br>
            <input type="text" name="color" id="color" required><br>



            <input type="submit" name="submit" value="Add Vehicle">
            <input type="hidden" name="action" value="addVehicleToDatabase">
        </form>
    </div>
</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/modules/footer.php'; ?>