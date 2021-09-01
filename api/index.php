<!DOCTYPE html>
<html>
<title>Code Programado</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/centro.png" type="image/png">
<link rel="stylesheet" href="../styles/estilo.css">
<link rel="stylesheet" href="../styles/reset.css">
<link rel="stylesheet" href="../styles/responsivo.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a href="#home" class="w3-bar-item w3-button w3-wide">Code Programado</a>
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
                <a href="#about" class="w3-bar-item w3-button">SOBRE</a>
                <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> EQUIPE</a>
                <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> PORTIFÓLIO</a>
                <a href="../public/teste.html" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> ORÇAMENTO</a>
                <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTATO</a>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>

    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">voltar ×</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">SOBRE</a>
        <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">EQUIPE</a>
        <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">PORTIFÓLIO</a>
        <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">ORÇAMENTO</a>
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTATO</a>
    </nav>

    <!-- Header with full-height image -->

    <header class="bgimg-1 w3-display-container w3-grayscale-" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small "> <span class="w3-jumbo w3-hide-small " id="efeito_letra">Comece o seu site agora </span></span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium"> <span class="w3-xxlarge w3-hide-large w3-hide-medium" id="efeito_letra">Comece o seu site agora</span></span><br>
            <span class="w3-large"> </span>
            <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">COMEÇAR AGORA</a></p>
        </div>
        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            <a href="https://www.facebook.com/profile.php?id=100059231170072"> <i class="fa fa-facebook-official w3-hover-opacity"></i></a>
            <a href="https://www.instagram.com/l_u_i_zzz_/" target="_blank"> <i class="fa fa-instagram w3-hover-opacity"></i></a>
            <a href="https://twitter.com/LuizSusano" target="_blank"> <i class="fa fa-twitter w3-hover-opacity"></i></a>
            <a href="https://www.linkedin.com/in/luiz-vieira-b68b17161/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
        </div>
    </header>


    <!-- About Section -->
    <div class="w3-container" style="padding:128px 16px" id="about">
        <h3 class="w3-center">SOBRE A EMPRESA</h3>
        <p class="w3-center w3-large">Principais características do nosso serviço</p>
        <div class="w3-row-padding w3-center" style="margin-top:64px">
            <div class="w3-quarter">
                <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>

                <p class="w3-large">Web</p>
                <p>Seu site sera visto e reconhecido pelos mecanismos de busca do Google seja no seu celular ou computador.</p>
            </div>
            <div class="w3-quarter">
                <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Qualidade</p>
                <p>Varios modelos de sites com ótimo visual e rápidos pra acessar com um presço que cabe no bolço.</p>
            </div>
            <div class="w3-quarter">
                <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Manutenção</p>
                <p>Totos os sites aqui são feitos por via código fonte, fazemos a manutenção semanalmente </p>
            </div>
            <div class="w3-quarter">
                <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Suporte</p>
                <p>De Segunda à Sábado</p>
                <p>Suporte dás 08:00 até 17:00 horas </p>
            </div>
        </div>
    </div>

    <!-- Promo Section - "We know design" -->
    <div class="w3-container w3-light-grey" style="padding:128px 16px">
        <div class="w3-row-padding">
            <div class="w3-col m6">
                <h3>We know design.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
                <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
            </div>
            <div class="w3-col m6">
                <img class="w3-image w3-round-large" src="/w3images/phone_buildings.jpg" alt="Buildings" width="700" height="394">
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="w3-container" style="padding:128px 16px" id="team">
        <h1 class="w3-center">Equipe</h1>
        <p class="w3-center w3-large">Aqueles que dirigem a essa empressa</p>
        <!-- minha foto com os detalhes -->
        <div class="w3-row-padding " style="margin-top:64px" align="center" id="equipe">
            <div class="w3-col l3 m6 w3-margin-bottom" id="luiz">
                <div class="w3-card">
                    <img src="img/perfil.jpg" alt="luiz" style="width:100%">
                    <div class="w3-container">
                        <h3>Luiz Vieira</h3>
                        <p class="w3-opacity">Analista de Sistema</p>
                        <p class="w3-opacity">Full-Stack e Matemático</p>
                        <p>Amante da tecnologia e fascinado pelos algoritimos usados no dia a dia pela natureza que o criador nos deu.</p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contato</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Promo Section "Statistics" -->
    <div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
        <div class="w3-quarter">
            <span class="w3-xxlarge">+21</span>
            <br>MODELOS DE SITE
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">+10</span>
            <br>PROJETOS
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">+5</span>
            <br>
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">+87</span>
            <br>SOLUÇÕES RESOLVIDAS
        </div>
    </div>

    <!-- Work Section -->
    <div class="w3-container" style="padding:128px 16px" id="work">
        <h3 class="w3-center">OUR WORK</h3>
        <p class="w3-center w3-large">What we've done for people</p>

        <div class="w3-row-padding" style="margin-top:64px">
            <div class="w3-col l3 m6">
                <img src="/w3images/tech_mic.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
            </div>
            <div class="w3-col l3 m6">
                <img src="/w3images/tech_phone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
            </div>
            <div class="w3-col l3 m6">
                <img src="/w3images/tech_drone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
            </div>
            <div class="w3-col l3 m6">
                <img src="/w3images/tech_sound.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
            </div>
        </div>

        <div class="w3-row-padding w3-section">
            <div class="w3-col l3 m6">
                <img src="/w3images/tech_tablet.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
            </div>
            <div class="w3-col l3 m6">
                <img src="/w3images/tech_camera.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
            </div>
            <div class="w3-col l3 m6">
                <img src="/w3images/tech_typewriter.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
            </div>
            <div class="w3-col l3 m6">
                <img src="/w3images/tech_tableturner.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
            </div>
        </div>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
        <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="w3-container w3-light-grey w3-padding-64">
        <div class="w3-row-padding">
            <div class="w3-col m6">
                <h3>Our Skills.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore.</p>
            </div>
            <div class="w3-col m6">
                <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
                <div class="w3-grey">
                    <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
                </div>
                <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
                <div class="w3-grey">
                    <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
                </div>
                <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
                <div class="w3-grey">
                    <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
        <h3>PRICING</h3>
        <p class="w3-large">Choose a pricing plan that fits your needs.</p>
        <div class="w3-row-padding" style="margin-top:64px">
            <div class="w3-third w3-section">
                <ul class="w3-ul w3-white w3-hover-shadow">
                    <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
                    <li class="w3-padding-16"><b>10GB</b> Storage</li>
                    <li class="w3-padding-16"><b>10</b> Emails</li>
                    <li class="w3-padding-16"><b>10</b> Domains</li>
                    <li class="w3-padding-16"><b>Endless</b> Support</li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide">$ 10</h2>
                        <span class="w3-opacity">per month</span>
                    </li>
                    <li class="w3-light-grey w3-padding-24">
                        <button class="w3-button w3-black w3-padding-large">Sign Up</button>
                    </li>
                </ul>
            </div>
            <div class="w3-third">
                <ul class="w3-ul w3-white w3-hover-shadow">
                    <li class="w3-red w3-xlarge w3-padding-48">Pro</li>
                    <li class="w3-padding-16"><b>25GB</b> Storage</li>
                    <li class="w3-padding-16"><b>25</b> Emails</li>
                    <li class="w3-padding-16"><b>25</b> Domains</li>
                    <li class="w3-padding-16"><b>Endless</b> Support</li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide">$ 25</h2>
                        <span class="w3-opacity">per month</span>
                    </li>
                    <li class="w3-light-grey w3-padding-24">
                        <button class="w3-button w3-black w3-padding-large">Sign Up</button>
                    </li>
                </ul>
            </div>
            <div class="w3-third w3-section">
                <ul class="w3-ul w3-white w3-hover-shadow">
                    <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
                    <li class="w3-padding-16"><b>50GB</b> Storage</li>
                    <li class="w3-padding-16"><b>50</b> Emails</li>
                    <li class="w3-padding-16"><b>50</b> Domains</li>
                    <li class="w3-padding-16"><b>Endless</b> Support</li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide">$ 50</h2>
                        <span class="w3-opacity">per month</span>
                    </li>
                    <li class="w3-light-grey w3-padding-24">
                        <button class="w3-button w3-black w3-padding-large">Sign Up</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
        <h3 class="w3-center">CONTACT</h3>
        <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
        <div style="margin-top:48px">
            <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Chicago, US</p>
            <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
            <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
            <br>
            <form action="/action_page.php" target="_blank">
                <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
                <p>
                    <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
                </p>
            </form>
            <!-- Image of location/map -->
            <img src="/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64">
        <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <div class="w3-xlarge w3-section">

            <i class="fa fa-instagram w3-hover-opacity"></i>

        </div>
        <p>Author
            <a href="https://github.com/LuizinhoVI" title="meu instagram" target="_blank" class="w3-hover-text-green">LUIZ VIEIRA</a>
        </p>
    </footer>



</body>

</html>