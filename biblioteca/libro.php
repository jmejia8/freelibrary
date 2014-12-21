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


<!-- Mirrored from www.etnassoft.com/biblioteca/30-maths-starters/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Dec 2014 17:17:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <title><? echo $row['nombre']; ?> | Open Library</title>
  <link rel="stylesheet" type="text/css" media="all" href="../wp-content/themes/etnassoft/style.css" />
  <link rel="stylesheet" href="../wp-content/themes/etnassoft/bookstore-final.css" />

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
  <script src="../wp-content/themes/etnassoft/js/jquery-1.6.1.min.js"></script>


  
<!-- <meta name='shareaholic:site_name' content='EtnasSoft' />
<meta name='shareaholic:image' content='http://collection.openlibra.com.s3.amazonaws.com/covers/2014/06/30-maths-starters-OpenLibra.gif' />
<meta property='og:image' content='http://collection.openlibra.com.s3.amazonaws.com/covers/2014/06/30-maths-starters-OpenLibra.gif' />
 -->


</head>
<body class="page page-id-12462 page-child parent-pageid-566 page-template page-template-book-title-page-php 30 maths starters unknown">

  <div id="header">
    <div id="header-topnav">
      <a title="Dise&ntilde;o y programaci&oacute;n Web. Ingenier&iacute;a Javascript." href="../../index.html">
        <img id="logo" src="../wp-content/themes/etnassoft/images/headers/logo_white.png" />
      </a>
      <div id="access" role="navigation">

        <div class="bookstore_top_menu">
          <ul class="menu" id="menu-menu-navegacion">
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-807" id="menu-item-807"><a href="../index.php">Inicio</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-566 current_page_item menu-item-808" id="menu-item-808"><a href="index.php">Biblioteca</a></li>
          </ul>
        </div>

        <div id="bookstore_search_form">
          <form method="get" id="searchform" action="http://www.etnassoft.com/" >
	<div>
		<label class="screen-reader-text" for="s">Search for:</label>
		<input type="text" value="" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="" class="hidden" />
	</div>
</form>        </div>
      </div><!-- #access -->
    </div>
    <h1 class="image_central">Dise&ntilde;o y Proagramaci&oacute;n Web Madrid. Front-end Developer Madrid. Arquitecto Javascript Madrid - EtnasSoft </h1>
	</div><!-- #header -->

  <div id="bookstore_promobar"></div>

  <div id="bookstore_info_bar">
    <div class="inner">
      <div class="title_section">
        <h1 class="books_title"><a title="OpenLibra. La biblioteca libre online" href="../index.html">Open Library</a></h1>
        <h2 class="books_subtitle">"La Biblioteca Libre online que estabas esperando"</h2>
      </div>
      <div class="intro_section">
        <a class="main_rss_follow" href="../../selector-rss/index.html">RSS</a>
        <a class="main_twitter_follow" href="http://twitter.com/etnassoft/">Twitter</a>
      </div>
    </div>

  </div>



<div id="wrapper" class="hfeed">

	<div id="main">



<link rel="stylesheet" href="../wp-includes/css/Aristo/jquery-ui-1.8.7.custom.css" />

<div id="content">
  <ul id="crumbs">
    <li><a href="../../index.html">Inicio</a><span class="separator">-</span></li>
    <li><a href="../index.html">Biblioteca</a><span class="separator">:</span></li>
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
                <div class="row">
                  <div class="label">Editorial:</div>
                  <div class="value" title="Autoedición">Autoedición</div>
                </div>
                <div class="row">
                  <div class="label">N&uacute;m. P&aacute;ginas:</div>
                  <div class="value">40p.</div>
                </div>
              </div>

              <div class="row">
                <div class="label">Tama&ntilde;o:</div>
                <div class="value">891 Kbs (zip)</div>
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

            <h2 class="meta_details">Etiquetas</h2>
            <div class="book_tags">
             <ul><li><a title="Ciencias" href="../tag/ciencias/index.html">Ciencias</a></li><li><a title="ejercicios" href="../tag/ejercicios/index.html">ejercicios</a></li><li><a title="juegos" href="../tag/juegos/index.html">juegos</a></li><li><a title="matemáticas" href="../tag/matematicas/index.html">matemáticas</a></li><li><a title="problemas" href="../tag/problemas/index.html">problemas</a></li><li><a title="puzzles" href="../tag/puzzles/index.html">puzzles</a></li></ul>            </div>

            <h2>Contenido</h2>
            <div class="book_content">
              <!-- <div class="addthis_toolbox addthis_default_style " addthis:url='http://www.etnassoft.com/biblioteca/30-maths-starters/' addthis:title='30 Maths Starters '  >
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_counter addthis_pill_style"></a>
              </div> -->
                <p>
                  <? echo $row['sipnosis']; ?>
                </p>
            </div>

            
            <div class="download_book">
              <a href="<? echo $row['url']; ?>" target="_blank">
                Descargar Libro
              </a>
            </div>
						<!-- <div class="download_book purple">
              <a href="http://collection.openlibra.com.s3.amazonaws.com/pdf/30-maths-starters.pdf?AWSAccessKeyId=AKIAIGY5Y2YOT7GYM5UQ&amp;Signature=i5poadEOUbcPzdJC6QsS3ft8bFw%3D&amp;Expires=1417892935" rel="external">
                Visualizar PDF
              </a>
            </div> -->

						<div id="paypal-donate-form">
              <a href="../../biblioteca-footer/donaciones/index.html" title="Realizar una donaci&oacute;n">
                <img src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donate_LG.gif" alt="Hacer una donací&oacute;n">
              </a>
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
</div><!-- #comments -->


