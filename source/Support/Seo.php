<?php

namespace Source\Support;

use CoffeeCode\Optimizer\Optimizer;

/**
 * :: Class Seo ::
 */
class Seo {
    
    /** @var Optimizer */
    protected $optimizer;
    
    /**
     * :: Seo constructor ::
     * 
     * @param string $schema
     */
    public function __construct(string $schema = "article") {
        $this->optimizer = new Optimizer();
        $this->optimizer->openGraph(
            CONF_SITE_NAME,
            CONF_SITE_LANG, 
            $schema
        );
    }
    
    /**
     * :: __get ::
     * 
     * @param type $name
     * @return type
     */
    public function __get($name) {
        return $this->optimizer->data()->$name;
    }
    
    /**
     * :: render ::
     * 
     * @param string $title
     * @param string $description
     * @param string $url
     * @param string $image
     * @param bool $follow
     * @return string
     */
    public function render(string $title, string $description,string $url, string $image, bool $follow = true): string{
        return $this->optimizer->optimize($title, $description, $url, $image,$follow)->render();
    }
    
    /**
     * :: optimizer ::
     * 
     * @return Optimizer
     */
    public function optimizer(): Optimizer{
        return $this->optimizer;
    }
    
    /**
     * :: data ::
     * 
     * @param string $title
     * @param string $desc
     * @param string $url
     * @param string $image
     * @return type
     */
    public function data(string $title = null, string $desc = null,string $url = null, string $image = null){
        return $this->optimizer->data($title,$desc,$url,$image);
    }
}
