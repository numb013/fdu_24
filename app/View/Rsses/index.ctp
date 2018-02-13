<style>
/*次矢印のアイコンフォント*/
.sp-next-arrow:before {
	font-family: FontAwesome !important;
	content: '\f105' !important;
}
/*前矢印のアイコンフォント*/
.sp-previous-arrow:before {
	font-family: FontAwesome !important;
	content: '\f104' !important;
}
/*ナビゲーションボタンの色*/
.sp-button {
	border:2px solid #ccc;
}
.sp-selected-button {
	background-color: #ccc;
}
/*サムネイルのポインターの色を変える*/
.sp-bottom-thumbnails.sp-has-pointer .sp-selected-thumbnail:before,
.sp-right-thumbnails.sp-has-pointer .sp-selected-thumbnail:before {
	border-color: #ffa801;
}
.sp-bottom-thumbnails.sp-has-pointer .sp-selected-thumbnail:after,
.sp-right-thumbnails.sp-has-pointer .sp-selected-thumbnail:after {
	color: #ffa801;
}
/*縦スライド時の矢印の位置*/
.sp-vertical .sp-previous-arrow {
	top: 0;
}
.sp-vertical .sp-next-arrow {
	bottom: 0;
}
.sp-buttons {
    display: none;
}
</style>
<script>
$( document ).ready(function( $ ) {
  $('#caption').sliderPro({
    autoScaleLayers:false,//キャプションの自動変形
    waitForLayers: true,//キャプションのアニメーションが終了してからスライドするか
    width: 600,//横幅
    autoplay:true,//自動再生
    arrows: true,//左右の矢印
    buttons: true,//ナビゲーションボタン
    slideDistance:0,//スライド同士の距離
  });
});

</script>
<div class="row">
  <div class="job-img">
      <div class="fh5co-copy col-md-12 img-responsive">
	<div id="caption" class="slider-pro">
		<div class="sp-slides">
                    <?php foreach ($datas['rss'] as $key => $rss_info): ?>

                        <div class="sp-slide">
                            <a href=<?php echo !empty($rss_info['link']) ? $rss_info['link'] : $rss_info['url']; ?>  target=”_blank>
                                <img class="sp-image" src=<?php echo $rss_info['image']; ?> />
                                <p class="sp-layer sp-black sp-padding"
                                    data-position="bottomLeft"
                                    data-width="100%" data-show-transition="up" data-hide-transition="down">
                                    <?php echo mb_strimwidth($rss_info['description'], 0, 200, "..."); ?>
                                </p>
                            </a>
                        </div>
                    <?php endforeach; ?>
		<!--/ sp-slides--></div>
	<!--/ caption--></div>
      </div>
  </div>
  <div class="wapper">
    <div class="side side_rss">
        <div class="rss_contents">
            <h3>転職に関するニュースまとめ</h3>
            <?php foreach ($datas['pickup'] as $key => $pickup_info): ?>
                <div class="rss-memu animate-box sss">
                <?php if (empty($pickup_info['advertisement'])): ?>
                  <a href=<?php echo !empty($pickup_info['url']) ? $pickup_info['url'] : $pickup_info['link']; ?>  target=”_blank>
                    <div class="photo-cut">
                        <img src=<?php echo $pickup_info['image']; ?> style='width:100%'>
                    </div>
                    <h2 class="rss_title">
                        <?php echo mb_strimwidth($pickup_info['title'], 0, 100, "..."); ?>
                    </h2>
                  </a>
                <?php else: ?>
                  <div class="photo-cut">
                      <img src=<?php echo $pickup_info['image']; ?> style='width:100%'>
                  </div>
                  <h2 class="rss_title">
                      <?php echo $pickup_info['title']; ?>
                  </h2>
                <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php echo $this->element('side'); ?>
  </div>
  <?php echo $this->element('bottom'); ?>

<script type="text/javascript">
  $('.know_count').click(function() {
    var data = { Profession: { id: $('.job_know').find('a').attr('id'), class: $('.job_know').find('a').attr('class')} };
    console.log(JSON.stringify(data));
    $.ajax({
      type: 'POST',
      url: '/professions/know_count',
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

  $('.btn_write').click(function() {
    var data = { Profession: { id: $('.job_know').find('a').attr('id'), class: $('.job_know').find('a').attr('class')} };
    console.log(JSON.stringify(data));
    $.ajax({
      type: 'POST',
      url: '/professions/know_count',
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



$('.btn_write').click(function() {
  var name = $('#ProfessionDetailForm [name=write_name]').val();
  var text = $('#ProfessionDetailForm [name=write_text]').val();
  if (name.length == 0) {
    var name = '匿名';
  }
  if ((name.length < 25) && (text.length < 140) && (text.length > 0)) {
    var data = { wirte_down: {profession_id: $('#ProfessionDetailForm [name=profession_id]').val(), write_name: name, write_text: text, up_flag: '1'} };
    console.log(JSON.stringify(data));
    $.ajax({
      type: 'POST',
      url: '/WriteDowns/write_post',
      data: data,
      dataType: 'json',
      cache: false,
      success: function(data) {
        location.reload(true)
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
          console.log(textStatus);
          console.log(errorThrown);
      }
    });
    return false;
    } else {
      if (name.length > 25) {
        alert('名前は25文字まで');
      } else if (text.length > 140) {
        alert('本文は140本文まで');
      } else if (text.length <= 0) {
        alert('本文を入力してください');
      }
    }
  });
</script>
