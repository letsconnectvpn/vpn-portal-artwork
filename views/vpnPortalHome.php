<?php $this->layout('base', ['activeItem' => 'home', 'pageTitle' => $this->t('Home')]); ?>
<?php $this->start('content'); ?>
<p class="lead"><?=$this->t('Welcome to Let\'s Connect!'); ?></p>
<?php if ($motdMessage): ?>
<blockquote><?=$this->batch($motdMessage['message'], 'escape|nl2br'); ?></blockquote>
<?php endif; ?>
<p>
    <?=$this->t('To use Let\'s Connect!, download the app for your device below!'); ?>
</p>

<ul class="apps">
    <li>
        <a target="_blank" class="Windows" href="https://app.letsconnect-vpn.org/windows/LetsConnectClient_latest.exe"><?=$this->t('Windows'); ?></a>
    </li>

    <li>
        <a target="_blank" class="macOS" href="https://apps.apple.com/app/lets-connect-vpn/id1486810037"><?=$this->t('macOS'); ?></a>
    </li>

    <li>
        <a target="_blank" class="Android" href="https://play.google.com/store/apps/details?id=org.letsconnect_vpn.app"><?=$this->t('Android'); ?></a>
    </li>

    <li>
        <a target="_blank" class="iOS" href="https://apps.apple.com/app/lets-connect-vpn/id1449261843"><?=$this->t('iOS'); ?></a>
    </li>

    <li>
        <a target="_blank" class="Linux" href="https://python-eduvpn-client.readthedocs.io/"><?=$this->t('Linux'); ?></a>
    </li>
</ul>

<p>
    <?=$this->t('On your "Account" page you can block access to the VPN in case you lose a device.'); ?>
    <?=$this->t('On the "Configurations" page, advanced users can manually download VPN configurations.'); ?>
</p>
<?php $this->stop('content'); ?>
