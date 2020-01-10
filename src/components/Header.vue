<template>
  <header class="pt-4 pb-4" v-bind:class="{ subPage: isSubPage }">
    <div class="container">
      <div class="row">
        <router-link to="/">
          <figure class="col col-lg-3 my-auto logo">
            <img alt="Vue logo" src="../assets/logo-blue.png">
          </figure>
        </router-link>

        <nav class="col col-lg-9 my-auto">
          <ul class="main-menu d-flex justify-content-end">
            <li class="mr-4"><router-link to="/" v-on:click.native="validateSubPage">Inicio</router-link></li>
            <li class="mr-4"><router-link to="/what-do" v-on:click.native="validateSubPage">¿Qué hacemos?</router-link></li>
            <li class="mr-4"><router-link to="/services" v-on:click.native="validateSubPage">Servicios &amp; Precios</router-link></li>
            <li class="last"><router-link to="/contact" v-on:click.native="validateSubPage">Contacto</router-link></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
</template>

<script>
  export default {
    name: 'Header',
    data() {
      return {
        isSubPage: this.$route.name != 'home' ? true : false
      }
    },
    methods: {
      validateSubPage() {
        return this.isSubPage = this.$route.name != 'home' ? true : false;
      }
    }
  }
</script>

<style lang="scss">
  @import "../scss/vars";

  header {
    .logo {
      img {
        height: 50px;
      }
    }

    .main-menu {
      list-style-type: none;
      margin: 0;
      padding: 0;

      li {
        a {
          color: $blue-main;
          font-size: 18px;
          font-weight: 300;

          &::after {
            border-bottom: 1px solid $blue-main;
            display: none;
            content: "";
            width: 100%;
          }

          &:hover {
            text-decoration: none;

            &::after {
              border-bottom: 1px solid $blue-main;
              display: block;
              content: "";
              width: 100%;
            }
          }

          &.router-link-exact-active {
            &::after {
              display: block;
            }
          }
        }
      }
    }
  }
</style>