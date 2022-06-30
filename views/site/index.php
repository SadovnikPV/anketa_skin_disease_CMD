<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'Анкета диагностики наличия кожного заболевания у пациента Skin disease questionnaire';
?>
<div class="main__questionnaire questionnaire__container questionnaire__form container">
    <div class="form__title">
        Анкета диагностики наличия кожного заболевания у пациента
    </div>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->label('Дата', ['class' => 'form__input-label']) ?>

    <div class="form__subtitle">
        Заполняется пациентом
    </div>

    <?= $form->field($model, 'med_history_number')->label('ФИО', ['class' => 'form__input-label']) ?>

    <div class="form__table">
        <ul>
            <li class="form__table-row form__table-header">
                <div class="form__table-cell-question">Вопрос</div>
                <div class="form__table-cell-answer">Ответ</div>
            </li>
            <li class="form__table-row">
                <div class="form__table-cell-question">Знаете ли Вы о наличии у Вас кожного заболевания?</div>
                <div class="form__table-cell-answer form__table-cell-checkbox"><?= $form->field($model, 'patient_question')->checkbox() ?></div>
            </li>
            <li class="form__table-row">
                <div class="form__table-cell-question">Родители</div>
                <div class="form__table-cell-answer form__table-cell-checkbox"><?= $form->field($model, 'patient_question')->checkbox() ?></div>
            </li>
            <li class="form__table-row">
                <div class="form__table-cell-question">Братья, сестры</div>
                <div class="form__table-cell-answer form__table-cell-checkbox"><?= $form->field($model, 'patient_question')->checkbox() ?></div>
            </li>
            <li class="form__table-row">
                <div class="form__table-cell-question">Другие родственники</div>
                <div class="form__table-cell-answer form__table-cell-checkbox"><?= $form->field($model, 'patient_question')->checkbox() ?></div>
            </li>
        </ul>
    </div>

    <div class="form__table">
        <ul>
            <li class="form__table-row form__table-header">
                <div class="form__table-cell-question">Беспокоят ли Вас?</div>
                <div class="form__table-cell-answer">Оценка симптома</div>
            </li>
            <?php
            $symptom_question = array(
                'Сухость кожи',
                'Покраснения кожи',
                'Шелушение кожи',
                'Кожный зуд',
                'Повышенная потливость',
                'Изменение ногтевых пластин',
                'Наличие образований на коже',
            );
            $radioListContent = ['0' => 0, '1' => 1, '2' => 2, '3' => 3];

            for ($i = 0; $i < count($symptom_question); $i++) { ?>
                <li class="form__table-row">
                    <div class="form__table-cell-question"><?= $symptom_question[$i]?></div>
                    <div class="form__table-cell-answer form__table-cell-radio"><?= $form->field($model, "symptom_value[$i]")->radioList($radioListContent) ?></div>
                </li>
            <?php }
            ?>
        </ul>
    </div>

    <div class="form__subtitle">
        Заполняется врачом
    </div>

    <div class="form__table">
        <ul>
            <li class="form__table-row form__table-header">
                <div class="form__table-cell-question">Вопрос</div>
                <div class="form__table-cell-answer">Ответ</div>
            </li>
            <li class="form__table-row">
                <div class="form__table-cell-question">Наличие заболевания кожи у больного</div>
                <div class="form__table-cell-answer form__table-cell-checkbox"><?= $form->field($model, 'doctor_question')->checkbox() ?></div>
            </li>
            <li class="form__table-row">
                <div class="form__table-cell-question">Необходимость консультации дерматолога</div>
                <div class="form__table-cell-answer form__table-cell-checkbox"><?= $form->field($model, 'doctor_question')->checkbox() ?></div>
            </li>
        </ul>
    </div>

    <!-- Modal -->
    <div class="modal fade modal__container" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Результат</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary modal__btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group questionnaire__submit-wrap">
<!--            --><?//= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
        <?= Html::Button('Получить результат', ['class' => 'btn btn-primary questionnaire__submit-btn', 'onclick' => 'questionnaireSubmit()']) ?>
    </div>

    <?php ActiveForm::end(); ?>




</div>

