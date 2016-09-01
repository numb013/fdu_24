<div id="fh5co-page">
<header id="fh5co-header" role="banner">
  <div class="container">
    <div class="header-inner">
      <h1><a href="/fdu24/">FDU<span>-</span>24</a></h1>
      <?php if(empty($know_flag)): ?>
        <p class="title-small-text">あなたの為の<br>職業診断CHECK</p>
      <?php endif; ?>
    </div>
    <?php if(!empty($back_flag)): ?>
      <div class="history_back">
        <a href="javascript:history.back();">BACK</a>
      </div>
    <?php elseif(!empty($know_flag)): ?>

      <div class="job_know">
        <a href="javascript:void(0);" class='know_count plus' id="<?php echo $datas['Profession']['id'];?>">
          この職業知ってた : <span class="count"><?php echo $datas['Profession']['know_count']; ?></span>
        </a>
      </div>

    <?php endif; ?>
  </div>
</header>




<script type="text/javascript">

  $('.know_count').click(function() {
    var data = { Profession: { id: $('.job_know').find('a').attr('id'), class: $('.job_know').find('a').attr('class')} };
    console.log(JSON.stringify(data));
    $.ajax({
      type: 'POST',
      url: '/fdu24/professions/know_count',
      data: data,
      dataType: 'json',
      cache: false,
      success: function(data) {
        if (data.status) {
          if (data.action === 'plus') {
            var know = parseInt($('span.count').text());
            var knowCount = know + 1;
            $('.count').text(knowCount);
            $('div').find('.know_count').attr('class','know_count minus');
            $('.know_count').css('color','#fff');
            $('.know_count').css('background-color','#369840');
          } else {
            var know = parseInt($('span.count').text());
            var knowCount = know - 1;
            $('.count').text(knowCount);
            $('div').find('.know_count').attr('class','know_count plus');
            $('.know_count').css('color','#369840');
            $('.know_count').css('background-color','#fff');

          }
        }
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
      }
    });
    return false;

		});



</script>
