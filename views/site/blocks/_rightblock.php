<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
    <div class="se-head-container">	
        <div class="se-head-wrapper">
            <h1 id="se-right-head" class="se-head">Export</h1>
        </div>					
        <h2 class="se-subhead">нового уровня</h2>
    </div>
                    <div id="right-first-row" class="row">
                            <div id="right-content-standart" class="col-8">
                                    <div class="se-desc-blocks">
                                            <div class="first-desc-block">                                                                        
                                                    <p>Размещение товара<br> на международных<br> онлайн - площадках</p>
                                            </div>
                                            <div id="se-standart-right" class="se-btn se-btn-light se-special-price">Спеццена</div>
                                            <div id="dynamic-right-default-wrapper" class="last-desc-block">
                                                    <p id="dynamic-right-desc-standart">Желаете выйти на<br> международный<br> рынок, нужны<br> новые партнеры,<br> новый опыт? Вам<br> сюда.</p>
                                            </div>
                                    </div>
                            </div>
                            <div id="right-content-delimiter" class="col-2">
                                    <div class="user-selector-wrapper">
                                            <div class="right-selector user-selector hide">
                                                    <div class="row">
                                                            <div class="col-6">ФИЗ</div>
                                                            <div class="col-6">ЮР</div>
                                                    </div>
                                                    <div class="user-selector-switch switch-left"></div>
                                            </div>
                                    </div>
                            </div>
                            <div id="right-content-standart-subblock" class="col-2">
                                    <div class="se-desc-blocks"> 
                                            <div id="right-block-standart-wrapper">                                                 
                                            </div>
                                    </div>
                            </div>
                    </div>
                    <div id="right-main-content" class="hide right-block-expand">
                            <section>
<?php 
    $humanMarketPlaceModel = $this->params['humanMarketPlaceModel'];
    $humanForm = ActiveForm::begin([
        'id' => 'individualFormMarketplace',
        'action' => ['request/send'],
        'fieldConfig' => [
			'template' => "{label}\n<div>{input}</div>\n{hint}\n{error}",
            'options' => [
                'tag' => false,
            ],
        ]
    ]);
    
?>
                        <div class="row mb-4">
                            <div class="col-4">
<?php
    echo ($humanForm->field($humanMarketPlaceModel, 'name')->label(false)->textInput(['class'=>'se-form', 'tabindex'=> 1, 'autofocus' => true,'placeholder' => 'ФИО']));
    echo ($humanForm->field($humanMarketPlaceModel, 'country')->label(false)->textInput(['class'=>'se-form','tabindex'=> 4, 'placeholder' => 'СТРАНА']));
?>
                            </div>
                            <div class="col-4">
<?php
    echo ($humanForm->field($humanMarketPlaceModel, 'phone')->label(false)->textInput(['class'=>'se-form','tabindex'=> 2,'placeholder' => 'ТЕЛЕФОН']));
    echo ($humanForm->field($humanMarketPlaceModel, 'company')->label(false)->textInput(['class'=>'se-form','tabindex'=> 5,'placeholder' => 'КОМПАНИЯ']));
?>
                            </div>
                            <div class="col-4">
<?php
    echo ($humanForm->field($humanMarketPlaceModel, 'email')->label(false)->textInput(['class'=>'se-form','tabindex'=> 3,'placeholder' => 'Email']));
    echo ($humanForm->field($humanMarketPlaceModel, 'field')->label(false)->dropDownList([
        							0 => 'Сфера деятельности',
								1 => 'Электроника',
                                                                2 => 'Дом и сад',
								3 => 'Авто и мото',
								4 => 'Оборудование',
								5 => 'Одежда',
								6 => 'Красота и уход',
								7 => 'Спорт и отдых',
								8 => 'Упаковки и печать'
                                                            ],['class'=>'se-form','tabindex'=> 6]));
?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
 <?= Html::submitButton('Подать заявку', ['name'=> 'marketplaceSubmit','class' => 'se-form se-btn se-btn-light']) ?>
                            </div>
                        </div>
<?= $humanForm->errorSummary($humanMarketPlaceModel,['class'=> 'alert alert-danger' ,'header' => 'Форма не может быть отправлена, проверьте следующие поля:']); ?>
<?php ActiveForm::end(); ?>
                            </section>
                            <section class="hide">
                                <?php 
    $entityMarketPlaceModel = $this->params['entityMarketPlaceModel'];
    $entityForm = ActiveForm::begin([
        'id' => 'entityFormMarketplace',
        'action' => ['request/send'],
        'fieldConfig' => [
            'options' => [
                'tag' => false,
            ],
        ]
    ]);   
?>
                        <div class="row mb-4">
                            <div class="col-4">
<?php
    echo ($entityForm->field($entityMarketPlaceModel, 'name')->label(false)->textInput(['class'=>'se-form', 'tabindex'=> 1, 'autofocus' => true,'placeholder' => 'ФИО']));
    echo ($entityForm->field($entityMarketPlaceModel, 'country')->label(false)->textInput(['class'=>'se-form', 'tabindex'=> 4, 'placeholder' => 'СТРАНА']));
?>
                            </div>
                            <div class="col-4">
<?php
    echo ($entityForm->field($entityMarketPlaceModel, 'phone')->label(false)->textInput(['class'=>'se-form', 'tabindex'=> 2, 'placeholder' => 'ТЕЛЕФОН']));
    echo ($entityForm->field($entityMarketPlaceModel, 'company')->label(false)->textInput(['class'=>'se-form', 'tabindex'=> 5, 'placeholder' => 'КОМПАНИЯ']));
?>
                            </div>
                            <div class="col-4">
<?php
    echo ($entityForm->field($entityMarketPlaceModel, 'email')->label(false)->textInput(['class'=>'se-form', 'tabindex'=> 3, 'placeholder' => 'Email']));
    echo ($entityForm->field($entityMarketPlaceModel, 'field')->label(false)->dropDownList([
        							0 => 'Сфера деятельности',
								1 => 'Электроника',
                                                                2 => 'Дом и сад',
								3 => 'Авто и мото',
								4 => 'Оборудование',
								5 => 'Одежда',
								6 => 'Красота и уход',
								7 => 'Спорт и отдых',
								8 => 'Упаковки и печать'
                                                            ],['class'=>'se-form' ,'tabindex'=> 6 ]));
?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
 <?= Html::submitButton('Подать заявку', ['name'=> 'marketplaceSubmit', 'class' => 'se-form se-btn se-btn-light']) ?>
                            </div>
                        </div>
<?= $entityForm->errorSummary($entityMarketPlaceModel,['class'=> 'alert alert-danger' ,'header' => 'Форма не может быть отправлена, проверьте следующие поля:']); ?>
<?php ActiveForm::end(); ?>
                            </section>
                    </div>
