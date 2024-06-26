<?php include('header.php'); ?>

    <!-- SITE CONTENT -->
    <div class="wrapper">
        <section class="titlebar">
            <h1 class="page-title"><span>Contact </span>us</h1>
            <div id="particles-js"></div>
        </section>
        
        <hr class="col-md-6 bottom_60">

        <div class="cont">
            <!-- <h3>Vacancies</h3>
            <p>We are looking for creative and passionate individuals for the post of architect and intern.</p>
            <p> Experience/knowledge in generative design and digital fabrication is preferred.</p>
            <p> Software + Skills required: Rhinocerous 5.0, Grasshoper, Architectural rendering and presentation</p>
            <p> Interested candidates shall write us </p> -->
            <section class="contact col-md-8 offset-md-2 top_90">
                
                <div class="contact-form top_90">
                    <form class="row" action="ajexmail.php" method="post">
                        <div class="col-md-6">
                            <input class="inp" name="name" type="text" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <input class="inp" name="email" type="Email" placeholder="Email">
                        </div>
                        <div class="col-md-12">
                            <textarea placeholder="Your Message" rows="6" name="message" class="col-md-12 form-message"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <input type="submit" value="Submit" class="site-btn2">
                        </div>
                    </form>                    
                </div>
          </section>

            <div class="contact-info">
                    <h3>Craft quest</h3>
                    <p><b>Address :</b> A-1103, Siddhi Vinayak Tower, b/h D.C.P. Office, off, Sarkhej - Gandhinagar Hwy, Makarba, Ahmedabad, Gujarat 380051</p>
                    <p><b>Phone :</b> 098250 69950</p>
            </div>

          <div class="contact-info">
                                    <h3>Write to us</h3>

<!--                    <p>1444 S. Alameda Street Los Angeles, California 90021 </p> 
-->                    <a href="mailto:to@craftquest.in" style="color:#212529;"> <p>to@craftquest.in</p></a> 
                    <p> +91 79661 70847</p>
                </div>

        </div> <!-- cont end -->
    </div> <!-- wrapper end -->
<?php include('footer.php');?>
