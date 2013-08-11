<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<div class="form">

    <fieldset>
     <?php $ajax = ($this->enable_ajax_validation) ? 'true' : 'false'; ?>

<?php echo '<?php '; ?>
$form = $this->beginWidget('GxActiveForm', array(
	'id' => '<?php echo $this->class2id($this->modelClass); ?>-form',
	'enableAjaxValidation' => <?php echo $ajax; ?>,
));



<?php echo '?>'; ?>


	

	<?php echo "<?php echo \$form->errorSummary(\$model); ?>\n"; ?>
<table cellspacing="3">
   
<?php foreach ($this->tableSchema->columns as $column): ?>
    
<?php $flag=false; if ($column->autoIncrement){$flag=true; }
        if ($column->name=='created'){$flag=true; }
            elseif ($column->name=='createdby'){$flag=true; }
                elseif ($column->name=='modified'){$flag=true; }
                    elseif ($column->name=='modifiedby'){ $flag=true; }
                     elseif ($column->name=='reviewed'){$flag=true; }
                    elseif ($column->name=='reviewedby'){ $flag=true; }
                     elseif ($column->name=='lat'){$flag=true; }
                    elseif ($column->name=='lon'){ $flag=true; }
                    elseif ($column->name=='startlat'){$flag=true; }
                    elseif ($column->name=='startlon'){ $flag=true; }
                    elseif ($column->name=='endlat'){$flag=true; }
                    elseif ($column->name=='endlon'){ $flag=true; }
                    elseif ($column->name=='logo'){$flag=true; }
                     elseif ($column->name=='activationkey'){$flag=true; }
                      elseif ($column->name=='activationcode'){$flag=true; }
                       elseif ($column->name=='login_attempts'){$flag=true; }
                        elseif ($column->name=='lastlogin'){$flag=true; }
                         elseif ($column->name=='login_ip'){$flag=true; }
                          elseif ($column->name=='requires_new_salt'){$flag=true; }
                           //elseif ($column->name=='status'){$flag=true; }
                    
               if(!$flag):
    
    ?>
		 <tr><td>
		<?php echo "<?php echo " . $this->generateActiveLabel($this->modelClass, $column) . "; ?>\n"; ?>
                     </td>
                     <td>
		<?php echo "<?php " . $this->generateActiveField($this->modelClass, $column) . "; ?>\n"; ?>
		<?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
                     </td>
                 </tr>
<?php  endif; ?>
<?php endforeach; ?>

                 <tr><td></td>
                     <td>
<br>

<?php echo "<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'),array('class'=>'btn btn-success '));
\$this->endWidget();
?>\n"; ?>
                     </td>
                 </tr>
</table>

    </fieldset>
</div><!-- form -->