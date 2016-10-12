<div class="row">
  <?php

  //echo pr($datas);
  //exit();

   ?>
  <div class="job-img">
      <div class="fh5co-copy col-md-12 img-responsive">
          <h1 class="profession_title"><?php echo $datas['Profession']['profession_name']; ?></h1>
        <?php echo $this->Html->image($datas['Image'][0]['Image']['url'] ,array('width' => '100%', 'class' => "work-img")); ?>
        <?php echo $this->Html->image($datas['Image'][0]['Image']['url'] ,array('class' => "yoko")); ?>
      </div>
      <div class="fh5co-copy col-md-12  text-center" style="padding:15px 0;">
        <h3>仕事内容・詳細</h3>
        <div class="rofession_text">
          <p>
            <?php echo nl2br($datas['Profession']['job_content']); ?>
          </p>
        </div>
      </div>
  </div>
  <?php if (!empty($datas['Movie'][0]['Movie'])): ?>
    <div id="fh5co-blog" class="animate-box">
      <div class="container">
        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
          <?php echo '<iframe width="230" height="140" src='.'https://www.youtube.com/embed/'.$datas['Movie'][0]['Movie']['movie_url'].' frameborder="0" allowfullscreen></iframe>' ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div id ='fh5co-why-us' class="fh5co-services">
    <div class="container">
        <div class="col-md-4 col-sm-4 text-center item-block animate-box">
          <h6>-STEP1-</h6>
          <p class="job_step"><?php echo nl2br($datas['Profession']['job_step1']); ?></p>
        </div>
        <div class="col-md-4 col-sm-4 text-center item-block animate-box">
          <h6>-STEP2-</h6>
          <p class="job_step"><?php echo nl2br($datas['Profession']['job_step2']); ?></p>
        </div>
        <div class="col-md-4 col-sm-4 text-center item-block animate-box">
          <h6>-STEP3-</h6>
          <p class="job_step"><?php echo nl2br($datas['Profession']['job_step3']); ?></p>
        </div>
    </div>
  </div>

<?php
//cho pr($related);
 ?>

  <div id="fh5co-blog" class="animate-box">
    <div class="container">

<?php if(!empty($related)): ?>
      <div class="col-md-6" style="text-align:center;">
        <div class="Advertisement">
          <h3>この職業に興味がある方にオススメ</h3>
          <ul class="sns_list">
            <?php foreach ($related as $key => $value): ?>
              <li>
                <a href="<?php echo $value['Profession']['id']; ?>">
                <?php echo $value['Profession']['profession_name']; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

<?php endif; ?>

      <div class="col-md-6" style="text-align:center; margin-top:20px;">
        <div class="Advertisement">
          <?php
          echo $this->Html->image('images.jpg');
          ?>
        </div>
      </div>


    </div>
  </div>

  <div id="fh5co-blog" class="animate-box sns_box">
    <div class="text-center container fh5co-heading">
      <h3 style="color:#369840; margin-top:0px;">Teach this profession to a friend</h3>
    <ul class="sns_list">
      <li class="sns_button" style="background:#3979ff;">シェア</li>
      <li class="sns_button" style="background:#62cfff;">つぶやく</li>
      <li class="sns_button" style="background:#2dd13e">LINEする</li>
    </ul>
    </div>
  </div>
  <div class="animate-box fh5co-cta">
    <div class="text-center container fh5co-heading">
      <h3 style="color:#369840; margin-top:0px;">You to suits profession found</h3>
      <a href="/" class="occupation_link">職業診断</a>
    </div>
  </div>
