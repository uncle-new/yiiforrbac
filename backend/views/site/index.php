<?php
error_reporting(0);//抑制所有错误信息
/* @var $this yii\web\View */

$this->title = '后台首页';
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        首页
        <small>系统信息</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">系统信息</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <colgroup>
                    <col class="col-xs-2">
                    <col class="col-xs-7">
                  </colgroup>
                  <thead>
                    <tr>
                      <th>参数</th>
                      <th>详情</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">
                        <code>操作系统</code>
                      </th>
                      <td><?= php_uname() ?></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <code>服务器系统版本</code>
                      </th>
                      <td><?= php_uname('r') ?></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <code>PHP版本</code>
                      </th>
                      <td><?= PHP_VERSION ?></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <code>Zend版本</code>
                      </th>
                      <td><?= Zend_Version() ?></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <code>运行环境</code>
                      </th>
                      <td><?= $_SERVER["SERVER_SOFTWARE"] ?></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <code>主机名</code>
                      </th>
                      <td><?= $_SERVER['SERVER_NAME'] ?></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <code>通信协议</code>
                      </th>
                      <td><?= $_SERVER['SERVER_PROTOCOL'] ?></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <code>上传大小限制</code>
                      </th>
                      <td><?= ini_get('upload_max_filesize') ?></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <code>执行时间限制</code>
                      </th>
                      <td><?= ini_get('max_execution_time').'秒' ?></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <code>服务器时间</code>
                      </th>
                      <td><?= date("Y年n月j日 H:i:s") ?></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <code>硬盘概况</code>
                      </th>
                      <td>硬盘总量：<?php echo $getdisk['t'] ?> | 硬盘可用：<?php echo $getdisk['f'] ?> |硬盘已用：<?php echo $getdisk['u'] ?> |使用率：<?php echo $getdisk['PCT'] ?></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <code>服务器语言</code>
                      </th>
                      <td><?= $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <code>WEB端口</code>
                      </th>
                      <td><?= $_SERVER['SERVER_PORT'] ?></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <code>当前浏览器信息</code>
                      </th>
                      <td><?= $_SERVER['HTTP_USER_AGENT'] ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
<?php 
function GetDisk(){ //获取硬盘情况
  $d['t'] =round(@disk_total_space(".")/(1024*1024*1024),3);
  $d['f'] =round(@disk_free_space(".")/(1024*1024*1024),3);
  $d['u'] =$d['t']-$d['f'];
  $d['PCT'] = (floatval($d['t'])!=0)?round($d['u']/$d['t']*100,2):0;
  return$d;
}
$getdisk=GetDisk();

?>