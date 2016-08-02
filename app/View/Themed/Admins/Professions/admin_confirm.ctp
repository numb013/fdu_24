<html>
  <head>
    <title>Index Page</title>
  </head>
  <body>
    <h1>Edit Page</h1>
    <p>MySampleData Edit Form.</p>
    <?php echo $this->Form->create('Profession', array('type' => 'file', 'url' => 'regist')); ?>
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
          <tr>
            <th>職業名</th>
            <td><?php echo $data['Profession']['profession_name']; ?></td>
            <?php echo $this->Form->hidden('Profession.profession_name', array('value' => $data['Profession']['profession_name'])); ?>
          </tr>
          <tr>
            <th>職業ジャンル</th>
            <td><?php echo $data['Profession']['genre']; ?></td>
            <?php echo $this->Form->hidden('Profession.genre', array('value' => $data['Profession']['genre'])); ?>
          </tr>
          <tr>
            <th>画像</th>
            <td>
              <?php if(!empty($data['Image'])):?>
                <?php foreach ($data['Image'] as $key => $photo): ?>
                  <?php if(!empty($photo)):?>
                    <?php echo $this->Html->image($photo['url'] ,array('width' => '15%' )); ?>
                    <?php echo $this->Form->hidden('Image.'.$key.'.name', array('value' => $photo['name'])); ?>
                    <?php echo $this->Form->hidden('Image.'.$key.'.type', array('value' => $photo['type'])); ?>
                    <?php echo $this->Form->hidden('Image.'.$key.'.tmp_name', array('value' => $photo['tmp_name'])); ?>
                    <?php echo $this->Form->hidden('Image.'.$key.'.error', array('value' => $photo['error'])); ?>
                    <?php echo $this->Form->hidden('Image.'.$key.'.size', array('value' => $photo['size'])); ?>
                    <?php echo $this->Form->hidden('Image.'.$key.'.url', array('value' => $photo['url'])); ?>
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
            <th>職業内容</th>
            <td><?php echo $data['Profession']['job_content']; ?></td>
            <?php echo $this->Form->hidden('Profession.job_content', array('value' => $data['Profession']['job_content'])); ?>
          </tr>
          <tr>
            <th>ステップ1</th>
            <td><?php echo $data['Profession']['job_step1']; ?></td>
            <?php echo $this->Form->hidden('Profession.job_step1', array('value' => $data['Profession']['job_step1'])); ?>
          </tr>
          <tr>
            <th>ステップ2</th>
            <td><?php echo $data['Profession']['job_step2']; ?></td>
            <?php echo $this->Form->hidden('Profession.job_step2', array('value' => $data['Profession']['job_step2'])); ?>
          </tr>
          <tr>
            <th>ステップ3</th>
            <td><?php echo $data['Profession']['job_step3']; ?></td>
            <?php echo $this->Form->hidden('Profession.job_step3', array('value' => $data['Profession']['job_step3'])); ?>
          </tr>
          <tr>
            <th>性別</th>
            <td>
              <?php if(!empty($data['Profession']['check_sex'])):?>
                <?php foreach ($data['Profession']['check_sex'] as $key => $sex): ?>
                  <?php echo $check_sex[$sex]; ?>
                  <?php echo $this->Form->hidden('check_sex][]', array('value' => $sex)); ?>
                <?php endforeach; ?>
              <?php endif; ?>
            </td>
          </tr>
          <tr>
            <th>性格</th>
            <td>
              <?php if(!empty($data['Profession']['check_personal'])):?>
                <?php foreach ($data['Profession']['check_personal'] as $key => $check_personal): ?>
                  <?php echo '/'; ?>
                  <?php echo $check_personals[$check_personal]; ?>
                  <?php echo $this->Form->hidden('check_personal][]', array('value' => $check_personal)); ?>
                <?php endforeach; ?>
              <?php endif; ?>
            </td>
          </tr>
          <tr>
            <th>好きなこと</th>
            <td>
              <?php if(!empty($data['Profession']['check_like'])):?>
                <?php foreach ($data['Profession']['check_like'] as $key => $check_like): ?>
                  <?php echo '/'; ?>
                  <?php echo $check_likes[$check_like]; ?>
                  <?php echo $this->Form->hidden('check_like][]', array('value' => $check_like)); ?>
                <?php endforeach; ?>
              <?php endif; ?>
            </td>
          </tr>


          <tr>
            <th>リンク</th>
            <td><?php echo $data['Profession']['job_url']; ?></td>
            <?php echo $this->Form->hidden('Profession.job_url', array('value' => $data['Profession']['job_url'])); ?>
          </tr>
          <tr>
            <th>コアステータス</th>
            <td><?php echo $data['Profession']['core_status']; ?></td>
            <?php echo $this->Form->hidden('Profession.core_status', array('value' => $data['Profession']['core_status'])); ?>
          </tr>
          <tr>
            <th>動画</th>
            <td>
              <?php if(!empty($data['Movie'])):?>
                <?php foreach ($data['Movie'] as $key => $movie): ?>
                  <?php if(!empty($movie['movie_url'])):?>
                    <?php echo '<iframe width="200" height="120" src='.'https://www.youtube.com/embed/'.$movie['movie_url'].' frameborder="0" allowfullscreen></iframe>' ?>
                    <?php echo $this->Form->hidden('Movie.'.$key.'.movie_url', array('value' => $movie['movie_url'])); ?>
                    <?php echo $this->Form->hidden('Movie.'.$key.'.movie_uuid', array('value' => $movie['movie_uuid'])); ?>
                  <?php else: ?>
                    なし
                  <?php endif; ?>
                <?php endforeach; ?>
              <?php else: ?>
                なし
              <?php endif; ?>
            </td>
          </tr>
    </table>
    <div class="btn-area">
  			<div class="btn gray-b">
  				<?php echo $this->Form->submit('戻る', array('name' => 'back', 'type' => 'submit', 'label' => false, 'div' => false)); ?>
  			</div>
  			<div class="btn">
  				<?php echo $this->Form->submit('登録', array('name' => 'regist', 'type' => 'submit', 'label' => false, 'div' => false)); ?>
  			</div>
  	</div>
    <?php echo $this->Html->link('一覧', array('controller' => 'Professions', 'action' => 'admin_index')); ?>
  </body>
</html>
