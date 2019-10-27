<?php $this->layout('base', ['activeItem' => 'home']); ?>
<?php $this->start('content'); ?>
<h1><?=$this->t('Home'); ?></h1>
<?php if ($motdMessage): ?>
    <p class="plain"><?=$this->batch($motdMessage['message'], 'escape|nl2br'); ?></p>
<?php endif; ?>
<p class="banner"><?=$this->t('Welcome to Let\'s Connect!'); ?></p>
<p>
    <?=$this->t('To use Let\'s Connect!, download the app for your device below!'); ?>
</p>

<div class="apps">
	<a target="_blank" href="https://app.letsconnect-vpn.org/windows/LetsConnectClient_latest.exe">
		<img width="200" height="29" src="img/LC/Windows.png" alt="Windows">
		<span><?=$this->t('Download'); ?></span>
	</a>
	<a target="_blank" href="https://app.letsconnect-vpn.org/mac/LetsConnect_latest.dmg">
		<img width="200" height="29" src="img/LC/macOS.png" alt="macOS">
		<span><?=$this->t('Download'); ?></span>
	</a>
	<a target="_blank" href="https://play.google.com/store/apps/details?id=org.letsconnect_vpn.app">
		<img width="200" height="29" src="img/LC/Android.png" alt="Android">
		<span><?=$this->t('Download'); ?></span>
	</a>
	<a target="_blank" href="https://apps.apple.com/app/lets-connect-vpn/id1449261843">
		<img width="200" height="29" src="img/LC/iOS.png" alt="iOS">
		<span><?=$this->t('Download'); ?></span>
	</a>
</div> <!-- /apps -->

<p class="small">
    <?=$this->t('On your "Account" page you can block access to the VPN in case you lose a device.'); ?>
    <?=$this->t('On the "Configurations" page, advanced users can manually download VPN configurations.'); ?>
</p>
<?php $this->stop('content'); ?>
