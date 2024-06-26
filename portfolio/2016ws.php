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
                    <h1 class="title  top_120">Winter School 2016 – Digital Crafts </h1><h1 class="bottom_30">: Customised Bricks 1.1</h1>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="information_text">
                                <ul class="p-0">
                                    <li><b>Institute:</b> CEPT University</li>
                                    <li><b>Year:</b> 2016</li>
                                    <li><b>Location:</b> Ahmedabad</li>
                                    <li><b>Area:</b> 9.5 x 6.0 x 4.5 meters</li>
                                    <li><b>Project Cost:</b> Rs.8,00,000</li>
                                    <li><b>Material:</b> PLA, Clay, Gypsum.</li>
                                    <li><b>Instructors:</b> Urvi Sheth, Shehzad Irani.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <p class="bottom_30 text-left">This workshop looks at bricks and masonry as an element which can be used to achieve complex geometries. It is composed of two simultaneous but separate approaches. First – Part to Whole and second – Whole to Part.<br><br>
                                The first approach is centered on the development of a new type of brick. Individual masonry units are<span id="dots">...</span> <span id="more"> designed to enhance quality of existing brick by making it mortar less and add one of the qualities like acoustics, thermal insulation, light, landscape, complex geometry, etc. The bricks as being reproduced at a 1:1 scale with sample bonding patterns in which walls can be erected.<br><br>
                                The second approach is elaborated under Winter School: Customised Bricks 1.2.</span></p>
                                <button class="more-button" onclick="myFunction()" id="myBtn">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 offset-md-2 portfolio-images top_90 text-center">
                    <figure class="bottom_30"><img src="../images/2016WS-01.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016WS-02.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016WS-03.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016WS-04.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016WS-05.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016WS-06.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016WS-07.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016WS-08.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016WS-09.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016WS-10.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016WS-11.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2016WS-12.jpg" alt=""></figure>
                </div>

                <!--<div class="col-md-12 portfolio-nav text-center top_90">
                    <a class="port-next" href="work-7.html">
                        <div class="nav-title">next</div>
                        <div class="next-title">Swacket</div>
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