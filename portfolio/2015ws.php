<?php include('header.php');?>
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
    <!-- SITE CONTENT -->
    <div class="wrapper">

        <div class="container">
            <section class="portfolio-single type-3 top_90 row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h1 class="title bottom_30 top_120">Winter School 2015 – Digital Crafts : Computation</h1>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="information_text">
                                <ul class="p-0">
                                    <li><b>Institute:</b> CEPT University</li>
                                    <li><b>Year:</b> 2015</li>
                                    <li><b>Location:</b> Ahmedabad</li>
                                    <li><b>Project Cost:</b> Rs.2,00,000</li>
                                    <li><b>Instructor:</b> Urvi Sheth</li>
                                    <li><b>Area:</b> 24 x 6 x 1.5 meters  </li>
                                    <li><b>Material:</b> MS, Jute Straps</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <p class="bottom_30 text-left">This course challenged us to design and build an installation that would act as a backdrop for the
                                stage of the 25th Anniversary Celebration, Faculty of Design. We explored conceptual ideas using various media (digital as well as physical) and carried out<span id="dots">...</span> <span id="more"> two simultaneous experiments of
                                materials and construction techniques, one – explorations in brick, two – lightweight materials (tensile). We attempted to write the script in Rhino 5 and Grasshopper for each exploration. We based Design development on a feedback loop from prototypes of actual material and construction
                                systems.<br><br>
                                The stages from design to construction were an interactive process where students, mentors,
                                fabricators and weavers were working closely 24×7. It was a complete exercise that also included
                                facing ground realities of site, budget, and time constrains, workmanship and hands on experience
                                to fabricate and build.</span></p>
                                <button class="more-button" onclick="myFunction()" id="myBtn">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 offset-md-2 portfolio-images top_90 text-center">
                    <figure class="bottom_30"><img src="../images/2015WS-01-1.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2015WS-02-1.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2015WS-03-1.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2015WS-04-1.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2015WS-05.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2015WS-06.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2015WS-07.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2015WS-08.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2015WS-09.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2015WS-10-1.jpg" alt=""></figure>

                </div>

                <!--<div class="col-md-12 portfolio-nav text-center top_90">
                    <a class="port-next" href="work-1.html">
                        <div class="nav-title">next</div>
                        <div class="next-title">Cosplay</div>
                    </a>
                </div>-->

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