<div class="pagination">

    <div class="pagination_selector">
      <span class="prev disabled">&lt; anterior</span>
      <span class="current">1</span>
      <a href="page/2/indexaa09.php?new_layout=grid">2</a>
      <a href="page/3/indexaa09.php?new_layout=grid">3</a>
      <a class="next" href="page/2/indexaa09.php?new_layout=grid">siguiente &gt;</a>
    </div>
    <dl class="settings"><dt>Coincidencias:</dt><dd>2689 </dd></dl>
</div>
    <!-- ================================================================ -->
    <!-- ================================================================ -->
    <!-- ================================================================ -->
    <!-- ================================================================ -->
    <ul class="books"> 

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


    </ul>
    <!-- ================================================================ -->
    <!-- ================================================================ -->
    <!-- ================================================================ -->
    <!-- ================================================================ -->
    <!-- ================================================================ -->
    <div class="pagination">
        <div class="pagination_selector">
          <span class="prev disabled">&lt; anterior</span>
          <span class="current">1</span>
          <a href="page/2/indexaa09.php?new_layout=grid">2</a>
          <a href="page/3/indexaa09.php?new_layout=grid">3</a>
          <a class="next" href="page/2/indexaa09.php?new_layout=grid">siguiente &gt;</a>
        </div>
    </div>
  </div>