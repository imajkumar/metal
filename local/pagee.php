<?php
  $limit=10;

  $total_records =100;
echo   $total_pages = ceil($total_records / $limit);
  $pagLink = "<ul class='pagination'>";
  $pagLink .= "<li class='page-item disabled'><a class='page-link' href='#'>Previous</a></li>";
  if($total_pages>=16){
    $total_pages=16;
  }
  for ($i=1; $i<=$total_pages; $i++) {

    $pagLink .= "<li class='page-item'><a class='page-link'  href='index.php?page=".$i."'>".$i."</a></li>";
  };
  if($total_pages>=16){
      $pagLink .= "<li class='page-item'><a class='page-link' href='#'>Next</a></li>";
  }


  echo $pagLink . "</ul>";




  // How many items to list per page
  $total=120;
$limit = 20;

// How many pages will there be
$pages = ceil($total / $limit);

// What page are we currently on?
$page = min($pages, filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, array(
'options' => array(
'default'   => 1,
'min_range' => 1,
),
)));

// Calculate the offset for the query
$offset = ($page - 1)  * $limit;

// Some information to display to the user
$start = $offset + 1;
$end = min(($offset + $limit), $total);

// The "back" link
$prevlink = ($page > 1) ? '<a  class="btn btn-default" href="?page=1" title="First page">&laquo; First</a> <a class="btn btn-default" href="?page=' . ($page - 1) . '" title="Previous page">&lsaquo; Previous</a>' : '<span class="disabled "><a class="btn btn-default disabled" >&laquo;First</a></span> <span class="disabled"><a class="btn btn-default disabled">&lsaquo; Previous</a></span>';

// The "forward" link
$nextlink = ($page < $pages) ? '<a class="btn btn-default" href="?page=' . ($page + 1) . '" title="Next page">Next &rsaquo; </a> <a class="btn btn-default"  href="?page=' . $pages . '" title="Last page">Last &raquo;</a>' : '<span class="disabled"><a class="btn btn-default disabled">&rsaquo;</a></span> <span class="disabled"><a class=""btn btn-default disabled">&raquo;</a></span>';

// Display the paging information
echo '<div id="paging">
<p>', $prevlink, ' Page ', $page, ' of ', $pages, ' pages, displaying ', $start, '-', $end, ' of ', $total, ' results ', $nextlink, ' </p>
</div>';


  ?>





<!-- <ul class="pagination">
  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item active"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul> -->

<!-- paging -->
<?php

$perpage = 2;
if(isset($_GET['page']) & !empty($_GET['page'])){
$curpage = $_GET['page'];
}else{
$curpage = 1;
}
$start = ($curpage * $perpage) - $perpage;

$totalres =1200;

$endpage = ceil($totalres/$perpage);
$startpage = 1;
$nextpage = $curpage + 1;
$previouspage = $curpage - 1;


?>



<nav aria-label="Page navigation">
<ul class="pagination">
<?php if($curpage != $startpage){ ?>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
<span aria-hidden="true">&laquo;</span>
<span class="sr-only">First</span>
</a>
</li>
<?php } ?>
<?php if($curpage >= 2){ ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
<?php } ?>
<li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>
<?php if($curpage != $endpage){ ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next">
<span aria-hidden="true">&raquo;</span>
<span class="sr-only">Last</span>
</a>
</li>
<?php } ?>
</ul>
</nav>


<!-- paging -->
