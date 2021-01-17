<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/AdobeStock_55807979_thumb.jpeg') ?>" />
      <h2>Our Inventory of Used Bicycles</h2>
      <p>Choose the bike you love.</p>
      <p>We will deliver it to your door and let you try it before you buy it.</p>
    </div>

    <table id="inventory">
      <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Year</th>
        <th>Category</th>
        <th>Gender</th>
        <th>Color</th>
        <th>Price</th>
        <th>&nbsp;</th>
      </tr>

<?php

$bikes = Bicycle::find_all();

?>
      <?php foreach($bikes as $bike) { ?>
      <tr>
        <td><?php echo h($bike->brand); ?></td>
        <td><?php echo h($bike->model); ?></td>
        <td><?php echo h($bike->year); ?></td>
        <td><?php echo h($bike->category); ?></td>
        <td><?php echo h($bike->gender); ?></td>
        <td><?php echo h($bike->color); ?></td>
        <td><?php echo h(money_format('$%i', $bike->price)); ?></td>
        <td><a href="detail.php?id=<?=$bike->id?>">보기</a></td>
      </tr>
      <?php } ?>

    </table>
<?php

//$sql = "SELECT * FROM bicycles";
//$result = Bicycle::$database->query($sql);
// $row = $result->fetch_assoc();
// $result->free();

//echo "브랜드: " . $row['brand'];
?>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
