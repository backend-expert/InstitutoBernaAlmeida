<?php include "config/config.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="<?php echo DIRIMG.'logo_small_150x150.jpg'; ?>"/>
        
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="<?php echo DIRCSS.'style.css'; ?>">
    <link rel="stylesheet" href="<?php echo DIRCSS.'style-section-doacao.css'; ?>">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Instituto Berna Almeida</title>
</head>
<body>
        <!-- HEADER -->
        <header class="l-header">
                <nav class="nav bd-grid">
                    <div>
                        <a href="<?php echo DIRPAGE.'index.php';?>" class="nav__logo">
                        Instituto Berna Almeida
                    </a> 
                    </div>

                    <div class="nav__menu" id="nav-menu">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="<?php echo DIRPAGE.'index.php#home'; ?>" class="nav__link active">Home</a></li>
                            <li class="nav__item"><a href="<?php echo DIRPAGE.'index.php#about'; ?>" class="nav__link">Sobre</a></li>
                            <li class="nav__item"><a href="https://www.institutobernalmeida.com.br/blog" target="_blank" class="nav__link">Postagens</a></li>
                            <li class="nav__item"><a href="<?php echo DIRPAGE.'index.php#projects'; ?>" class="nav__link">Projetos</a></li>
                            <li class="nav__item"><a href="<?php echo DIRPAGE.'doacao.php#doacao';?>" class="nav__link">Fazer uma Doação</a></li>
                        </ul>
                    </div>

                    <!-- responsive mobile toggle  -->
                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-menu'></i>
                    </div>

                </nav>
            </header>

<!-- START MAIN -->
<main class="l-main">

    <!-- HOME -->
    <section class="home" id="home">
            <div class="home__container bd-grid">
            <h1 class="home__title"><span>Assistência</span><br>
                a pessoas com Doenças Degenerativas</h1>
            </div>
        </section>


    <!-- SECTION ABOUT	 -->
    <?php include DIRREQ."core/templates/section-doacao.php";  ?>
</main>
<!-- END MAIN -->

<!-- FOOTER -->
<footer class="footer section">
            <div class="footer__container bd-grid">

                <div class="footer__data">
                    <h2 class="footer__title">Instituto Berna Almeida</h2>
                    <p class="footer__text">Informações de Registro.</p>
                    <p>
                    CNPJ: 32.431.661/0001-68 - 32431661000168 <br>

                    Razão Social: Instituto Berna Almeida-IBA <br>

                    Nome Fantasia: IBA</p>
                </div>

                <div class="footer__data">
                    <h2 class="footer__title">Contact</h2>
                    <p>institutobernalmeida@gmail.com</p>
                    <p>WhatsApp: 61 9 8678-8678</p>
                    
                </div>
                
                <div class="footer__data">
                    <h2 class="footer__title">Junte-se à nós</h2>
                    <a href="https://www.facebook.com/institutobernalmeida" target="_blank" class="footer__social">Facebook</a>
                    <a href="https://www.instagram.com/institutobernalmeida" target="_blank" class="footer__social">Instagram</a>
                    <a href="https://www.institutobernalmeida.com.br/blog" target="_blank" class="footer__social">Blog</a>

                </div>
                
                <!-- <p> Trabalho voluntário desenvolvido by Isaque Menezes</p>   -->
            </div>
        </footer>

     

<!-- SCRIPTS JS -->
<!--===== SCROLL REVEAL =====-->
<script src="https://unpkg.com/scrollreveal"></script>

<!--===== MAIN JS =====-->
<script src="<?php echo DIRJS . 'main.js'; ?>"></script>
</body>
</html>
