<?php echo $this->fetch('content'); ?>

<?php echo $data['Contact']['name']; ?>様

この度はお問い合わせいただき、ありがとうございます。
送信内容は次の通りです。
当方にて内容を確認次第、返信させていただきます。


*********************************************
　■ お問い合わせ内容：
*********************************************

――――――――――――――――――――――
件名：<?php echo $data['Contact']['subject']; ?>

――――――――――――――――――――――
<?php echo $data['Contact']['body']; ?>

――――――――――――――――――――――
