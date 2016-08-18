<html>
  <head>
    <title>Index Page</title>
  </head>
  <body>
    <p>MySampleData Edit Form.</p>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
      <tr>
        <td>id</td>
        <td><?php echo $data['CheckLike']['id']; ?></td>
      </tr>
      <tr>
        <td>趣味名</td>
        <td><?php echo $data['CheckLike']['name']; ?></td>
      </tr>
    </table>
    <?php echo $this->Html->link('戻る', array('controller' => 'CheckLikes', 'action' => 'index')); ?>
  </body>
</html>
