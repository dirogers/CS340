<?php
//check to see if user is logged in
if ($_SESSION['loggedin'] != TRUE) {
    header('Location: /phpmotors/');
}
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/modules/header.php'; ?>
<nav>
    <?php echo $navList; ?>
</nav>
<main>
    <?php
    $clientLastname = $_SESSION['clientData']['clientLastname'];
    $clientFirstname = $_SESSION['clientData']['clientFirstname'];
    $clientEmail = $_SESSION['clientData']['clientEmail'];
    echo "<h1>Logged in: $clientFirstname $clientLastname</h1>";
    if(isset($_SESSION['message'])) { echo $_SESSION['message'];} 
    echo "<p>You are logged in.</p>";
     
    if(isset($_SESSION['updateMessage'])) { echo $_SESSION['updateMessage'];}

    echo "<ul>
            <li>First Name: $clientFirstname</li>
            <li>Last Name: $clientLastname</li>
            <li>Email: $clientEmail</li>
        </ul>";
    ?>

    <h2>Account Management</h2>
    <p>Use this link to update account information.</p>
    <a href="/phpmotors/accounts?action=update">Update Account Information</a>

    <?php
    if($_SESSION['clientData']['clientLevel']>1){
        echo '<h2>Inventory Management</h2>
        <p>Use this link to manage the inventory.</p>
        <a href="/phpmotors/vehicles">Vehicle Management</a>';   
    }
    ?>

    <h2>Manage Your Product Reviews</h2>
    <?php 
    if(isset($_SESSION['deleteMessage'])) { echo $_SESSION['deleteMessage'];};
        echo $manageReviews;
        echo $updatedMessage;

    ?>


</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/modules/footer.php'; ?>
</body>

</html>

<?php unset($_SESSION['updateMessage']); ?>
<?php unset($_SESSION['message']); ?>
<?php unset($_SESSION['deleteMessage']); ?>