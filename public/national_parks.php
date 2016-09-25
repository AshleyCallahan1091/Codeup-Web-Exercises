<?php

require '../dbc_passwords.php';
require '../db_connect.php';





function pageController($dbc)
{

require '../src/Input.php';
require '../new-parks.php';
   
//turn into prepared 

   $page = Input::get('page', 1);

   if ($page < 1) {
		$page = 1;
   }

	$offset = ($page - 1) * 4;

	$sql = "SELECT * FROM national_parks LIMIT 4 OFFSET $offset";

	$parks = $dbc->query($sql)->fetchAll(PDO::FETCH_ASSOC);


	return [
		'page' => $page,
		'title' => 'National Parks',
		'parks' => $parks
		
	];


}
extract(pageController($dbc));
?>

<!DOCTYPE html>
<html>
<head>
	<?php include '../partials/head.phtml' ?>
</head>
<body>
	<div class="container">
		<div class="col-md-8">
			<header class="page-header">
				<h1>Parks</h1>
			</header>
		</div>
	
		<form method="post">
			<div class="col-sm-6">
				<input
					type="text"
					class="form-control"
					name="park_name"
					id="park_name"
					placeholder="Name"
					
				><br>
				<input
					type="text"
					class="form-control"
					name="park_location"
					id="park_location"
					placeholder="Location"
					
				><br>
				<input
					type="date"
					class="form-control"
					name="park_date"
					id="park_date"
					placeholder="Date Established"
					
				><br>
				<input
					type="text"
					class="form-control"
					name="park_area"
					id="park_area"
					placeholder="Area In Acres"
					
				><br>
				<input
					type="text"
					class="form-control"
					name="park_description"
					id="park_description"
					placeholder="Description"
					
				><br>
				<button type='submit'>Submit!</button>

			</div>
		 </form>
	</div>
	<br>




	<div class="container">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
				<th><a href="?sort_by=number">ID</a></th>
					<th><a href="?sort_by=name">Name</a></th>
					<th><a href="?sort_by=location">Location</a></th>
					<th><a href="?sort_by=date_established">Date Established</a></th>
					<th><a href="?sort_by=area_in_acres">Area in Acres</a></th>
					<th><a href="?sort_by=Description">Description</a></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($parks as $park): ?>
					<tr>
						<?php foreach ($park as $value) : ?>
							<td><?= $value; ?></td> 
						<?php endforeach; ?>
					</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>
  <tr>
      <td colspan="6">
          <!-- The values in this pagination control indicate you're currently viewing page 2 -->
          <nav aria-label="Page navigation" class="text-center">
              <ul class="pagination">
                  <li>
                      <a href="?page=1" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                      </a>
                  </li>
                  <li><a href="?page=1">1</a></li>
                  <li><a href="?page=2">2</a></li>
                  <li><a href="?page=3">3</a></li>
                  <li><a href="?page=4">4</a></li>
                  <li><a href="?page=5">5</a></li>
                  <li><a href="?page=6">6</a></li>
                  <li><a href="?page=7">7</a></li>
                  <li><a href="?page=8">8</a></li>
                  <li><a href="?page=9">9</a></li>
                  <li><a href="?page=10">10</a></li>
                  <li><a href="?page=11">11</a></li>
                  <li><a href="?page=12">12</a></li>
                  <li><a href="?page=13">13</a></li>
                  <li><a href="?page=14">14</a></li>
                  <li><a href="?page=15">15</a></li>
                  <li><a href="?page=16">16</a></li>
                  <li><a href="?page=17">17</a></li>
                  <li><a href="?page=18">18</a></li>
                  <li><a href="?page=19">19</a></li>
                  <li><a href="?page=20">20</a></li>
                  <li>
                      <a href="?page=2" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                      </a>
                  </li>
              </ul>
          </nav>
      </td>
  </tr>
</tfoot>
		</table>
	</div>

<?php include '../partials/scripts.phtml' ?>


</body>
</html>