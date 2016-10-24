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
      <div class="fh5co-copy col-md-12  text-center detail_tex">
        <h3 class="detail_title">仕事内容・詳細</h3>
        <div class="rofession_text">
          <p>
            <?php echo $datas['Profession']['job_content']; ?>
          </p>
        </div>
      </div>
  </div>

  <div class="fh5co-copy col-md-12  text-center detail_tex">
    <h3 class="detail_title"><?php echo $datas['Profession']['profession_name']; ?>になる為には</h3>
    <div class="rofession_text">
      <p>
        <?php echo $datas['Profession']['job_step']; ?>
      </p>
    </div>
  </div>

<?php if(!empty($datas['Image'][1])): ?>
  <div class="fh5co-copy col-md-12  text-center detail_tex">
    <div class="rofession_text">
      <div class="fh5co-copy col-md-12">
        <?php echo $this->Html->image($datas['Image'][1]['Image']['url'] ,array('width' => '100%', 'class' => "work-img")); ?>
        <?php echo $this->Html->image($datas['Image'][1]['Image']['url'] ,array('class' => "yoko_img")); ?>
      </div>
    </div>
  </div>
<?php endif; ?>


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

  <div id ='fh5co-why-us' class="fh5co-services">
    <div class="container">
        <div class="col-md-4 col-sm-4 text-center item-block animate-box">
          <h3 class="detail_title">関連動画</h3>
          <?php echo '<iframe width="230" height="140" src='.'https://www.youtube.com/embed/'.$datas['Movie'][0]['Movie']['movie_url'].' frameborder="0" allowfullscreen></iframe>' ?>
        </div>
        <div class="col-md-4 col-sm-4 text-center item-block animate-box">
          <div class="Advertisement">
            <?php
            echo $this->Html->image('images.jpg');
            ?>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 text-center item-block animate-box">
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
        <h3 style="color:#323232; margin-top:0px; font-size:18px;">友達・知り合いに拡散する</h3>
    <ul class="sns_list">
      <li class="sns_button" style="background:#4267b2;"><?php echo $this->Html->image('face.png', array('class' => 'sns_button')); ?>シェア</li>
      <li class="sns_button" style="background:#04a2d6;"><?php echo $this->Html->image('twitter.png', array('class' => 'sns_button')); ?>つぶやく</li>
      <li class="sns_button" style="background:#19bb05"><?php echo $this->Html->image('line.png', array('class' => 'sns_button')); ?>LINEする</li>
    </ul>
    </div>
  </div>
  <div class="animate-box fh5co-cta">
    <div class="text-center container fh5co-heading">
      <h3 style="color:#323232; margin-top:0px; font-size:18px;">簡単な職業診断チェック!!</h3>
      <a href="/" class="occupation_link">職業診断スタート</a>
    </div>
  </div>
<style>
.sns_button {
    margin-right: 5px;
    width: 15px;
    margin-bottom: 1px;
}
</style>
