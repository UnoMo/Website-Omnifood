<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Omnifood</title>
    <link rel="stylesheet" href="vendors/css/normalize.css" />
    <link rel="stylesheet" href="vendors/css/grid.css" />
    <link rel="stylesheet" href="vendors/css/ionicons.min.css" />
    <link rel="stylesheet" href="vendors/css/animate.min.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png" />
    <link rel="manifest" href="images/icons/site.webmanifest" />
    <link rel="mask-icon" href="images/icons/safari-pinned-tab.svg" color="#e67e22" />
    <link rel="shortcut icon" href="images/icons/favicon.ico" />
    <meta name="msapplication-TileColor" content="#e67e22" />
    <meta name="msapplication-config" content="images/icons/browserconfig.xml" />
    <meta name="theme-color" content="#e67e22" />
  </head>
  <body>
    <header>
      <nav>
        <div class="row">
          <img class="logo" src="images/logo-white.png" alt="Omnifood Logo" />
          <img class="logo-black" src="images/logo.png" alt="Omnifood Logo" />
          <ul class="main-nav js--main-nav">
            <li><a href="#features">Food delivery</a></li>
            <li><a href="#steps">How it works</a></li>
            <li><a href="#cities">Our cities</a></li>
            <li><a href="#signup">Sign up</a></li>
          </ul>
          <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
        </div>
      </nav>
      <div class="hero-text-box">
        <h1>Goodbye junk food.<br />Hello super healthy meals.</h1>
        <a class="btn btn-full js--scroll-to-plans" href="#">I’m hungry</a>
        <a class="btn btn-ghost js--scroll-to-start" href="#">Show me more</a>
      </div>
    </header>

    <section class="section-features js--section-features" id="features">
      <div class="row">
        <h2>Get food fast &mdash; not fast food.</h2>
        <p class="long-copy">
          Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for
          cooking. So let us take care of that, we’re really good at it, we promise!
        </p>
      </div>
      <div class="row js--wp-1">
        <div class="col span-1-of-4 box">
          <i class="ion-ios-infinite icon-big"></i>
          <h3>Up to 365 days/year</h3>
          <p>
            Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can
            also choose to order more flexibly if that's your style.
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <i class="ion-ios-clock-outline icon-big"></i>
          <h3>Ready in 20 minutes</h3>
          <p>
            You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We
            work with the best chefs in each town to ensure that you're 100% happy.
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <i class="ion-ios-nutrition-outline icon-big"></i>
          <h3>100% organic</h3>
          <p>
            All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics.
            Good for your health, the environment, and it also tastes better!
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <i class="ion-android-restaurant icon-big"></i>
          <h3>Order anything</h3>
          <p>
            We don't limit your creativity, which means you can order whatever you feel like. You can also choose from
            our menu containing over 100 delicious meals. It's up to you!
          </p>
        </div>
      </div>
    </section>

    <section class="section-meals">
      <ul class="meals-showcase clearfix">
        <li>
          <figure class="meal-photo">
            <img src="images/1.jpg" alt="Korean bibimbap with egg and vegetables" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="images/2.jpg" alt="Simple italian pizza with cherry tomatoes" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="images/3.jpg" alt="Chicken breast steak with vegetables" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="images/4.jpg" alt="Autumn pumpkin soup" />
          </figure>
        </li>
      </ul>
      <ul class="meals-showcase clearfix">
        <li>
          <figure class="meal-photo">
            <img src="images/5.jpg" alt="Paleo beef steak with vegetables" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="images/6.jpg" alt="Healthy baguette with egg and vegetables" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="images/7.jpg" alt="Burger with cheddar and bacon" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="images/8.jpg" alt="Granola with cherries and strawberries" />
          </figure>
        </li>
      </ul>
    </section>

    <section class="section-steps" id="steps">
      <div class="row">
        <h2>How it works &mdash; Simple as 1, 2, 3</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-2 steps-box">
          <img class="app-screen js--wp-2" src="images/app-iPhone.png" alt="Omnifood App on phone" />
        </div>

        <div class="col span-1-of-2 steps-box">
          <div class="works-step">
            <div>1</div>
            <p>Choose the subscription plan that best fits your needs and sign up today.</p>
          </div>

          <div class="works-step">
            <div>2</div>
            <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
          </div>

          <div class="works-step">
            <div>3</div>
            <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
          </div>

          <a href="#" class="btn-app"><img src="images/download-app.svg" alt="Download from AppStore" /></a>

          <a href="#" class="btn-app"><img src="images/download-app-android.png" alt="Download from Google Play" /></a>
        </div>
      </div>
    </section>

    <section class="section-cities" id="cities">
      <div class="row js--wp-3">
        <h2>We're currently in these cities</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-4 box">
          <img src="images/lisbon-3.jpg" alt="Lisbon" />
          <h3>Lisbon</h3>
          <div class="city-feature">
            <i class="ion-ios-person icon-small"></i>
            1600+ happy eaters
          </div>
          <div class="city-feature">
            <i class="ion-ios-star icon-small"></i>
            60+ top chefs
          </div>
          <div class="city-feature">
            <i class="ion-social-twitter icon-small"></i>
            <a href="#">@omnifood_lx</a>
          </div>
        </div>
        <div class="col span-1-of-4 box">
          <img src="images/san-francisco.jpg" alt="San Francisco" />
          <h3>San Francisco</h3>
          <div class="city-feature">
            <i class="ion-ios-person icon-small"></i>
            3700+ happy eaters
          </div>
          <div class="city-feature">
            <i class="ion-ios-star icon-small"></i>
            160+ top chefs
          </div>
          <div class="city-feature">
            <i class="ion-social-twitter icon-small"></i>
            <a href="#">@omnifood_sf</a>
          </div>
        </div>
        <div class="col span-1-of-4 box">
          <img src="images/berlin.jpg" alt="Berlin" />
          <h3>Berlin</h3>
          <div class="city-feature">
            <i class="ion-ios-person icon-small"></i>
            2300+ happy eaters
          </div>
          <div class="city-feature">
            <i class="ion-ios-star icon-small"></i>
            110+ top chefs
          </div>
          <div class="city-feature">
            <i class="ion-social-twitter icon-small"></i>
            <a href="#">@omnifood_berlin</a>
          </div>
        </div>
        <div class="col span-1-of-4 box">
          <img src="images/london.jpg" alt="London" />
          <h3>London</h3>
          <div class="city-feature">
            <i class="ion-ios-person icon-small"></i>
            1200+ happy eaters
          </div>
          <div class="city-feature">
            <i class="ion-ios-star icon-small"></i>
            50+ top chefs
          </div>
          <div class="city-feature">
            <i class="ion-social-twitter icon-small"></i>
            <a href="#">@omnifood_london</a>
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonials">
      <div class="row">
        <h2>Our customers can't live without us</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <blockquote>
            Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is
            a life-saver. Now that I got used to it, I couldn't live without my daily meals!
            <cite> <img src="images/customer-1.jpg" alt="Alberto Duncan" /> Alberto Duncan </cite>
          </blockquote>
        </div>
        <div class="col span-1-of-3">
          <blockquote>
            Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here
            in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
            <cite> <img src="images/customer-2.jpg" alt="Joana Silva" /> Joana Silva </cite>
          </blockquote>
        </div>
        <div class="col span-1-of-3">
          <blockquote>
            I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up
            with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
            <cite> <img src="images/customer-3.jpg" alt="Milton Chapman" /> Milton Chapman </cite>
          </blockquote>
        </div>
      </div>
    </section>

    <section class="pricing js--pricing" id="signup">
      <div class="row">
        <h2>Start eating healthy today</h2>
      </div>

      <div class="row">
        <div class="col span-1-of-3">
          <div class="price-box js--wp-4">
            <div>
              <h3>Premium</h3>
              <p class="price-plan">399$ <span>/ month</span></p>
              <p class="price-meal">That’s only 13.30$ per meal</p>
            </div>
            <div>
              <ul>
                <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal every day</li>
                <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
                <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
                <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
              </ul>
            </div>
            <div>
              <a class="btn btn-full" href="#">Sign up now</a>
            </div>
          </div>
        </div>
        <div class="col span-1-of-3">
          <div class="price-box">
            <div>
              <h3>Pro</h3>
              <p class="price-plan">149$ <span>/ month</span></p>
              <p class="price-meal">That’s only 14.90$ per meal</p>
            </div>
            <div>
              <ul>
                <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal 10 days/month</li>
                <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
                <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
                <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
              </ul>
            </div>
            <div>
              <a class="btn btn-ghost" href="#">Sign up now</a>
            </div>
          </div>
        </div>
        <div class="col span-1-of-3">
          <div class="price-box">
            <div>
              <h3>Starter</h3>
              <p class="price-plan">19$ <span>/ meal</span></p>
              <p class="price-meal">&nbsp;</p>
            </div>
            <div>
              <ul>
                <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal</li>
                <li><i class="ion-ios-checkmark-empty icon-small"></i>Order from 8 am to 12 pm</li>
                <li><i class="ion-ios-close-empty icon-small"></i></li>
                <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
              </ul>
            </div>
            <div>
              <a class="btn btn-ghost" href="#">Sign up now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-form" id="form">
      <div class="row">
        <h2>We're happy to hear from you</h2>
      </div>
      <div class="row">
        <form action="mailer.php" method="post" class="contact-form">
          <div class="row">

              <?php
                if($_GET['success'] == 1) {
                    echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
                } 
                if($_GET['success'] == -1) {
                    echo "<div class=\"form-messages error\">Something went wrong. Please try again.</div>";
                }                             
              ?>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label for="name">Name</label>
            </div>
            <div class="col span-2-of-3">
              <input type="text" name="name" id="name" placeholder="Your name" required />
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label for="email">Email</label>
            </div>
            <div class="col span-2-of-3">
              <input type="email" name="email" id="email" placeholder="Your email" required />
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label for="find-us">How did you find us?</label>
            </div>
            <div class="col span-2-of-3">
              <select name="find-us" id="find-us">
                <option value="optFriends">Friends</option>
                <option value="optSearc" selected>Search Engine</option>
                <option value="optAdv">Advertisment</option>
                <option value="optOther">Other</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label>Newsletter?</label>
            </div>
            <div class="col span-2-of-3">
              <input type="checkbox" name="newsletter" id="newsletter" checked /> Yes, please!
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label>Drop us a line </label>
            </div>
            <div class="col span-2-of-3">
              <textarea name="message" id="message" placeholder="Your message"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label>&nbsp;</label>
            </div>
            <div class="col span-2-of-3">
              <input class="btn btn-full" type="submit" value="Send it!" />
            </div>
          </div>
        </form>
      </div>
    </section>

    <footer>
      <div class="row">
        <div class="col span-1-of-2">
          <ul class="foot footer-nav">
            <li><a href="#">About us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">iOS App</a></li>
            <li><a href="#">Android App</a></li>
          </ul>
        </div>
        <div class="col span-1-of-2">
          <ul class="foot social-links">
            <li>
              <a href="#"><i class="ion-social-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="ion-social-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="ion-social-googleplus"></i></a>
            </li>
            <li>
              <a href="#"><i class="ion-social-instagram"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <p>Copyright &copy; 2021 by Omnifood. All rights reserved</p>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
