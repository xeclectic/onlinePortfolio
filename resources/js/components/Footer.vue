<template>
    <div>
        <img
        id="bg"
        src="https://i.pinimg.com/originals/d2/2f/95/d22f95ac7ea5f78ae39169cfdb77aa8a.jpg"
      />

      <h1 class="home-title">
  <span>Request a Quote</span>
  <span><a href="#">Click here</a></span>
</h1>
<div id="footer"> <p> footer</p></div>
    </div>
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>
#bg{
    position: relative;
    width: 100%;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

:root{
    --bg-color: #D8D8D8;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  width: 100vw;
  height: 100vh;
  color: white;
  background-color: var(--bg-color);
  font-family: 'Maitree', serif;
}

h1{
    position: relative;
    bottom: 70vh;
    left: 40vw;
    font-size: 3em;
    font-weight: normal;
}

/* title styles */
.home-title span{
    position: relative;
    color: white;
    overflow: hidden;
    display: block;
    line-height: 1.2;
}

.home-title span::after{
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(45deg, #022f5a, #cc034d);
    animation: a-ltr-after 2s cubic-bezier(.77,0,.18,1) forwards;
    transform: translateX(-101%);
}

.home-title span::before{
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background: var(--bg-color);
    animation: a-ltr-before 2s cubic-bezier(.77,0,.18,1) forwards;
    transform: translateX(0);
}

.home-title span:nth-of-type(1)::before,
.home-title span:nth-of-type(1)::after{
    animation-delay: 1s;
}

.home-title span:nth-of-type(2)::before,
.home-title span:nth-of-type(2)::after{
    animation-delay: 1.5s;
}

@keyframes a-ltr-after{
    0% {transform: translateX(-100%)}
    100% {transform: translateX(101%)}
}

@keyframes a-ltr-before{
    0% {transform: translateX(0)}
    100% {transform: translateX(200%)}
}

#footer{
    width: 100%;
    height: 30vh;
    background-color: #171717;
}
</style>
