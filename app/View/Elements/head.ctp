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

      <div class="aaaa">

        <a href="javascript:void(0);"  class='know_count' id=":f<?php echo $datas['Profession']['id'];?>">
          この職業知ってた : <?php echo $datas['Profession']['know_count']; ?>
        </a>
      </div>

    <?php endif; ?>
  </div>
</header>




<script type="text/javascript">

  $('.know_count').click(function() {
    var aaa = 'wwwww';
    alert(aaa);
    var href = $('.aaaa').find('a').attr('class');
    alert(href);

    console.log(JSON.stringify(href));

    var data = { Profession: { key: 'Profession', id: $('.aaaa').find('a').attr('id'), class: $('.aaaa').find('a').attr('class')} };

console.log(JSON.stringify(data));
$.ajax({
				type: 'POST',
				url: '/Profession/know_count',
				data: data,
			
	dataType: 'json',
				cache: false,
				success: function(data) {
					var parentTag = $this.parent("p");
					if (data.status) {

	if (data.action === 'plus') {
							.count.p(kbow_count - 1);
							$('.star').addClass('star minus');
						} else {
							.count.p(kbow_count + 1);
							$('.star').addClass('star plus');
						}
						parentTag.toggleClass("gray-b ");
					}
				},

	error: function(XMLHttpRequest, textStatus, errorThrown) {
				}
			});
			return false;
		});
  });


</script>
