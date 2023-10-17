const addNewMenu = document.getElementById("add-new-container");

document.getElementById("add-new-btn").onclick = () => {
  addNewMenu.style.display = "block";
};

document.getElementById("add-menu_close-btn").onclick = () => {
  addNewMenu.style.display = "none";
};

document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("log_in-btn").style.display = "none";
  addNewMenu.style.display = "none";
});
