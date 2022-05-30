class Question {
    constructor(text, choices, answer) {
        this.text = text;
        this.choices = choices;
        this.answer = answer;
    }
    isCorrectAnswer(choice) {
        return this.answer === choice;
    }
}
let questions = [
    new Question("Date de création d'infinite measure", ["1920", "1999", "2012", "2021"], "2021"),
    new Question("Quels sont les produits commercialisés par l’entreprise ?", ["capteurs", "radios", "enceintes", "montres"], "capteur"),
    new Question("Quels sont nos collaborateurs ?", ["Ross248", "RATP", "SNCF", "Air France"], "Ross248"),
    new Question("Quel est le temps nécessaire pour fabriquer un produit ?", ["3 mois", "5 mois", "9 mois", "12 mois"], "9 mois"),
    new Question("Où est basée l'entreprise ?", ["états-unis", "France", "Chine", "Belgique"], "France"),
    new Question("Quel est le nom du fondateur d'infinite measure ?", ["ECE", "ESIEE", "ISEP", "ESME"], "ISEP"),
    new Question("Quel était son effectif de départ ?", ["100", "6", "25", "19"], "6"),
    new Question("À partir de quelle fréquence cardiaque maximale l’humain est-il considéré en danger ?", ["200", "154", "95", "100"], "200"),
    new Question("Quelle est la fréquences audibles par l'oreille humaine ?", ["20Hz-20KHz", "10Hz-30KHz", "5Hz-100KHz", "65Hz-150KHz"], "20Hz-20KHz")
];

console.log(questions);

class Quiz {
    constructor(questions) {
        this.score = 0;
        this.questions = questions;
        this.currentQuestionIndex = 0;
    }
    getCurrentQuestion() {
        return this.questions[this.currentQuestionIndex];
    }
    guess(answer) {
        if (this.getCurrentQuestion().isCorrectAnswer(answer)) {
            this.score++;
        }
        this.currentQuestionIndex++;
    }
    hasEnded() {
        return this.currentQuestionIndex >= this.questions.length;
    }
}

// Regroup all  functions relative to the App Display
const display = {
    elementShown: function(id, text) {
        let element = document.getElementById(id);
        element.innerHTML = text;
    },
    endQuiz: function() {
        endQuizHTML = `
        <h1>Quiz terminé !</h1>
        <h3> Votre score est de : ${quiz.score} / ${quiz.questions.length}</h3>`;
        this.elementShown("quiz", endQuizHTML);
    },
    question: function() {
        this.elementShown("question", quiz.getCurrentQuestion().text);
    },
    choices: function() {
        let choices = quiz.getCurrentQuestion().choices;

        guessHandler = (id, guess) => {
                document.getElementById(id).onclick = function() {
                    quiz.guess(guess);
                    quizApp();
                }
            }
            // display choices and handle guess
        for (let i = 0; i < choices.length; i++) {
            this.elementShown("choice" + i, choices[i]);
            guessHandler("guess" + i, choices[i]);
        }
    },
    progress: function() {
        let currentQuestionNumber = quiz.currentQuestionIndex + 1;
        this.elementShown("progress", "Question " + currentQuestionNumber + " sur " + quiz.questions.length);
    },
};

// Game logic
quizApp = () => {
        if (quiz.hasEnded()) {
            display.endQuiz();
        } else {
            display.question();
            display.choices();
            display.progress();
        }
    }
    // Create Quiz
let quiz = new Quiz(questions);
quizApp();

console.log(quiz);