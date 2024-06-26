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
                    <h1 class="title bottom_45 top_120">Iconic Structure, Ahmedabad </h1>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="information_text">
                                <ul class="p-0">
                                    <li><b>Location:</b> Ahmedabad</li>
                                    <li><b>Category:</b> Cultural Centre </li>
                                    <li><b>Status:</b> Winning entry, competition</li>
                                    <li><b>Client:</b> Ahmedabad Municipal Corporation</li>
                                    <li><b>Area:</b> Site 16000 sq mts. Meditation center 2000 sq mts</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <p class="bottom_30 text-left">Iconic structure is an open competition invited by Sabarmati Riverfront Development Authority. The aim of the spiritual center is to create an environment of increasing intensity of silence at the center. Proposed design is a journey through water and sky; sensitizing all five senses.Journey begins with a path leading to the<span id="dots">...</span> <span id="more"> cave form of mediation halls opening into a pavilion-overlooking river. One continues to walk up towards an earth-covered terrace. Taking a glass elevator from here, one goes up to an open terrace at 60 meters height. Views at this height are exceptional. Entire experience in silence and soft music helps one to reconnect with himself/herself.</span></p>
                                <button class="more-button" onclick="myFunction()" id="myBtn">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 offset-md-2 portfolio-images top_90 text-center">
                    <figure class="bottom_30"><img src="../images/iconic1.jpeg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/iconic2.jpeg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/iconic3.jpeg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/iconic4.jpeg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/iconic5.jpeg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/iconic6.jpeg" alt=""></figure>
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