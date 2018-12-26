<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
    <div class="se-head-container">
        <div class="se-head-wrapper">
            <h1 id="se-left-head" class="se-head" style="font-size: 2em; letter-spacing: 0.2em; right: 0px;">Start</h1>
        </div>
        <h2 class="se-subhead">Партн</h2>
    </div>
    <div id="left-first-row" class="row">
        <div id="left-content-standart" class="col-10 offset-2">
            <div class="se-desc-blocks">
                <div class="first-desc-block">
                    <p>Взаимодействие<br> с технопарками мира</p>						
                </div>								
                <a id="se-main-page" class="se-btn se-btn-def" href="/">На главную</a>
                    <div id="dynamic-left-default-wrapper" class="last-desc-block">
                        <p id="dynamic-left-desc-standart">Есть интересный<br> проект, необходима<br> техническая база и<br> инвестиции?<br> Вы в правильном<br> месте.</p>
                    </div>
                </div>
            </div>
        <div id="left-content-delimiter" class="col-2">
            <div class="user-selector-wrapper">
                <div class="left-selector user-selector hide">
                    <div class="row">
                        <div class="col-6">ФИЗ</div>
                        <div class="col-6">ЮР</div>
                    </div>
                    <div class="user-selector-switch switch-left"></div>
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
        <section>
<?php 
    $humanTechnoparkModel = $this->params['humanTechnoparkModel'];
    $humanTechnoparForm = ActiveForm::begin([
        'id' => 'individualTechnopark',
        'action' => ['request/send'],
        'fieldConfig' => [
            'options' => [
                'tag' => false,
            ],
        ]
    ]); 
?>
                        <div class="row">
                            <div class="col-4">
<?php
    echo ($humanTechnoparForm->field($humanTechnoparkModel, 'name')->label(false)->textInput(['class'=>'se-form','autofocus' => true,'placeholder' => 'ФИО']));
    echo ($humanTechnoparForm->field($humanTechnoparkModel, 'country')->label(false)->textInput(['class'=>'se-form','placeholder' => 'СТРАНА']));
?>
                            </div>
                            <div class="col-4">
<?php
    echo ($humanTechnoparForm->field($humanTechnoparkModel, 'phone')->label(false)->textInput(['class'=>'se-form','placeholder' => 'ТЕЛЕФОН']));
    echo ($humanTechnoparForm->field($humanTechnoparkModel, 'company')->label(false)->textInput(['class'=>'se-form','placeholder' => 'ОРГАНИЗАЦИЯ']));
?>
                            </div>
                            <div class="col-4">
<?php
    echo ($humanTechnoparForm->field($humanTechnoparkModel, 'email')->label(false)->textInput(['class'=>'se-form','placeholder' => 'Email']));
    echo ($humanTechnoparForm->field($humanTechnoparkModel, 'field')->label(false)->textInput(['class'=>'se-form','placeholder' => 'СФЕРА ДЕЯТЕЛЬНОСТИ']));
?>
                            </div> 
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">     
<?php
echo ($humanTechnoparForm->field($humanTechnoparkModel, 'description')->label(false)->textarea(['class'=>'se-form','cols'=> "30",'rows'=>"10", 'placeholder' => 'ОПИСАНИЕ ПРОЕКТА']));
?>    
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-4 offset-8">
                                 <?= Html::submitButton('Отправить', ['name'=> 'technoparkSubmit','class' => 'se-form se-btn se-btn-def']) ?>
                            </div>
                        </div> 
<?= $humanTechnoparForm->errorSummary($humanTechnoparkModel,['class'=> 'alert alert-danger' ,'header' => 'Форма не может быть отправлена, проверьте следующие поля:']); ?>
<?php ActiveForm::end(); ?>
                    </section>
                    <section class="hide">
                        <?php 
    $entityTechnoparkModel = $this->params['entityTechnoparkModel'];
    $entityTechnoparForm = ActiveForm::begin([
        'id' => 'entityTechnopark',
        'action' => ['request/send'],
        'fieldConfig' => [
            'options' => [
                'tag' => false,
            ],
        ]
    ]); 
?>
                        <div class="row">
                            <div class="col-4">
<?php
    echo ($entityTechnoparForm->field($entityTechnoparkModel, 'name')->label(false)->textInput(['class'=>'se-form','autofocus' => true,'placeholder' => 'ФИО']));
    echo ($entityTechnoparForm->field($entityTechnoparkModel, 'country')->label(false)->textInput(['class'=>'se-form','placeholder' => 'СТРАНА']));
?>
                            </div>
                            <div class="col-4">
<?php
    echo ($entityTechnoparForm->field($entityTechnoparkModel, 'phone')->label(false)->textInput(['class'=>'se-form','placeholder' => 'ТЕЛЕФОН']));
    echo ($entityTechnoparForm->field($entityTechnoparkModel, 'company')->label(false)->textInput(['class'=>'se-form','placeholder' => 'ОРГАНИЗАЦИЯ']));
?>
                            </div>
                            <div class="col-4">
<?php
    echo ($entityTechnoparForm->field($entityTechnoparkModel, 'email')->label(false)->textInput(['class'=>'se-form','placeholder' => 'Email']));
    echo ($entityTechnoparForm->field($entityTechnoparkModel, 'field')->label(false)->textInput(['class'=>'se-form','placeholder' => 'СФЕРА ДЕЯТЕЛЬНОСТИ']));
?>
                            </div> 
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">     
<?php
echo ($entityTechnoparForm->field($entityTechnoparkModel, 'description')->label(false)->textarea(['class'=>'se-form','cols'=> "30",'rows'=>"10", 'placeholder' => 'ОПИСАНИЕ ПРОЕКТА']));
?>    
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-4 offset-8">
                                 <?= Html::submitButton('Отправить', ['name'=> 'technoparkSubmit','class' => 'se-form se-btn se-btn-def']) ?>
                            </div>
                        </div> 
<?= $entityTechnoparForm->errorSummary($entityTechnoparkModel,['class'=> 'alert alert-danger' ,'header' => 'Форма не может быть отправлена, проверьте следующие поля:']); ?>
<?php ActiveForm::end(); ?>

        </section>
    </div>