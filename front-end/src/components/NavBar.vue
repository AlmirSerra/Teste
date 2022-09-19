<script setup>
import Logo from './Logo.vue'

</script>

<template>
  <div>
    <div class="frame-9">
      <Logo />
      <div class="frame-5 link">
        <div class="frame-11">
         <span><a href="#">Sobre Nós</a></span>
         <div id="rectangle-592"></div>
        </div>
        <span><a href="#">Soluções</a></span>
        <span><a href="#">Vagas</a></span>
        <span><a href="#">Fale Conosco</a></span>
        <span><a href="#"><img class="icon" src="../assets/Explore.png">Idioma</a></span>
      </div>
    </div>
  </div>
</template>

<style scoped>  
  .frame-9{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 20px 40px;
    gap: 344px;
    position: absolute;
    width: 1336px;
    height: 104px;
    left: 72px;
    top: 42px;
    border-radius: 31px;
    z-index: 1;
  }
  .icon{
    left: 13.54%;
    right: 13.54%;
    top: 13.54%;
    bottom: 13.54%;
  }
  #rectangle-592{
    width: 75px;
    height: 4px;
    background: #FFC800;
  }
</style>