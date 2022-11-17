<?php
use surveyforms\survey\SurveyAsset;
use yii\widgets\ActiveForm;

SurveyAsset::register($this);

$script = <<< JS
    var form = SurveyForms({
        id: '$id',
        background_color: '$background_color',
        title: '$title',
        description: '$description',
        questions : $question
    });
JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>

<?php $form = ActiveForm::begin(['action' => $action]); ?>
    <div id="<?= $id ?>"></div>
<?php ActiveForm::end(); ?>
