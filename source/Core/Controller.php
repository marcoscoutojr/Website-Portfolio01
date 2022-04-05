<?php

namespace Source\Core;

/**
 * :: Class Controller ::
 */
class Controller {
    
    /** @var View */
    protected $view;
    
    /**
     * :: Controller constructor ::
     * 
     * @param string $pathToViews
     */
    public function __construct(string $pathToViews = null){
        $this->view = new View($pathToViews);
    }
    
}
