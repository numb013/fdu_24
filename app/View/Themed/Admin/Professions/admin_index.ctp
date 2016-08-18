<?php echo $this->Form->create('Profession', array('type' => 'file', 'url' => 'index')); ?>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
  <tr>
    <td> 職業ジャンル</td>
    <td>
      <?php
        echo $this->Form->input('genre', array(
            'options' => $genre,
            'label' => false,
            'div' => false,
            'empty' => '選択してください'
        ));
       ?>
    </td>
  </tr>
  <tr>
    <td> 職業名</td>
    <td>
      <?php echo $this->Form->input('profession_name', array('label' => false, 'div' => false)); ?>
    </td>
  </tr>
  <tr>
    <td>性別</td>
    <td>
      <?php
        echo $this->Form->input('Profession.check_sex', array(
            'type' => 'select',
            'label' => false,
            'multiple'=> 'checkbox',
            'options' => $check_sex,
        ));
      ?>
    </td>
  </tr>
  <tr>
    <td> 性格など</td>
    <td>
      <?php
        echo $this->Form->input('Profession.check_personal', array(
            'type' => 'select',
            'label' => false,
            'div' => false,
            'multiple'=> 'checkbox',
            'options' => $check_personals,
        ));
      ?>
    </td>
  </tr>
  <tr>
    <td> 好きなこと</td>
    <td>
      <?php
        echo $this->Form->input('Profession.check_like', array(
            'type' => 'select',
            'label' => false,
            'div' => false,
            'multiple'=> 'checkbox',
            'options' => $check_likes,
        ));
      ?>
    </td>
  </tr>
  <tr>
    <td>コアステータス</td>
    <td>
      <?php
        echo $this->Form->input('core_status', array(
            'options' => array(0, 1, 2, 3, 4, 5),
            'label' => false,
            'div' => false,
            'empty' => '選択してください'
        ));
       ?>
    </td>
  </tr>
  <tr>
  <td>
    <?php echo $this->Form->end('検索'); ;?>
  </td>
  <td>
  </td>
  </tr>
</table>
    <?php echo $this->Html->link('新規作成', array('controller' => 'Professions', 'action' => 'add')); ?>
    <div>
      <?php
        echo $this->Paginator->first('<< ');
        echo $this->Paginator->prev('< ');
        echo $this->Paginator->numbers(
        array('modulus'=>2));
        echo $this->Paginator->next(' >');
        echo $this->Paginator->last(' >>');
      ?>
    </div>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
      <tr>
        <th>職業名<?php echo $this->Paginator->sort('id');?></th>
        <th>職業ジャンル</th>
        <th>性別</th>
        <th>性格</th>
        <th>趣味</th>
        <th>コア度</th>
        <th>詳細</th>
        <th>編集</th>
        <th>削除</th>
      </tr>
      <?php foreach ($datas as $data): ?>
        <tr>
          <td><?php echo $data['Profession']['profession_name']; ?></td>
          <td><?php echo $genre[$data['Profession']['genre']]; ?></td>
          <td>
            <?php if(!empty($data['Profession']['check_sex'])):?>
              <?php $count = 0; ?>
              <?php foreach ($data['Profession']['check_sex'] as $key => $sex): ?>
                <?php if ($count == '0') {  echo ''; } else { echo '/'; } ; ?>
              <?php echo $check_sex[$sex]; ?>
              <?php $count++ ; ?>
              <?php endforeach; ?>
            <?php endif; ?>
          </td>
          <td>
            <?php if(!empty($data['Profession']['check_personal'])):?>
              <?php $count = 0; ?>
              <?php foreach ($data['Profession']['check_personal'] as $key => $personal): ?>
                <?php if ($count == '0') {  echo ''; } else {  echo '/'; } ; ?>
                <?php echo $check_personals[$personal]; ?>
                <?php $count++ ; ?>
              <?php endforeach; ?>
            <?php endif; ?>
          </td>
          <td>
            <?php if(!empty($data['Profession']['check_like'])):?>
              <?php $count = 0; ?>
              <?php foreach ($data['Profession']['check_like'] as $key => $like): ?>
                <?php if ($count == '0') {  echo ''; } else {  echo '/'; } ; ?>
                <?php echo $check_likes[$like]; ?>
              <?php $count++ ; ?>
              <?php endforeach; ?>
            <?php endif; ?>
          </td>
          <td><?php echo $data['Profession']['core_status']; ?></td>
          <td><?php echo $this->Html->link('詳細', array('controller' => 'Professions', 'action' => 'detail', $data['Profession']['id'])); ?></td>
          <td><?php echo $this->Html->link('編集', array('controller' => 'Professions', 'action' => 'edit', $data['Profession']['id'])); ?></td>
          <td><?php echo $this->Html->link('削除', array('controller' => 'Professions', 'action' => 'delete', $data['Profession']['id'])); ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
    <div>
      <?php
        echo $this->Paginator->first('<< ');
        echo $this->Paginator->prev('< ');
        echo $this->Paginator->numbers(
            array('separator' => '/','modulus'=>2));
        echo $this->Paginator->next(' >');
        echo $this->Paginator->last(' >>');
      ?>
    </div>
