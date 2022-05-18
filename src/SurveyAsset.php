<?php
namespace surveyforms\survey;

use yii\web\AssetBundle;

class SurveyAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zakharov-andrew/survey-forms/';
    public $css = ["css/SurveyForms.css"];
    public $js = ["src/SurveyForms.js"];
}
