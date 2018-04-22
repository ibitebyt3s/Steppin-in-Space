@extends('layouts.app') @section('content')
<div class="wrapper">
  <div class="content">
    <!-- STARTS ABOUT -->
    <section id="about" class="dark">
      <h2>About <i class="fas fa-question-circle" style="color: #56ff50"></i></h2>
      <div class="clearfix">
        <div id="me"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque cum labore provident, enim voluptate, ratione id molestiae quisquam et libero sed saepe maiores magnam qui blanditiis quo hic ullam dolore a ipsam quia odio. Aliquam eum magnam quo quis consectetur? Exercitationem ullam repudiandae quisquam earum temporibus fugiat veniam natus!</p>
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
      <ul>
        <li>
          <div class="card">
            <img src="img/code1.jpeg" alt="project">
            <div class="card-content">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque sapiente nesciunt, molestiae necessitatibus ratione soluta, dolor dicta voluptas illum fugiat.
            </div>
          </div>
        </li>
        <li>
          <div class="card">
            <img src="img/code1.jpeg" alt="project">
            <div class="card-content">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque sapiente nesciunt, molestiae necessitatibus ratione soluta, dolor dicta voluptas illum fugiat.
            </div>
          </div>
        </li>
        <li>
          <div class="card">
            <img src="img/code1.jpeg" alt="project">
            <div class="card-content">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque sapiente nesciunt, molestiae necessitatibus ratione soluta, dolor dicta voluptas illum fugiat.
            </div>
          </div>
        </li>
      </ul>
    </section>
    <!-- ENDS PORTFOLIO -->
    <div class="parallax-image1">
      <div class="parallax-text">
        <span class="border">
        CONTACT
      </span>
      </div>
    </div>
    <section id="contact">
      <div id="skills">
        <h2>Skills <i class="fas fa-chart-bar" style="color: #259bfa"></i></h2>
        <p>HTML <i class="fab fa-html5" style="color: #f77729"></i>, CSS <i class="fab fa-css3-alt" style="color: #259bfa"></i> & JS <i class="fab fa-js" style="color: #fae421"></i></p>
        <div class="container">
          <div class="skills web">80%</div>
        </div>
        <p>Android <i class="fab fa-android" style="color: #56ff50"></i></p>
        <div class="container">
          <div class="skills android">40%</div>
        </div>
        {{-- python, Machine Learning and Arduino --}}
{{--         <p>iOS <i class="fab fa-apple" style="color: #b34dd4"></i></p>
        <div class="container">
          <div class="skills iOS">10%</div>
        </div> --}}
        <div id="skills-icons">
          <h3>Additional Skills</h2>
                <div class="tooltip">
                    <span class="tooltiptext">Laravel</span>
                 <a href="https://laravel.com/"><img src="img/laravel.png" alt="Laravel"></a>
                 </div>
                <div class="tooltip">
                    <span class="tooltiptext">Vuejs</span>
                 <a href="https://vuejs.org/"><img src="img/vuejs.png" alt="Vuejs"></a>
                      </div>
                <div class="tooltip">
                    <span class="tooltiptext">Bootstrap</span>
                 <a href="https://getbootstrap.com/"><img src="img/bootstrap.png" alt="Bootstrap"></a>
             </div>
                 <div class="tooltip">
                    <span class="tooltiptext">Materilize</span>
                 <a href="http://materializecss.com/"><img src="img/materialize.png" alt="Materilize"></a>
             </div>
                 {{-- <a href=""><img src="img/PS.png" alt="Adobe Photoshop"> --}}
                     <div class="tooltip">
                    <span class="tooltiptext">Adobe Illustrator</span>
                 <a href="https://es.wikipedia.org/wiki/Adobe_Illustrator"><img src="img/AI.png" alt="Adobe Illustrator"  width="" height=""></a>
             </div>
                <p>
                    {{-- <i class="fas fa-language"></i> --}}
                {{-- <i class="fas fa-lock"></i> --}}
                {{-- <i class="fas fa-shopping-bag"></i> --}}
            </p>
    </div>

  </div>
  <div id="vl"></div>
  <div id="contact-me">
    <h2>Contact <i class="fas fa-id-card" style="color: #f77729"></i></h2>
    <form action="">
      <p>
        <label for="email"><i class="fas fa-envelope" style="color: #56ff50"></i> Email:</label>
        <input type="email" name="email" placeholder="Your Email">
      </p>
      <p>
        <label for="message"><i class="fas fa-comment" style="color: #b34dd4"></i> Message:</label>
        <textarea name="message" cols="30" rows="8" placeholder="Send me a message..."></textarea>
      </p>

        <button type="submit"><i class="fas fa-paper-plane"></i> Send</button>
{{--             &nbsp; <a href=""><i class="fab fa-facebook-square"></i></a>
        <a href=""><i class="fab fa-github"></i></a> --}}
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
