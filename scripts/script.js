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
const username = document.querySelector('#username');
const messages = document.querySelector('#messages');

submit.addEventListener('click', () => {
   modalMessage.innerHTML = `<p>Thank you, ${username.value}, for sending a message!</p>`;
});
