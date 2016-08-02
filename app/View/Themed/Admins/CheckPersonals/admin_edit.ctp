<html>
  <head>
    <title>Index Page</title>
  </head>
  <body>
    <p>MySampleData Edit Form.</p>
    <?php echo $this->Form->create('CheckPersonals', array('type' => 'file', 'url' => 'edit')); ?>
    <?php echo $this->Form->hidden('CheckPersonal.id', array('value' => $this->request->data['CheckPersonal']['id'])); ?>
    <table>
      <tr>
        <th> 職業名</th>
        <td>
          <?php echo $this->Form->input('CheckPersonal.name', array('label' => false, 'div' => false)); ?>
        </td>
      </tr>
    </table>
    <?php echo $this->Form->end('submit'); ;?>
    <?php echo $this->Html->link('戻る', array('controller' => 'CheckPersonals', 'action' => 'index')); ?>
  </body>
</html>
