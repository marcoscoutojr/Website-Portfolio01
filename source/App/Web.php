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
        $head = $this->seo->render(
                CONF_SITE_NAME. " - " .CONF_SITE_TITLE, 
                CONF_SITE_DESC, 
                url(), 
                theme("/assets/images/share.jpg"));
        echo $this->view->render("home",[
            'head' => $head
        ]);
    }
    
    public function error(): void{
        echo $this->view->render("error",[
            
        ]);
    }
}
