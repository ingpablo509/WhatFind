function getXMLHttpRequest() {
	var xhr = null;
	
	if (window.XMLHttpRequest || window.ActiveXObject) {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e) {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
		} else {
			xhr = new XMLHttpRequest(); 
		}
	} else {
		alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
		return null;
	}
	
	return xhr;
}



function submitadmin()
{
var xhr = getXMLHttpRequest();

var valeur = encodeURIComponent(document.getElementById('Search').value);
document.getElementById('Search').value = ""; 
if(valeur=="sec-001"){
xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                //var rep=document.getElementById('minichat');
				//rep.innerHTML='<audio width="0" height="0" src="musik/click.wav" autoplay ></audio>';
				//rep.innerHTML='<img src="img/pic.png"/>Add Video';
				document.location.href="admin.html";
        }
};
}else{
	document.getElementById('rep').innerHTML = "votre code d'accès est incorrect"; 
}
xhr.open("POST", "admin.html", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send("&Search="+valeur);

}

