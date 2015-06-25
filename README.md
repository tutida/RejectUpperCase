# RejectUpperCase
This plugin reject addresses used uppercase in name of controller and action.  
```
ex)
// this is ok  url: ...../topics/index
this->Html->link(['controller' => 'topics','action' => 'index']);

// this is rejected  url: ...../Topics/Index
this->Html->link(['controller' => 'Topics','action' => 'Index']);

```
## How to use
```
<?php

App::uses('Controller', 'Controller');

class AppController extends Controller
{
    public $components = [
        'RejectUpperCase.RejectUpperCase'
    ];
```
