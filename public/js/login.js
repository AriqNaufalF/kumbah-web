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
