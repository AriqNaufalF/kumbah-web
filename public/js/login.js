const loginBtn		= document.querySelector("#login-btn");
const registerBtn	= document.querySelector("#register-btn");
const container		= document.querySelector(".container");
const loginNow		= document.querySelector("#login-now");
const registerNow	= document.querySelector("#register-now");

registerBtn.addEventListener("click", () => 
{
	container.classList.add("register-mode");
})

loginBtn.addEventListener("click", () => 
{
	container.classList.remove("register-mode");
})

registerNow.addEventListener("click", () => 
{
	container.classList.add("register-mode2");
})

loginNow.addEventListener("click", () => 
{
	container.classList.remove("register-mode2");
})

function getKey(e)
{
	if (window.event)
		return window.event.keyCode;
	else if (e)
		return e.which;
	else
		return null;
}

function goodchars(e, goods, field)
{
	var key, keychar;

	key = getKey(e);
	if (key == null)
		return true;

	keychar = String.fromCharCode(key);
	keychar = keychar.toLowerCase();
	goods = goods.toLowerCase();

	if (goods.indexOf(keychar) != -1)
		return true;

	if (key == null || key == 0 || key == 8 || key == 9 || key == 27)
		return true;

	if (key == 13)
	{
		var i;
		for (i = 0; i < field.form.elements.length; i++)
			if (field == field.form.elements[i])
				break;
				i = (i + 1) % field.form.elements.length;
				field.form.elements[i].focus();
			return false;
	};

	return false;
}
