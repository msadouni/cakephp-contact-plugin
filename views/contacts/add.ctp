<?php echo $this->element('contact', array('plugin' => null)); ?>
<?php $this->addScript($this->Html->css('/contact/css/contact.css')) ?>
<?php $this->set('title_for_layout', __d('contact', 'Contact', true)) ?>
<h2><?php __d('contact', 'Contact') ?></h2>
<?php
echo $this->Form->create('Contact');
echo $this->Form->input('name', array(
    'label' => 'Name',
    'error' => array(
        'notEmpty' => __d('contact', 'Please specify your name', true))));
echo $this->Form->input('address', array('label' => 'Adress'));
echo $this->Form->input('zip', array('label' => ' Zip Code'));
echo $this->Form->input('city', array('label' => 'City'));
echo $this->Form->input('country', array('label' => 'State'));
echo $this->Form->input('phone', array('label' => 'Telephone'));
echo $this->Form->input('email', array(
    'label' => 'Email',
    'error' => array(
        'email' => __d('contact', 'Please specify your email', true))));
echo $this->Form->input('message', array(
    'label' => 'Message',
    'error' => array(
        'notEmpty' => __d('contact', 'Please specify your message', true))));
echo $this->Form->submit(__d('contact', 'Submit', true));
?>