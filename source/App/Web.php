<?php

namespace Source\App;

use Source\Core\Controller;

/**
 * :: Class Web Controller ::
 */
class Web extends Controller{
    
    /**
     * :: Web Constructor ::
     */
    public function __construct() {
        parent::__construct(__DIR__."/../../themes/".CONF_VIEW_THEME."/");
    }
    
    /**
     * :: Home ::
     * 
     * @return void
     */
    public function home(): void{
        echo $this->view->render("home",[
            
        ]);
    }
    
    public function error(): void{
        echo $this->view->render("error",[
            
        ]);
    }
}
