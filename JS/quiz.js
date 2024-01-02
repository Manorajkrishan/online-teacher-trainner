//For set the questions
const questions = [
    {
        question:"What is the primary purpose of communication?",
        answer:[
            {Text:"To express oneself",correct:false},
            {Text:"To exchange information and ideas",correct:true},
            {Text:"To persuade others",correct:false},
            {Text:"To entertain",correct:false},
        ]
    },
    {
        question:"Effective listening involves:",
        answer:[
            {Text:"Interrupting the speaker to ask questions",correct:false},
            {Text:"Focusing on your response while the speaker is talking",correct:false},
            {Text:"Paying attention and giving the speaker your full concentration",correct:true},
            {Text:"Multitasking and doing other activities simultaneously",correct:false},
        ]
    },
    {
        question:"What is the purpose of a database management system (DBMS)?",
        answer:[
            {Text:"Secures the network infrastructure",correct:false},
            {Text:"Manages and organizes large sets of data",correct:true},
            {Text:"Facilitates communication between different devices",correct:false},
            {Text:"Monitors network performance",correct:false},
        ]
    },
    {
        question:"What is the purpose of an operating system (OS)?",
        answer:[
            {Text:"Manages computer hardware and software resources",correct:true},
            {Text:"Provides internet connectivity",correct:false},
            {Text:"Runs database queries",correct:false},
            {Text:"Encrypts data for security purposes",correct:false},
        ]
    },
    {
        question:"Which of the following is an example of non-verbal communication?",
        answer:[
            {Text:"Speaking",correct:false},
            {Text:"Writing an email",correct:false},
            {Text:"Making eye contact",correct:true},
            {Text:"Using gestures",correct:false},
        ]
    },
    {
        question:"Which of the following is an example of active communication?",
        answer:[
            {Text:"Sending a text message",correct:false},
            {Text:"Attending a meeting and actively participating",correct:true},
            {Text:"Reading a book silently",correct:false},
            {Text:"Watching a movie",correct:false},
        ]
    },
    {
        question:"Which programming language is used to build dynamic and interactive websites?",
        answer:[
            {Text:"JavaScript",correct:true},
            {Text:"Java",correct:false},
            {Text:"Python",correct:false},
            {Text:"C++",correct:false},
        ]
    },
    {
        question:"What does HTML stand for?",
        answer:[
            {Text:"HyperText Markup Language",correct:true},
            {Text:"High-Level Machine Language",correct:false},
            {Text:"Hyperlink and Text Markup Language",correct:false},
            {Text:"Home Tool Markup Language",correct:false},
        ]
    },
    {
        question:"What is the function of a firewall in computer networks?",
        answer:[
            {Text:"Protects against viruses and malware",correct:false},
            {Text:"Monitors network traffic and filters unauthorized access",correct:true},
            {Text:"Manages the domain name system",correct:false},
            {Text:"Provides wireless network connectivity",correct:false},
        ]
    },
    {
        question:"What does the acronym IT stand for?",
        answer:[
            {Text:"Internet Technology",correct:false},
            {Text:"Information Transmission",correct:false},
            {Text:"Information Technology",correct:true},
            {Text:"Internet Telephony",correct:false},
        ]
    }
];

//get the elements
const questionElements = document.getElementById("question");
const answerButtons = document.getElementById("answers");
const nextButton = document.getElementById("nextbtn");

//functions
let currentIndex = 0;
let score = 0;

//function about start the quiz
function startQuiz()
{
    currentIndex=0;
    score=0;
    nextButton.innerHTML="Next";
    showQuestion();
}
//function for display questions
function showQuestion()
{
    resetData();
    let currentQuestion= questions[currentIndex];
    let questionNo=currentIndex+1;
    questionElements.innerHTML=questionNo+"."+currentQuestion.question;

    currentQuestion.answer.forEach(answer=>{
        const buton= document.createElement("button");
        buton.innerHTML=answer.Text;
        buton.classList.add("btn");
        answerButtons.appendChild(buton);
        if(answer.correct)
        {
            buton.dataset.correct=answer.correct;
        }
        buton.addEventListener("click",selectAnswer);
    });
}
//function for reset data
function resetData()
{
    nextButton.style.display="none";
    while(answerButtons.firstChild)
    {
        answerButtons.removeChild(answerButtons.firstChild);
    }
}
//function for select answer
function selectAnswer(a)
{
    const selectBtn=a.target;
    const iscorrect=selectBtn.dataset.correct==="true";
    if(iscorrect)
    {
        selectBtn.classList.add("correct");
        score++;
    }
    else
    {
        selectBtn.classList.add("incorrect");
    }
    Array.from(answerButtons.children).forEach(buton=>{
        if(buton.dataset.correct==="true")
        {
            buton.classList.add("correct");
        }
        buton.disabled=true;
    });
    nextButton.style.display="block";
} 
nextButton.addEventListener("click",()=>{
    if(currentIndex<questions.length)
    {
        handlepNextButton();
    }
    else
    {
        startQuiz();
    }
});
function handlepNextButton()
{
    currentIndex++;
    if(currentIndex<questions.length)
    {
        showQuestion();
    }
    else
    {
        showScore();
    }
}
function showScore()
{
    resetData();
    if(score>=5)
    {
        questionElements.innerHTML=`You scored ${score} out of ${questions.length}!`;
        nextButton.innerHTML="Play Again";
        nextButton.style.display="block";
    }
    else
    {
        questionElements.innerHTML=`You scored ${score} out of ${questions.length}!`;
        nextButton.innerHTML="Play Again";
        nextButton.style.display="block";
    }
    }
    
startQuiz();









