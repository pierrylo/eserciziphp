<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="content-type" content="text/html charset=utf-8">
	<meta name="author" content="Tarchini Maurizio">

	<script type="text/javascript" src="jquery-1.3.2.js"></script>

	<link href="screen.css" rel="stylesheet" type="text/css" />
	<title>Regioni, province, comuni | Your Inspiration Web</title>
	
	<script type="text/javascript">
	$(document).ready(function(){

		var scegli = '<option value="0">Scegli...</option>';
		var attendere = '<option value="0">Attendere...</option>';
		
		$("select#province").html(scegli);
		$("select#province").attr("disabled", "disabled");
		$("select#comuni").html(scegli);
		$("select#comuni").attr("disabled", "disabled");
		
		
		$("select#regioni").change(function(){
			var regione = $("select#regioni option:selected").attr('value');
			$("select#province").html(attendere);
			$("select#province").attr("disabled", "disabled");
			$("select#comuni").html(scegli);
			$("select#comuni").attr("disabled", "disabled");
			
			$.post("select.php", {id_reg:regione}, function(data){
				$("select#province").removeAttr("disabled"); 
				$("select#province").html(data);	
			});
		});	
		
		$("select#province").change(function(){
			$("select#comuni").attr("disabled", "disabled");
			$("select#comuni").html(attendere);
			var provincia = $("select#province option:selected").attr('value');
			$.post("select.php", {id_pro:provincia}, function(data){
				$("select#comuni").removeAttr("disabled");
				$("select#comuni").html(data);	
			});
		});	
	});
	
	</script>
</head>
<?php
include '../enablerror.php';
include_once 'select.class.php';
$opt = new SelectList();
?>
<body>
	<div id="container">
	
	<h1>La cascata regioni - province - comuni</h1>
	<h2>Seleziona una regione e nella select successiva compariranno le province di quella regione</h2>
	<h3>Selezionando una provincia, nella select successiva compariranno i comuni di quella provincia</h3>
	
		<form action="?" id="myform">
			Seleziona una regione:<br />
			<select id="regioni">
				<?php echo $opt->ShowRegioni(); ?>
			</select>
			<br /><br />
		
			Seleziona una provincia:<br />
			<select id="province">
			<option>Scegli...</option>
			</select>
			<br /><br />
		
			Seleziona un comune:<br />
			<select id="comuni">
			<option>Scegli...</option>
			</select>
			
		</div>
	</form>


</body>
</html>