<?php

use adminlte\widgets\Menu;
use common\models\AuthAssignment;
use yii\helpers\Html;
use yii\helpers\Url;


/**
 * @var $this \yii\web\View
 * @var $user \common\models\User
 * @var $funcionario \common\models\Funcionario
 */
$user = Yii::$app->user->identity;

#$funcionario = $user->funcionario;


$controller = Yii::$app->controller->id;
$action = Yii::$app->controller->action->id;

?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
<!--    <a href="--><?//=Url::home()?><!--" class="brand-link navbar-primary">-->
<!--      <img src="--><?//=Url::to('@img/app/logo-midle.png')?><!--" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"-->
<!--           style="opacity: .8">-->
      <span class="brand-text font-weight-light">AdminTLE 3 </span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=''#Url::to('@img/user/'.$funcionario->foto)?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?= ''#Html::a($funcionario->nome, ['funcionario/view', 'id'=>$user->id], ['class' => 'd-block'])?>
<!--            <small> --><?//=Html::a($user->username, ['user/profile', 'id'=>$user->id], ['class' => 'd-block'])?><!--</small>-->
<!--        </div>-->
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?=Url::home()?>" class="nav-link <?=  ($this->context->route ==  'site/index') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-home"></i>
              <p><?=Yii::t('yii', 'Home')?> </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=Url::to(['site/dashboard'])?>" class="nav-link <?=  ($this->context->route == 'site/dashboard') ? 'active' : '' ?>">
              <i class="fas fa-tachometer-alt nav-icon"></i>
              <p><?=Yii::t('yii', 'Dashboard')?></p>
            </a>
          </li>
          <li class="nav-item has-treeview <?= $controller == 'beneficiario' || $controller == 'documento-percurso-bolsa' ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>Beneficiário <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=Url::to(['beneficiario/'])?>" class="nav-link <?= ($this->context->route == 'beneficiario/index') ? 'active' : '' ?>">
                  <i class="fa fa-list mr-2 nav-icon"></i>
                  <p><?=Yii::t('yii', 'Gerenciar')?></p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="<?=Url::to(['documento-percurso-bolsa/'])?>" class="nav-link <?=  ($this->context->route == 'documento-percurso-bolsa/index') ? 'active' : '' ?>">
                      <i class="nav-icon fas fa-file-pdf"></i>
                      <p><?=Yii::t('yii', 'Documentos Percurso')?></p>
                  </a>
              </li>
            </ul>
          </li>
          <li class="nav-item <?= ($this->context->route == 'instituicao/index') ? 'active' : '' ?>">
            <a href="<?=Url::to(['instituicao/'])?>" class="nav-link <?= ($controller == 'instituicao') ? 'active' : '' ?>">
                <i class="fas fa-university nav-icon"></i>
                <p>Instituição</p>
            </a>
          </li>

          <li class="nav-item has-treeview <?=  in_array($controller, ['bolsa', 'vaga', 'organizacao'] ) ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link <?=  in_array($controller, ['bolsa', 'vaga', 'organizacao'] ) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-scroll"></i>
              <p>
                <?=Yii::t('yii', 'Formação Superior')?>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=Url::to(['bolsa/'])?>" class="nav-link <?=  ($this->context->route == 'bolsa/index') ? 'active' : '' ?>">
                  <i class="fab fa-bootstrap nav-icon"></i>
                  <p><?=Yii::t('yii', 'Bolsas')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=Url::to(['vaga/'])?>" class="nav-link <?=  ($this->context->route == 'vaga/index') ? 'active' : '' ?>">
                  <i class="fab fa-bitbucket nav-icon"></i>
                  <p><?=Yii::t('yii', 'Vagas')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=Url::to(['organizacao/'])?>" class="nav-link <?=  ($this->context->route == 'organizacao/index')? 'active' : '' ?>">
                    <i class="fas fa-globe nav-icon"></i>
                    <p><?=Yii::t('yii', 'Entidades')?></p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview <?= in_array( $controller, ['curso', 'percurso-curso', 'comprovativo', 'area-curso', 'grau']) ? 'menu-open' : '' ?>">
             <a href="#" class="nav-link <?= in_array( $controller, ['curso', 'percurso-curso', 'comprovativo', 'area-curso']) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-book-open"></i>
                <p> Curso
                    <i class="fas fa-angle-left right"></i>
                </p>
             </a>
             <ul class="nav nav-treeview">
                 <li class="nav-item">
                     <a href="<?=Url::to(['curso/'])?>" class="nav-link <?=  ($this->context->route == 'curso/index') ? 'active' : '' ?>">
                         <i class="fa fa-list mr-2"></i>
                         <p><?=Yii::t('yii', 'Gerenciar')?></p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?=Url::to(['percurso-curso/'])?>" class="nav-link <?=  ($this->context->route == 'percurso-curso/index') ? 'active' : '' ?>">
                         <i class="nav-icon fas fa-road"></i>
                         <p>Percurso do Curso</p>
                     </a>
                 </li>
                 <li class="nav-item <?= in_array($controller, ['area-curso', 'comprovativo', 'grau'] ) ? 'menu-open' : '' ?>">
                     <a href="#" class="nav-link">
                         <i class="fa fa-cogs nav-icon"></i>
                         <p>
                             <i class="right fas fa-angle-left"></i> Parametrização
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?=Url::to(['area-curso/'])?>" class="nav-link <?=  ($this->context->route == 'area-curso/index') ? 'active' : '' ?>">
                                 <i class="nav-icon fas fa-layer-group"></i>
                                 <p><?=Yii::t('yii', 'Áreas de Cursos')?></p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=Url::to(['grau/'])?>" class="nav-link <?= ($this->context->route == 'grau/index')? 'active' : '' ?>">
                                 <i class="fas fa-graduation-cap nav-icon"></i>
                                 <p>Grau</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=Url::to(['comprovativo/'])?>" class="nav-link <?=  ($this->context->route == 'comprovativo/index')? 'active' : '' ?>">
                                 <i class="fa fa-file-pdf nav-icon"></i>
                                 <p>Documentos Percuso</p>
                             </a>
                         </li>
                     </ul>
                 </li>
             </ul>
          </li>

          <li class="nav-item has-treeview <?=  in_array($controller,   ['auth-item', 'auth-item-child', 'auth-assignment']) ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link <?=  in_array($controller,   ['auth-item', 'auth-item-child', 'auth-assignment']) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                <?=Yii::t('yii', 'Utilizadores')?>
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=Url::to(['user/'])?>" class="nav-link <?=  ($this->context->route == 'user/index') ? 'active' : '' ?>">
                  <i class="fa fa-list mr-2 nav-icon"></i>
                  <p>Gerenciar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=Url::to(['auth-item-child/'])?>" class="nav-link <?=  ($this->context->route == 'auth-item-child/index') ? 'active' : '' ?>">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Grupos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=Url::to(['auth-item/'])?>" class="nav-link <?=  ($this->context->route == 'auth-item/index') ? 'active' : '' ?>">
                  <i class="fas fa-key nav-icon"></i>
                  <p>Itens de Autenticação</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=Url::to(['auth-assignment/'])?>" class="nav-link <?= ($this->context->route == 'auth-assignment/index') ? 'active' : '' ?>">
                  <i class="fas fa-user-lock nav-icon"></i>
                  <p>Atribuições de Acesso</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview <?= in_array($controller, ['pais', 'cidade', 'bairro', 'endereco'] ) ? 'menu-open' : '' ?>">
                <a href="#" class="nav-link <?= in_array($controller, ['pais', 'cidade', 'bairro'] ) ? 'active' : '' ?>">
                    <i class="fas fa-map-marked-alt nav-icon"></i>
                    <p>
                        <i class="right fas fa-angle-left"></i> Endereço
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?=Url::to(['endereco/'])?>" class="nav-link <?= ($this->context->route == 'endereco/index')? 'active' : '' ?>">
                            <i class="nav-icon fa fa-list-ul"></i>
                            <p>Listagem</p>
                        </a>
                    </li>
                    <li class="nav-item <?= in_array($controller, ['pais', 'cidade', 'bairro'] ) ? 'menu-open' : '' ?>">
                        <a href="#" class="nav-link">
                            <i class="fa fa-cogs nav-icon"></i>
                            <p>
                                <i class="right fas fa-angle-left"></i> Parametrização
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?=Url::to(['pais/'])?>" class="nav-link <?= ($this->context->route == 'pais/index')? 'active' : '' ?>">
                                    <i class="nav-icon fas fa-globe-americas"></i>
                                    <p>País</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=Url::to(['cidade/'])?>" class="nav-link <?= ($this->context->route == 'cidade/index')? 'active' : '' ?>">
                                    <i class="nav-icon fa fa-map"></i>
                                    <p><?=Yii::t('yii', 'Cidade')?></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=Url::to(['bairro/'])?>" class="nav-link <?= ($this->context->route == 'bairro/index')? 'active' : '' ?>">
                                    <i class="nav-icon fas fa-map-marker-alt"></i>
                                    <p><?=Yii::t('yii', 'Bairro')?></p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
      </nav>
    </div>
</aside>