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
                    <h1 class="title  top_120">Winter School 2013 – Digital Crafts</h1><h1 class="bottom_30"> : Generative Design</h1>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="information_text">
                                <ul class="p-0">
                                    <li><b>Institute:</b> CEPT University</li>
                                    <li><b>Year:</b> 2013</li>
                                    <li><b>Location:</b> Ahmedabad</li>
                                    <li><b>Project Cost:</b> Rs.3,00,000</li>
                                    <li><b>Area:</b> 3.0 x 3.0 x 1.5 meters  </li>
                                    <li><b>Material:</b> Mild Steel, Stainless Steel </li>
                                    <li><b>Instructor:</b> Urvi Sheth</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <p class="bottom_30 text-left">Digital Crafts is twenty days intense research workshop at CEPT University, Ahmedabad, conducted by SWS. It aimed at introducing the vision, tools and techniques of mass customization and complex geometry through computational design. Students learn basics of scripting for complex geometry. They generated a dynamic <span id="dots">...</span> <span id="more">model which allowed several iterations before finalizing design.<br><br>
                                It also included logic of production. Fabrication and assembly/construction involved digital as well as crafting techniques. The course was an opportunity to experience design to production using various medias in short time. Deliverables of the course is to produce a live size installation and scale prototypes.</span></p>
                                <button class="more-button" onclick="myFunction()" id="myBtn">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 offset-md-2 portfolio-images top_90 text-center">
                    <figure class="bottom_30"><img src="../images/2013WS-01.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2013WS-02.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2013WS-03-1.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2013WS-04.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2013WS-05.jpg" alt=""></figure>
                      <figure class="bottom_30"><img src="../images/2013WS-06.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2013WS-07.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2013WS-08.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2013WS-09.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2013WS-10.jpg" alt=""></figure>
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