<?php 
namespace surveyforms\survey;

use yii\base\Widget;

class SurveyWidget extends Widget
{
    public $id;
    public $title;
    public $background_color;
    public $description;
    public $question = [];
    // url action
    public $action;
    
    public function init()
    {
        parent::init();
    }

    public function run()
    {        
        return $this->render('survey', [
            'id' => $this->id,
            'title' => $this->title,
            'background_color' => $this->background_color,
            'description' => $this->description,
            'question' => json_encode($this->question),
            'action' => $this->action
        ]);
    }
}
