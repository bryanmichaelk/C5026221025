<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Website</title>
    <link rel="icon" type="image/png" href="{{asset('img/landing/logo.png')}}" />
    <!-- Latest compiled and minified CSS -->
    <!-- import external css -->
    <link rel="stylesheet" href="{{asset('css/landing.css')}}" />
    <!-- import font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700;800;900;1000&family=Yantramanav:wght@300;400;500;700;900&display=swap"
      rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <!-- import bootstrap 4 -->
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- import feather -->
    <!-- choose one -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <!-- Import JavaScriot -->
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm fixed-top w-100">
      <div class="container">
        <div class="flex">
          <a href="#" class="navbar-brand">
            <img
              src="../img/landing/logo.png "
              alt="logo"
              class="logo rounded-circle shadow"
              style="width: 40px" />
          </a>

          <!-- <h1 class="logo">Bryan Michael Kurniawan</h1> -->
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <i data-feather="menu"></i>
        </button>
        <div class="flex-row-reverse collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about-me">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#draft">Draft</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Konten -->
    <div class="container content-container">
      <div class="row">
        <div class="col-8 header shadow" style="padding-left: 35px">
          <h1>
            <span>Bryan Michael Kurniawan</span> As Undegraduate Student of
            <span class="information">Information System</span>
          </h1>
          <p>Website Development Enthusiast</p>
          <button
            onclick="scrollToContact()"
            id="button-contact"
            href="#contact"
            class="btn-contact-me">
            Contact Me
          </button>
        </div>
        <div class="box-foto shadow">
          <img src="../img/landing/foto-profil.png" alt="" />
        </div>
      </div>

      <section class="about-me" id="about-me">
        <div class="row">
          <h1 class="judul">About Me</h1>
        </div>
        <div class="row mt-2 shadow about-me-box" style="border-radius: 20px">
          <div class="about-me-content d-flex">
            <img
              src="../img/landing/Foto Profil.jpg"
              alt="Profile Picture"
              class="profile-picture" />
            <div>
              <h1>Hello!</h1>
              <p>
                My name is Bryan. I am currently a student of Information
                Systems at ITS. I have a strong passion for web development. I
                am actively enhancing my skills, particularly in the field of
                web development. Besides, I am keep on learning new things. I am
                dedicated to broadening my knowledge and expertise to excel in
                the field. Feel free to get in touch with me for any further
                information or collaboration opportunities.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="skills" id="skills">
        <div class="row">
          <h1 class="judul">Skills</h1>
        </div>
        <div class="row">
          <h3>Empowering Expertise: My Skill Set in Focus.</h3>
        </div>
        <div class="row card-row">
          <div class="card-skills shadow" style="margin-top: 40px">
            <div class="skill">
              <img src="../img/landing/html.png" alt="" />
              <h2>HTML</h2>
            </div>
          </div>
          <div class="card-skills shadow" style="margin-top: 40px">
            <div class="skill">
              <img src="../img/landing/css.png" alt="" />
              <h2>CSS</h2>
            </div>
          </div>
          <div class="card-skills shadow" style="margin-top: 40px">
            <div class="skill">
              <img src="../img/landing/js.png" alt="" />
              <h2>JavaScript</h2>
            </div>
          </div>
          <div class="card-skills shadow" style="margin-top: 40px">
            <div class="skill">
              <img src="../img/landing/bootstrap.png" alt="" />
              <h2>Bootrsap</h2>
            </div>
          </div>
          <div class="card-skills shadow" style="margin-top: 40px">
            <div class="skill">
              <img src="../img/landing/cpp.png" alt="" />
              <h2>C++</h2>
            </div>
          </div>
          <div class="card-skills shadow" style="margin-top: 40px">
            <div class="skill">
              <img src="../img/landing/java.png" alt="" />
              <h2>Java</h2>
            </div>
          </div>
        </div>
      </section>

      <section class="portofolio" id="portofolio" style="height: 500px">
        <div class="row"><h1 class="judul">Portofolio</h1></div>
        <div
          id="carouselExampleControls"
          class="carousel slide row mt-4 shadow"
          data-ride="carousel">
          <!-- Indicator -->
          <ul class="carousel-indicators">
            <li
              data-target="#demo"
              data-slide-to="0"
              class="active rounded-circle"
              style="height: 10px; width: 10px"></li>
            <li
              data-target="#demo"
              data-slide-to="1"
              class="rounded-circle"
              style="height: 10px; width: 10px"></li>
            <li
              data-target="#demo"
              data-slide-to="2"
              class="rounded-circle"
              style="height: 10px; width: 10px"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <a
                  href="https://bryanmichaelk.github.io/Landing-Page-Bryan/"
                  class="col-md-6 mt-2">
                  <img
                    src="../img/landing/portofolio1.jpg"
                    class="d-block w-100"
                    alt="..." />
                </a>
                <div class="col-md-6 description-portofolio">
                  <h2>Self Landing Page</h2>
                  <p>
                    A portfolio landing page serves as a digital showcase,
                    providing a comprehensive overview of a creator's or
                    professional's work, accomplishments, and capabilities. It
                    is typically crafted to present a curated selection of
                    projects, skills, and experiences in a visually appealing
                    and easily navigable format. This digital portfolio acts as
                    a personalized introduction to one's expertise, serving as
                    an essential tool for self-promotion, networking, and career
                    advancement.
                  </p>
                  <p>Bahasa: HTML, CSS, JavaScript</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <a
                  href="https://bryanmichaelk.github.io/Landing-Page-Bryan/"
                  class="col-md-6 mt-2">
                  <img
                    src="../img/landing/portofolio2.jpg"
                    class="d-block w-100"
                    alt="..." />
                </a>
                <div class="col-md-6 description-portofolio">
                  <h2>Copy of ITS Portal</h2>
                  <p>
                    A portfolio is a comprehensive collection of work that
                    showcases a professional's or a student's skills,
                    accomplishments, and experiences. In the context of creating
                    a replica of the myITS portal, the portfolio can serve as a
                    demonstration of a deep understanding of web development,
                    design, and user interface principles.
                  </p>
                  <p>Bahasa: HTML, CSS, JavaScript, Bootstrap</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <a
                  href="https://bryanmichaelk.github.io/Landing-Page-Bryan/"
                  class="col-md-6 mt-2">
                  <img
                    src="../img/landing/portofolio3.jpg"
                    class="d-block w-100"
                    alt="..." />
                </a>
                <div class="col-md-6 description-portofolio">
                  <h2>Triangle Calculator</h2>
                  <p>
                    In the context of developing a triangle calculator that
                    computes the area and perimeter, the portfolio can serve as
                    a testament to one's proficiency in programming, algorithmic
                    thinking, and mathematical concepts. This particular project
                    can highlight a range of technical skills and competencies,
                    showcasing a strong grasp of software development
                    principles, problem-solving abilities, and a sound
                    understanding of geometric formulas.
                  </p>
                  <p>Bahasa: HTML, CSS, JavaScript</p>
                </div>
              </div>
            </div>
            <!-- tambahkan lebih banyak carousel-item sesuai kebutuhan -->
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExampleControls"
            role="button"
            data-slide="prev">
            <i
              data-feather="chevron-left"
              class="prev-icon"
              aria-hidden="true"></i>
            <!-- <span class="sr-only">Previous</span> -->
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleControls"
            role="button"
            data-slide="next">
            <i
              data-feather="chevron-right"
              class="next-icon"
              aria-hidden="true"></i>
            <!-- <span class="sr-only">Next</span> -->
          </a>
        </div>
      </section>
      {{-- draft --}}
      <section class="draft" id="draft">
        <div class="row">
          <h1 class="judul">Draft Pertemuan & Tugas</h1>
        </div>
        <div class="row card-row">
            <a class="card-draft shadow" style="margin-top: 40px" href="http://127.0.0.1:8000/latihan-js1">
                <div class="">
                    <h2>Latihan JavaScript 1</h2>
                </div>
            </a>
            <a class="card-draft shadow" style="margin-top: 40px" href="http://127.0.0.1:8000/latihan-js2">
                <div class="">
                    <h2>Latihan JavaScript 2</h2>
                </div>
            </a>
            <a class="card-draft shadow" style="margin-top: 40px" href="http://127.0.0.1:8000/contoh-alert-1">
                <div class="">
                    <h2>Contoh Alert 1</h2>
                </div>
            </a>
            <a class="card-draft shadow" style="margin-top: 40px" href="http://127.0.0.1:8000/contoh-alert-2">
                <div class="">
                    <h2>Contoh Alert 2</h2>
                </div>
            </a>
            <a class="card-draft shadow" style="margin-top: 40px" href="http://127.0.0.1:8000/linktree">
                <div class="">
                    <h2>Tugas Linktree</h2>
                </div>
            </a>
            <a class="card-draft shadow" style="margin-top: 40px" href="http://127.0.0.1:8000/webTiruan">
                <div class="">
                    <h2>Tugas Bootstrap</h2>
                </div>
            </a>
            <a class="card-draft shadow" style="margin-top: 40px" href="http://127.0.0.1:8000/contoh-alert-3">
                <div class="">
                    <h2>Contoh Alert 3</h2>
                </div>
            </a>
            <a class="card-draft shadow" style="margin-top: 40px" href="http://127.0.0.1:8000/contoh-alert-4">
                <div class="">
                    <h2>Contoh Alert 4</h2>
                </div>
            </a>
            <a class="card-draft shadow" style="margin-top: 40px" href="http://127.0.0.1:8000/pertemuan-css">
                <div class="">
                    <h2>Pertemuan CSS</h2>
                </div>
            </a>
            <a class="card-draft shadow" style="margin-top: 40px" href="http://127.0.0.1:8000/responsive-1">
                <div class="">
                    <h2>Responsive 1</h2>
                </div>
            </a>
            <a class="card-draft shadow" style="margin-top: 40px" href="http://127.0.0.1:8000/responsive-2">
                <div class="">
                    <h2>Responsive 2</h2>
                </div>
            </a>
        </div>
      </section>
      <section class="contact" id="contact">
        <div class="row"><h1 class="judul">Contact Me</h1></div>
        <div class="row mt-4">
          <div style="width: 50%">
            <h1>
              Stay Connected, If You Have Any Question.<span>
                Just Contact Me!</span
              >
            </h1>

            <p style="width: 95%">
              If you have any questions or need more information, please feel
              free to get in touch. I am always available to discuss your
              inquiries and provide any necessary assistance.
            </p>
          </div>

          <div class="" style="width: 45%">
            <form action="#contact-me">
              <div class="form-group row flex-row justify-content-between">
                <div class="form-input" style="width: 48%">
                  <input
                    type="name"
                    class="form-control border-0 py-4 shadow"
                    placeholder="Your Name"
                    id="name" />
                  <div
                    class=""
                    id="name-alert"
                    style="
                      display: none;
                      z-index: 10000;
                      color: red;
                      margin-left: 5px;
                      margin-top: 5px;
                    ">
                    *Name Must Be Filled
                  </div>
                  <div
                    class=""
                    id="name-length-alert"
                    style="
                      display: none;
                      z-index: 10000;
                      color: red;
                      margin-left: 5px;
                      margin-top: 5px;
                    ">
                    *Name Must Be Atleast 3 Character
                  </div>
                  <div
                    class=""
                    id="name-character-alert"
                    style="
                      display: none;
                      z-index: 10000;
                      color: red;
                      margin-left: 5px;
                      margin-top: 5px;
                    ">
                    *Name Must Be Character
                  </div>
                </div>

                <div class="form-input" style="width: 48%">
                  <input
                    type="email"
                    class="form-control border-0 py-4 shadow"
                    placeholder="Your Email"
                    id="email" />
                  <div
                    class=""
                    id="email-alert"
                    style="
                      display: none;
                      z-index: 10000;
                      color: red;
                      margin-left: 5px;
                      margin-top: 5px;
                    ">
                    *Email Must Be Filled
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <input
                  type="text"
                  class="form-control border-0 py-4 shadow"
                  placeholder="Phone Number"
                  id="number" />
                <div
                  class=""
                  id="number-alert"
                  style="
                    display: none;
                    z-index: 10000;
                    color: red;
                    margin-left: 5px;
                    margin-top: 5px;
                  ">
                  *Number Must Be Filled
                </div>
                <div
                  class=""
                  id="number-character-alert"
                  style="
                    display: none;
                    z-index: 10000;
                    color: red;
                    margin-left: 5px;
                    margin-top: 5px;
                  ">
                  *Pleasa Fill With Number
                </div>
              </div>
              <div class="form-group row">
                <input
                  type="message"
                  class="form-control border-0 shadow message"
                  placeholder="Message"
                  style="height: 75px; padding-top: 0px"
                  id="message" />
                <div
                  class=""
                  id="message-alert"
                  style="
                    display: none;
                    z-index: 10000;
                    color: red;
                    margin-left: 5px;
                    margin-top: 5px;
                  ">
                  *Message Must Be Filled
                </div>
              </div>
              <div class="row flex-row-reverse">
                <button
                  onclick="formValidation()"
                  type="submit"
                  class="btn btn-primary mt-2"
                  style="background-color: #66cc66; border-color: #66cc66">
                  Send Me Quotes
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>
      <button
        onclick="scrollToTop()"
        id="popupButton"
        class="popup-button rounded-circle"
        style="font-size: 20px; color: #fff">
        <i data-feather="chevron-up" class="text-light"></i>
      </button>
      <div
        class="alert alert-success alert-dismissible fade show"
        role="alert"
        id="success-alert"
        style="
          display: none;
          position: fixed;
          margin-left: 70%;
          margin-top: 70px;
          z-index: 10000;
        ">
        Thankyou! Your Message Is Delivered
      </div>
      <footer class="d-flex justify-content-between">
        <div class="links my-auto">
          <a href="#about-me">About Me</a>
          <a href="#home">Skills</a>
          <a href="#menu">Portofolio</a>
        </div>
        <div class="social my-auto">
          <a href="https://www.instagram.com/bryanmichaelk/"
            ><img src="../img/landing/instagram.png" alt="instagram"
          /></a>
          <a href="https://twitter.com/bryanmich1234"
            ><img src="../img/landing/twitter.png" alt="twitter"
          /></a>
          <a href="https://www.linkedin.com/in/bryanmichaelk/"
            ><img src="/img/landing/linkedin.png" alt="linkedin"
          /></a>
        </div>

        <div class="credit my-auto">
          <p>Created by <a>Bryan Michael Kurniawan</a> | &copy; 2023</p>
        </div>
      </footer>
    </div>
    <script src="{{asset('js/landing.js')}}"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
