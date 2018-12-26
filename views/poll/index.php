<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="row">		
            <div class="col-3 left-column" style="max-width: 25%; flex-basis: 75%;">
                <div class="se-head-container">
                    <div class="se-head-wrapper">
                        <h1 id="se-left-head" class="se-head" style="font-size: 2em; letter-spacing: .2em;">Start</h1>
                    </div>
                    <h2 class="se-subhead" style="font-size: 1em;">Партн</h2>
				</div>
				<div id="left-first-row" class="row">
					<div id="left-content-standart" class="col-10 offset-2">
						<div class="se-desc-blocks">
							<div class="first-desc-block">
								<p>Взаимодействие<br> с технопарками мира</p>						
							</div>								
							<a id="se-main-page" class="se-btn se-btn-def" href="/">На главную</a>
								<div id="dynamic-left-default-wrapper" class="last-desc-block">
									<p id="dynamic-left-desc-standart">Есть интересный<br> проект, необходима<br> техническая база и<br> инвестиции?<br> Вы в правильном месте.</p>
								</div>
						</div>
					</div>
					<div id="left-content-standart-subblock" class="col-2">
						<div class="se-desc-blocks"> 
							<div id="left-block-standart-wrapper">                                                            
							</div>
						</div>
					</div>
				</div>
				<div id="left-main-content" class="hide">
                </div>
            </div>
            <div class="col-9 right-column" style="max-width: 75%; flex-basis: 75%;">
                <div class="se-head-container">	
                    <div class="se-head-wrapper">
                        <h1 id="se-right-head" class="se-head" style="font-size: 5em; letter-spacing: .55em;">Export</h1>
                    </div>					
                    <h2 class="se-subhead" style="font-size: 1em;">ерство нового уровня</h2>
				</div>

				<div id="right-main-content" class="right-block-expand">
					<h2 id="poll-header">Вопросы по сайту:</h2>
   <?php 
    $pollForm = ActiveForm::begin([
        'id' => 'request-poll',
        'action' => ['poll/send'],
        'options' => ['class' => 'poll-form'],
        'fieldConfig' => [
            'template' => "{label}\n<div class='col-6'>{input}</div>\n{hint}\n{error}",
            'options' => [
                'class' => 'row',
            ],
        ]
    ]); ?>
     <?php 
     echo $pollForm->field($model, 'siteRating')
             ->label(null,['class' => 'col-6 col-form-label text-right'])
             ->dropDownList($pollConfig['siteRating'],['class'=>'se-form','tabindex'=> 1]); 
    echo $pollForm->field($model, 'siteDesign')
             ->label(null,['class' => 'col-6 col-form-label text-right'])
             ->dropDownList($pollConfig['siteDesign'],['class'=>'se-form','tabindex'=> 2]);
    echo $pollForm->field($model, 'siteSpeed')
             ->label(null,['class' => 'col-6 col-form-label text-right'])
             ->dropDownList($pollConfig['siteSpeed'],['class'=>'se-form','tabindex'=> 3]);
    echo $pollForm->field($model, 'siteConvenience')
             ->label(null,['class' => 'col-6 col-form-label text-right'])
             ->dropDownList($pollConfig['siteConvenience'],['class'=>'se-form','tabindex'=> 4]);
    echo $pollForm->field($model, 'siteUseful')
         ->label(null,['class' => 'col-6 col-form-label text-right'])
         ->dropDownList($pollConfig['siteUseful'],['class'=>'se-form','tabindex'=> 5]);
    echo $pollForm->field($model, 'siteClarity')
     ->label(null,['class' => 'col-6 col-form-label text-right'])
     ->dropDownList($pollConfig['siteClarity'],['class'=>'se-form','tabindex'=> 6]);
    echo $pollForm->field($model, 'marketPlaceСlarity')
        ->label(null,['class' => 'col-6 col-form-label text-right'])
        ->dropDownList($pollConfig['marketPlaceСlarity'],['class'=>'se-form','tabindex'=> 7]);
    echo $pollForm->field($model, 'siteFunctional')
         ->label(null,['class' => 'col-6 col-form-label text-right'])
         ->dropDownList($pollConfig['siteFunctional'],['class'=>'se-form','tabindex'=> 8]);
    echo $pollForm->field($model, 'siteBugs')
        ->label(null,['class' => 'col-6 col-form-label text-right'])
        ->dropDownList($pollConfig['siteBugs'],['class'=>'se-form','tabindex'=> 9]);
    echo $pollForm->field($model, 'technopark')
         ->label(null,['class' => 'col-6 col-form-label text-right'])
         ->dropDownList($pollConfig['technopark'],['class'=>'se-form','tabindex'=> 10]);
    echo $pollForm->field($model, 'useResource')
         ->label(null,['class' => 'col-6 col-form-label text-right'])
         ->dropDownList($pollConfig['useResource'],['class'=>'se-form','tabindex'=> 11]);
    echo $pollForm->field($model, 'region')
         ->label(null,['class' => 'col-6 col-form-label text-right'])
         ->dropDownList($pollConfig['region'],['class'=>'se-form','tabindex'=> 12]);
    echo $pollForm->field($model, 'device')
         ->label(null,['class' => 'col-6 col-form-label text-right'])
         ->dropDownList($pollConfig['device'],['class'=>'se-form','tabindex'=> 13]);
    echo $pollForm->field($model, 'status')
         ->label(null,['class' => 'col-6 col-form-label text-right'])
         ->dropDownList($pollConfig['status'],['class'=>'se-form','tabindex'=> 14]);
    echo $pollForm->field($model, 'age')
         ->label(null,['class' => 'col-6 col-form-label text-right'])
         ->dropDownList($pollConfig['age'],['class'=>'se-form','tabindex'=> 15]);
    echo $pollForm->field($model, 'gender')
         ->label(null,['class' => 'col-6 col-form-label text-right'])
         ->dropDownList($pollConfig['gender'],['class'=>'se-form','tabindex'=> 16]);
    echo $pollForm->field($model, 'comments',[
        'template' => "<div class=\"form-group row pb-2\">{label}\n\n<div class=\"col-6\">{input}</div><div class=\"form-control-focus\"></div>\n{error}\n</div>",
        'options' => [
            'tag' => false
            ]
    ])        
        ->label(null,['class' => 'col-6 col-form-label text-right'])
        ->textarea(['class' => 'se-form','cols' => 30,'rows' => 10]);
    echo $pollForm->field($model, 'email')
         ->label(null,['class' => 'col-6 col-form-label text-right'])
         ->textInput(['class'=>'se-form','tabindex'=> 17]);
     ?>
   <div class="form-group row">
	<div class="col-6 offset-6">
    <?php
            echo (Html::submitButton('Отправить', ['name'=> 'pollSubmit','class' => 'se-form se-btn se-btn-light']));
    ?>
            </div>
       </div>
     <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>

