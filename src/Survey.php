namespace surveyforms\survey;

use yii\base\Widget;
use yii\helpers\Html;
use surveyforms\survey\SurveyAsset;

class Survey extends Widget
{
  public function init()
  {
      parent::init();
  }

  public function run()
  {
      SurveyAsset::register($this);
      return 'Test';
  }
}
