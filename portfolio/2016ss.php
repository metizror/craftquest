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
                    <h1 class="title  top_120">Summer School 2016 – Digital </h1><h1 class="bottom_30">Crafts : Customised Bricks 1.0 (Aarhus, Denmark)</h1>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="information_text">
                                <ul class="p-0">
                                    <li><b>Institute:</b> School of Architecture</li>
                                    <li><b>Year:</b> 2016</li>
                                    <li><b>Location:</b> Aarhus, Denmark </li>
                                    <li><b>Area:</b>  6.0 x 3.0 x 3.0 meters </li>
                                    <li><b>Project Cost:</b> Rs.3,00,000 </li>
                                    <li><b>Material:</b> EPS foam, Glue, Clay Bricks. </li>
                                    <li><b>Instructors:</b> Urvi Sheth and Niels Martin Larsesen.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <p class="bottom_30 text-left">This course introduced the vision, tools and techniques of form making through computation and
                                robotic fabrication. Students learned basics of 3D modelling and scripting for complex geometry in Rhinoceros + Grasshopper.<br><br>
                                The first part of the workshop was to develop<span id="dots">...</span> <span id="more"> customised brick modules for mass production using
                                available tools and techniques. This approach (part to whole) generated new forms during assembly.<br><br>
                                The second part of the workshop was to fabricate a vault structure developed by one of the
                                students. This approach (whole to parts) was looking at absolute customization. Each module in the
                                structure is customized. A scaled prototype (1:20) of negative frame was 3D printed (SLS) to
                                understand the varying angles within the blocks.<br><br>
                                Custom-made grasshopper code was used for robotic operations.</span></p>
                                <button class="more-button" onclick="myFunction()" id="myBtn">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 offset-md-2 portfolio-images top_90 text-center">
                    <figure class="bottom_30"><img src="../images/2016SS-01.jpg.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016SS-02.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016SS-03.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016SS-04.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016SS-05.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016SS-06.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016SS-07.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016SS-08.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016SS-09.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/DSC0674.jpg" alt=""></figure>

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