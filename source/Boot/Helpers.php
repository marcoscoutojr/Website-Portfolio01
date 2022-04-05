<?php

/*
 * :: HELPERS ::
 */



/*
 * :: NAVIGATION :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
 */



/**
 * :: url ::
 * 
 * @param string $path
 * @return string
 */
function url(string $path = null): string {
    if(strpos($_SERVER['HTTP_HOST'],"localhost")){
        if($path){
            return CONF_URL_TEST."/".($path[0] == "/" ? mb_substr($path,1) : $path);
        }
        return CONF_URL_TEST;
    }
    if($path){
        return CONF_URL_BASE."/".($path[0]  == "/" ? mb_substr($path,1) : $path);
    }
    return CONF_URL_BASE;
}

/**
 * :: url_back ::
 * 
 * @return string
 */
function url_back(): string{
    return ($_SERVER['HTTP_REFERER'] ?? url());
}

function redirect(string $url): void{
    header("HTTP/1.1 302 Redirect");
    if(filter_var($url,FILTER_VALIDATE_URL)){
        header("Location: {$url}");
        exit;
    }
    if(filter_input(INPUT_GET,"route",FILTER_DEFAULT)){
        $location = url($url);
        header("Location: {$location}");
        exit;
    }
}



/**
 * :: ASSETS ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
 */



/**
 * :: theme ::
 * 
 * @param string $path
 * @param string $theme
 * @return string
 */
function theme(string $path = null, string $theme = CONF_VIEW_THEME): string{
    if(strpos($_SERVER['HTTP_HOST'],"localhost")){
        if($path){
            return CONF_URL_TEST."/themes/{$themes}/".($path[0] == "/" ? mb_substr($path,1) : $path);
        }
        return CONF_URL_TEST."/themes/{$theme}";
    }
    if($path()){
        return CONF_URL_BASE."/themes/{$theme}/".($path[0] == "/" ? mb_strpos($path,1) : $path);
    }
    return CONF_URL_BASE."/themes/{$theme}";
}