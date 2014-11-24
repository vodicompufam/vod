<h3>Videos</h3>
<?php 
    $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
        'htmlOptions' => array('class' => 'table'),
        'itemsCssClass' => 'table table-striped table-hover',
        'template' => '{items}{pager}{summary}',
            'summaryText'=>'<em class="pull-right" style="margin-top: -34px;margin-right:12px;font-size:12px;">Exibindo {start}-{end} de {count}</em>',
            'summaryCssClass'=>'summary',
            'pager'=>array(
                    'header'=>'',
                    'selectedPageCssClass'=>'active',
                    'htmlOptions' => array('class'=> 'pagination pagination-sm pull-right')
            ),
        'selectionChanged' => "function(id){window.location='/fcrh/eventos/view/'+$.fn.yiiGridView.getSelection(id)}",
        
    )); 
?>
<?php echo Yii::app()->user->getState('usua_id'); ?>
<?php echo 'GUEST: ' . Yii::app()->user->isGuest; ?>
<?php echo Yii::app()->controller->id; ?>