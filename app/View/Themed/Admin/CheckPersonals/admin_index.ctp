<html>
  <head>
  </head>
  <body>
    <?php echo $this->Html->link('新規作成', array('controller' => 'CheckPersonals', 'action' => 'add')); ?>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
      <tr>
        <th>性格名</th>
        <th>詳細</th>
        <th>編集</th>
        <th>削除</th>
      </tr>
      <?php foreach ($datas as $data): ?>
        <tr>
          <td><?php echo $data['CheckPersonal']['name']; ?></td>
          <td><?php echo $this->Html->link('詳細', array('controller' => 'CheckPersonals', 'action' => 'detail', $data['CheckPersonal']['id'])); ?></td>
          <td><?php echo $this->Html->link('編集', array('controller' => 'CheckPersonals', 'action' => 'edit', $data['CheckPersonal']['id'])); ?></td>
          <td><?php echo $this->Html->link('削除', array('controller' => 'CheckPersonals', 'action' => 'delete', $data['CheckPersonal']['id'])); ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
