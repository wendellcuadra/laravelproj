<!DOCTYPE html>
<html>
<head>
	<title>Simple Grade Identifier</title>
</head>
<body>

<h1>Simple Grade Identifier</h1>

<form method="post" action="">
	<label>Input Grade:</label>
	<input type="text" name="grade" required>
	<input type="submit" name="submit" value="Result">
</form>

<?php
		if(isset($_POST['submit'])){
			$grade = $_POST['grade'];
			if(is_numeric($grade) && $grade >= 65 && $grade <= 100){
				if($grade >= 97 && $grade <= 100){
					echo "<p>Result: Outstanding</p>";
				}
				elseif($grade >= 94 && $grade <= 96){
					echo "<p>Result: Excellent</p>";
				}
				elseif($grade >= 91 && $grade <= 93){
					echo "<p>Result: Superior</p>";
				}
				elseif($grade >= 88 && $grade <= 90){
					echo "<p>Result: Very Good</p>";
				}
				elseif($grade >= 85 && $grade <= 87){
					echo "<p>Result: Good</p>";
				}
				elseif($grade >= 82 && $grade <= 84){
					echo "<p>Result: Satisfactory</p>";
				}
				elseif($grade >= 79 && $grade <= 81){
					echo "<p>Result: Fairly Satisfactory</p>";
				}
				elseif($grade >= 76 && $grade <= 78){
					echo "<p>Result: Fair</p>";
				}
				elseif($grade >= 75 && $grade <= 75){
					echo "<p>Result: Passed</p>";
				}
				else{
					echo "<p>Result: Failed</p>";
				}
			}
			else{
				echo "<p>Please enter a valid grade between 65 and 100.</p>";
			}
		}
?>

</body>
</html>