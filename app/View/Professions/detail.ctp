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
      <div class="fh5co-copy col-md-12  text-center" style="margin-top:15px;">
        <h3>仕事内容</h3>
        <div class="rofession_text">
          <p>
            <?php echo $datas['Profession']['job_content']; ?>
          </p>
        </div>
      </div>
  </div>
  <div class="fh5co-services" style="padding:10px 0;">
    <div class="container">
        <div class="col-md-4 col-sm-4 text-center item-block animate-box">
          <h6>-STEP 1-</h6>
          <p><?php echo $datas['Profession']['job_step1']; ?></p>
        </div>
        <div class="col-md-4 col-sm-4 text-center item-block animate-box">
          <h6>-STEP 2-</h6>
          <p><?php echo $datas['Profession']['job_step2']; ?></p>
        </div>
        <div class="col-md-4 col-sm-4 text-center item-block animate-box">
          <h6>-STEP 3-</h6>
          <p><?php echo $datas['Profession']['job_step3']; ?></p>
        </div>
    </div>
  </div>
<?php if (!empty($datas['Movie'][0]['Movie'])): ?>
  <div id="fh5co-blog" class="animate-box">
    <div class="container">
      <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <?php echo '<iframe width="200" height="120" src='.'https://www.youtube.com/embed/'.$datas['Movie'][0]['Movie']['movie_url'].' frameborder="0" allowfullscreen></iframe>' ?>
      </div>
    </div>
  </div>
<?php endif; ?>
