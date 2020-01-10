<template>
  <footer class="pt-4">
    <div class="container">
      <div class="row">
        <div class="col col-lg-4 box-why-us">
          <h3>¿Por qué nosotros?</h3>
          <p>En webfacil siempre será nuestra prioridad hacer crecer su marca en Internet y ventas. Para nosotros los resultados son <i>importantes</i> y por ello nos enfocamos en que se cumplan.</p>
          <p>Trabajaremos para ti, para que se cumplan tus metas y crezcas en Internet.</p>
        </div>
        <div class="col col-lg-4 box-contact">
          <h3>Contacto</h3>
          <p>Si necesitas ayuda con un pago o soporte de tu servicio, siempre estaremos dispuestos para ti en los diferentes canales de ayuda:</p>
          <ul class="help pl-3 mb-0">
            <li>Llamada*/WhatsApp: +57 305 786 3874</li>
            <li>Correo 24/7: luis@webfacil.com.co</li>
          </ul>
          <p class="mt-3 hours">* Horario llamadas: Lun-Sáb 9:00-17:00</p>
        </div>
        <div class="col col-lg-4 box-blog">
          <h3>Blog</h3>
          <p>Semanalmente creamos articulos relacionados a nuestros servicios y a las tecnologias que usamos. Todo esto para que con ellos entiendas un poco más sobre lo que hacemos.</p>
          <p><a href="https://dev.com.co" target="_blank">Ir al Blog DEV.com.co</a></p>
        </div>
      </div>
    </div>
    <div class="mt-4 box-copy">
      <div class="container">
        <p class="mt-2 pt-2 pb-2 text-left copy">webfacil &copy; 2019 &bull; <span class="ft-legal-text">Prohibida su reproducción total o parcial</span>.</p>
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
        font-weight: 700;
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

      p {
        &.copy {
          font-size: 13px;
          font-weight: 300;
          margin: 0;

          .ft-legal-text {
            font-size: 12px;
            vertical-align: text-top;
          }
        }
      }
    }

    .box-contact {
      .hours {
        font-size: 12px;
      }
    }

    .box-blog {
      a {
        color: #ccc;

        &:hover {
          text-decoration: underline;
        }
      }
    }
  }
</style>