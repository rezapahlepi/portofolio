<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="view/css/materialize.min.css"  media="screen,projection"/>
    <!-- my CSS -->
    <link rel="stylesheet" href="view/css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Muhamad Reza Pahlepi </title>
  </head>

  <body id="home" class="scrollspy">

    <!-- navbar -->
    <div class="navbar-fixed">
            <nav class="red darken-1">
                <div class="container">
              <div class="nav-wrapper">

                <a href="#home" class="brand-logo">MRPTech</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#clients">Clients</a></li>
                  <li><a href="#services">Services</a></li>
                  <li><a href="#portofolio">Portofolio</a></li>
                  <li><a href="#contact">Contact Us</a></li>
                </ul>
              </div>
            </div>
            </nav>
    </div>

          <!-- sidenav -->
        <ul class="sidenav" id="mobile-nav">
                <li><a href="#about">About Us</a></li>
                <li><a href="#clients">Clients</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portofolio">Portofolio</a></li>
                <li><a href="#contact">Contact Us</a></li>
        </ul>


        <!-- slider -->
        <div class="slider">
                <ul class="slides">
                  <!-- slider 1 -->
                  <li>
                    <img src="view/img/slider/1.jpg"> <!-- random image -->
                    <div class="caption center-align">
                      <h3>Web Application</h3>
                      <h5 class="light grey-text text-lighten-3">Devlop and Maintenance System</h5>
                    </div>
                    <!-- slider 2 -->
                  </li>
                  <li>
                    <img src="view/img/slider/2.jpg"> <!-- random image -->
                    <div class="caption left-align">
                      <h3>Mobile Application</h3>
                      <h5 class="light grey-text text-lighten-3">Create Mobile App Whatever you want</h5>
                    </div>
                  </li>
                  <!-- slider 3 -->
                  <li>
                    <img src="view/img/slider/3.jpg"> <!-- random image -->
                    <div class="caption right-align">
                      <h3>System Analyst</h3>
                      <h5 class="light grey-text text-lighten-3">Overcome Your problem be second to none</h5>
                    </div>
                  </li>
                </ul>
        </div>

        <!-- About Us -->

        <section id="about" class="about scrollspy">
          <div class="container">
            <div class="row">
              <h3 class="center light grey-text text-darken-2">About Us</h3>
              <div class="col m6" light>
                <h5>Still Grow Up</h5>
                <p>Iam not pro but I'll learn and study for become pro because I have planning and future, if Iam Professional programer, I will create something for this country become good</p>
              </div>
              <div class="col m6">
                <p>WEB DEVELOPMENT</p>
                <div class="progress">
                    <div class="determinate blue " style="width: 70%"></div>
                </div>
                <P>MOBILE DEVELOPMENT</P>
                <div class="progress">
                    <div class="determinate blue " style="width: 50%"></div>
                </div>
                <p>SYSTEM ANALYST</p>
                <div class="progress">
                    <div class="determinate blue " style="width: 60%"></div>
                </div>
              </div>
            </div>

          </div>
        </section>

        <!-- Our CLients -->
        <div id="clients" class="parallax-container scrollspy">
            <div class="parallax"><img src="view/img/parallax/1.jpg"></div>

          <div class="container clients" >
            <h3 class="center light grey-text text-lighten-3">Our CLients</h3>
            <div class="row">
              <div class="col m4 s12 center">
                <img src="view/img/clients/inspire.png">
              </div>
              <div class="col m4 s12 center">
                <img src="view/img/clients/ug.png">
              </div>
              <div class="col m4 s12 center">
                <img src="view/img/clients/devnus.png">
              </div>
            </div>
          </div>
        </div>
        <!-- End Our Clients -->

        <!-- Services -->

        <section id="services" class="services grey lighten-2 scrollspy">
          <div class="container">
            <div class="row">
              <h3 class="light center grey-text text-darken-3">Our Services</h3>
              <div class="col m4 s12">
                <div class="card-panel center">
                    <i class="medium material-icons">web</i>
                  <h5>Web Development</h5>
                  <p>Make web design and Web Application</p>
                </div>
              </div>
              <div class="col m4 s12">
                <div class="card-panel center">
                    <i class="medium material-icons">phone_android</i>
                  <h5>Mobile Development</h5>
                  <p>Coming Soon, Iam still study about that</p>
                </div>
              </div>
              <div class="col m4 s12">
                <div class="card-panel center">
                  <i class="medium material-icons">settings_input_antenna</i>
                  <h5>System Analyst</h5>
                  <p>Come Soon, Iam still study about that</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Sevices -->

        <!-- Portofolio -->
        <section id="portofolio" class="portofolio center scrollspy">
          <div class="container">
            <h3 class="light grey-text text-darken-3">Portofolio</h3>
            <div class="row">
              <div class="col m4 s12">
<!-- image 1--> <img src="view/img/portofolio/karya1.jpg" class="responsive-img materialboxed">
              </div>

              <div class="col m4 s12">
<!-- image 2--> <img src="view/img/portofolio/karya2.jpg" class="responsive-img materialboxed">
              </div>

              <div class="col m4 s12">
<!-- image 3--> <img src="view/img/portofolio/karya3.jpg" class="responsive-img materialboxed">
              </div>

          </div>
        </section>
        <!-- end Portofolio -->

        <!-- Contact US -->
        <section id="contact" class="contact grey lighten-3 scrollspy">
          <div class="container">
            <h3 class="center grey-text text-darken-3">Contact Us</h3>
            <div class="row">
              <div class="col m5 s12">
                <div class="card-panel red darken-1 center">
                  <i class="small material-icons ">contact_mail</i>
                  <h5 class="center light white-text ">Muhamad Reza Pahlepi</h5>
                  <p>Iam graduated enginering from gunadarma university at 2016, my GPA 3.11, iam humble person, polite person, and responsibility person, I can quickly adapt with the new enviroment and I have good communication with others, if you interested with me you can contact me</p>
                </div>

                <ul class="collection with-header">
                  <li class="collection-header"><h5>Our Office</h5></li>
                  <li class="collection-item">Bording House</li>
                  <li class="collection-item">Jl. gang kapuk no 32, Depok</li>
                  <li class="collection-item">West Java, Indonesia</li>
                </ul>

              </div>
              <div class="col m7 s12">
                <form>
                  <div class="card-panel">
                    <h5>Please Fill Out</h5>
                    <div class="input-field">
                      <input type="text" name="name" id="name" required>
                      <label for="name">Name</label>
                    </div>
                    <div class="input-field">
                      <input type="email" name="email" id="email" class="validate">
                      <label for="email">Email</label>
                      <span class="helper-text" data-error="wrong" data-success="right">Type Your Valid Email</span>
                    </div>
                    <div class="input-field">
                      <textarea name="message" id="message" class="materialize-textarea"></textarea>
                      <label for="message">Enter Your Message Here..</label>
                    </div>
                    <button type="submit" class="btn blue lighten-1">Send</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.197506775952!2d106.83590761426318!3d-6.3684658953916635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec123b9fd44f%3A0x40173dbab72c66a6!2sJl.+H.+M.+Tohir%2C+Pondok+Cina%2C+Beji%2C+Kota+Depok%2C+Jawa+Barat+16424!5e0!3m2!1sen!2sid!4v1530705448487" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <!-- End Contact Us -->
