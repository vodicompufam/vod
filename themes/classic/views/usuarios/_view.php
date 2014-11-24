<?php
/* @var $this UsuariosController */
/* @var $data Usuario */
?>
    <div class="view">

            <b><?php echo CHtml::encode($data->getAttributeLabel('usua_id')); ?>:</b>
            <?php echo CHtml::link(CHtml::encode($data->usua_id), array('view', 'id'=>$data->usua_id)); ?>
            <br />

            <b><?php echo CHtml::encode($data->getAttributeLabel('usua_nome')); ?>:</b>
            <?php echo CHtml::encode($data->usua_nome); ?>
            <br />

            <b><?php echo CHtml::encode($data->getAttributeLabel('usua_data_nascimento')); ?>:</b>
            <?php echo CHtml::encode($data->usua_data_nascimento); ?>
            <br />

            <b><?php echo CHtml::encode($data->getAttributeLabel('usua_login')); ?>:</b>
            <?php echo CHtml::encode($data->usua_login); ?>
            <br />

            <b><?php echo CHtml::encode($data->getAttributeLabel('usua_senha')); ?>:</b>
            <?php echo CHtml::encode($data->usua_senha); ?>
            <br />

            <b><?php echo CHtml::encode($data->getAttributeLabel('usua_tipo')); ?>:</b>
            <?php echo CHtml::encode($data->usua_tipo); ?>
            <br />


    </div>
