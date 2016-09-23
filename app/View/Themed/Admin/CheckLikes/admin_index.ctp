<html>
  <head>
  </head>
  <body>
    <?php echo $this->Html->link('新規作成', array('controller' => 'CheckLikes', 'action' => 'add')); ?>
    <div class="job-count">
      <?php echo $this->Paginator->counter(array(
        'format' => '<p>全{:count}件中/{:start}-{:end}件ヒット</p>'
      ));?>
    </div>
    <div class="job-page">
      <?php
        echo $this->Paginator->first('<< ');
        echo $this->Paginator->numbers(
          array('separator' => '/','modulus'=>2));
        echo $this->Paginator->last(' >>');
      ?>
    </div>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
      <tr>
        <th><?php echo $this->Paginator->sort('id', 'ID');?></th>
        <th>趣味名</th>
        <th><?php echo $this->Paginator->sort('like_genre', 'ジャンル');?></th>
        <th>詳細</th>
        <th>編集</th>
        <th>削除</th>
      </tr>
      <?php foreach ($datas as $data): ?>
        <tr>
          <td><?php echo $data['CheckLike']['id']; ?></td>
          <td><?php echo $data['CheckLike']['name']; ?></td>
          <td><?php echo $like_genre[$data['CheckLike']['like_genre']]; ?></td>
          <td><?php echo $this->Html->link('詳細', array('controller' => 'CheckLikes', 'action' => 'admin_detail', $data['CheckLike']['id'])); ?></td>
          <td><?php echo $this->Html->link('編集', array('controller' => 'CheckLikes', 'action' => 'admin_edit', $data['CheckLike']['id'])); ?></td>
          <td><?php echo $this->Html->link('削除', array('controller' => 'CheckLikes', 'action' => 'admin_delete', $data['CheckLike']['id'])); ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
    <div class="job-count">
      <?php echo $this->Paginator->counter(array(
        'format' => '<p>全{:count}件中/{:start}-{:end}件ヒット</p>'
      ));?>
    </div>
    <div class="job-page">
      <?php
        echo $this->Paginator->first('<< ');
        echo $this->Paginator->numbers(
          array('separator' => '/','modulus'=>2));
        echo $this->Paginator->last(' >>');
      ?>
    </div>
  </body>
</html>
