 <?php
  sleep(2);
?>

<script>
	/** Fonction AJAX traitant l'appel fichiers **/
	function file(fichier) {
		if(window.XMLHttpRequest) // Pour Firefox
			xhr_object = new XMLHttpRequest();
		else if(window.ActiveXObject) // Pour IE
			xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
		else
			return(false);
 
                //On lance le fichier
		xhr_object.open("GET", fichier, true);
		xhr_object.send(null);
		if(xhr_object.readyState == 4)
			return(xhr_object.responseText);
		else
			return(false);
	}
</script>
 
<?php
	$uri = "http://localhost/techtoprint/devis/mail.php";
?>
<script>
file('<?php echo $file_src; ?>');			
</script>




