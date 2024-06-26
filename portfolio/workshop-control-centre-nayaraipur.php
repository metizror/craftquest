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
                    <h1 class="title bottom_45 top_120">Workshop, Depot, Control Center, Nayaraipur </h1>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="information_text">
                                <ul class="p-0">
                                    <li><b>Location:</b> Nayaraipur</li>
                                    <li><b>Category:</b> Architecture</li>
                                    <li><b>Status:</b> Completed</li>
                                    <li><b>Client:</b> NRDA</li>
                                    <li><b>Area:</b> Site 16000 sq mts., Workshop 1200 sq mts., Control center 1000 sq mts.</li>
                                    <li><b>Architect:</b> Arya Architects, AHMEDABAD</li>
                                    <li><b>CQ:</b> Associate Architects</li>
                                    <li><b>Video:</b><a href="https://youtu.be/FhSzkP4qp-g"> https://youtu.be/FhSzkP4qp-g</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <p class="bottom_30 text-left">Sustainable urban transport planning (SUTP) project connects Raipur and Nayaraipur by road. The natural terrain of the place is dynamic and inspiring. Population in the area is quite sparse. With this context, proposed building is designed using undulating surfaces rising and merging in ground. Between the surfaces daylight is drawn.</p>
                                <p class="bottom_30 text-left">Structural system transforms from simply supported to partial cantilever and finally balanced cantilever.<span id="dots">...</span> <span id="more"><br><br>                                    
                                In control center, surfaces are simply supported creating volumes between 8 to 14 meters high. Driver’s facility of workshop is a transforming block. In workshop area, surfaces are cantilevered, spanning 8.5 meters on one side and 21.5 meters on the other. Landscape, interiors and furniture follow same language.</span></p>
                                <button class="more-button" onclick="myFunction()" id="myBtn">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 offset-md-2 portfolio-images top_90 text-center">
                    <figure class="bottom_30"><img src="../images/BRTS-NRY-01.jpg" alt=""></figure>
                  <figure class="bottom_30"><img src="../images/BRTS-NRY-02-2.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/BRTS-NRY-03.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/BRTS-NRY-04.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/BRTS-NRY-05.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/BRTS-NRY-06.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/BRTS-NRY-07.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/BRTS-NRY-07.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/BRTS-NRY-08-2.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/BRTS-NRY-09.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/BRTS-NRY-10.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/BRTS-NRY-11.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/BRTS-NRY-12.jpg" alt=""></figure>
                </div>

             <!--   <div class="col-md-12 portfolio-nav text-center top_90">
                    <a class="port-next" href="work-6.html">
                        <div class="nav-title">next</div>
                        <div class="next-title">Motorcycles</div>
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