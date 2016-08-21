<html>
  <head>
    <title>Index Page</title>
    <?php echo $this->Html->script( 'jquery-2.2.3.min.js'); ?>
    <link href="jquery.rateyo.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <h1>Add Page</h1>
    <?php echo $this->Form->create('CheckLike', array('type' => 'file', 'url' => 'add')); ?>
    <table>
      <tr>
        <th>趣味ジャンル</th>
        <td>
          <?php
            echo $this->Form->input('like_genre', array(
                'options' => $like_genre,
                'label' => false,
                'div' => false,
                'empty' => '選択してください'
            ));
           ?>
        </td>
      </tr>
      <tr>
        <th>性格名</th>
        <td>
          <?php echo $this->Form->input('name', array('label' => false, 'div' => false)); ?>
        </td>
      </tr>

    </table>
    <?php echo $this->Form->end('Submit'); ?>
    <?php echo $this->Html->link('一覧へ', array('controller' => 'CheckLikes', 'action' => 'index')); ?>
  </body>
</html>
