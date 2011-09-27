

<div class="view">
	<b><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?></b>
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
