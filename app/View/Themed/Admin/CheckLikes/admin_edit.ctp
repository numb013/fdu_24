<html>
  <head>
    <title>Index Page</title>
  </head>
  <body>
    <p>MySampleData Edit Form.</p>
    <?php echo $this->Form->create('CheckLikes', array('type' => 'file', 'url' => 'edit')); ?>
    <?php echo $this->Form->hidden('CheckLike.id', array('value' => $this->request->data['CheckLike']['id'])); ?>
    <table>
      <tr>
        <th>趣味名</th>
        <td>
          <?php echo $this->Form->input('CheckLike.name', array('label' => false, 'div' => false)); ?>
        </td>
      </tr>
    </table>
    <?php echo $this->Form->end('submit'); ;?>
    <?php echo $this->Html->link('戻る', array('controller' => 'CheckLikes', 'action' => 'index')); ?>
  </body>
</html>
