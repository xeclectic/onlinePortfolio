<template>
<!-- Header Text and stripe -->
  <div>
    <section id="header">
      <div id="top-accent">
        <br />
        <div class="row" id="head-links">
          <p class="col l8 center-align">__________</P>
          <a href="#projects" id="link1" class="col l1 center-align">My Work</a>
          <a id="link2" class="col l1 center-align" href="#aboutMe">Skills</a>
          <a id="link3" class="col l1 center-align" href="#codeImg">Contact</a>
          <!-- <a id="link4" class="col l1 center-align" href="#bg">Contact</a> -->
        </div>
      </div>
      <div id="avatar-bg"></div>

    <!-- Header Background -->
      <img
        id="avatar"
        src="https://66.media.tumblr.com/b48361b922751a12e4c3acf29fa62ffe/d5ee1569c5b8213c-d3/s540x810/636aadd979179ea52e24ebfab80fb88246ab9567.jpg"
      />
      <img
        id="header-bg"
        src="https://i.pinimg.com/originals/d2/2f/95/d22f95ac7ea5f78ae39169cfdb77aa8a.jpg"
      />

    <!-- Name Text -->
      <p id="name" class="col l12 center-align">
        HI! I'M HAILEY FOSS</p>
        <p id="name-text" class="col l12 center-align">| junior full stack web developer |</p>
      <div>
    <!-- Arrow -->
        <div class="arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
<!-- Gold Break -->
<div class="row">
    <p id="goldBreak" class="col s12 m12 l12 center-align">___________</p>
    </div>
    <!-- Check out my works -->
    <div>
        <p>I am a passionate Junior Web Developer with InnoTech degree in Web
      Development and one year of experience in challenging
      development environments.
      <br />With over thirteen years of editng and design practice will aid in creating dynamic frontend web design</p>
    </div>
    </section>
  </div>
</template>

<script>
export default {
  name: "Header"
};
</script>

<style scoped>
* {
  padding: 0;
  margin: 0;
}
#goldBreak {
    position: relative;
    color:#D4B156;
    width: 10vw;
    font-size: 3vh;
    left: 44rem;

}
#name {
  color: white;
  position: relative;
  bottom: 40vh;
  font-size: 30px;
  letter-spacing: 4px;
  font-family: 'Antic Slab', serif;
}
#name-text{
    color: white;
  position: relative;
  bottom: 40vh;
  font-size: 20px;
  font-family: 'Montserrat', sans-serif;
}

#name:hover {
  color: #cc034d;
}
#link1,
#link2,
#link3,
#link4 {
  color: white;
  margin-right: 10px;
}
#link1:hover,
#link2:hover,
#link3:hover,
#link4:hover {
  background-image: linear-gradient(45deg, #022f5a, #cc034d);
}
#top-accent {
  position: absolute;
  width: 100%;
  height: 1vh;
  background-image: linear-gradient(45deg, #022f5a, #cc034d);
}
#head-links {
  left: 20vh;
}
#avatar {
  position: absolute;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  left: 650px;
  top: 30vh;
}
#avatar-bg {
  position: absolute;
  width: 210px;
  height: 210px;
  border-radius: 50%;
  background-image: linear-gradient(45deg, #022f5a, #cc034d);
  left: 43vw;
  top: 30vh;
}
#header-bg {
  width: 100%;
  height: 100vh;
}
.arrow {
  position: absolute;
  top: 92%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.arrow span {
  display: block;
  width: 30px;
  height: 30px;
  border-bottom: 5px solid white;
  border-right: 5px solid white;
  transform: rotate(45deg);
  margin: -10px;
  animation: animate 2s infinite;
}
.arrow span:nth-child(2) {
  animation-delay: -0.2s;
}
.arrow span:nth-child(3) {
  animation-delay: -0.4s;
}
@keyframes animate {
  0% {
    opacity: 0;
    transform: rotate(45deg) translate(-20px, -20px);
  }
  50% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: rotate(45deg) translate(20px, 20px);
  }
}

@media only screen and (max-width: 768px) {
#avatar{
    left: 30vw;
}
#avatar-bg{
    opacity: 0.0;
}
}
</style>
