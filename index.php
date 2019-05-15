<?php require('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD with PDO</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- navbar ends here -->


	
<!-- table -->
<div class="container mt-4">
	<div class="row">
	<div class="col lg-12">
		<div class="jumbotron">
			<h4 class="mb-4">All Employees</h4>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">City</th>
      <th scope="col">Designation</th>
      <th scope="col">Actions</th>
    </tr>
  
  <tbody>

  	<?php 
				$stmt = $db->query("SELECT * FROM employees");

				while ($row = $stmt-> fetch(PDO::FETCH_OBJ)){
	?>
    <tr>
			 <td><?php echo $row->id; ?></td>
			 <td><?php echo $row->name; ?></td>
			 <td><?php echo $row->city; ?></td>
			 <td><?php echo $row->designation; ?></td>
			 <td><a href="#" class="btn btn-sm btn-primary">Edit</a>
					<a href="#" class="btn btn-sm btn-danger">Delete</a>
			 </td>

			<?php } ?>
    </tr>
    
  </tbody>

</table>
<a class="btn btn-md btn-primary mb-3" href="#">Add Employee</a>
</div>
<!-- table ends here -->

	
</body>
</html>