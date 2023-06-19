<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!--=============== BOXICONS ===============-->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>AirPlane</title>
  </head>
  <body>
  <header>
      <nav class="nav-bar">
        <div class="logo">
          <h1>AirPlane</h1>
        </div>

        <div class="nav-list">
          <ul>
            <li class="nav-item"><a href="#" class="nav-link">Inicio</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
          </ul>
        </div>
        <form action="" method="post">
          <div class="login-button">
          <a href="index.php?sair=true">Sair</a>
          </div>
        </form>

        <div class="mobile-menu-icon">
          <button onclick="menuShow()"><i class="bx bx-menu"></i></button>
        </div>
      </nav>

      <div class="mobile-menu">
        <ul>
          <li class="nav-item"><a href="#" class="nav-link">Inicio</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
        </ul>

          <div class="login-button">
            <a href="index.php?sair=true">Sair</a>
          </div>
      </div>
    </header>

    <section class="content">
      <form action="destino.php" method="get">
        <!-- <div class="ida-volta">
          <select>
            <option value="IV" name="idaVolta" selected>Ida e Volta</option>
            <option value="SI" name="soIda">Somente ida</option>
          </select>
        </div> -->
        <div class="ida-volta quantity">
          <label for="">Passageiro(s)</label>
          <input
            type="number"
            name="passageiros"
            step="1"
            value="1"
            min="1"
            maxlength="9"
          />
        </div>

        <div class="origem">
          <input
            class="input-origem"
            type="text"
            placeholder="Digite origem"
            name="origem"
            size="20"
          />
          <input
            class="input-origem"
            type="text"
            placeholder="Digite destino"
            name="destino"
            size="20"
          />
          <label for="">Ida</label>
          <input
            class="input-origem"
            type="date"
            placeholder="Data"
            name="ida"
            size="20"
          />

          <label for="">Volta</label>
          <input
            class="input-origem"
            type="date"
            placeholder="Data"
            name="volta"
            size="20"
          />

          <button class="origem btn-origem btn-search" type="submit">
            Procurar
          </button>
        </div>
      </form>
    </section>

    <section class="carousel">

      <div class="slide">
        <div class="slides">
  
          <div id="voltar" class="btn">
            <i class="fas fa-chevron-left"></i>
          </div>
          <div id="next" class="btn">
            <i class="fas fa-chevron-right"></i>
          </div>
  
          <div id="atual" class="images">
            <img src="./img/airplane.jpeg" alt="">
          </div>
          <div class="images">
            <img src="./img/photo-1579275164975-599d0923f3cf.avif" alt="">
          </div>
          <div class="images">
            <img src="./img/photo-1581012771300-224937651c42.avif" alt="">
          </div>
          <div class="images">
            <img src="./img/photo-1622967752036-9e4fd162725f.avif" alt=""/>
          </div>
          <div class="images">
            <img src="./img/airbus-4454338_960_720.jpg" alt="">
          </div>
        </div>
        <div class="balls">
        </div>
      </div>
    </section>

   <footer>
      <div id="footer_content">
          <div id="footer_contacts">
              <h1>AirPlane</h1>
              <p>Lorem ipsum dolor.</p>

              <div id="footer_social_media">
                  <a href="#" class="footer-link" id="instagram">
                      <i class="fa-brands fa-instagram"></i>
                  </a>

                  <a href="#" class="footer-link" id="facebook">
                      <i class="fa-brands fa-facebook-f"></i>
                  </a>

                  <a href="#" class="footer-link" id="whatsapp">
                      <i class="fa-brands fa-whatsapp"></i>
                  </a>
              </div>
          </div>
          
          <ul class="footer-list">
              <li>
                  <h3>Lorem ipsum dolor</h3>
              </li>
              <li>
                  <a href="#" class="footer-link">Lorem ipsum dolor</a>
              </li>
              <li>
                  <a href="#" class="footer-link">Lorem ipsum dolor</a>
              </li>
              <li>
                  <a href="#" class="footer-link">Lorem ipsum dolor</a>
              </li>
          </ul>

          <ul class="footer-list">
              <li>
                  <h3>Lorem ipsum dolor</h3>
              </li>
              <li>
                  <a href="#" class="footer-link">Lorem ipsum dolor</a>
              </li>
              <li>
                  <a href="#" class="footer-link">Lorem ipsum dolor</a>
              </li>
              <li>
                  <a href="#" class="footer-link">Lorem ipsum dolor</a>
              </li>
          </ul>

          <div id="footer_subscribe">
              <h3>Subscribe</h3>

              <p>
                  Enter your e-mail to get notified about
                  our news solutions
              </p>

              <div id="input_group">
                  <input type="email" id="email">
                  <button>
                    <i class='bx bx-envelope'></i>
                  </button>
              </div>
          </div>
      </div>

      <div id="footer_copyright">
          &#169
          2023 Desenvolved by Kemp ツ
      </div>
  </footer>

    <script src="script.js"></script>
  </body>
</html>
