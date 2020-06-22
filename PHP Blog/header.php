<?
  $categories_q = mysqli_query($connection, "SELECT * FROM `categories`");
  $categories= array();
  while ($cat=mysqli_fetch_assoc($categories_q)) {
    $categories[] = $cat;
  }
?>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><a href="/" class="text-dark">My own PHP Blog</a></h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <?
      foreach ($categories as $cat){ ?>
        <a class="p-2 text-dark" href="category.php?id=<?echo $cat['id']?>"><?echo $cat['title'] ?></a>
        <?
      }
     ?>
  </nav>
  <a class="btn btn-outline-primary" href="#">Pay respect</a>
</div>
