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
                    <h1 class="title bottom_45 top_120">Stadium, Ahmedabad </h1>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="information_text">
                                <ul class="p-0">
                                    <li><b>Location:</b> Ahmedabad</li>
                                    <li><b>Category:</b> Sports architecture</li>
                                    <li><b>Status:</b> </li>
                                    <li><b>Client:</b> TransStadia</li>
                                    <li><b>Area:</b> 11,53,633 sq mts</li>
                                    <li><b>Architect:</b> Arya Architects, Ahmedabad</li>
                                    <li><b>CQ:</b> Computational design </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <p class="bottom_30 text-left">Stadium is a landmark, both by its formal expression as well as facilities offered. The building complex includes stadium, sports academy, StediArena, sports club, four star hotel, office space, retail and multiplex.<br><br>
                                Our role as computation designer explores form finding through shifting planes wrapping around optimised<span id="dots">...</span> <span id="more"> floor plate within the range of allowable margins. Limiting parameter is defined by the available construction technology. As a result, the form is forced to be faceted planes and not double curved surfaces. Selection of transparent and opaque surfaces is directly linked to the functional requirement of the spaces inscribed. Detail articulation, material selection and translation of the complex form to construction data are done through computational model.</span></p>
                                <button class="more-button" onclick="myFunction()" id="myBtn">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 offset-md-2 portfolio-images top_90 text-center">
                    <figure class="bottom_30"><img src="../images/Stadium.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/Stadium-01.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/Stadium-02.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/Stadium2.png" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/stadium3.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/stadium1.png" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/stadium2.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/stadium3.png" alt=""></figure>
                </div>

              <!--  <div class="col-md-12 portfolio-nav text-center top_90">
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