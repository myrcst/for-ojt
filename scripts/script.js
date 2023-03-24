const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});
const submit = document.querySelector('#submit');
const modalMessage = document.querySelector("#feedback .modal-body");

const email = document.querySelector('#email');
const name = document.querySelector('#name');
const message = document.querySelector('#message');

submit.addEventListener('click', () => {
   modalMessage.innerHTML = `<p>Thank you, ${name.value}, for sending a message!</p>`;
});
