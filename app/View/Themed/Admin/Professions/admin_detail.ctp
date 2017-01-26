<html>
  <head>
    <title>Index Page</title>
  </head>
  <body>
    <h1>Edit Page</h1>

    <?php

    // echo pr($this->request->data);
    // exit();

     ?>

    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <tr>
          <td >職業名</td>
          <td><?php echo $data['Profession']['profession_name']; ?></td>
        </tr>
        <tr>
          <td>画像</td>
          <td>
            <?php if(!empty($data['Image'])):?>
              <?php foreach ($data['Image'] as $key => $image): ?>
                <?php if(!empty($image['Image'])):?>
                  <?php echo $this->Html->image($image['Image']['url'] ,array('width' => '15%' )); ?>
                <?php else: ?>
                  なし
                <?php endif; ?>
              <?php endforeach; ?>
            <?php else: ?>
              なし
            <?php endif; ?>
          </td>
        </tr>
        <tr>
          <td>職業ジャンル</td>
          <td><?php echo $genre[$data['Profession']['genre']]; ?></td>
        </tr>
        <tr>
          <td>仕事内容</td>
          <td><?php echo $data['Profession']['job_content']; ?></td>
        </tr>
        <tr>
          <td>なりかた</td>
          <td><?php echo $data['Profession']['job_step']; ?></td>
        </tr>
        <tr>
          <td>向いてる性格</td>
          <td><?php echo $data['Profession']['personality']; ?></td>
        </tr>
        <tr>
          <td>給料</td>
          <td><?php echo $data['Profession']['job_salary']; ?></td>
        </tr>
        <tr>
          <td>性格</td>
          <td>
            <?php if(!empty($data['Profession']['check_personal'])):?>
              <?php $count = 0; ?>
              <?php foreach ($data['Profession']['check_personal'] as $key => $personal): ?>
              <?php if ($count == '0') {  echo ''; } else { echo '/'; } ; ?>
              <?php echo $check_personals[$personal]; ?>
              <?php $count++ ; ?>
              <?php endforeach; ?>
            <?php endif; ?>
          </td>
        </tr>
        <tr>
          <td>好きなこと</td>
          <td>
            <?php if(!empty($data['Profession']['check_like'])):?>
              <?php $count = 0; ?>
              <?php foreach ($data['Profession']['check_like'] as $key => $like): ?>
                <?php if ($count == '0') {  echo ''; } else { echo '/'; } ; ?>
                <?php echo $check_likes[$like]; ?>
                <?php $count++ ; ?>
              <?php endforeach; ?>
            <?php endif; ?>
          </td>
        </tr>
        <tr>
          <td>動画</td>
          <td>
            <?php if(!empty($data['Movie'])):?>
              <?php foreach ($data['Movie'] as $movie): ?>
                <?php if(!empty($movie['Movie']['movie_url'])):?>
                  <?php echo '<iframe width="200" height="120" src='.'https://www.youtube.com/embed/'.$movie['Movie']['movie_url'].' frameborder="0" allowfullscreen></iframe>' ?>
                <?php else: ?>
                  なし
                <?php endif; ?>
              <?php endforeach; ?>
            <?php else: ?>
              なし
            <?php endif; ?>
          </td>
        </tr>
        <tr>
          <td>コアレベル</td>
          <td><?php echo $data['Profession']['core_status']; ?></td>
        </tr>

        <tr>
          <td>編集</td>
          <td><?php echo $this->Html->link('編集', array('controller' => 'Professions', 'action' => 'edit', $data['Profession']['id'])); ?></td>
        </tr>
    </table>
    <?php echo $this->Html->link('戻る', array('controller' => 'Professions', 'action' => 'index')); ?>
  </body>
</html>
