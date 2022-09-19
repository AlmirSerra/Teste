<script setup>
import Banner from '../components/Banner.vue'
import Card from '../components/Card.vue'
import ContactForm from '../components/ContactForm.vue'
import Footer from './Footer.vue'

</script>

<template>
  <div class="main">
    <Banner />
    <Card />
    <ContactForm />
    <Footer />
    
  </div>
</template>

<style scoped>
.main{
  /* Frame 8 */


width: 1440px;
height: 714px;

/* White */

background: #FFFFFF;
border-radius: 4px;

/* Inside auto layout */

flex: none;
order: 0;
flex-grow: 0;
}
</style>