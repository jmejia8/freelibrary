<?
require '../bin/connect_sql.php';
if (isset($_GET['item'])) {
  $item = quitar($_GET['item']);
}else{
  header("location: index.php");
}
$sql = mysql_query("SELECT * FROM libro WHERE id = $item");

if (mysql_num_rows($sql)==0) {
  echo "Error";
}

$row=mysql_fetch_array($sql);

?>

<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" xmlns:addthis="http://www.addthis.com/help/api-spec" >

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <title><? echo $row['nombre']; ?> | Open Library</title>
  <link rel="stylesheet" type="text/css" media="all" href="../wp-content/themes/etnassoft/style.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="../js/boton_arriba.js"></script>
  <link rel="stylesheet" href="../wp-content/themes/etnassoft/bookstore-final.css" />
</head>
<body class="page page-id-12462 page-child parent-pageid-566 page-template page-template-book-title-page-php 30 maths starters unknown">

  <div id="header">
    <div id="header-topnav">
      <a title="Dise&ntilde;o y programaci&oacute;n Web. Ingenier&iacute;a Javascript." href="../">
        <img id="logo" src="../wp-content/themes/etnassoft/images/headers/logo_white.png" />
      </a>
      <div id="access" role="navigation">

        <div class="bookstore_top_menu">
          <ul class="menu" id="menu-menu-navegacion">
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-807" id="menu-item-807"><a href="../index.php">Inicio</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-566 current_page_item menu-item-808" id="menu-item-808"><a href="index.php">Biblioteca</a></li>
          </ul>
        </div>

<!--         <div id="bookstore_search_form">
          <form method="get" id="searchform" action="http://www.etnassoft.com/" >
      	<div>
      		<label class="screen-reader-text" for="s">Search for:</label>
      		<input type="text" value="" name="s" id="s" />
      		<input type="submit" id="searchsubmit" value="" class="hidden" />
      	</div>
      </form>
    </div> -->
      </div><!-- #access -->
    </div>
	</div><!-- #header -->

  <div id="bookstore_promobar"></div>

  <div id="bookstore_info_bar">
    <div class="inner">
      <div class="title_section">
        <h1 class="books_title"><a title="OpenLibra. La biblioteca libre online" href="../index.php">Open Library</a></h1>
        <h2 class="books_subtitle">"La Biblioteca Libre online que estabas esperando"</h2>
      </div>

    </div>

  </div>



<div id="wrapper" class="hfeed">

	<div id="main">



<!-- <link rel="stylesheet" href="../wp-includes/css/Aristo/jquery-ui-1.8.7.custom.css" /> -->

<div id="content">
  <ul id="crumbs">
    <li><a href="../">Inicio</a><span class="separator">-</span></li>
    <li><a href="./">Biblioteca</a><span class="separator">:</span></li>
    <li><? echo $row['nombre']; ?></li>
  </ul>
