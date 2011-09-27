<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br /> -->

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b> -->
	<!-- <b><?php echo CHtml::encode($data->title); ?> </b> -->
	<b><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?></b>
	<br />

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b> -->
	<!-- <?php echo CHtml::encode($data->content); ?> -->
	<p><?php echo $data->content ; ?> </p>
	<br />

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('tags')); ?>:</b>
	<?php echo CHtml::encode($data->tags); ?>
	<br /> -->

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br /> 

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b> -->
	<b>Last updated:</b> <?php echo CHtml::encode($data->update_time); ?> <br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('author_id')); ?>:</b>
	<?php echo CHtml::encode($data->author_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lang')); ?>:</b>
	<?php echo CHtml::encode($data->lang); ?>
	<br />

	*/ ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('lang')); ?>:</b>
	<?php if ($data->language[$data->lang] == 'en')
	    { 
	        echo "English"; 
	    }
	    else 
	    { 
	            echo "Arabic";
	    } ?>
	<!-- <?php echo CHtml::encode($data->lang); ?> -->
	<br />

</div>
