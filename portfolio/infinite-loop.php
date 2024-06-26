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
                    <h1 class="title bottom_45 top_120">Infinite Loop, Amul Dairy, Anand</h1>
                     <div class="row">
                        <div class="col-lg-4">
                            <div class="information_text">
                                <ul class="p-0">
                                    <li><b>Location:</b> Amul Dairy, Anand</li>
                                    <li><b>Category:</b> Sculpture</li>
                                    <li><b>Status:</b> Completed</li>
                                    <li><b>Client:</b> Amul, India</li>
                                    <li><b>Area:</b> 19.08 m2 / 205 ft2  </li>
                                    <li><b>Material:</b> Stone </li>
                                    <li><b>Video: </b><a href="https://www.youtube.com/watch?v=XGI00bepgvA">https://www.youtube.com/watch?v=XGI00bepgvA</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <p class="bottom_30 text-left">Infinite Loop is a kinetic sculpture at Amul Dairy campus Anand. It is the symbolic representation of the legacy and values of Amul.</p>
                                <p class="bottom_30 text-left">It means love, beauty & power. This relates to Amul's love for farmers and the power of nation-building. Infinite loop 
                                 <span id="dots">...</span><span id="more"> means a sense of simplicity and balance, the value that the company has had for the last 75 years. The symbol also represents where we are and the endless possibilities we have before us. We connect this with the fact that Amul has not stopped working for even a day for all these years in any circumstance. People and machines work here 24 hours, 365 days tirelessly. To show this dynamism, we wanted the sculpture to be kinetic. The sculpture rotates on a single axis like most of the machines in the dairy.</span></p>
                                <button class="more-button" onclick="myFunction()" id="myBtn">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>
 
                <div class="col-md-8 offset-md-2 portfolio-images top_90 text-center">
                    <figure class="bottom_30"><img src="../images/InfiniteLoop-01.png" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/InfiniteLoop-02.png" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/InfiniteLoop-03.png" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/InfiniteLoop-04.png" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/InfiniteLoop-05.png" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/InfiniteLoop-06.png" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/InfiniteLoop-07.png" alt=""></figure>
                    <figure class="bottom_30"><img src="../images/InfiniteLoop-08.png" alt=""></figure>
                    <figure class="bottom_30"><iframe width="100%" height="400px" src="../images/infinite1.mp4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></figure>
                    <figure class="bottom_30"><iframe width="100%" height="400px" src="../images/infinite2.mp4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></figure>
                    <figure class="bottom_30"><iframe width="100%" height="400px" src="../images/infinite3.mp4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></figure>
                 
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