<div>


    
    <div id="tabs">
      <div id="detalles-libro">
        <div id="post-12462" class="post-12462 page type-page status-publish has-post-thumbnail hentry">

					<div class="book_cover">
            <div class="book_cover_frame">
              
              <div class="frontcover"><!-- Microformat -->
                <img width="450" height="591" src="<? echo $row['imagen']; ?>" class="attachment-book-cover wp-post-image wp-post-image" alt="30 Maths Starters" title="30 Maths Starters" />              </div>
            </div>
            <div id="related_books">
              <h2>Lecturas relacionadas</h2>

              <div class="related_collection">
                <a href="../advanced-probability-and-statistics-concepts/index.html" rel="bookmark" title="Advanced Probability and Statistics Concepts">
                  <img width="667" height="865" src="http://collection.openlibra.com.s3.amazonaws.com/covers/2014/11/Advanced-Probability-and-Statistics-Concepts-OpenLibra-110x153.jpg" class="related_thumb wp-post-image" alt="Advanced Probability and Statistics Concepts" title="Advanced Probability and Statistics Concepts" />
                </a>
                <a href="../go-on-go-the-analyzed-games-of-go-seigen/index.html" rel="bookmark" title="Go on Go: The Analyzed Games of Go Seigen">
                    <img width="450" height="591" src="http://collection.openlibra.com.s3.amazonaws.com/covers/2014/11/go-seigen-book-OpenLibra-110x153.gif" class="related_thumb wp-post-image" alt="Go on Go: The Analyzed Games of Go Seigen" title="Go on Go: The Analyzed Games of Go Seigen" />
                  </a>
                <a href="#" rel="bookmark" title="Modeling and...">
                    <img width="647" height="839" src="http://collection.openlibra.com.s3.amazonaws.com/covers/2014/11/Modeling-and-Simulation-for-High-School-Teachers-OpenLibra-110x153.jpg" class="related_thumb wp-post-image" alt="Modeling and Simulation for High School Teachers: Principles, Problems, and Lesson Plans" title="Modeling .." />
                  </a>
                </div>
            </div><!-- Related Books -->

          </div><!-- Book Cover -->

          
          <div class="entry-content">
            <h1 class="book_title"><? echo $row['nombre']; ?></h1>

            <h2>Ficha T&eacute;cnica:</h2>
            <div class="book_details">

              <div class="titlepage"><!-- Microformat -->
                <div class="row">
                  <div class="label">T&iacute;tulo:</div>
                  <div class="value" title="30 Maths Starters">
                    <? echo $row['nombre']; ?>
                  </div>
                </div>
                <div class="row">
                  <div class="label">Autor(es):</div>
                  <div class="value" title="Duncan Keith"><? echo $row['autor']; ?></div>
                </div>
                <div class="row">
                  <div class="label">Publicaci&oacute;n:</div>
                  <div class="value" title="2005"><? echo $row['anio']; ?></div>
                </div>
              </div>
              <div class="row">
                <div class="label">Idioma:</div>
                <div class="value"><? echo $row['idioma']; ?></div>
              </div>

            </div>

            
            <h2 class="meta_details">Categor&iacute;as:</h2>
            <div class="book_tags">
              <ul>
                <?
                  $idT = $row['categoria'];
                  $cat = mysql_fetch_array(mysql_query("SELECT nombre FROM categoria WHERE id = $idT"));
                ?>
                <li><a title=" Ciencia " href="#"><? echo $cat['nombre']; ?></a></li>
              </ul>            
            </div>
            <h2>Contenido</h2>
            <div class="book_content">
                <p>
                  <? echo $row['sipnosis']; ?>
                </p>
            </div>

            
            <div class="download_book">
              <a href="<? echo $row['url']; ?>" target="_blank">
                Descargar Libro
              </a><br>
              Contrseña: 0p3Nl1bR4ry2014
            </div>

					</div><!-- .entry-content -->
				</div><!-- #post-## -->

      </div><!-- #tab-1 -->

      <div id="comentarios-libro">
        
			<div id="bookstore-comments">


		<h3 id="comments-title">Ning&uacute;n an&aacute;lisis/comentario por el momento!</h3>


<div id="respond">

  <small>
    <a id="cancel-comment-reply-link" style="display: none;" href="index.html#respond" rel="nofollow">Cancelar respuesta</a>
  </small>

  <form id="comment_form" method="post" action="http://www.etnassoft.com/wp-comments-post.php">

    <div class="hiddenFields">
      <input type="hidden" id="comment_post_ID" value="12462" name="comment_post_ID" />
      <input type="hidden" value="0" id="comment_parent" name="comment_parent" />
      <p style="display: none;"><input type="hidden" value="73883f8d49" name="akismet_comment_nonce" id="akismet_comment_nonce"></p>
    </div>

    <div class="comment">
      <label for="comment_comment">Comment: <em>(required)</em></label>
      <textarea aria-required="true" rows="10" cols="70" name="comment" id="comment_comment"></textarea>
    </div>

    <div>
      <label for="comment_name">
        Name:
        <em>(required)</em>
      </label>
      <input type="text" aria-required="true" size="30" value="" name="author" id="comment_name" />
    </div>

    <div>
      <label for="comment_email">
        Email:
        <em>(required)</em>
      </label>
      <input type="text" aria-required="true" size="30" value="" name="email" id="comment_email" />
    </div>

    <div>
      <label for="comment_url">URL:</label>
      <input type="text" size="30" value="" name="url" id="comment_url" />
    </div>

    <div id="comment_options">
      <label for="comment_notify">Por favor, utiliza un lenguaje respetuoso para hacer los comentarios. Puedes a&ntilde;adir etiquetas HTML: &lt;a /&gt;, &lt;i /&gt;, &lt;b /&gt;, ...</label>
      <input type="submit" value="Publicar comentario" name="submit" />
    </div>

  </form>

</div>
</div>
</div>

    </div>



			</div>
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
