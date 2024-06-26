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
                <h1 class="title bottom_45 top_120">Lounge Design</h1>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="information_text">
                            <ul class="p-0">
                                <li><b>Location:</b> </li>
                                <li><b>Category:</b>  </li>
                                <li><b>Collaboration:</b> </li>

                                <li><b>Status:</b> </li>
                                <li><b>Client:</b> </li>
                                <li><b>Area:</b>  </li>                                
                                <li><b>Material:</b>  </li>                                
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
                    <figure class="bottom_30"><img src="../images/brick-house/30.10.21_Left-Elevation.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/brick-house/30.10.21_Right-Elevation.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/brick-house/30.10.21_View 1_Wall-1and 3.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/brick-house/30.10.21_View 2_Wall-1and 3.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/brick-house/30.10.21_View 3_Wall-1and 3.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/brick-house/30.10.21_View 4_wall-3.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/brick-house/30.10.21_View 5_Circular-Wall.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/brick-house/30.10.21_View 6_Wall-2.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/brick-house/30.10.21_View 7_Courtyard-wall _1.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/brick-house/30.10.21_View 7_Courtyard-wall_2.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/brick-house/30.10.21_View_1_Front-view.jpg" alt=""></figure>
                    <!-- <figure class="bottom_30"><iframe width="100%" height="400px" src="../images/animation1.mp4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></figure>  -->
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