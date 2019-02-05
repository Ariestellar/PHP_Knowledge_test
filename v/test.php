<div><?php echo $pageTest?></div>
<?php if($done == 1):?>
<div>Правильных ответов:<?php echo $rightAnswer?></div>
<?php if(isset($wrongAnswer)):?>
<div>Ошибочных ответов:<?php echo $wrongAnswer?></div>
<?php echo "Вы неверно ответили на вопросы:"; foreach ($questionWrong as $value):?>
<p><div><?php echo $value?></div></p>
<?php endforeach;else:?>
<div>Ошибочных ответов нет</div>
<?php endif;endif;?>
