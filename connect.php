<?php $basename=basename($_SERVER["SCRIPT_FILENAME"], '.php'); ?>

<?php include('./header.php') ?>

<section class="connect-first-section">
    <h1>Connect with us </h1>
    <div class="connect-banner">
        <div class="connect-banner-overlay"></div>
        <form action="" method="post" class="connect-form">
            <input type="text" placeholder="Name" name="name"> <br><br>
            <input type="text" placeholder="Email" name="email"><br><br>
            <input type="text" placeholder="Phone No" name="phone"><br><br>
            <textarea class="off" rows="6" cols="50" placeholder="Message" name="message"></textarea>
            <textarea class="on" rows="4" cols="50" placeholder="Message" name="message"></textarea>

            <br><br>
            <button type="submit" class="submit-button">Submit</button>
        </form>
        <p>" We always deliver more than expected ."<br>
            &nbsp; &nbsp; &nbsp; Let's create something mindblowing
        </p>
    </div>
</section>

<section class="tree-banner" style="margin-top:12px;">
    <div>
        <h2>We are available to respond to your request 24/7</h2>
    </div>
</section>



<?php include('./secondfooter.php') ?>



<?php include('./footer.php') ?>