<html>
  <head>
  </head>
  <body>
    <?php echo $this->Html->link('新規作成', array('controller' => 'CheckLikes', 'action' => 'add')); ?>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
      <tr>
        <th>趣味名</th>
        <th>詳細</th>
        <th>編集</th>
        <th>削除</th>
      </tr>
      <?php foreach ($datas as $data): ?>
        <tr>
          <td><?php echo $data['CheckLike']['name']; ?></td>
          <td><?php echo $this->Html->link('詳細', array('controller' => 'CheckLikes', 'action' => 'admin_detail', $data['CheckLike']['id'])); ?></td>
          <td><?php echo $this->Html->link('編集', array('controller' => 'CheckLikes', 'action' => 'admin_edit', $data['CheckLike']['id'])); ?></td>
          <td><?php echo $this->Html->link('削除', array('controller' => 'CheckLikes', 'action' => 'admin_delete', $data['CheckLike']['id'])); ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
