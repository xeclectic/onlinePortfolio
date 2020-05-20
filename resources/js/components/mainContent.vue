<template>
  <div>
    <p id="projects" class="col s12 m12 l12 center-align">Projects</p>
    <div data-aos="fade-up" class="row">
      <div class="col s12 m6 center-align">
        <div class="card">
          <div class="card-image">
            <img
              src="https://66.media.tumblr.com/903b3d9e43abd9abc9dd1320ed447173/9bca164bfb878a80-0d/s640x960/744ba3c3e02f0e3bee782d9ace003cfe6a7fe1ca.gif"
            />
            <span class="card-title">Elk and Wolf</span>
            <a
              href="https://github.com/xeclectic/elk-wolf"
              class="btn-floating halfway-fab waves-effect waves-light red"
            >
              <i class="material-icons">search</i>
            </a>
          </div>
          <div class="card-content">
            <p>| Vue.JS | Laravel | HTML | CSS | PHP |</p>
          </div>
        </div>
      </div>

      <div data-aos="fade-up" class="col s12 m6 center-align">
        <div class="card">
          <div class="card-image">
            <img
              src="https://66.media.tumblr.com/aa881c2b46c8ec9038ec9d26c599783f/e6e8a06417aa408d-c9/s540x810/325be22c373633a06cebbf0822fa422bd49eb48f.gif"
            />
            <span class="card-title">The Trek</span>
            <a
              href="https://github.com/xeclectic/TweeterTwo"
              class="btn-floating halfway-fab waves-effect waves-light red"
            >
              <i class="material-icons">search</i>
            </a>
          </div>
          <div class="card-content">
            <p>| Vue.JS | Laravel | HTML | CSS | PHP |</p>
          </div>
        </div>
      </div>
    </div>
    <div data-aos="fade-up" id="single-card" class="row">
      <div class="col s12 m6 center-align">
        <div class="card">
          <div class="card-image">
            <img
              src="https://66.media.tumblr.com/a60c4b735777ce398d6ade29829c6642/9bca164bfb878a80-50/s640x960/aaefe4a9682f4d98500d8610191cf64e91a43cab.gif"
            />
            <span class="card-title">Okotoks Pizza</span>
            <a
              href="https://zealous-lichterman-e11483.netlify.app/"
              class="btn-floating halfway-fab waves-effect waves-light red"
            >
              <i class="material-icons">search</i>
            </a>
          </div>
          <div class="card-content">
            <p>| HTML | SCSS |</p>
          </div>
        </div>
      </div>
    </div>
    <div data-aos="fade-up" class="slantedDivA"></div>
    <p id="aboutMe">About Me</p>
    <div data-aos="fade-up" id="aboutDiv"></div>
    <p id="aboutText">
      I am a passionate Junior Web Developer with InnoTech degree in Web
      Development and one year of experience in challenging
      development environments.
      <br />With over thirteen years of editng and design practice will aid in creating dynamic frontend web design
    </p>
    <img
      id="codeImg"
      src="https://www.districtdispatch.org/wp-content/uploads/2017/04/Colorful-coding-screen.jpg"
    />
    <div class="list-type5">
      <ol>
        <li>
          <a href="#">HTML</a>
        </li>
        <li>
          <a href="#">SCSS</a>
        </li>
        <li>
          <a href="#">PHP</a>
        </li>
        <br />
        <li>
          <a href="#">Javascript</a>
        </li>
        <li>
          <a href="#">Laravel</a>
        </li>
        <li>
          <a href="#">VueJS</a>
        </li>
      </ol>
    </div>
  </div>
</template>

<script>
export default {
  name: "mainContent"
};
</script>

<style scoped>
html {
  scroll-behavior: smooth;
}

#projects {
  font-size: 40px;
  background-image: linear-gradient(45deg, #022f5a, #cc034d);
  color: white;
}

#single-card {
  position: relative;
  left: 20vw;
}
.slantedDivA {
  position: relative;
  top: 10vh;
  width: 100%;
  height: 20cm;
  background: #171717;
  transform-origin: top right;
  transform: skewY(4deg);
}

.slantedDivA::after {
  position: absolute;
  width: 100%;
  background: inherit;
}

#aboutDiv {
  position: relative;
  bottom: 40vh;
  width: 100%;
  height: 20cm;
  background-image: linear-gradient(45deg, #022f5a, #cc034d);
  transform-origin: top right;
  transform: skewY(-4deg);
}

#aboutMe {
  position: absolute;
  color: white;
  font-size: 40px;
  top: 280vh;
  left: 40vw;
}

#aboutText {
  position: relative;
  bottom: 100vh;
  left: 10vw;
  color: white;
  font-size: 20px;
}
#codeImg {
  position: relative;
  bottom: 50vh;
  width: 100%;
  height: 90vh;
}

.list-type5 {
  position: relative;
  width: 410px;
  margin: 0 auto;
}
.list-type5 ol {
  list-style-type: none;
  list-style-type: decimal !ie; /*IE 7- hack*/
  margin: 0;
  margin-left: 1em;
  padding: 0;
  counter-reset: li-counter;
}

.list-type5 ol li {
  position: relative;
  margin-bottom: 1.5em;
  padding: 0.5em;
  background-color: #cc034d;
  padding-left: 58px;
}

.list-type5 a {
  text-decoration: none;
  color: black;
  font-size: 15px;
  font-family: "Raleway", sans-serif;
}

.list-type5 li:hover {
  box-shadow: inset -1em 0 #022f5a;
  transition: box-shadow 0.5s;
}

.list-type5 ol li:before {
  position: absolute;
  top: -0.3em;
  left: -0.5em;
  width: 1.8em;
  height: 1.2em;
  font-size: 2em;
  line-height: 1.2;
  font-weight: bold;
  text-align: center;
  color: white;
  background-color: #022f5a;
  transform: rotate(-20deg);
  z-index: 99;
  overflow: hidden;
  content: counter(li-counter);
  counter-increment: li-counter;
}

#bg {
  position: relative;
  width: 100%;
  bottom: 60vh;
}
</style>
