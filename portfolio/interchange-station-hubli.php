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
                    <h1 class="title bottom_45 top_120">Interchange Station, Hubli </h1>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="information_text">
                                <ul class="p-0">
                                    <li><b>Location:</b> Hubli</li>
                                    <li><b>Category:</b> Transit system</li>
                                    <li><b>Status:</b> Completed</li>
                                    <li><b>Client:</b> KSRTC</li>
                                    <li><b>Area:</b> 11,53,633 sq mts</li>
                                    <li><b>Architect:</b> Arya Architects, Ahmedabad</li>
                                    <li><b>CQ:</b> Computational design & Fabrication</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <p class="bottom_30 text-left">Proposed project is part of up-gradation of the integrated transport system for twin town Hubbali-Dharwad by Karnatak state transport corporation (KSRTC). Husor station, Hubbali is an interchange station. Mushroom columns are designed due to the need of large spans with column free space for easy movement. Each column spans 5 x 13.5 meters. Geometry of the column is derived<span id="dots">...</span> <span id="more"> from a surface model on which structural lines are generated using dia-grid.</span></p>
                                <button class="more-button" onclick="myFunction()" id="myBtn">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 offset-md-2 portfolio-images top_90 text-center">
                    <figure class="bottom_30"><img src="../images/1.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/3.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/4.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/IMG_6515-1.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/last.jpg" alt=""></figure>
                </div>

                <!--<div class="col-md-12 portfolio-nav text-center top_90">
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