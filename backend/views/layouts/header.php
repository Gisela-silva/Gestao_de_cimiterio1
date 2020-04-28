<?php
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\AuthAssignment;
use common\models\Notificacao;
use common\models\SystemData;
use common\models\Mensagem;
/**
 * @var $user \common\models\User
 * @var $funcionario \common\models\Funcionario
 */

$user = Yii::$app->user->identity;
$funcionario = $user->funcionario;

$formatter = \Yii::$app->formatter;
$userType = AuthAssignment::find()->where(['user_id'=>$user->id])->one();


$mensagensConhecimentoDB = Yii::$app->db->createCommand('CALL funcionario_mensagens_conhecimento('.$funcionario->id.', '.Mensagem::DEFAUL_LIMIT.')')->queryAll();
$totalMensag = count($mensagensConhecimentoDB);
// FALTA CONTROLAR CATEGORIA DOS FUNCIONARIOS PARA FILTRAR NOTIFICACAO -> AUTASSINEMENTE

//$notificacaos = Notificacao::find()
//    ->limit(8)
//    ->orderBy('data_entrada DESC')
//    ->all();

$notificacaos = Notificacao::find()->where('id NOT IN ( SELECT id_notificacao FROM notificacao_preview WHERE id_user = "'.$user->id.'")')->all();
$totaNotif = count($notificacaos);


/**@var $system SystemData*/
$system = new SystemData();

?>
<header class="main-header">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=Url::home()?>" class="nav-link"><?=Yii::t('yii', 'Home')?></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=Url::to(['system/contacto'])?>" class="nav-link"><?=Yii::t('yii', 'Contatos')?></a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ajuda</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="<?=Url::to('@file/system/'.$system->manual)?>" target="_blank" class="dropdown-item nav-link"><i class="fa fa-book text-blue mr-2"></i>Manual de Utilizador</a>
            <a href="<?=Url::to(['system/support-tecnico'])?>" class="dropdown-item nav-link"><i class="fa fa-cogs text-blue mr-2"></i>Suporte Técnico</a>
          </div>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li>
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
                <i class="far fa-envelope"></i>
                <?php
                    if ($totalMensag > 0)
                        echo '<span class="badge badge-danger navbar-badge">'.$totalMensag.'</span>';
                ?>
            </a>

            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <?php

                    foreach ($mensagensConhecimentoDB as $mensagenConhecimentoDB) {  $isBeneficiario = (bool) $mensagenConhecimentoDB['toBeneficiario']; ?>
                        <a href="<?=Url::to( [ 'mensagem/view' , 'id' => $mensagenConhecimentoDB['referencia'], 'ref' => base64_encode($isBeneficiario ? Mensagem::REFERENCE_BENEFICIARIO : Mensagem::REFERENCE_TECNICO) ])?>" class="dropdown-item">
                            <div class="media">
                                <?php
                                    $foto = '@img/user/default.png';

                                    $referencia = $isBeneficiario ? \common\models\Beneficiario::findOne($mensagenConhecimentoDB['referencia']) : \common\models\TecnicoContacto::findOne($mensagenConhecimentoDB['referencia']);

                                    if (!empty($referencia)){
                                        $foto = ($isBeneficiario ? '@img/user/'  : '@img/app/tecnico/' ).$referencia->foto;
                                    }


                                ?>
                                <img src="<?=Url::to($foto)?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        <?=$mensagenConhecimentoDB['assunto']?>
                                    </h3>
                                    <p class="text-sm"><?=strlen($mensagenConhecimentoDB['descricao']) > 30 ? substr($mensagenConhecimentoDB['descricao'], 0, 30).'...' : $mensagenConhecimentoDB['descricao']?></p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i><?=Yii::$app->user->identity->timeAgo($mensagenConhecimentoDB['created_at'])?></p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <?php
                    }
                ?>
                <?=Html::a('Ver todas mensagens', ['mensagem/index'], ['class' => 'dropdown-item dropdown-footer'])?>
            </div>
        </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"><?=$totaNotif > 0 ? $totaNotif: ''?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="max-height: 60vh; overflow-y: scroll; overflow-x: hidden;">
            <span class="dropdown-item dropdown -header"><?=$totaNotif > 0 ? $totaNotif.' notificações': 'Nenhum notificação nova'?></span>
            <div class="dropdown-divider"></div>
            <?php
                /**@var $noticacao Notificacao*/
                foreach ($notificacaos as $noticacao) {

                    $conteudo = strip_tags($noticacao->conteudo);
                    $conteudo = strlen($conteudo) > 30 ? substr($conteudo, 0, 30).'...' : $conteudo;

                    echo '<div class="dropdown-divider"></div>';
                    echo Html::a( '<i class="fa '.$noticacao->icon.' text-'.$noticacao->cor.' mr-2"></i>'.
                         $conteudo.'<span class="float-right text-muted text-sm">'.$user->timeAgo($noticacao->data_entrada).'</span>',
                        empty($noticacao->id_url) ? '#' : [
                                    'notificacao/set-view',
                                    'id' => $noticacao->id,
                                    'url'=>$noticacao->url,
                                    'id_url'=>$noticacao->id_url
                                ],
                            ['class' => 'dropdown-item']);
                    # break;
                }
            ?>
            <div class="dropdown-divider"></div>
            <?=Html::a('Ver todas notificações', ['notificacao/index'], ['class'=>'dropdown-item dropdown-footer'])?>
        </div>
      </li>

      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <?= Html::img('@img/user/'.$funcionario->foto, ['class' => 'user-image', 'alt'=>'User Image']) ?>
          <span class="d-none d-md-inline"><?= ucfirst($user->username) ?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <?= Html::img('@img/user/'.$funcionario->foto, ['class' => 'img-circle', 'alt'=>'User Image']) ?>
            <p>
              <?= ucfirst($funcionario->nome).' - '.ucfirst($userType->item_name)?>
              <small><?=Yii::t('yii', 'Membro desde').' '.ucfirst($formatter->asDate(Yii::$app->user->identity->created_at, 'php:M. Y'));?></small>
            </p>
          </li>

          <li class="user-footer">
            <?= Html::a('<i class="fas fa-user"></i> '.Yii::t('yii', 'Perfil'), ['user/profile', 'id' => Yii::$app->user->identity->id], ['class'=>'btn btn-default'])?>
            <!--
            <?= Html::a('<i class="fas fa-sign-out-alt"></i> '.Yii::t('yii', 'Sair'), Url::to(['site/logout']), ['class'=>'btn btn-default float-right', 'data-method'=>'post'])?>
            -->
            <a class="btn btn-default float-right" href="<?= Url::to(['site/logout'])?>" data-method="post"><i class="fas fa-sign-out-alt"></i> <?=Yii::t('yii', 'Sair')?></a>
          </li>
        </ul>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->
</header>