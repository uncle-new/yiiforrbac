<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '用户列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_search', ['model' => $searchModel]); ?>
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php if (\Yii::$app->session->hasFlash('info')) { ?>
            <div class="alert alert-success fade in">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <strong>成功</strong> <?= \Yii::$app->session->getFlash('info') ?>
            </div>
            <?php } ?>
            <?php if (\Yii::$app->session->hasFlash('error')) { ?>
            <div class="alert alert-block alert-danger fade in">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <strong>失败</strong> <?= \Yii::$app->session->getFlash('error') ?>
            </div>
            <?php } ?>
              <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [

                    'id',
                    'username',
                    'email:email',
                    'phone',
                    [
                        'attribute' => 'status',
                        'format' => 'html',
                        'value'=>function($data)
                        {
                            if($data->status=='0'){
                                return '<span class="fa fa-ban" style="color:red"></span>';
                            }else{
                                return '<span class="fa fa-check-square-o" style="color:green"></span>';
                            }
                        }
                    ],
                    [
                        'attribute' => 'created_at',
                        'value'=>function($data)
                        {
                            return date('Y-m-d H:i:s',$data->created_at);
                        }
                    ],
                    [
                        'attribute' => 'updated_at',
                        'value'=>function($data)
                        {
                            return date('Y-m-d H:i:s',$data->updated_at);
                        }
                    ],

                    [
                          'class' => 'yii\grid\ActionColumn',
                          'header' => '操作',
                          'template' => '{update} {upuserpass} {delete}',
                          'buttons'=>[
                            'update'=>function($url,$data,$key){
                                return Html::a('修改',['update','id'=>$key],['class'=>'btn btn-xs btn-info']);
                            },
                            'upuserpass'=>function($url,$data,$key){
                                return Html::a('修改密码',['upuserpass','id'=>$key],['class'=>'btn btn-xs btn-warning']);
                            },
                            'delete'=>function($url,$data,$key){
                                return Html::a('删除', ['delete','id'=>$key], [
                                    'class' => 'btn btn-xs btn-danger',
                                    'data' => [
                                        'confirm' => '您确定要删除该用户？',
                                        'method' => 'post',
                                    ],
                                ]);
                            },
                          ],
                        ],
                    ],
                    /*此处是重点：这是没有会员提示的信息*/
                    'emptyText' => '当前没有用户',
                    'emptyTextOptions' => ['style' => 'text-align:center;'],
                    /*
                    * 此处是表格的布局，原始为：{summary}\n{items}\n{pager}
                    * 为了去掉表格顶部提示信息，所以去掉summary
                    * summart:顶部提示信息
                    * items:表格本身
                    * pager:翻页条
                    */
                    'layout' => '{items}{pager}'
                    ]); ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
