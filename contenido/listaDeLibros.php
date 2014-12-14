<?
require '../bin/connect_sql.php';

if (isset($_GET['categoria'])) {
  $categ = $_GET['categoria'];
  $sql = mysql_query("SELECT * FROM libro WHERE categoria = $categ");
}else{
  $sql = mysql_query("SELECT * FROM libro ");
}
if (mysql_num_rows($sql)==0) {
  echo "<center>Sin resultados</center>";
}
while ($row=mysql_fetch_array($sql)) {

?>

  <li>
          <div>
            <a class="attachment-bookstore_thumb" title="Advanced Probability and Statistics Concepts" href="advanced-probability-and-statistics-concepts/index.html">
              <span class="details">
                <span class="title" title="Advanced Probability and Statistics Concepts"><? echo $row['nombre']; ?></span>
              </span>
            </a>

            <div class="image">
              <img width="667" height="865" src="<? echo $row['imagen']; ?>" class="attachment-bookstore_grid wp-post-image wp-post-image" alt="Advanced Probability and Statistics Concepts" title="Advanced Probability and Statistics Concepts" />
            </div>
            <div class="metadata">
              <div class="language_set english"></div> 
            </div>
  </li>
  <?
}
  ?>