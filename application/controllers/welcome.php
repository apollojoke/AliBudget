<?php

class Welcome extends MpController {

    public function doIndex() {
//        $this->helper('config');
        $this->view("welcome");
    }

}
