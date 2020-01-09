<template>
  <main id="app">
    <Header />
    <router-view/>
    <Footer />
  </main>
</template>

<script>
  // @ is an alias to /src
  import Header from '@/components/Header.vue';
  import Footer from '@/components/Footer.vue';

  export default {
    name: 'bootstrap',
    components: {
      Header,
      Footer
    }
  }
</script>

<style lang="scss">
  a {
    &:hover {
      text-decoration: none;
    }
  }
  #app {
    font-family: 'Quicksand', Arial, sans-serif;
    font-weight: 400;
    color: #222222;
  }
</style>
