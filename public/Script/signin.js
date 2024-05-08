// signin buttons
const myBtn1 = document.getElementById("mybtn1");
const myBtn2 = document.getElementById("mybtn2");
const formSelect = document.querySelector(".frmslct");
const student_form = document.querySelector(".student-form");

myBtn1.onclick = () => {
  myBtn1.style.backgroundColor = "#00d084";
  myBtn1.style.color = "#ffffff";
  myBtn2.style.color = "#192F59";
  myBtn2.style.backgroundColor = "transparent";
  formSelect.style.visibility = "hidden";
};
myBtn2.onclick = () => {
  myBtn2.style.backgroundColor = "#00d084";
  myBtn1.style.backgroundColor = "transparent";
  myBtn2.style.color = "#ffffff";
  myBtn1.style.color = "#192F59";
  formSelect.style.visibility = "visible";
  student_form.style.visibility = "hidden";
};

