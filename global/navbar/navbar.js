const navToggle=document.getElementById("navToggle");
const navMenu=document.getElementById("navMenu");
navToggle.addEventListener("click", (event)=> {
	event.stopPropagation();
	navMenu.classList.toggle("is-open");
	navToggle.classList.toggle("is-open");
	const isOpen=navMenu.classList.contains("is-open");
	navToggle.setAttribute("aria-expanded", isOpen);
}

);
navMenu.addEventListener("click", (event)=> {
	event.stopPropagation();
}

);
document.addEventListener("click", ()=> {
	navMenu.classList.remove("is-open");
	navToggle.classList.remove("is-open");
	navToggle.setAttribute("aria-expanded", "false");
}

);
