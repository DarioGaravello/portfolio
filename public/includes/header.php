<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" href="./public/css/style.php" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
    <title>Portfolio Dario Garavello</title>
  </head>
  
  <body>
  <header id="home">
      <section class="header-container">
        <div class="title-welcome">
          <div class="image-profile">
            <img src="./public/css/img/profile-img.jpg" alt="dario-garavello">
          </div>
          <h1>Hello world,<br> my name is Dario Garavello. <br>I am a <span>web developer</span></h1>
          <p>Let's browse for my knowledge</p>
          <a href="#about" ><button>Let's go</button></a>
        </div>
      </section>
    </header>
    
    <nav class="navbar-container">
      <ul class="nav-a">
        <li><a data-scroll href="#home">Home</a></li>
        <li><a data-scroll href="#about" id="aboutNav">About</a></li>
        <li><a data-scroll href="#skills" id="skillsNav">Skills</a></li>
        <li><a data-scroll href="#project" id="projectNav">Projects</a></li>
        <li><a data-scroll href="#contact" id="contactNav">Contact</a></li>
      </ul>
    </nav>
    
    <section class="about-container" id="about">
      <div class="about-title">
        <h3>About</h3>
        <canvas width="120" height="10" class="line-canvas"></canvas>
      </div>
      <div class="about-flex">
        <h2>Starting my website with the most wanted</h2>
        <span>
          Since i've been working on developer web, i'd given my first step on the most used front-end, like HTML5, CSS3 and Javascript, coding between Vanilla Javascript and Jquery. By the backend, i often use PHP making forms and SQL database. The first website i have created was "Catering Kusco Cocina", and i've trying out the code learning more JS integrated ES6 and fullstack, making me evolve from developer and person, making solutions, making clean code.
          <section class="icons-grid">
              <div>
                <i class="fab fa-html5 fa-5x"></i><br />
              </div>
              <div>
                <i class="fab fa-css3 fa-5x"></i> <br />
              </div>
              <div>
                <i class="fab fa-js-square fa-5x" id="skills"></i><br />
              </div>
            </section>
        </span>
      </div>
    </section>

      <section class="skills-container">
        <section class="skills">
          <div class="skills-description">
            <h3>Skills</h3>
            <canvas width="120" height="10" class="line-canvas-two"></canvas>
            <p>I mostly develop on Javascript, using a fullstack like MERN (MongoDB, Expressjs, React, Nodejs), but i have not priorities at only one, I got the basics knowledge from software like LAMP (Linux, Apache, MySQL, PHP), all learning by my own. </p>
          </div>
          <div class="graphic-chart">
            <canvas max-width="320" max-height="360" id="circle-canvas"></canvas><br>
          </div>
        </section>
      </section>

      <div class="bar-about">
        <h3>On graphics</h3>
        <span>
          On the graphic bellow shows how often code with every software
        </span>
      </div>
      
      <div class="bar-title">
        <h4>Front-end</h4>
      </div>
      <section class="bar-container">
        <div class="bar-flex">
          <div class="bar-fill" style="background: linear-gradient(0.25turn,#00DEDB, #33afff);" title="90%">
            <div class="tag-bold-flex">HTML</div>
          </div>
        </div>

        <div class="bar-flex">
          <div class="bar-fill" style="background: linear-gradient(0.25turn,#00DEDB, #33afff);" title="90%">
            <div class="tag-bold-flex">CSS</div>
          </div>
        </div>

        
        <div class="bar-flex">
          <div class="bar-fill" style="background: linear-gradient(0.25turn, #013741, #00DEDB);" title="70%">
            <div class="tag-bold-flex">Reactjs</div>
          </div>
        </div>

        <div class="bar-flex">
          <div class="bar-fill" style="background-color: #de0000;" title="30%">
            <div class="tag-bold-flex">Angular</div>
          </div>
        </div>

        <div class="bar-flex">
          <div class="bar-fill" style="background: linear-gradient(0.25turn, #013741, #00DEDB);" title="70%">
            <div class="tag-bold-flex">Bootstrap</div>
          </div>
        </div>

        <div class="bar-flex">
          <div class="bar-fill" style="background-color: #de0000;"  title="30%">
            <div class="tag-bold-flex">SASS</div>
          </div>
        </div>

      </section>
      <div class="bar-title">
        <h4>Back-end</h4>
      </div>
      <section class="bar-container">
        <div class="bar-flex">
          <div class="bar-fill" style="background-color: #de0000;" title="30%">
            <div class="tag-bold-flex">Nodejs</div>
          </div>
        </div>

        <div class="bar-flex">
          <div class="bar-fill" style="background: linear-gradient(0.25turn, #013741, #00DEDB);" title="70%">
            <div class="tag-bold-flex">Expressjs</i></div>
          </div>
        </div>
        
        <div class="bar-flex">
          <div class="bar-fill" style="background: linear-gradient(0.25turn, #013741, #00DEDB);" title="70%">
            <div class="tag-bold-flex">PHP</i></div>
          </div>
        </div>
        
        <div class="bar-flex">
          <div class="bar-fill" style="background-color: #de0000;" title="30%">
            <div class="tag-bold-flex">Laravel</div>
          </div>
        </div>
        
        <div class="bar-flex">
          <div class="bar-fill" style="background: linear-gradient(0.25turn,#de009b,#2584c2);" title="60%">
            <div class="tag-bold-flex">MySQL</div>
          </div>
      </div>
      <div class="bar-flex">
        <div class="bar-fill" style="background: linear-gradient(0.25turn,#de009b, #de0000);" title="40%">
          <div class="tag-bold-flex">MongoDB</div>
        </div>
      </div>
      </section>
      
      <div class="bar-title">
        <h3>Others</h3>
      </div>
      
      <section class="bar-container">
        <div class="bar-flex">
          <div class="bar-fill" style="background-color: #de0000;" title="30%">
            <div class="tag-bold-flex">Java</div>
          </div>
        </div>
  
        <div class="bar-flex">
          <div class="bar-fill" style="background-color: #de0000;" title="30%">
            <div class="tag-bold-flex">C++</div>
          </div>
        </div>
      
        <div class="bar-flex">
          <div class="bar-fill" style="background: linear-gradient(0.25turn,#de009b,#2584c2);" title="60%">
            <div class="tag-bold-flex" id="project">TypeScript</div>
          </div>
        </div>
        <div class="bar-flex">
          <div class="bar-fill" style="background: linear-gradient(0.25turn,#00DEDB, #33afff);" title="90%">
            <div class="tag-bold-flex" id="project">Babel</div>
          </div>
        </div>
        <div class="bar-flex">
          <div class="bar-fill" style="background: linear-gradient(0.25turn,#00DEDB, #33afff);"" title="90%">
            <div class="tag-bold-flex" id="project">Webpack</div>
          </div>
        </div>
      </section>

      <section class="project-container">
        <div class="project">
          <div class="project-title">
            <h3>Projects</h3>
          </div>
          <div class="examples">
            <a href="https://cateringkuscococina.herokuapp.com/"><img src="./public/css/img/catering-kusco-cocina.png" alt="catering-kusco-cocina"></a>
          </div>
        </div>
      </section>