<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n
\$this->breadcrumbs = array(
	\$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);\n";
?>

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('<?php echo $this->class2id($this->modelClass); ?>-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3><?php echo '<?php'; ?> echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h3>



<?php echo '<?php'; ?> $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => '<?php echo $this->class2id($this->modelClass); ?>-grid',
	'dataProvider' => $model->search(),
	'type' =>TbHtml::GRID_TYPE_STRIPED,
	'filter' => $model,
	'columns' => array(
<?php
$count = 0;
foreach ($this->tableSchema->columns as $column) {
	if (++$count == 7)
		echo "\t\t/*\n";
	
$flag=false; if ($column->autoIncrement){$flag=true; }
        if ($column->name=='created'){$flag=true; }
            elseif ($column->name=='createdby'){$flag=true; }
                elseif ($column->name=='modified'){$flag=true; }
                    elseif ($column->name=='modifiedby'){ $flag=true; }
                     elseif ($column->name=='reviewed'){$flag=true; }
                    elseif ($column->name=='reviewedby'){ $flag=true; }
                    
                        
                    
               if(!$flag){
	echo "\t\t" . $this->generateGridViewColumn($this->modelClass, $column).",\n"; 
				}
}
if ($count >= 7)
	echo "\t\t*/\n";
?>
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>