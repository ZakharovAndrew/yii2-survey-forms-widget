<?php
use surveyforms\survey\SurveyAsset;

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

<form action="<?= $action ?>" method="POST">
    <div id="<?= $id ?>"></div>
</form>
