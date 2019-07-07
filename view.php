<!DOCTYPE html>
<html lang="en"> 
    <title>View Incidents</title>
        <head>
            <link rel="stylesheet" type="text/css" href="stylesheet.css">
        </head>
		<body>
			<?php include 'navbar.html';?>
            <div id="view">
				<div id="viewincident">
					<form action="viewincident.php" method="post">
						<h2>VIEW INCIDENT</h2>
						To view an incident enter its ID number: 
						<input type = 'number' name = 'id'><br>
						<input type="submit" class="button" value="View">
					</form>
				</div>	
				<div id="viewviewall">
					<form action="viewall.php" method="get">
						<h2>VIEW ALL INCIDENTS</h2>
						<input type="submit" class="button" value="View All">
					</form> 
				</div>
            </div>
		</body>
</html>