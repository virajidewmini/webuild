

let sideMenu = document.querySelectorAll(".nav-link");
sideMenu.forEach((item) => {
  let li = item.parentElement;

  item.addEventListener("click", () => {
    sideMenu.forEach((link) => {
      link.parentElement.classList.remove("active");
    });
    li.classList.add("active");
  });
});

let menuBar = document.querySelector(".menu-btn");
let sideBar = document.querySelector(".sidebar");
menuBar.addEventListener("click", () => {
  sideBar.classList.toggle("hide");
});



let searchFrom = document.querySelector(".content nav form");
let searchBtn = document.querySelector(".search-btn");
let searchIcon = document.querySelector(".search-icon");
searchBtn.addEventListener("click", (e) => {
  if (window.innerWidth < 576) {
    e.preventDefault();
    searchFrom.classList.toggle("show");
    if (searchFrom.classList.contains("show")) {
      searchIcon.classList.replace("fa-search", "fa-times");
    } else {
      searchIcon.classList.replace("fa-times", "fa-search");
    }
  }
});

window.addEventListener("resize", () => {
  if (window.innerWidth > 576) {
    searchIcon.classList.replace("fa-times", "fa-search");
    searchFrom.classList.remove("show");
  }
  if (window.innerWidth < 768) {
    sideBar.classList.add("hide");
  }
});

if (window.innerWidth < 768) {
  sideBar.classList.add("hide");
}

let mainLink=document.getElementById("main_link");
let subLink=document.getElementById("sub_link");

mainLink.addEventListener("click", () => {
  subLink.innerHTML="Past Complaints";
});




//for notification box

document.addEventListener('DOMContentLoaded', function() {
  var bellIcon = document.getElementById('notificationBell');
  var notificationDropdown = document.getElementById('notificationDropdown');

  bellIcon.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent the default action of the link
      if (notificationDropdown.style.display === 'none') {
          notificationDropdown.style.display = 'block';
      } else {
          notificationDropdown.style.display = 'none';
      }
  });
});

