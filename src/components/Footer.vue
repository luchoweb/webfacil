<template>
  <footer class="pt-4">
    <div class="container">
      <div class="row">
        <div class="col col-lg-4">
          <h3>Why Us?</h3>
          <p>At webfacil want help you with your needs. We want to improvement your relation with the clients and grow up your sells.</p>
        </div>
        <div class="col col-lg-4">
          <h3>Contact</h3>
          <p>Do you need help or some service? Please call us to +57-3057863874 or send a email to luis@webfacil.com.co</p>
        </div>
        <div class="col col-lg-4">
          <h3>Blog</h3>
          <p>We provide some articles for help you to understand how work some things in the Internet. <router-link to="/blog">Click here!</router-link></p>
        </div>
      </div>
    </div>
    <div class="mt-4 box-copy">
      <div class="container">
        <p class="mt-2 pt-2 pb-2 text-left copy">&copy; 2019 &bull; Prohibida su reproducción total o parcial.</p>
      </div>
    </div>
  </footer>
</template>

<script>
  export default {
    name: "Footer"
  }
</script>

<style lang="scss">
  @import "../scss/vars";

  footer {
    background-color: $black;
    color: $white;

    .col {
      line-height: 1.4;
      h3 {
        margin: 0 0 15px 0;
      }
      p {
        &:last-child {
          margin-bottom: 0;
        }        
      }
      a {
        color: $white;
        width: auto;

        &:hover {
          &::after {
            border-bottom: 1px solid $white;
            display: initial;
            content: "";
            width: 100%;
          }
        }
      }
    }

    .box-copy {
      background-color: $blue-main;
    }

    p {
      &.copy {
        font-size: 13px;
        font-weight: 300;
        margin: 0;
      }
    }
  }
</style>