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
//$funcionario = $user->funcionario;

$formatter = \Yii::$app->formatter;
//$userType = AuthAssignment::find()->where(['user_id'=>$user->id])->one();


//$mensagensConhecimentoDB = Yii::$app->db->createCommand('CALL funcionario_mensagens_conhecimento('.$funcionario->id.', '.Mensagem::DEFAUL_LIMIT.')')->queryAll();
//$totalMensag = count($mensagensConhecimentoDB);
// FALTA CONTROLAR CATEGORIA DOS FUNCIONARIOS PARA FILTRAR NOTIFICACAO -> AUTASSINEMENTE

//$notificacaos = Notificacao::find()
//    ->limit(8)
//    ->orderBy('data_entrada DESC')
//    ->all();

//$notificacaos = Notificacao::find()->where('id NOT IN ( SELECT id_notificacao FROM notificacao_preview WHERE id_user = "'.$user->id.'")')->all();
//$totaNotif = count($notificacaos);


/**@var $system SystemData*/
//$system = new SystemData();

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
<!--            <a href="--><?//=Url::to('@file/system/'.$system->manual)?><!--" target="_blank" class="dropdown-item nav-link"><i class="fa fa-book text-blue mr-2"></i>Manual de Utilizador</a>-->
            <a href="<?=Url::to(['system/support-tecnico'])?>" class="dropdown-item nav-link"><i class="fa fa-cogs text-blue mr-2"></i>Suporte Técnico</a>
          </div>
        </li>
    </ul>


  </nav>
  <!-- /.navbar -->
</header>