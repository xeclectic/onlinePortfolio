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
    </div>

</template>

<script>
export default {
  name: "mainContent"
};
</script>

<style scoped>

#single-card {
  position: relative;
}
#bg {
  position: relative;
  width: 100%;
  bottom: 60vh;
}
</style>
