<div id="pound-nav"></div>
<div class="green-prompt">
    <h1>Have you got goals? Let’s do this&#33;</h1>
    <h2>It’s all about you&#33; Your health and fitness journey</h2>
</div><!-- end of green-prompt -->

<div class="pound-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1"> 

                <h2>What is Pound&#63;&#63;</h2>
                
                <h3>Pound&#174; is an incredibly effective cardio workout, where you can jam out and become the music with the infectious and energising fun of playing the drums&#33;</h3>

                <p class="column-text">
                    Using Ripstix&#174;, drumsticks that are lightly weighted and specifically engineered for exercising, to transform the fun of playing the drums into a full body workout. Pound&#174; combines cardio, conditioning, and strength training with yoga and pilates-inspired movements.
                    
                    Designed to improve your rhythm, timing, coordination, speed, agility and endurance. Pound&#174; is about bringing people together through the love of music. It&#39;s a chance to release your inner rockstar, to let loose and have fun no matter what age or fitness level!  
                </p>

            </div><!-- end of col-sm-10 col-sm-offset-1 -->
        </div><!-- end of row -->
    </div><!-- end of container-fluid --> 
    
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="{{asset('assets/images/slider/img-1.jpg')}}" alt="Group Photo">
          </div>

          <div class="item">
            <img src="{{asset('assets/images/slider/img-2.jpg')}}" alt="Ripstix Hand">
          </div>

          <div class="item">
            <img src="{{asset('assets/images/slider/img-3.jpg')}}" alt="Rock Shot">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><!-- end of myCarousel --> 
      
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1"> 

                <h2>Come along and join our class&#33;</h2>
                
                <h3>Pound&#174; sessions can be done from anywhere so locations may vary. For any enquiries or further information please contact Amy. Why not give it a go and sign up today&#33;</h3>
                
                <div class="col-sm-7 col-md-7">
                   <div class="reg-sessions">
                        <h2>Regular sessions</h2>
                        <div class="grey-box">
                            <h3>Aspire Health &amp; Sports Tauranga</h3>
                            <p>Saturday Mornings - 7.30AM-8.15AM</p>
                            <p>Wednesday Mornings - 6AM-7.30AM</p>
                            <p>Friday Nights - 6.45PM-7.30PM</p>
                            <h3>239 SH2 Bethlehem Hall Tauranga</h3>
                            <p>Monday Nights - 6PM-6.45PM</p>
                            <p>Wednesday Nights - 6PM-6.45PM</p> 
                        </div><!-- end of grey-box -->
                    </div><!-- end of reg-sessions -->
                </div><!-- end of col-sm-7 -->

                <div class="col-sm-5 col-md-5">
                   <div class="session-costs">
                        <h2>Sessions Costs</h2>
                        <div class="grey-box">
                            <p>$5 - First class for newbies</p>
                            <p>$10 - Casual class</p>
                            <p>$40 - 5x Classes</p>
                        </div><!-- end of grey-box -->

                        <div class="pound-logo">
                            <img src="{{asset('assets/images/pound-logo.png')}}" alt="Pound Logo">
                        </div><!-- end of pound logo -->
                    </div><!-- end of session-costs --> 
                </div><!-- end of col-sm-5 -->

            </div><!-- end of col-sm-10 col-sm-offset-1 -->
        </div><!-- end of row -->
    </div><!-- end of container-fluid -->
    
    <div class="reg-back-img" style="background-image: url('{{asset('assets/images/pound-class1.jpg')}}')">
        <div class="reg-log-container">
                <h2>Want to join pound&#63;</h2>
                <h3>Register now to make a booking&#33;</h3>
                <div class="reg-btn-pos">
                    <a href="{{ url('/register') }}" type="button" class="btn btn-lg register-btn grow">Register</a>
                </div>
                    <p class="form-redirect-text">Already Registered&#63;</p>
                <div class="log-btn-pos">
                    <a href="{{ url('/login') }}" type="button" class="btn btn-lg login-btn grow">Login</a>
                </div>    
        </div><!-- end of reg-log-container --> 
    </div><!-- end of reg-back-img -->    
</div><!-- end of pound-container -->