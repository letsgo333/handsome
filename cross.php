<?php
/**
* 时光机
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('component/header.php');
?>

	<!-- aside -->
	<?php $this->need('component/aside.php'); ?>
	<!-- / aside -->

  <!-- content -->
  <div id="content" class="app-content" role="main">
  	<div class="app-content-body ">


<div class="hbox hbox-auto-xs hbox-auto-sm">
  <div class="col">
    <div style="background:url(<?php $this->options->timepic(); ?>) center center; background-size:cover">
      <div class="wrapper-lg bg-white-opacity">
        <div class="row m-t">
          <div class="col-sm-7">
            <a class="thumb-lg pull-left m-r">
              <img src="<?php $this->options->BlogPic() ?>" class="img-circle">
            </a>
            <div class="clear m-b">
              <div class="m-b m-t-sm">
                <span class="h3 text-black"><?php $this->options->BlogName() ?></span>
                <small class="m-l"><?php $this->options->BlogJob() ?></small>
              </div>
              <p class="m-b">
              <?php if ($this->options->socialtwitter): ?>
                <a data-no-instant target="blank" href="<?php $this->options->socialtwitter() ?>" class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i class="iconfont icon-twitter"></i></a>
              <?php endif; ?>
              <?php if ($this->options->socialfacebook): ?>
                <a data-no-instant target="blank" href="<?php $this->options->socialfacebook() ?>" class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i class="iconfont icon-facebook"></i></a>
               <?php endif; ?>
              <?php if ($this->options->socialgooglepluse): ?>
                <a data-no-instant target="blank" href="<?php $this->options->socialgooglepluse() ?>" class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i class="iconfont icon-google"></i></a>
              <?php endif; ?>
              </p>
              <?php if ($this->options->socialgithub): ?>
              <a data-no-instant target="blank" href="<?php $this->options->socialgithub() ?>" class="btn btn-sm btn-success btn-rounded">Github</a>
             <?php endif; ?>
            </div>
          </div>
          <div class="col-sm-5">
     <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
            <div class="pull-right pull-none-xs text-center">
              <a class="m-b-md inline m">
                <span class="h3 block font-bold"><?php $stat->publishedCommentsNum() ?></span>
                <small>comments</small>
              </a>
              <a class="m-b-md inline m">
                <span class="h3 block font-bold"><?php $stat->publishedPostsNum() ?></span>
                <small>articles</small>
              </a>
              <a class="m-b-md inline m">
                <span class="h3 block font-bold"><?php $this->commentsNum(); ?></span>
                <small>weibo</small>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wrapper bg-white b-b">
      <ul class="nav nav-pills nav-sm">
        <li class="active"><a><?php _me("我的动态") ?></a></li>
      </ul>
    </div>
    <div class="padder">
		<?php $this->need('say.php') ?>
    </div><!--end of #pedder-->
  </div>
  <div class="col w-lg bg-light lter b-l bg-auto">
    <div class="wrapper">
      <div class="">
        <h4 class="m-t-xs m-b-xs"><?php _me("联系方式") ?></h4>
        <ul class="list-group no-bg no-borders pull-in">
          <li class="list-group-item">
            <a href="mailto:<?php $this->options->socialemail() ?>" class="pull-left thumb-sm avatar m-r">
              <img src="<?php $this->options->themeUrl('img/a4.png') ?>" class="img-circle">
              <i class="on b-white bottom"></i>
            </a>
            <div class="clear">
              <div><a href="mailto:<?php $this->options->socialemail() ?>">Email</a></div>
              <small class="text-muted"><?php if ($this->options->socialemail): ?><?php $this->options->socialemail() ?><?php else: ?><?php _me("外观设置——输入email地址") ?><?php endif; ?></small>
            </div>
          </li>
          <li class="list-group-item">
            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php $this->options->socialqq() ?>&site=qq&menu=yes" class="pull-left thumb-sm avatar m-r">
              <img src="<?php $this->options->themeUrl('img/a5.png') ?>" class="img-circle">
              <i class="on b-white bottom"></i>
            </a>
            <div class="clear">
              <div><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php $this->options->socialqq() ?>&site=qq&menu=yes">Tencent QQ</a></div>
              <small class="text-muted"><?php if ($this->options->socialqq): ?><?php $this->options->socialqq() ?><?php else: ?><?php _me("外观设置——输入QQ号码") ?><?php endif; ?></small>
            </div>
          </li>
          <li class="list-group-item">
            <a class="pull-left thumb-sm avatar m-r">
              <img src="<?php $this->options->themeUrl('img/a6.png') ?>" class="img-circle">
              <i class="busy b-white bottom"></i>
            </a>
            <div class="clear">
              <div><a>Sina Weibo</a></div>
              <small class="text-muted"><?php if ($this->options->socialweibo): ?><?php $this->options->socialweibo() ?><?php else: ?><?php _me("外观设置——输入微博ID") ?><?php endif; ?></small>
            </div>
          </li>
          <li class="list-group-item">
            <a class="pull-left thumb-sm avatar m-r">
              <img src="<?php $this->options->themeUrl('img/a7.png') ?>" class="img-circle">
              <i class="busy b-white bottom"></i>
            </a>
            <div class="clear">
              <div><a><?php _me("网易云音乐") ?></a></div>
              <small class="text-muted"><?php if ($this->options->socialmusic): ?><?php $this->options->socialmusic() ?><?php else: ?><?php _me("外观设置——输入网易云音乐ID") ?><?php endif; ?></small>
            </div>
          </li>
        </ul>
      </div>
      <div class="panel b-a">
        <h4 class="font-thin padder"><?php _me("关于我") ?></h4>
        <ul class="list-group">
          <li class="list-group-item">
              <p><?php $this->options->about() ?></p>

          </li>
        </ul>
      </div>
    </div>
  </div>
</div>


	</div>
  </div>
  <!-- /content -->

    <!-- footer -->
	<?php $this->need('component/footer.php'); ?>
  	<!-- / footer -->
