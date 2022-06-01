<?php include "config/config.php"; ?>

<?php include (DIRREQ."core/templates/head.php");  ?>

<!-- HEADER -->
<?php include (DIRREQ."core/templates/header.php");  ?>

<!-- START MAIN -->
<main class="l-main">
    <!-- HOME -->
    <?php include (DIRREQ."core/templates/home.php");  ?>

    <!-- ARTIGOS RECENTES | BLOG	 -->
    <?php include (DIRREQ."core/templates/archives-blog.php");  ?>

    <!-- SECTION ABOUT	 -->
    <?php include (DIRREQ."core/templates/about.php");  ?>

    <!-- SECTION PROJECTS -->
    <?php include (DIRREQ."core/templates/project.php");  ?>

    <!-- SECTION  FACA SUA DOACAO -->
    <?php include (DIRREQ."core/templates/section-button-doacao.php");  ?>

</main>
<!-- END MAIN -->

<!-- FOOTER -->
<?php include (DIRREQ."core/templates/footer.php"); ?>

<!-- SCRIPTS JS -->
<?php include (DIRREQ."core/includes/scripts.php"); ?>

