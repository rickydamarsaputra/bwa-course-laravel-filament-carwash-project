const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    spaceBetween: 6,
    slidesPerView: "auto",
});

// funtion nav & tabs like bootstrap
document.addEventListener("DOMContentLoaded", function () {
    window.openPage = function (pageName, elmnt) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].classList.add("hidden");
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active", "bg-[#5B86EF]", "text-white");
        tablinks[i].classList.add("bg-white");
      }
      document.getElementById(pageName).classList.remove("hidden");
      elmnt.classList.remove("bg-white");
      elmnt.classList.add("active", "bg-[#5B86EF]", "text-white");
    };
  
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
});