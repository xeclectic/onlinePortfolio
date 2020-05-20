<template>
  <div>
    <section id="header">
      <div id="top-accent">
        <br />
        <div class="row" id="head-links">
          <p class="col l7 center-align">__________</P>
          <a href="#projects" id="link1" class="col l1 center-align">Projects</a>
          <a id="link2" class="col l1 center-align" href="#aboutMe">About</a>
          <a id="link3" class="col l1 center-align" href="#">Skills</a>
          <a id="link4" class="col l1 center-align" href="#">Contact</a>
        </div>
      </div>
      <div id="avatar-bg"></div>
      <img
        id="avatar"
        src="https://66.media.tumblr.com/b48361b922751a12e4c3acf29fa62ffe/d5ee1569c5b8213c-d3/s540x810/636aadd979179ea52e24ebfab80fb88246ab9567.jpg"
      />
      <img
        id="header-bg"
        src="https://i.pinimg.com/originals/d2/2f/95/d22f95ac7ea5f78ae39169cfdb77aa8a.jpg"
      />
      <p id="name" class="col l12 center-align">
        HI! I'M HAILEY FOSS
        <br />| junior full stack web developer |
      </p>
      <div>
        <p id="scroll">Check out my works</p>
        <div class="arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>
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
#name {
  color: white;
  position: relative;
  bottom: 40vh;
  font-size: 30px;
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
  background-color: #022f5a;
  left: 43vw;
  top: 30vh;
}

#header-bg {
  width: 100%;
  height: 100vh;
}

#scroll {
  position: relative;
  font-size: 15px;
  bottom: 20vh;
  left: 77vh;
  opacity: 0.6;
  color: white;
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
</style>
