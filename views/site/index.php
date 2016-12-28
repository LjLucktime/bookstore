<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Alert;
use yii\bootstrap\js\dropdown;
use yii\bootstrap\Modal;

$this->registerCss("
  .banner{
    padding-top:100px;
    background:#dddfdf;
  }
  h5{
    font-weight:bold;
  }

");

$this->title = 'Share books with others.';
?>



  <div class="container-fluid banner">
      
    <div class="container">
        <div class="row">
          <div class="col-lg-6" style="text-align:left; padding:20px;">
            <h1>Nietzsche</h1>
            <h5>When you look long into an abyss,the abyss looks into you.</h5>
            <p>
              When you have eliminated the impossible whatever remains, however improbable,must be the truth.
            </p>
          </div>
          <div class="col-lg-6">
            <img src="<?=Url::to('@web/images/egbook.jpg', true);?>" alt="" width="100%">
          </div>
        </div>
      </div>

    </div>

    <div class="container" style="margin-top:-20px;margin-bottom:40px;">
      <div class="row text-center">
        <div class="col-lg-3">
          <button class="button button-3d button-highlight button-pill">Childen</button>
        </div>
        <div class="col-lg-3">
          <button class="button button-3d button-primary button-pill">Science</button>
        </div>
        <div class="col-lg-3">
          <button class="button button-3d button-action button-pill">Education</button>
        </div>
        <div class="col-lg-3">
          <button class="button button-3d button-default button-pill">Literature</button>
        </div>
      </div>
    </div>




    




