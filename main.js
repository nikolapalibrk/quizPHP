var categoryDiv = document.querySelectorAll('.category');
var optionBtns = document.querySelectorAll('.answerBtn');
var startDiv = document.querySelector('#startScreen');
var endDiv = document.querySelector('#endScreen');
var questionDiv = document.querySelector('#questionScreen');
var questionText = document.getElementById('qText');
var confirmBtn = document.getElementById('confirm');

var counter = 0;
var questions = [];
var clicked = [];
var confirmed = [];
var quiz = {};
var xml = new XMLHttpRequest();
xml.open("GET", "data.php");

xml.addEventListener('readystatechange', function() {
  if (xml.status === 200 && xml.readyState === 4) {
    getData(xml);
  }
});

xml.send();

function getData (xml) {
  var data = xml.responseText;
  jsonData = JSON.parse(data);
}


for (var i = 0; i < categoryDiv.length; i++) {
  categoryDiv[i].addEventListener('click', function() {
    createQuestions(this.innerHTML.toLowerCase());
    startQuiz();
  });
}

function createQuestions (category) {
  for (var i = 0; i < jsonData.length; i++) {
    if (category === 'all') {
      questions.push(jsonData[i]);
    }
    if (jsonData[i].category === category) {
      questions.push(jsonData[i]);
    }
  }
}

for (var i = 0; i < optionBtns.length; i++) {
  optionBtns[i].addEventListener("click", function  () {
    confirmBtn.style.visibility = "visible";
    clicked.push(this.innerHTML);
  })
}

confirmBtn.addEventListener('click', function  () {
  confirmed.push(clicked.pop());
  counter++;
  this.style.visibility = "hidden";
  nextQuestion()
})

function startQuiz () {
  nextQuestion();
  startDiv.style.display = "none";
  questionDiv.style.display = "block";
}

function nextQuestion () {
  if(counter === questions.length){
    endDiv.style.display = "block";
    questionDiv.style.display = "none";
    score();
  }
  questionText.innerHTML = questions[counter].text;
  for (var i = 0; i < optionBtns.length; i++) {
    optionBtns[i].innerHTML = questions[counter].options[i];
  }
}

function score () {
  var guessed = 0;
  for (var i = 0; i < questions.length; i++) {
    console.log(confirmed);
    console.log(questions[i].answer);
    if (confirmed[i] === questions[i].answer) {
      guessed++;
    }
  }
  endDiv.innerHTML = '<h2>You guessed ' + guessed + ' out of ' + questions.length;
}
