<?php 
  $title = "Manager";
  $sicon = "user";
  require ("../partials/top.php");
?>

  <div class="container theme-showcase" role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <h2>Permissions</h2>
      <p>Admin được thực hiện các quyền hạn sau</p>
      <p>
      <a href="add_user.php"><button type="button" class="btn btn-md btn-primary">Add User</button></a>
      <a href="list_user.php"><button type="button" class="btn btn-md btn-success">List User</button></a>
      <a href="edit_user.php"><button type="button" class="btn btn-md btn-info">Edit User by Username</button></a>
      <a href="del_user.php"><button type="button" class="btn btn-md btn-danger">Delete User by Username</button>
      <button type="button" class="btn btn-md btn-warning">Warning</button>
      </p>
      <p>
      <a href="../types/add_types.php"><button type="button" class="btn btn-md btn-primary">Add Types</button></a>
      <a href="../types/list_types.php"><button type="button" class="btn btn-md btn-success">List Types</button></a>
      <a href="edit_types.php"><button type="button" class="btn btn-md btn-info">Edit types by typesname</button></a>
      <a href="del_types.php"><button type="button" class="btn btn-md btn-danger">Delete types by typesname</button>
      <button type="button" class="btn btn-md btn-warning">Warning</button>
      <br>
      <p>
      <a href="../maker/add_maker.php"><button type="button" class="btn btn-md btn-primary">Add Maker</button></a>
      <a href="../maker/list_maker.php"><button type="button" class="btn btn-md btn-success">List Maker</button></a>
      <a href="edit_maker.php"><button type="button" class="btn btn-md btn-info">Edit maker by makername</button></a>
      <a href="del_maker.php"><button type="button" class="btn btn-md btn-danger">Delete maker by makername</button>
      <button type="button" class="btn btn-md btn-warning">Warning</button>
      </p>
      <p>
      <a href="../product/add_product.php"><button type="button" class="btn btn-md btn-primary">Add Product</button></a>
      <a href="../product/list_product.php"><button type="button" class="btn btn-md btn-success">List Product</button></a>
      <a href="edit_product.php"><button type="button" class="btn btn-md btn-info">Edit product by productname</button></a>
      <a href="del_product.php"><button type="button" class="btn btn-md btn-danger">Delete User by Username</button>
      <button type="button" class="btn btn-md btn-warning">Warning</button>
      </p>
    </div>
  </div>

<?php
  require ("../partials/bottom.php");
?>