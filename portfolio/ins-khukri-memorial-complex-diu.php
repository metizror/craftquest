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
                    <h1 class="title bottom_45 top_120">INS Khukri Memorial Complex, Diu</h1>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="information_text">
                                <ul class="p-0">
                                    <li><b>Location:</b> Diu, Gujarat</li>
                                    <li><b>Category:</b> Architecture</li>
                                    <li><b>Status:</b> Completed</li>
                                    <li><b>Client:</b> Government of UT</li>
                                    <li><b>Area:</b> 45000 m2</li>
                                    <li><b>Architect:</b> Amitabh Teaotia Designs</li>
                                    <li><b>CQ:</b> Associate Architects</li>
                                    <li><b>Video:</b><a href="https://youtu.be/FhSzkP4qp-g"> https://youtu.be/FhSzkP4qp-g</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <p class="bottom_30 text-left">The Khukri Memorial has been expanded to an elaborate complex. It comprises of the Khukri park and merges into the original memorial hill. The entry is through the park. The memorial complex also consists of a solar car park thus making the entire area energy neutral. The car park also serves the Chakratith beach which because of its shallow depth is been designed as special children's <span id="dots">...</span> <span id="more">beach. One can enter this beach both from the memorial and the car park. Adjacent to the car park a special beach administration plaza is proposed which will also include swimming and scuba gear and other play equipment.<br><br>
                                At the tie junction linking the beach, park and hill is another plaza where memorabilia of the INS Khukri will be available including restaurants and toilets. As one climbs the hill, one is confronted with a gentle slope which goes round the hill thus exposing the visitor to the view of the ocean. Reaching the top one arrives at a memorial of a suspended scaled model of INS Khukri enclosed in a glass pavilion. The names of the martyrs will be etched on the glass walls. On the south side of the hill, there is an existing amphitheatre. It is proposed to upgrade the amphitheatre to international standards with proper green rooms and stage lighting. It may be noted that there are very few amphitheatres on the sea coast and well known globally. A refurbished amphitheatre where international events can take place would be falling in the same category. As you walk around the hill, there will be 261 lights in the flower bed symbolising crew members. When looked at from a distance, they will be 268 stars shining on the hill.<br><br>
                                The Khukri park will comprise of an experience of the interior of the war ship through a series of art installations. In the park, it is proposed to plant 261 trees: Barringtonia Racemosa (Sultan Champa) in honour of each crew member of the ship.</span></p>
                            </span>
                                <button class="more-button" onclick="myFunction()" id="myBtn">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>
 
                <div class="col-md-8 offset-md-2 portfolio-images top_90 text-center">
                    <figure class="bottom_30"><img src="../images/INSkhukri-01-min.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/INSkhukri-02-min.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/INSkhukri-03-min.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/INSkhukri-04-min.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/INSkhukri-05-min.jpg" alt=""></figure>
                    <!-- <figure class="bottom_30"><iframe width="100%" height="400px" src="https://youtu.be/FhSzkP4qp-g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></figure> -->
                 
                </div>

              <!--  <div class="col-md-12 portfolio-nav text-center top_90">
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