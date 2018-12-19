<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./images/favicon.ico">

    <title>Book Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#sub").click(function(){

		   $("#title").css("color", $("#Color").val() );
		   $("#subtitle").css("color", $("#Color").val() );
		   $("#author").css("color", $("#Color").val() );
		   $("#publisher").css("color", $("#Color").val() );
		   $("#year").css("color", $("#Color").val() );
		   
		   $("#title").text($("#BookTitle").val()) ;
		   $("#subtitle").text($("#BookSubtitle").val()) ;
		   $("#author").text($("#AuthorName").val()) ;
		   $("#publisher").text($("#PublisherName").val()) ;
		   $("#year").text($("#Publishing-Year").val()) ;
		   $("#bookcover").css("background-color", $("#Background-Color").val());  
		  
});
});
</script>
  </head>