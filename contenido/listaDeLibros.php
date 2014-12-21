<?
require '../bin/connect_sql.php';

if (isset($_GET['categoria']) and $_GET['categoria']!=-1) {
  $categ = quitar($_GET['categoria']);
  $sql = mysql_query("SELECT * FROM libro WHERE categoria = $categ");
}else{
  $sql = mysql_query("SELECT * FROM libro limit 0, 50");
}
if (mysql_num_rows($sql)==0) {
  echo "<center>Sin resultados</center>";
}
while ($row=mysql_fetch_array($sql)) {

?>

  <li>
          <div>
            <a class="attachment-bookstore_thumb" href="libro.php?item=<? echo $row['id']; ?>">
              <span class="details">
                <span class="title" ><? echo $row['nombre']; ?></span>
              </span>
            </a>

            <div class="image">
              <img width="667" height="865" src="<? echo $row['imagen']; ?>" class="attachment-bookstore_grid wp-post-image wp-post-image"  />
            </div>
            <div class="metadata">
              <div class="language_set english"></div> 
            </div>
  </li>
  <?
}
  ?>