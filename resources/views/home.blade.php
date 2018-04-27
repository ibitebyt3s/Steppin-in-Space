@extends('layouts.app') @section('content')
<div class="wrapper">
  <div class="content">
    <!-- STARTS ABOUT -->
    <section id="about" class="dark">
      <h2>About <i class="fas fa-question-circle light-green"></i></h2>
      <div class="clearfix">
        <div id="me"></div>
        <p> My name is Luis Lopez and
            <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque cum labore provident, enim voluptate, ratione id molestiae quisquam et libero sed saepe maiores magnam qui blanditiis quo hic ullam dolore a ipsam quia odio. Aliquam eum magnam quo quis consectetur? Exercitationem ullam repudiandae quisquam earum temporibus fugiat veniam natus!</p>
      </div>
    </section>
    <div class="parallax-image1">
      <div class="parallax-text">
        <span class="border">
        PORTFOLIO
      </span>
      </div>
    </div>
    <!-- ENDS ABOUT -->
    <!-- STARTS PORTFOLIO -->
    <section id="portfolio" class="dark">
      <h2>Projects I Have Done <i class="fas fa-code blue"></i></h2>
      <ul>
        <li>
          <div class="card">
            <img src="img/code1.jpeg" alt="project">
            <div class="card-content">
              An Arduino Robotic Arm that is controlled with a the computers keyboard.
            </div>
          </div>
        </li>
        <li>
          <div class="card">
            <img src="img/code1.jpeg" alt="project">
            <div class="card-content">
              A Python program that helped me and my classmates do our math's homework.
            </div>
          </div>
        </li>
        <li>
          <div class="card">
            <img src="img/code1.jpeg" alt="project">
            <div class="card-content">
              An attempt to do a smarthouse web interface with Raspberry Pi and Nodejs.
            </div>
          </div>
        </li>
      </ul>
    </section>
    <!-- ENDS PORTFOLIO -->
    <div class="parallax-image1">
      <div class="parallax-text">
        <span class="border">
        SKILLS & CONTACT
      </span>
      </div>
    </div>
    <section id="contact">
      <div id="skills">
        <h2>Skills <i class="fas fa-chart-bar blue"></i></h2>
        <p>HTML <i class="fab fa-html5 orange"></i>, CSS <i class="fab fa-css3-alt blue"></i> & JS <i class="fab fa-js yellow"></i></p>
        <div class="container">
          <div class="skills web">80%</div>
        </div>
        <p>Android <i class="fab fa-android light-green"></i></p>
        <div class="container">
          <div class="skills android">40%</div>
        </div>
        <!-- Skills Big Icons -->
          <h3>Additional Variable Level Skills:</h3>
                  <div id="skills-icons">

          <div class="tooltip">
            <span class="tooltiptext">Laravel</span>
            <a href="https://laravel.com/"><img src="img/laravel.png" alt="Laravel"></a>
          </div>
          <div class="tooltip">
            <span class="tooltiptext">Vuejs</span>
            <a href="https://vuejs.org/"><img src="img/vuejs.png" alt="Vuejs"></a>
          </div>
{{--           <div class="tooltip">
            <span class="tooltiptext">Angular JS</span>
            <a href="https://angularjs.org/"><img src="img/angular.png" alt="Angluar JS"></a>
          </div> --}}
          <div class="tooltip">
            <span class="tooltiptext">Bootstrap</span>
            <a href="https://getbootstrap.com/"><img src="img/bootstrap.png" alt="Bootstrap"></a>
          </div>
{{--           <div class="tooltip">
            <span class="tooltiptext">Materilize</span>
            <a href="http://materializecss.com/"><img src="img/materialize.png" alt="Materilize"></a>
          </div> --}}
          <div class="tooltip">
            <span class="tooltiptext">Adobe Illustrator</span>
            <a href="https://es.wikipedia.org/wiki/Adobe_Illustrator"><img src="img/AI.png" alt="Adobe Illustrator"></a>
          </div>
          <div class="tooltip">
            <span class="tooltiptext">PHP</span>
            <a href=""><img src="img/php.svg" alt="PHP"></a>
          </div>
{{--           <div class="tooltip">
            <span class="tooltiptext">MySql</span>
            <a href="https://www.mysql.com/"><img src="img/mysql.png" alt="MySql"></a>
          </div> --}}
          <div class="tooltip">
            <span class="tooltiptext">Git</span>
            <a href="https://git-scm.com/"><img src="img/git.png" alt="Git"></a>
          </div>
          <div class="tooltip">
            <span class="tooltiptext">Python</span>
            <a href=""><img src="img/python.png" alt="Python"></a>
          </div>
          <div class="tooltip">
            <span class="tooltiptext">Machine Learning</span>
            <a href="https://en.wikipedia.org/wiki/Machine_learning"><img src="img/ml.png" alt="Machine Learning"></a>
          </div>
          <div class="tooltip">
            <span class="tooltiptext">Arduino</span>
            <a href="https://www.arduino.cc/"><img src="img/arduino.png" alt="Arduino"></a>
          </div>
          <div class="tooltip">
            <span class="tooltiptext">German (Beginner)</span>
            <a href="https://en.wikipedia.org/wiki/Germany"><img src="img/germany.png" alt="Germany"></a>
          </div>
          <div class="tooltip">
            <span class="tooltiptext">French (Beginner)</span>
            <a href="https://en.wikipedia.org/wiki/France"><img src="img/france.png" alt="France"></a>
          </div>
          <div class="tooltip">
            <span class="tooltiptext">Spanish (Native)</span>
            <a href="https://en.wikipedia.org/wiki/Mexico"><img src="img/mexico.png" alt="Mexico"></a>
          </div>
        </div>
      </div>
      <div id="contact-me">
        <h2>Contact <i class="fas fa-id-card orange"></i></h2>
        <form action="">
          <label for="email"><i class="fas fa-envelope light-green"></i> Email:</label>
          <input type="email" name="email" placeholder="(Not Working Yet) Your Email">
          <label for="message"><i class="fas fa-comment purple"></i> Message:</label>
          <textarea name="message" cols="20" rows="8" placeholder="Send me a message..."></textarea>
          <button type="submit"><i class="fas fa-paper-plane"></i> Send</button>
          <div id="social-buttons">
              <ul>
                <li>
                  <a href=""><i class="fab fa-facebook-square light-blue"></i></a>
                </li>
                <li>
                    <a href=""><i class="fab fa-github blue"></i></a>
                </li>
                <li>
                    <a href=""><i class="fab fa-linkedin purple"></i></a>
                </li>
              </ul>
          </div>
        </form>
      </div>
    </section>
    <div class="parallax-image1">
      <div class="parallax-text">
        <span class="border">
        THANKS FOR STOPPING BY
      </span>
      </div>
    </div>
  </div>
</div>
@endsection
