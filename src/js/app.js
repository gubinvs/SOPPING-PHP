//-- Взаимодействие с блоком вопроса

const item = 6; //-- количество блоков с вопросами
const questionBlock = [];
const questionBlockNone = [];

for (let i=1; i<item+1; i++) {
    questionBlock[i] = document.getElementById('question'+i);
    questionBlockNone[i] = document.querySelector('.question'+i);
    // событие клик по блоку с вопросом
    questionBlock[i].addEventListener("click", function(e) {
    //-- добаляю класс для отображения если блок невидим и наоборот
        if (questionBlockNone[i] == document.querySelector('.question'+i)) {
            questionBlockNone[i].className = "question-list__item_answer";
        } 
        else {
            questionBlockNone[i].className = "question"+i;
        }
    });   
}

