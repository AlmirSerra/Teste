<template>
  <div class="footer">
    <div class="logo2"></div>
    <div class="group-55">
      <label>&copy;2021 YELLOWIPE</label>
    </div>
    <div class="left-nav-items">
      <div class="menu-item">
        <div class="frame-16 link">
          <div class="frame-11">
            <span><a href="#">Sobre Nós</a></span>
          </div>
          <span><a href="#">Soluções</a></span>
          <span><a href="#">Vagas</a></span>
          <span><a href="#">Fale Conosco</a></span>
          <span><a href="#"><img class="icon" src="../assets/Explore.png">Idioma</a></span>
        </div>
      </div>
    </div>
    <div class="social-links">
        <img src="../assets/Social icons.png" alt="instagram">
        <img src="../assets/Social icons2.png" alt="media">
        <img src="../assets/Social icons3.png" alt="twitter">
        <img src="../assets/Social icons4.png" alt="youtube">
    </div>
    <div class="divider"></div>
  </div>
</template>

<style scoped>
  .left-nav-items{
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 0px;
    gap: 32px;
    position: absolute;
    width: 516px;
    height: 44px;
    left: 462px;
    top: calc(50% - 44px/2);
  }
  .menu-item{
    width: 516px;
    height: 44px;
  }
  .frame-11{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 0px;
    width: 75px;
    height: 24px;
  }
  .social-links{
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 0px;
    gap: 16px;

    position: absolute;
    width: 144px;
    height: 24px;
    right: 165px;
    top: calc(50% - 24px/2 + 91px);
  }
  .divider{
    position: absolute;
    left: 11.46%;
    right: 11.46%;
    top: 71.09%;
    bottom: 28.52%;
    background: #00385F;
    opacity: 0.2;
  }
  
</style>