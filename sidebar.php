<?php
include 'ft.php';
?>
<div class="sidebar">
  <div class="container" style="text-align:center">
  <form action="search.php" method="post">
  <input type="text" name="search"placeholder="Search Movie"class="form-control" style="width: 140px;">
  <button name="submit" class="btn btn-" style="float: right; margin-top: -37px;background-color:#726297;color:#fff">Submit</button>
  </div>
</form>

<div class="container" id="lp">
  <div class="latestpost">
    <?php
    $query0 = "SELECT * from movie ORDER BY mv_name DESC Limit 5";
    $run = mysqli_query($con,$query0);
    if ($run) {
      while ($row0=mysqli_fetch_assoc($run)) {
        ?>
          <ul>
            <li>
              <a href="#" class="nv-link" id="a"><?php echo$row0['mv_name'];?></a>
            </li>
          </ul>
        <?php
      }
    }
    ?>
  </div>
</div>
<div class="ads" style="text-align:center;margin-top :20px;">
<h2>Ads</h2>
</div>
</div>