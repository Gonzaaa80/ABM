

















































window.onscroll = function () {
  if (document.documentElement.scrollTop > 100) {
    document.querySelector(".gotop-cont").classList.add("show");
  } else {
    document.querySelector(".gotop-cont").classList.remove("show");
  }
};

document.querySelector(".gotop-cont").addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
