<?php

namespace Phphilosophy\Router;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Phphilosophy\Router
 * @version     1.0-thales
 */
class Route {
    
    /**
     * @var string
     */
    private $pattern;
    
    /**
     * @var array
     */
    private $action;
    
    /**
     * @var array
     */
    private $methods = [];
    
    /**
     * @var array
     */
    private $middleware = [];
    
    /**
     * @param   string  $pattern
     * @param   array   $action
     * @param   array   $methods
     * @param   array   $middleware
     */
    public function __construct(
        string $pattern,
        array $action,
        array $methods,
        array $middleware
    ) {
        $this->pattern = $pattern;
        $this->action = $action;
        $this->methods = $methods;
        $this->middleware = $middleware;
    }
}