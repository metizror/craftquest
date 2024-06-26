  <style>
     #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 35px;
  height: 50px;
  width: 50px;
  text-align: center;
}

#myBtn:hover {
  background-color: #555;
}
.sticky{
	padding: 10px 30px;
    width: 100%;
    position: sticky;
    z-index: 5;
    top: 0;
    background: #f8f9fa;
    box-shadow: 1px 1px white;
    z-index: 111111;
}
.sticky .nav-icon{
	transform: translateY(100%);
}
 </style>
 <a onclick="topFunction()" id="myBtn" title="Go to top"><i class="fab fa fa-arrow-up"></i></a>

 <footer>
       <div class="cont">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 copyright">
                 <!--   <img src="images/logo.png" alt="">-->
                    <p>Copyright 2010. Craftquest's Property. All rights reserved.</p>
                </div>
                <div class="col-md-3 d-sm-none d-md-block">
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook"></i>  </a>
                        <a href="https://twitter.com/CraftQuest_ind/" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
                        <a href="https://www.linkedin.com/company/craft-quest/?viewAsMember=true"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/craftquest_india/"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
                        <a href="https://www.youtube.com/channel/UC9cg-Hs4SiXeDgS1YSXwFog"><i class="fab fa-youtube" aria-hidden="true"></i>  </a>
                       <!-- <a href="#"><i class="fab fa-behance" aria-hidden="true"></i>  </a>
                        <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i>  </a>-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 d-none d-sm-block getintouch">
                    <a href="#">
                        <strong>Get In Touch</strong><br>
                        <p>to@craftquest.in</p>
                    </a>
                </div>
            </div>
       </div>
    </footer>

    <!-- Javascripts -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/particles.js?v=0.1"></script>
    <script src="js/app.js"></script>
    <script src="js/jquery.hover3d.js"></script>
    <script src="twitter-api/tweetie.js"></script>
    <script src="js/main.js"></script>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    mybutton.style.display = "block";
    $('header').addClass('sticky');
  } else {
    mybutton.style.display = "none";
    $('header').removeClass('sticky');
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

</script>
</body>
</html>
