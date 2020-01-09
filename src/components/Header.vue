<template>
  <header class="pt-4 pb-4">
    <div class="container">
      <div class="row">
        <figure class="col col-lg-3 my-auto logo">
          <img alt="Vue logo" src="../assets/logo-blue.png">
        </figure>

        <nav class="col col-lg-9 my-auto">
          <ul class="main-menu d-flex justify-content-end">
            <li class="mr-4"><router-link to="/">Home</router-link></li>
            <li class="mr-4"><router-link to="/what-do">What do we do!</router-link></li>
            <li class="mr-4"><router-link to="/services">Services &amp; Pricing</router-link></li>
            <li class="last"><router-link to="/contact">Contact Us</router-link></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
</template>

<script>
  export default {
    name: 'Header'
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