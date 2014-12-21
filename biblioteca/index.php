<?
require '../bin/connect_sql.php';
?>
<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" xmlns:addthis="http://www.addthis.com/help/api-spec" >
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Listado de libros | Open Library</title>

  <link rel="stylesheet" type="text/css" media="all" href="../wp-content/themes/etnassoft/style.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../wp-content/themes/etnassoft/bookstore-final.css" />
  <script type="text/javascript" src="../js/boton_arriba.js"></script>
  <script type="text/javascript" src="../js/cargarLibros.js"></script>


</head>
<body class="page page-id-566 page-parent page-template page-template-books-page-php biblioteca gecko" onload="cargarLibrosAjax(-1)">

  <div id="header">
    <div id="header-topnav">
      <a title="Dise&ntilde;o y programaci&oacute;n Web. Ingenier&iacute;a Javascript." href="../index.php">
        <img id="logo" src="../wp-content/themes/etnassoft/images/headers/logo_white.png" />
      </a>
      <div id="access" role="navigation">

        <div class="bookstore_top_menu">
          <ul class="menu" id="menu-menu-navegacion">
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-807" id="menu-item-807"><a href="../index.php">Inicio</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-566 current_page_item menu-item-808" id="menu-item-808"><a href="index.php">Biblioteca</a></li>
          </ul>
        </div> 
      </div><!-- #access -->
    </div>
	</div><!-- #header -->

  <div id="bookstore_promobar"></div>

  <div id="bookstore_info_bar">
    <div class="inner">
      <div class="title_section">
        <h1 class="books_title"><a title="La biblioteca libre online" href="index.php">Open Library</a></h1>
        <h2 class="books_subtitle">"La Biblioteca Libre online que estabas esperando"</h2>
      </div>
    </div>

  </div>



<div id="wrapper" class="hfeed">

	<div id="main">



<div id="subDepartment">

    <div class="tab"></div>

    <h1>
      CAT&Aacute;LOGO GENERAL: NOVEDADES    </h1>

    <ul id="crumbs">
      <li class="hoError al conectar a la base de datosme_crumb"><a href="../index.php">Inicio</a><span class="separator">-</span></li>
      <li class="bookstore_crumb"><a href="index.php">Biblioteca</a><span class="separator">-</span></li>
      <li>CAT&Aacute;LOGO GENERAL    </ul>

    <input type="hidden" name="actual_url" id="actual_url" value="http://www.etnassoft.com/biblioteca/" />
    <form action="http://www.etnassoft.com/biblioteca/" method="get" id="filters">
      <fieldset>

          <div class="search_area">
            <input type="text" class="filter" placeholder="Comience a escribir..." name="search_term" id="search_books_input" value="" />

              <select name="books_category" id="categories_for_books" onchange="cargarLibrosAjax(this.value)">
                <option value="-1">Todas las categor&iacute;as</option>
<?
$sql = mysql_query("SELECT id, nombre FROM categoria");
while ($row = mysql_fetch_array($sql)) {
    echo '<option value="'.$row['id'].'"  >'.$row['nombre'].'</option>';
}
?>
              </select>

              <button class="standard_submit_btn" type="submit">
                <span class="inner">Buscar!</span>
              </button>
          </div>

          <h3 id="show_filters"><a href="#">Filtrado</a></h3>

          <div id="filters_layers" class="hidden">

             <div class="area">
              <label for="books_criteria">Ordenar: </label>
              <select name="books_criteria" id="books_criteria">
                <option value="post_title_ASC" >T&iacute;tulo A-Z</option>
                <option value="post_title_DESC" >T&iacute;lo Z-A</option>
                <option value="post_date_DESC" selected="selected" >M&aacute;s nuevo</option>
                <option value="post_date_ASC" >M&aacute;s antiguo</option>

              </select>
            </div>

            <div class="area">
              <label for="language">Idioma: </label>
              <select name="lang" id="language">
                <option value="all" selected="selected">Todos</option>
                <option value="spanish" >Espa&ntilde;ol</option>
                <option value="english" >Ingl&eacute;s</option>
              </select>
            </div>

            <div class="area" id="since_date">
              <label for="since">Subido desde: </label>
              <select name="since" id="since">
                <option value="all" selected="selected">Cualquier fecha</option>
                <option value="today" >Hoy</option>
                <option value="last_week" >Semana pasada</option>
                <option value="last_month" >Mes pasado</option>
                <option value="last_year" >A&ntilde;o pasado</option>
              </select>
            </div>
          </div>

      </fieldset>
    </form>

<div id="results_content">
<div id="cargarLibros">

  </div>
</div>

</div><!-- subDepartment -->

<div id="categories">
  <h2>Categor&iacute;as</h2>

  <ul class="products single">
<?
$sql = mysql_query("SELECT id, nombre FROM categoria");
while ($row = mysql_fetch_array($sql)) {
    echo '<li class="folded"><a href="javascript: cargarLibrosAjax('.$row['id'].');">'.$row['nombre'].'</a></li>';
}
?>
    
  </ul>

</div>
</div>
</div>

<div id="wrapper_closer"></div>
<div id="footer_books">
  <div id="footer_books_content">

    <div id="footer_brand">
      <center>
      <a href="index.php" class="footer_logo">OpenLibra</a>
      </center>
    </div>

  </div>

</div>
  <div id="subfooter">
    <div id="subfooter_content">
          <a id="back_to_top_link" type="button">Volver a arriba</a>
          <div class="menu-menu-navegacion-container">
            <ul id="menu-menu-navegacion-1" class="menu">
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-807"><a href="../index.php">Inicio</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-808"><a href="./">Biblioteca</a></li>
          </ul>
        </div>  
    </div>
  </div>




</body>
</html>