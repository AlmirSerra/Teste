<script setup>
import NavBar from './NavBar.vue'

</script>


<template>
  <div class="frame-8">
    <NavBar />
      <div class="group-10">
        <img src="../assets/Vector 12.png" alt="petala-caindo-1">
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
  .frame-8{
    width: 1440px;
    height: 714px;
    background: #FFFFFF;
    border-radius: 4px;
  }
  .group-2{
    position: absolute;
    width: 443px;
    height: 276px;
    left: 155px;
    top: 241px;
  }
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
  .group-10 {
    position: absolute;
    width: 218.48px;
    height: 232.88px;
    left: -82.94px;
    top: 339.69px;
    transform: rotate(15deg);
  }
  .group-10 img{
    left: 7.64%;
    right: 84.68%;
    top: 64.94%;
    bottom: 5.61%;
    transform: matrix(-0.59, -0.81, -0.81, 0.59, 0, 0);
  }
  .mask-group{
    position: absolute;
    width: 591px;
    height: 818.97px;
    left: 705px;
    top: 70px;
  }
  .banner{
    position: absolute;
    width: 1229.08px;
    height: 818.97px;
    background: url('../assets/happiness-wellbeing-confidence-concept-cheerful-attractive-african-american-woman-curly-haircut-cross-arms-chest-self-assured-powerful-pose-smiling-determined-wear-yellow-sweater 2.png');
    border-radius: 158px;
    background-repeat: no-repeat;
  }
  .banner-img-rectangle{
    position: absolute;
    width: 591px;
    height: 818.97px;
    left: 705px;
    top: 70px;
    /* background: #C4C4C4;  */
    /* filter: blur(9.5px); */
    border-radius: 158px;

 }
 .btn-md{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 15px 40px;
    gap: 10px;
    width: 163px;
    height: 52px;
    background: #F2C917;
    border-radius: 16px;
 }
 .btn-text{
    width: 83px;
    height: 22px;
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 700;
    font-size: 14px;
    line-height: 22px;
    text-align: center;
    letter-spacing: 0.2px;
    color: #FFFFFF;
    flex: none;
    order: 0;
    flex-grow: 0;
 }
</style>