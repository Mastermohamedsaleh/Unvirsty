let hover1 = document.getElementsByClassName("hover1");
let card1 = document.getElementsByClassName("card1");
let card2 = document.getElementsByClassName("card2");

for (let index = 0; index < 4; index++) {
  hover1[index].addEventListener("mouseover", () => {
    card1[index].style.display = "none";
    card2[index].style.display = "block";
  });
  hover1[index].addEventListener("mouseout", () => {
    card1[index].style.display = "block";
    card2[index].style.display = "none";
  });
}


const img = document.getElementById("srch-img");
const btn = document.getElementById("srch-btn");
let img1 = true;
const srchToggler = document.getElementById("srch-toggler");

btn.addEventListener("click", function () {
  if (img1) {
    img.src = "Assets/images/52.png";
  } else {
    img.src = "Assets/images/51.png";
  }
  img1 = !img1;

  srchToggler.classList.toggle("d-none");
  srchToggler.classList.toggle("show");
});



// counter animation
var numDivs = document.querySelectorAll(".number");
var endValues = [22, 2000, 4, 40]; // The end values for each number
var observer = new IntersectionObserver(
  function (entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting === true) {
        entry.target.classList.add("animate");
        var index = Array.from(numDivs).indexOf(entry.target);
        animateValue(entry.target, 0, endValues[index], 2000); // animate from 0 to endValues[index] in 2 seconds
      } else {
        entry.target.classList.remove("animate");
      }
    });
  },
  { threshold: [0] }
);

numDivs.forEach((numDiv) => observer.observe(numDiv));
function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}