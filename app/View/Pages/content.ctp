<div class="row">
  <?php

  //echo pr($datas);
  //exit();

   ?>

  <div class="job-img">
      <div class="fh5co-copy col-md-12 img-responsive">
        <?php echo $this->Html->image('image_53.jpg' ,array('width' => '100%', 'class' => "work-img")); ?>
        <?php echo $this->Html->image('image_53.jpg' ,array('class' => "yoko")); ?>
      </div>
      <div class="fh5co-copy col-md-12  text-center detail_tex">
        <h3 class="detail_title">仕事内容・詳細</h3>
        <div class="rofession_text">
          <p>
            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
          </p>
        </div>
      </div>
  </div>

	<div class="fh5co-copy col-md-12  text-center detail_tex">
    <div class="rofession_text">
      <div class="fh5co-copy col-md-12">
        <?php echo $this->Html->image('image_53.jpg' ,array('width' => '100%', 'class' => "work-img")); ?>
        <?php echo $this->Html->image('image_53.jpg' ,array('class' => "yoko_img")); ?>
      </div>
    </div>
  </div>


  <div class="fh5co-copy col-md-12  text-center detail_tex">
    <h3 class="detail_title">タイトル</h3>
    <div class="rofession_text">
      <p>
        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
      </p>
    </div>
  </div>





<!--
  <div id ='fh5co-why-us' class="fh5co-services">
    <div class="container">
        <div class="col-md-4 col-sm-4 text-center item-block animate-box">
          <h3 class="detail_title"><?php echo $datas['Profession']['profession_name']; ?>に向いてる性格</h3>
          <p class="job_step">
            <?php echo $datas['Profession']['personality']; ?>
          </p>
        </div>
        <div class="col-md-4 col-sm-4 text-center item-block animate-box">
          <h3 class="detail_title"><?php echo $datas['Profession']['profession_name']; ?>のお給料</h3>
          <p class="job_step">
            <?php echo nl2br($datas['Profession']['job_salary']); ?>
          </p>
        </div>
        <div class="col-md-4 col-sm-4 text-center item-block animate-box">
          <h3 class="detail_title">その他のオススメ職業</h3>
            <?php foreach ($related as $key => $value): ?>
              <li>
                <a href="<?php echo $value['Profession']['id']; ?>">
                <?php echo $value['Profession']['profession_name']; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </p>
        </div>
    </div>
  </div>
-->

	<?php echo $this->element('bottom'); ?>
