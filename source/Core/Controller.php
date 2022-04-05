<?php

namespace Source\Core;

/**
 * :: Class Controller ::
 */
class Controller {
    
    /** @var View */
    protected $view;
    
    public function __construct(string $pathToViews = null){
        $this->view = new View($pathToViews);
    }
    
}
