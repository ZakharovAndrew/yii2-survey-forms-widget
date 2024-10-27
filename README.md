# Yii2 Survey Forms widget

[![Latest Stable Version](https://poser.pugx.org/zakharov-andrew/yii2-survey-forms-widget/v/stable)](https://packagist.org/packages/zakharov-andrew/yii2-survey-forms-widget)
[![License](https://poser.pugx.org/zakharov-andrew/yii2-survey-forms-widget/license)](https://packagist.org/packages/zakharov-andrew/yii2-survey-forms-widget)
[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

Survey module for Yii2 application. Use [SurveyForms.js](https://github.com/ZakharovAndrew/Survey-Forms) javascript library

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ composer require zakharov-andrew/yii2-survey-forms-widget
```
or add

```
"zakharov-andrew/yii2-survey-forms-widget": "*"
```

to the ```require``` section of your ```composer.json``` file.

## Usage

```php
use surveyforms\survey\Survey;

echo SurveyWidget::widget([
    'id' => 'survey-forms',
    'title' => 'First Survey Test',
    'description' => 'Simple description. SurveyForms.js demo',
    'background_color' => '#f7fafc',
    'question' => [
        (object)[
            'title' => 'Test Title 1',
            'required' => true,
            'options' => ['one', 'two', 'zero']
        ],
        (object)[
            'title' => 'Test Title 2',
            'required' => false,
            'options' => ['1', '2', '3'],
            'score' => 5
        ],
        (object)[
            'title' => 'Test Title 3',
            'type' => 'select',
            'required' => true,
            'options' => ['option 1', 'option 2', 'option 3'],
            'score' => 5
        ],
    ]
]);
```

## License

**yii2-survey-forms-widget** it is available under a MIT License. Detailed information can be found in the `LICENSE.md`.
