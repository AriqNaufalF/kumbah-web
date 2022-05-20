const hamburger_menu = document.querySelector(".hamburger-menu");
const big_wrapper = document.querySelector(".big-wrapper");

hamburger_menu.addEventListener("click", () => 
{
	big_wrapper.classList.toggle("active");
});
