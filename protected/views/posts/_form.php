<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'posts-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<!--<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?> -->
		
		<!--replace the textArea with ckEditor -->
		<?php $this->widget('ext.ckeditor.CKEditorWidget',array(
                        "model"=>$model,                 # Data-Model
                        "attribute"=>'content',          # Attribute in the Data-Model
                        "defaultValue"=>$model->content,     # Optional

                        # Additional Parameter (Check http://docs.cksource.com/ckeditor_api/symbols/CKEDITOR.config.html)
                        "config" => array(
                                "height"=>"400px",
                                "width"=>"100%",
                                "toolbar"=>"Basic",
                        ),

                        #Optional address settings if you did not copy ckeditor on application root
                        "ckEditor"=>Yii::app()->basePath."/../../ckeditor/ckeditor.php",
                                  # Path to ckeditor.php
                        "ckBasePath"=>Yii::app()->baseUrl."/../ckeditor/",
                                  # Realtive Path to the Editor (from Web-Root)
                ) ); ?>
                <!--This is not working , whyyyyyyyyyyyyy -->
                
                
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php echo $form->textArea($model,'tags',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tags'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author_id'); ?>
		<?php echo $form->textField($model,'author_id'); ?>
		<?php echo $form->error($model,'author_id'); ?>
	</div> 
-->
        <div class="row">
                <?php echo $form->labelEx($model, 'lang'); ?>
                <?php echo $form->dropDownList($model, 'lang', 
                        array(1 => 'en', 2=> 'ar' )); ?>
                <?php echo $form->error($model, 'lang'); ?>
        </div>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
