# Yii2 Survey Forms widget
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

```
use surveyforms\survey\Survey;

echo Survey::widget([
    'id' => 'survey-forms',
    'title' => 'First Survey Test',
    'background_color' => '#f7fafc'
]);
```
