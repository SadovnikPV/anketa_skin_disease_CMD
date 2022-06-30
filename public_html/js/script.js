
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
    console.log(sum);

    let options = [];
    console.log($('#exampleModalCenter'));
    $('#exampleModalCenter').modal();
}
