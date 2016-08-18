<html>
  <head>
    <title>Index Page</title>
  </head>
  <body>
    <p>MySampleData Index View.</p>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
      <tr>
        <th>職業一覧</th>
        <td><?php echo $this->Html->link('一覧リンク', array('controller' => 'Professions', 'action' => 'index')); ?></td>
      </tr>
      <tr>
        <th>性格一覧</th>
        <td><?php echo $this->Html->link('一覧リンク', array('controller' => 'CheckPersonals', 'action' => 'index')); ?></td>
      </tr>
      <tr>
        <th>趣味一覧</th>
        <td><?php echo $this->Html->link('一覧リンク', array('controller' => 'CheckLikes', 'action' => 'index')); ?></td>
      </tr>
    </table>
  </body>
</html>
