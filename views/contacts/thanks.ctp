<?php echo $this->element('contact', array('plugin' => null)); ?>
<?php
$this->addScript($this->Html->css('/contacts/css/contacts.css'));
if (Configure::read('debug') > 0):
    debug($this->Session->read('Message.email'));
endif;