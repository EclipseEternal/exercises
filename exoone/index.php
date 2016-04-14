<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Coordinates render</title>
		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> 
		<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="web/main.js"></script> 
		<link rel="stylesheet" href="web/main.css"/>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="row">
			<div id="coordForm" class="col-xs-6 col-md-4">
				<div class="content"><form>
					<h2>
						Coordinates input and control
					</h2>
					<div>
						<label for="coords">Enter your coordinates</label>
					</div>
					<div>
						<textarea id="coords" title="Separated by a space - Draw a line for another set" 
										placeholder="x y z
a b c
d e f" class="form-control"></textarea>
					</div>
					<div>
						<button type="button" onclick="generateCoords();" class="btn btn-primary">
							Generate coords
						</button>
						<button type="button" onclick="displayHTML();" class="btn btn-primary">
							Display HTML
						</button>
						<button type="button" onclick="displayCSV();" class="btn btn-primary">
							Display CSV
						</button>
						<button type="button" onclick="ddlCSV();" class="btn btn-primary">
							Download CSV
						</button>
					</div></form>
					
				</div>
				
			</div>
			<div class="col-xs-6 col-md-4" id="renderHTML">
				<h2>
					HTML display (table)
				</h2>
				<div class="middle" id="dHTML">
					
				</div>
			</div>
			<div class="col-xs-6 col-md-4" id="renderCSV">
				<h2>
					CSV display (raw)
				</h2>
				<div class="middle" id="dCSV">
					
				</div>
			</div>
		</div>
		


	</body>	
</html>