// signin buttons
const myBtn1 = document.getElementById("mybtn1");
const myBtn2 = document.getElementById("mybtn2");
const formSelect = document.querySelector(".frmslct");
const student_form = document.querySelector(".student-form");
const admin_form = document.querySelector(".admin-form");
const doctor_form = document.querySelector(".doctor-form");
const accountant_form = document.querySelector(".accountant-form");


myBtn1.onclick = () => {
  myBtn1.style.backgroundColor = "#00d084";
  myBtn1.style.color = "#ffffff";
  myBtn2.style.color = "#192F59";
  myBtn2.style.backgroundColor = "transparent";
  formSelect.style.visibility = "hidden";
  admin_form.style.display = "none";
  doctor_form.style.display = "none";
  accountant_form.style.display = "none";
  student_form.style.display = "block";
};
myBtn2.onclick = () => {
  myBtn2.style.backgroundColor = "#00d084";
  myBtn1.style.backgroundColor = "transparent";
  myBtn2.style.color = "#ffffff";
  myBtn1.style.color = "#192F59";
  formSelect.style.visibility = "visible";
  student_form.style.visibility = "hidden";
};

