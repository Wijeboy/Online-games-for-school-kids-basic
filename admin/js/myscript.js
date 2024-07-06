//10-11-23

function addRedirect(elements)
{
	for(var i = 0; i < elements.length; i++)
	{
		var game = elements[i];
		var name = game.textContent;

		game.setAttribute('id', name);
		game.setAttribute('onClick', "redirect(this.id)");
		
		
	}

}



function redirect(gameName)
{
	
	window.location.href = `display.php?name="${gameName}"`;
}


var games = document.getElementsByClassName("item2"); 

addRedirect(games);

