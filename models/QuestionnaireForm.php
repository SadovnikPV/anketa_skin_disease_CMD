<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class QuestionnaireForm extends Model
{
    public $date;
    public $med_history_number;
    public $patient_question;
    public $symptom_value;
    public $doctor_question;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['date', 'med_history_number'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'date' => '',
            'med_history_number' => '',
            'patient_question' => '',
            'symptom_value' => '',
            'doctor_question' => '',
        ];
    }
}
