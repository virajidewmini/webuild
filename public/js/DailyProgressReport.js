const prevBtns = document.querySelectorAll(".form_btn-previous");
const nextBtns = document.querySelectorAll(".form_btn-next");
const progress = document.getElementById("form_progress");
const formSteps = document.querySelectorAll(".v_form-step");
const progressSteps = document.querySelectorAll(".form_progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("v_form-step-active") &&
      formStep.classList.remove("v_form-step-active");
  });

  formSteps[formStepsNum].classList.add("v_form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("form_progress-step-active");
    } else {
      progressStep.classList.remove("form_progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".form_progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}