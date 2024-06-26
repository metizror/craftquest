<?php include('header.php');?>
<!-- SITE CONTENT -->
<style>
    .information_text ul {
        text-align: left;
        list-style: none;
    }
    #more {display: none;}
    .more-button {
        position: inherit !important;
        text-align: center !important;
        width: 50% !important;
        display: inline-block !important;
        float: none !important;
        margin: auto !important;
        padding: 0px !important;
        border-radius: 0px !important;
        background-color: transparent !important;
        border: 2px solid #000 !important;
        color: #000 !important;
    } 
    .more-button:hover {
        background-color: #5da6b5 !important;
        color: #fff !important;
        transition-duration: 0.5s !important;
    }
    .portfolio-single p {
        line-height: 32.5px !important;
    }
</style>
<div class="wrapper">
    <div class="container">
        <section class="portfolio-single type-3 top_90 row">
            <div class="col-md-8 offset-md-2 text-center">
                <h1 class="title bottom_45 top_120">Kiosk</h1>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="information_text">
                            <ul class="p-0">
                                <li><b>Location:</b> Foot over Bridge, Ahmedabad</li>
                                <li><b>Category:</b> Public architecture</li>
                                <li><b>Status:</b> Completed</li>
                                <li><b>Client:</b> SRFDCL</li>
                                <li><b>Area:</b> 32sqm </li>                                
                                <li><b>Material:</b> Mild Steel,  Fiber cement board, Glass </li>                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
<!--                         <div>
                            <p class="bottom_20 text-left">Eolic is a kinetic sculpture at Foot-over bridge, Ahmedabad. It is the sculpture that is responsive to the winds over the Sabarmati river. The 20-foot-long artwork at the centre of the new foot-over bridge in Ahmedabad features five different-sized poles and 13 wind catchers in total. With <span id="dots">...</span><span id="more">      
                            the motion of the wind, the wind catchers move, proffering an illusion of kites flying in the sky. The idea behind the installation was to make a kinetic sculpture powered solely, and without any motors, by the wind to generate interest among the visitors and tourists and to spread awareness about the action or the power of wind. As a result, it began to engage more with the environment around it, being visible differently from various distances and open to all and any interpretation.</span></p>

                            <button class="more-button" onclick="myFunction()" id="myBtn">Read more</button>
                        </div> -->
                    </div>
                </div>
            </div>

                <div class="col-md-8 offset-md-2 portfolio-images top_90 text-center">
                    <figure class="bottom_30"><img src="../images/kiosk/001.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/kiosk/002.JPG" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/kiosk/003.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/kiosk/004.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/kiosk/005.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/kiosk/006.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/kiosk/007.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/kiosk/008.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/kiosk/009.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/kiosk/010.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/kiosk/011.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/kiosk/012.jpg" alt=""></figure>
<!--                     <figure class="bottom_30"><iframe width="100%" height="400px" src="../images/animation1.mp4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></figure> -->
                </div>
        </section>

    </div> <!-- cont end -->
</div> <!-- wrapper end -->




<?php include('footer.php');?>
<script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
    }
}
</script>