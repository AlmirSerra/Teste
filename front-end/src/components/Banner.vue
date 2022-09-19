<script setup>
import NavBar from './NavBar.vue'

</script>


<template>
  <div class="frame-8">
    <div id="vector8">
      <img src="../assets/Vector 8.png" alt="petala-caindo-1">
    </div>
    <div class="group-112">
      <img src="../assets/Vector 12.png" alt="petala-caindo-2">
    </div>
    <NavBar />
      <div class="group-10">
        <img src="../assets/Vector 12.png" alt="petala-caindo-3">
      </div>
      <div class="group-2">
        <h1 id="headline">Olá, sou a <br>Nathalie Madeira,</h1>
        <h4 id="sub-headline">Estamos à procura de pessoas como tu. <br>Conhecemo-nos?</h4>
        <button class="btn btn-md"><span class="btn-text">Saber mais</span></button>
      </div>

      <div class="mask-group banner banner-img-rectangle">
      </div>
  </div>
</template>

<style scoped>
  #headline{
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 700;
    font-size: 48px;
    line-height: 57px;
    letter-spacing: 0.2px;
    color: #00385F;
  }
  #sub-headline{
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 30px;
    letter-spacing: 0.2px;
    color: #00385F;
  }
  #vector8 img{
    position: absolute;
    left: 1269.7px;
    right: 8.02%;
    top: 593.7px;
    bottom: 7.57%;
    z-index: 1;
  }
  .group-112 img{
    position: absolute;
    left: 744.2px;
    right: 43.51%;
    top: 340px;
    bottom: 33.93%;
    z-index: 1;
  }
</style>