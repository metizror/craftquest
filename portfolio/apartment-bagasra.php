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
                    <h1 class="title bottom_45 top_120">Apartments, Bagasra </h1>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="information_text">
                                <ul class="p-0">
                                    <li><b>Location:</b> Bagasra</li>
                                    <li><b>Category:</b> Residential architecture</li>
                                    <li><b>Status:</b> Sheth Developers</li>
                                    <li><b>Client:</b> Arvind Thakker</li>
                                    <li><b>Area:</b> Site 3000 sq mts. Built up 12500 sq mts</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <p class="bottom_30 text-left">“Rurban” - Rural + Urban. Shree Gopal Nivas was an ancestral house of prestigious businessman. It had large courtyard, finely carved wooden beam and post structure with exquestily carved wooden balcony in the corner facing chowk. Designing an apartment by<span id="dots">...</span> <span id="more"> demolishing the house was challenging. Proposed design reflects sensitivity of present lifestyle and materiality of rural context.<br><br>
                                In addition to basic requirements of living, each apartment has a large balcony with jula which is part of rural lifestyle. Envelope reflects balance of brick facade one diagonal ends reminding old wooden balcony. Perforation in the brick facade is carefully designed for ventilation and to hold oil lamps during festival.</span></p>
                                <button class="more-button" onclick="myFunction()" id="myBtn">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 offset-md-2 portfolio-images top_90 text-center">
                    <figure class="bottom_30"><img src="../images/1.cover.apartment.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/2-aprtment.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/3-aprtment.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/4--aprtment.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/5-aprtment.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/6-aprtment.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/7-aprtment.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/8.1-aprtment.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/8-aprtment.jpg" alt=""></figure>
                    
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