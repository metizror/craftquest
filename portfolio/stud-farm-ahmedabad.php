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
                    <h1 class="title bottom_45 top_120">Stud Farm Ahmedabad</h1>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="information_text">
                                <ul class="p-0">
                                    <li><b>Location:</b> Bhavda, Gujarat</li>
                                    <li><b>Category:</b> Architecture</li>
                                    <li><b>Status:</b> Completed</li>
                                    <li><b>Client:</b> </li>
                                    <li><b>Area:</b> 1350 m2</li>
                                    <li><b>Material:</b> Ferrocement, MS Pipe, Clay Tiles</li>
                                    <li><b>Video:</b><a href="https://youtu.be/QGWr3K41rBw"> https://youtu.be/QGWr3K41rBw</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <p class="bottom_30 text-left">Located in the urban periphery of the city, Shivshakthi Farm is an ecosystem for horses, cows, small animals like sheep, rabbits, dogs and chickens. Single roof rising from the ground (measuring thousand square meters), floating in the air and merging back with the ground forms a generous landscape in the lush green surroundings.<span id="dots">...</span> </p><span id="more">
                                <p class="bottom_30 text-left">The form is guided around the horse rink, which is the center of the layout. Facing this large animal area, a small pavilion for humans is designed with a 180 degree panoramic view of the farm that can be enjoyed from the verandah of this pavilion. The form of the roof is generated using RhinoVault and will be constructed using ferrocement.</p></span>
                                <button class="more-button" onclick="myFunction()" id="myBtn">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>
 
                <div class="col-md-8 offset-md-2 portfolio-images top_90 text-center">
                    <figure class="bottom_30"><img src="../images/112_SSF-2-1-e1597667341345.png" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/112_SSF-1-3-e1597666907683.png" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/112_SSF-4-3-e1597667694771.png" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/112_SSF-3-e1597666229894.png" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/farm2.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/farm3.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/farm4.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/farm5.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/farm6.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/farm7.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/farm8.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/farm9.jpg" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/farm10.jpg" alt=""></figure>
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