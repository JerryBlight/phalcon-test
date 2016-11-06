<?php

class TestController extends ControllerBase
{

    public function indexAction()
    {
        $t = $this->modelsCache->save("test","test");
        print_r($t);

        print_r("<p></p>");

        print_r($this->modelsCache->get("test"));
    }

}

