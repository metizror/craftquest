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
                    <h1 class="title top_120">Research: Bricks and Vaults </h1><h1 class="bottom_45"> – Digital Crafts: Pavilion</h1>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="information_text">
                                <ul class="p-0">
                                    <li><b>Institute:</b> CEPT University</li>
                                    <li><b>Year:</b> 2016</li>
                                    <li><b>Location:</b> Ahmedabad</li>
                                    <li><b>Area:</b> 9.5 x 6 x 4.5 meters  </li>
                                    <li><b>Project Cost:</b>  Rs.8,00,000</li>
                                    <li><b>Material:</b> PLA, Clay, Gypsum.</li>
                                    <li><b>Instructors:</b> Urvi Sheth, Shehzad Irani</li>
                                    <li class="text-left"><b>Guided Thesis: </b>Kriti Khanna, Shreyas Khinvasara, Avishek Das, Radhika Thacker, Aysha Fida </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <p class="bottom_30 text-left">The project presents a craft-based construction approach to computation. The pavilion is an important stage, in an ongoing research on customising bricks and computationally generated asymmetrical timbrel vault in India. The form was generated and prototyped at scale 1:5 during SWS 2016.<br><br>
                                There were three major challenges for this project to get built in public space. One, detail structural design, test and certification by an authorised engineer. Two, to fins<span id="dots">...</span> <span id="more"> craftsmen who are skilled to built timbrel (Catalan) vaults without scaffolding and reinforcement. And three, limited funds.<br><br>
                                An institutional collaboration between CEPT University, Hunnarshala & Karigarshala having common research interest found solution to these challenges. The detail structural design, test and reports were made based on building scale 1:1 prototype. This was physically loaded with six ton of uniformly distributed load. And for the construction, the craftsmen and students of Karigarhshala (crafts school) were trained.<br><br>
                                The research elucidates gaps at various levels. Craft based solutions bridging these gaps establish a methodology which makes complex geometry constructible in present-day India when access to digital fabrication methods are still evolving and expensive.</span></p>
                                <button class="more-button" onclick="myFunction()" id="myBtn">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>

          <div class="col-md-8 offset-md-2 portfolio-images top_90 text-center">
                 <figure class="bottom_30"><img src="../images/2017-DigitalCraftsPavilion1-min.jpg" alt=""></figure>
                 <figure class="bottom_30"><img src="../images/2017-DigitalCraftsPavilion2-min.jpg" alt=""></figure>
                 <figure class="bottom_30"><img src="../images/2017-DigitalCraftsPavilion3-min.jpg" alt=""></figure>
                 <figure class="bottom_30"><img src="../images/2017-DigitalCraftsPavilion4-min.jpg" alt=""></figure>
                 <figure class="bottom_30"><img src="../images/2017-DigitalCraftsPavilion5-min.jpg" alt=""></figure>
                 <figure class="bottom_30"><img src="../images/2017-DigitalCraftsPavilion6-min.jpg" alt=""></figure>
                 <figure class="bottom_30"><img src="../images/2017-DigitalCraftsPavilion7-min.jpg" alt=""></figure>
                 <figure class="bottom_30"><img src="../images/2017-DigitalCraftsPavilion8-min.jpg" alt=""></figure>
                 <figure class="bottom_30"><img src="../images/2017-DigitalCraftsPavilion9-min.jpg" alt=""></figure>
          </div>

                <!--<div class="col-md-12 portfolio-nav text-center top_90">
                    <a class="port-next" href="work-6.html">
                        <div class="nav-title">next</div>
                        <div class="next-title">Motorcycles</div>
                    </a>
                </div>
-->
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