<script type="text/javascript">
  jQuery(document).ready(function($) {
    // Damos formato al comentario del usuario
    // TODO: Sacar de aqu� y poner en su sitio.
    $('#submit').click(function(){
      var commentInput = $('#comment');
      var textComment = commentInput.val();
      textComment
      textComment = textComment.replace(/</g, '&lt;');
      textComment = textComment.replace(/>/g, '&gt;');
      console.log(textComment);
      //commentInput.val(textComment);
    })
  });
</script>      </div>

    </div>



			</div><!-- #content -->
		</div><!-- #container -->

  </div>
</div>
<div id="wrapper_closer"></div>
<div id="footer_books">
  <div id="footer_books_content">

    <div id="footer_brand">
      <a href="../index.html" class="footer_logo">OpenLibra</a>
      <p>
        <span class="design_by">OpenLibra Girl by <a href="http://saisan-disseny.blogspot.com/" title="Saisan Disseny">Saisan Disseny</a></span>
        <span class="twitter_link"><a href="http://twitter.com/SaisanDisseny/" title="@SaisanDisseny">@SaisanDisseny</a></span>
      </p>
      <p>
        <span class="design_by">OpenLibra Logo by <a href="http://about.me/vaneloana" title="Vanessa Reyes">Vanessa Reyes</a></span>
        <span class="twitter_link"><a href="http://twitter.com/vaneloana" title="@vaneloana">@vaneloana</a></span>
      </p>
    </div>

    <div id="footer_books_nav">

      <ul>

        <li class="first-item">
          <h2>OpenLibra</h2>
          <ul>
            <li><a href="../../biblioteca-footer/el-proyecto/index.html" title="Proyecto">Proyecto</a></li>
            <li><a href="../../biblioteca-footer/sobre-las-licencias/index.html" title="Sobre las licencias">Sobre las licencias</a></li>
            <li><a href="../../biblioteca-footer/opensearch-y-openlibra/index.html" title="Open Search en OpenLibra">OpenSearch y OpenLibra</a></li>
            <li><a href="../../api-documentacion/index.html" title="API P&uacute;blica">API P&uacute;blica</a></li>
            <li><a href="../../biblioteca-footer/faqs/index.html" title="Preguntas Frecuentes">FAQs</a></li>
          </ul>
        </li>

        <li>
          <h2>Participa</h2>
          <ul>
            <li><a href="../../subir-libro/index.html" title="Sugerir un libro">Sugerir un Libro</a></li>
            <li><a href="../../biblioteca-footer/promocione-su-obra/index.html" title="Promocione su obra">Promocione su obra</a></li>
            <li><a class="new_feature" href="../../trabajar-en-openlibra/index.html" title="Trabajar en OpenLibra">Trabajar en OpenLibra</a></li>
            <li><a class="new_feature" href="../../biblioteca-footer/donaciones/index.html" title="Realizar una donaci&oacute;n">Hacer una donaci&oacute;n</a></li>
          </ul>
        </li>

        <li>
          <h2>Contactar</h2>
          <ul>
            <li><a href="http://twitter.com/etnassoft" title="Twitter">S&iacute;guenos en Twitter</a></li>
            <li><a href="../../contactar/index.html" title="Abusos">Reportar abuso</a></li>
            <li><a href="../../contactar/index.html" title="Contactar">Enviar mail</a></li>
          </ul>
        </li>

      </ul>

    </div><!-- #footer_books_nav -->

  </div><!-- footer_books_content -->

  <div id="books_colophon">
    <p>&copy;2011 OpenLibra is licensed under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0</a> | Development by <a href="../../index.html">EtnasSoft</a> | Follow me on Twitter: <a href="http://twitter.com/etnassoft">@etnassoft</a></p>
  </div>

</div><!-- #footer_books -->

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="http://185.37.226.98/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="http://185.37.226.98/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

