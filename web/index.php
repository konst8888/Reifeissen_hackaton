<!DOCTYPE html>
<html>
	<head>
		<title>raif_hack</title>
		<link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
		<link rel='stylesheet' href='css/styles1.css'>

<script>
function openTabs(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

</script>
	</head>
	<body>
		<div class='header'>
			<p align='center'><img src='img/logo.jpg' width='40' height='40'><span class='header-text' style='color: #ecf026;'>RAIFFEISEN HACK</span></p>
		</div>

		<div class='whole-container' style='background-repeat: repeat-y'>

		<div class='left-bar'>&nbsp;</div><!--

		--><div class='center-bar'>
		<p align='center'><span style='font-size: 25px;'>Выберите компанию:</span> <select class='company_select' name='company'>
			<option value='' checked></option>
			<option value='megogo' id='megogo'>megogo</option>
			<option value='ivi' id='ivi'>ivi</option>
		</select></p>

		<div class="tab" align='center'>
			<button class="tablinks" onclick="openTabs(event, 'Analitics')">Аналитика</button>
			<button class="tablinks" onclick="openTabs(event, 'Recomendations')">Рекомендации</button>
		</div>	
		
		<div id="Analitics" class="tabcontent" align='center'> 
			
			<div class='container'>
			<img src='img/stocks.jpg' width='500px'><div>cool</div></div>
			<div class='container'>
			<img src='img/stocks.jpg' width='500px'><div>cool1</div></div>
			<p>&nbsp;</p>
			<div class='container'>
			<img src='img/stocks.jpg' width='500px'><div>cool2</div></div>
			
		</div>

		<div id='Recomendations' class='tabcontent'>
			<img src='img/stocks.jpg' width='500px'> <img src='img/stocks.jpg' width='500px'>
		</div>

		</div><!--
		--><div class='right-bar'>&nbsp;</div>

		<div class='clearer'></div>
		</div>

		<div class='footer'>&nbsp;</div>
	</body>
</html>



