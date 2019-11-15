<?php $basename=basename($_SERVER["SCRIPT_FILENAME"], '.php'); ?>

<?php include('./header.php') ?>
<?php require_once ('./Mobile_Detect.php');
$detect = new Mobile_Detect;
 ?>


<section class="design-banner">
    <h1>We speak the right words <br> to the woods to bring out <br> your desired finishing
        <hr>
    </h1>
</section>

<section class="dining-section">
    <div class="dinning dining-border1">
        <img src="images/dinner1.jpg" alt="dinning picture" class="off">
        <img src="images/dinner1-small.jpg" alt="" class="on">

    </div>

    <div class="off dinning dining-border2 dining-border-2-sliding ">
        <div>
            <img src="images/showroom view a.jpg" alt="dinning picture">

        </div>


        <div>
            <img src="images/1.jpg" alt="">

        </div>

        <div>
            <img src="images/showroom view g.jpg" alt="">
        </div>
        <div>
            <img src="images/2.jpg" alt="">

        </div>
        <div>
            <img src="images/showroom view b.jpg" alt="">
        </div>
        <div>
            <img src="images/3.jpg" alt="">

        </div>

        <div>
            <img src="images/4.jpg" alt="">

        </div>
        <div>
            <img src="images/showroom view f.jpeg" alt="">
        </div>
    </div>

    <div class="on">
        <div>
            <img src="images/1-small.jpg" alt="">
        </div>
        <div>
            <img src="images/2-small.jpg" alt="">
        </div>
    </div>
</section>


<section class="kitchen-section">
    <div class="dinning dining-border1">
        <img src="images/dinner2.jpg" alt="dinning picture" class="off">
        <img src="images/dinner2-small.jpg" alt="" class="on">


    </div>

    <div class="dinning dining-border2">
        <img src="images/showroom view e.jpg" alt="dinning picture" class="off">
    </div>
</section>

<section class="smooth-sailing-section">
    <p class="off"> <span>Smooth Sailing</span> <br>
        We produce a complete set of two and three dimensional computer generated <br> drawings. This will
        give
        you
        to get a good perspective of what your new space will <br> look like. The feeling of achieving a beautiful
        habitat
        with
        increased value is next <br> to none, especially when you have been a part of the renovation process.

        <p class="on">
            We produce a three dimensional computer genearated rendering to give you a feel of how your space will look
            like.<br>
        </p>
</section>

<section class="design-bed-section">
    <div class=" off design-bed-section-first-div">
        <img src="images/new_image1.jpg" alt="bed pictures">
        <img src="images/5.jpg" alt="">
        <img src="images/new_image2.jpg" alt="">
        <img src="images/new_image3.jpg" alt="">
        <img src="images/new_image4.jpg" alt="">
        <img src="images/9.jpg" alt="">
    </div>

    <div class="on design-bed-section-first-div">
        <img src="images/chair_bcyan-small.jpg" alt="bed pictures">
        <img src="images/5-small.jpg" alt="">
        <img src="images/6-small.jpg" alt="">
        <img src="images/7-small.jpg" alt="">
        <img src="images/8-small.jpg" alt="">
        <img src="images/9-small.jpg" alt="">
    </div>



    <div>
        <img src="images/chair bcyan2.jpg" alt="bed pictures" class="off">
        <img src="images/chair_bcyan2-small.jpg" alt="" class="on">

    </div>
</section>

<section class="specialization-section">
    <p class="off">We specialize in the art of producing ultramodern interior spaces<br>Contact us today for
        the
        experience of a
        life time </p>

    <p class="on mobile-p">We specialize in the art of modern interior design</p>
</section>


<?php include('./secondfooter.php') ?>
<?php include('./footer.php') ?>