<script type="text/javascript">var SHRSB_Settings = [];</script>	<script type="text/javascript">
	  window.___gcfg = {lang: 'es'};
	
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script><script type="text/javascript">

var addthis_config = {"data_track_clickback":true,"data_track_addressbar":false,"data_track_textcopy":false,"ui_atversion":"300"};
var addthis_product = 'wpp-3.5.9';
</script><script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=My+Profile"></script><script type='text/javascript' src='../../wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/www.etnassoft.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Enviando...","cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/contact-form-7/includes/js/scripts657a.js?ver=3.9.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ratingsL10n = {"plugin_url":"http:\/\/www.etnassoft.com\/wp-content\/plugins\/wp-postratings","ajax_url":"http:\/\/www.etnassoft.com\/wp-admin\/admin-ajax.php","text_wait":"Please rate only 1 post at a time.","image":"stars","image_ext":"gif","max":"5","show_loading":"1","show_fading":"1","custom":"0"};
var ratings_mouseover_image=new Image();ratings_mouseover_image.src=ratingsL10n.plugin_url+"/images/"+ratingsL10n.image+"/rating_over."+ratingsL10n.image_ext;;
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/wp-postratings/postratings-jsd9b4.js?ver=1.79'></script>
<script type='text/javascript' src='http://dtym7iokkjlif.cloudfront.net/media/js/jquery.shareaholic-publishers-sb.min.js?ver=6.1.5.1'></script>
<!--wp_footer-->
<script type="text/javascript" src="../../wp-content/themes/etnassoft/js/jquery.tipsy.min.js"></script>
<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>

<!-- Grab Google CDN's jQuery UI, with a protocol relative URL; fall back to local if necessary -->
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
<script>
  jQuery.ui || document.write( '' +
    unescape('%3Cscript src="http://www.etnassoft.com/wp-includes/js/jquery/ui.core.js"%3E%3C/script%3E') +
    unescape('%3Cscript src="http://www.etnassoft.com/wp-includes/js/jquery/ui.widget.js"%3E%3C/script%3E') +
    unescape('%3Cscript src="http://www.etnassoft.com/wp-includes/js/jquery/ui.tabs.js"%3E%3C/script%3E')
  )
</script>

<script type="text/javascript">
jQuery(document).ready( function(){
  jQuery('.addthis_toolbox').insertAfter('.book_title');

  jQuery('.entry-content').show();
  jQuery( "#tabs" ).tabs({
    ajaxOptions: {
      data: {
        'book_id' : '12462'
      }
    }
  });

  jQuery( '.share-panel-long-url').click( function(){
    var $inputURL = jQuery('#share_panel_url');
    if( jQuery(this).attr('checked') ){
      var alternateURL = jQuery('#alternate_url').val();
      if(!$inputURL.data('short_url')){
        $inputURL.data('short_url', $inputURL.val() )
      }
      $inputURL.val( alternateURL );
    }else{
      $inputURL.val( $inputURL.data('short_url') );
    }
  } );

  jQuery('.meta_details').click( function(){
    $this = jQuery(this);
    if( ($this).hasClass('closed') ){
      $this.removeClass('closed').next().slideDown();
    }else{
      $this.addClass('closed').next().slideUp();
    }
  });

  jQuery('.related_collection a').tipsy({
    gravity: 'n'
  });

} );
function bit_url( url ){
  var username = "etnassoft"; // bit.ly username
  var key = "R_8f3b78bef8ccdedf0915af1d9451d355";
  $.ajax({
    url: "http://api.bit.ly/v3/shorten",
    data: {
      longUrl : url,
      apiKey : key,
      login : username
    },
    dataType: "jsonp",
    success : function( v ){
      var bit_url = v.data.url;
      $("#result").html('<a href="' + bit_url + '" target="_blank">' + bit_url + '</a>');
    }
  });
}
var ratingsL10n = {
plugin_url: "http://www.etnassoft.com/wp-content/plugins/wp-postratings",
ajax_url: "http://www.etnassoft.com/wp-content/plugins/wp-postratings/wp-postratings.php",
text_wait: "Por favor, solo 1 voto cada vez.",
image: "stars",
image_ext: "gif",
max: "5",
show_loading: "0",
show_fading: "0",
custom: "0"
};
var ratings_mouseover_image=new Image();ratings_mouseover_image.src=ratingsL10n.plugin_url+"/images/"+ratingsL10n.image+"/rating_over."+ratingsL10n.image_ext;
</script>

<script type="text/javascript" src="../../wp-content/plugins/wp-postratings/postratings-js.js"></script>

</body>

<!-- Mirrored from www.etnassoft.com/biblioteca/30-maths-starters/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Dec 2014 17:17:51 GMT -->
</html>
<!-- Dynamic page generated in 0.622 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2014-12-06 17:08:55 -->

<!-- super cache -->