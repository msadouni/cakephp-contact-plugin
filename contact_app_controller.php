<?php
class ContactAppController extends AppController {
    var $components = array('RequestHandler', 'Email', 'Acl', 'Auth', 'Cookie', 'DebugKit.Toolbar');
}
?>