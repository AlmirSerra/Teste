<script setup>
import SectionTitle from './SectionTitle.vue'

</script>


<template>
  <div class="frame-17">
    <SectionTitle />
    <div class="frame-124">
      <div class="card">
        <div class="frame-116">
          <div class="card-minor"></div>
        </div>
      </div>
      <div class="card">
        <div class="frame-115"></div>
      </div>
      <div class="card">
        <div class="frame-114"></div>
      </div>
    </div>
  </div>
</template>

<style scoped>
  .frame-17{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 40px 0px 0px;
    gap: 40px;
    width: 1440px;
    height: 1245px;
    background: #FFFFFF;
    border-radius: 4px;
    position: absolute;
  }
  .frame-124{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: flex-start;
    padding: 0px;
    gap: 40px;
    width: 1440px;
    height: 502px;
    overflow-x: scroll;
  }
  .card{
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    padding: 0px;
    gap: 84px;
    width: 390.49px;
    height: 502px;
    border: none;
  }
  .frame-116{
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    padding: 20px;
    gap: 10px;
    width: 390.49px;
    height: 502px;
    background: #F2C917;
    border-radius: 28px;
  }
  .frame-115{
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    padding: 20px;
    gap: 10px;
    width: 390.49px;
    height: 502px;
    background: #28E4C9;
    border-radius: 28px;
  }
  .frame-114{
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    padding: 20px;
    gap: 10px;
    width: 390.49px;
    height: 502px;
    background: #2A95FF;
    border-radius: 28px;
  }
  .card-minor{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0px;
    gap: 18px;

    width: 350.49px;
    height: 462px;
  }
</style>