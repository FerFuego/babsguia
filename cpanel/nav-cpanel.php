<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a href="index.php"><h4><img src="img/logo.png"></h4></a>
</div>	
<div class="collapse navbar-collapse navbar-ex1-collapse">
	<ul class="nav navbar-nav pull-right">
		<li <?php if(isset($_GET['categ'])&&$_GET['categ']=="general"){echo 'class="active"';}?>><a href="cpanel.php?categ=general">General</a></li>
		<li <?php if(isset($_GET['categ'])&&$_GET['categ']=="1"){echo 'class="active"';}?>><a href="cpanel.php?categ=1">Links</a></li>
		<li <?php if(isset($_GET['categ'])&&$_GET['categ']=="2"){echo 'class="active"';}?>><a href="cpanel.php?categ=2">Tours</a></li>
		<li <?php if(isset($_GET['categ'])&&$_GET['categ']=="3"){echo 'class="active"';}?>><a href="cpanel.php?categ=3">Novedades</a></li>
    <li <?php if(isset($_GET['categ'])&&$_GET['categ']=="4"){echo 'class="active"';}?>><a href="cpanel.php?categ=4">Productos</a></li>
    <!--<li <?php//if(isset($_GET['categ'])&&$_GET['categ']=="5"){echo 'class="active"';}?>><a href="cpanel.php?categ=5">Cursos</a></li>-->
    <!--<li <?php //if(isset($_GET['categ'])&&$_GET['categ']=="6"){echo 'class="active"';}?>><a href="cpanel.php?categ=6">Recursos Didácticos</a></li>-->
    <li class="dropdown">
    <?php
      if(isset($_SESSION['logino'])){
        if($_SESSION['logino'] == "yes"){
           echo'<a href="cpanel/desloguear.php"><img src="img/close.png" title="Cerrar Session"></a>';
        }
      }
      ?>
    </li>
    <li><a href="" class="scroll-link"></a></li>
	</ul>
</div>