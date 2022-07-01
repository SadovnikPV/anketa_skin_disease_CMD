
// Подсчет всех набранных баллов в таблице симптомов
function questionnaireSubmit() {
    let sum = 0;
    for (let j = 0; j < 7; j++) {
        let radioList = document.getElementsByName('QuestionnaireForm[symptom_value][' + j + ']');
        for (let i = 0; i < radioList.length; i++) {
            if (radioList[i].checked) {
                sum += i - 1;
            }
        }
    }
    let conclusion;
    if (sum == 0) conclusion = 'Симптомов нет';
    else if (sum >= 1 && sum <= 3) conclusion = 'Легкое течение';
    else if (sum >= 4 && sum <= 6) conclusion = 'Умеренное течение';
    else if (sum > 6) conclusion = 'Сильное течение';
    let resultModal = document.getElementById('modal__body');
    resultModal.innerText = conclusion;
    console.log(sum);

    let options = [];
    console.log($('#exampleModalCenter'));
    $('#exampleModalCenter').modal();
}
