<?php
use yii\widgets\Breadcrumbs;
use yii\widgets\AlertLte;


 $isFullSreeam = Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id =='index';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<?php if (!$isFullSreeam){ ?>

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
			<?php if (isset($this->blocks['content-header'])) { ?>
			<h1><?= $this->blocks['m-0 text-dark'] ?></h1>
				<?php } else { ?>
                        <h1>
                            <?php
                            if ($this->title !== null) {
                                echo \yii\helpers\Html::encode($this->title);
                                echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Módulo</small>' : '';
                            } else {
                                echo \yii\helpers\Inflector::camel2words(
                                    \yii\helpers\Inflector::id2camel($this->context->module->id)
                                );
                                echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Módulo</small>' : '';
                            } ?>
                        </h1>
				<?php } ?>
          </div>
          <div class="col-sm-6">
				<?= Breadcrumbs::widget([
                    'itemTemplate' => "<li class='breadcrumb-item'>{link}</li>",
					'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
				])
                ?>
          </div>
        </div>
      </div>
    </div>

<?php } ?>

	<section class="content" <?php if($isFullSreeam) echo 'style="padding: 0;"'?>>
		<div class="container-fluid" <?php if($isFullSreeam) echo 'style="padding: 0;"'?>>
			<?= $content ?>
		</div>
	</section>

</div>
