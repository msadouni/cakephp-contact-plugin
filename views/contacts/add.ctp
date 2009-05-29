<?php $this->addScript($html->css('/contact/css/contact.css')) ?>
<h1><?php echo $this->pageTitle = __d('contact', 'Contact us', true) ?></h1>
<?php
echo $form->create('Contact');
echo $form->input('name', array(
    'label' => 'Nom',
    'error' => array(
        'notEmpty' => __d('contact', 'Please specify your name', true))));
echo $form->input('address', array('label' => 'Adresse'));
echo $form->input('zip', array('label' => 'Code postal'));
echo $form->input('city', array('label' => 'Ville'));
echo $form->input('country', array('label' => 'Pays'));
echo $form->input('phone', array('label' => 'Téléphone'));
echo $form->input('email', array(
    'label' => 'Email',
    'error' => array(
        'email' => __d('contact', 'Please specify your email', true))));
echo $form->input('message', array(
    'label' => 'Message',
    'error' => array(
        'notEmpty' => __d('contact', 'Please specify your message', true))));
echo $form->submit(__d('contact', 'Submit', true));
?>