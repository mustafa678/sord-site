<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Posts', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Posts', 'url'=>array('admin')),
);
?>


<h1>View Post: <?php echo $model->title; ?></h1>

<!-- <?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'tags',
		'status',
		'create_time',
		'update_time',
		array('value' =>$model->author->username, 'label' => 'Author'),
		array('value' => $model->language[$model->lang], 'label' => 'Lang'),
	),
)); ?> -->

<div class="view">
    <?php $data = $model; ?>
	<b><?php echo CHtml::encode($data->title); ?></b>
	<br />
	<p><?php echo $data->content ; ?> </p>
	<br />
	<b>Last updated:</b> <?php echo CHtml::encode($data->update_time); ?> <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lang')); ?>:</b>
	<?php if ($data->language[$data->lang] == 'en')
	    { 
	        echo "English"; 
	    }
	    else 
	    { 
	            echo "Arabic";
	    } ?>
	<br />

</div>
