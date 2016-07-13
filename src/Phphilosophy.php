<?php

namespace Phphilosophy;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @package     Phphilosophy
 * @version     1.0-thales
 */
class Phphilosophy {

    /**
     * @param   string  $pattern
     * @param   array   $action
     * @param   array   $middleware
     *
     * @return  void
     */
    public function get(string $pattern, array $action, array $middleware = []) {
        
    }
    
    /**
     * @param   string  $pattern
     * @param   array   $action
     * @param   array   $middleware
     *
     * @return  void
     */
    public function post(string $pattern, array $action, array $middleware = []) {
        
    }
    
    /**
     * @param   string  $pattern
     * @param   array   $action
     * @param   array   $middleware
     *
     * @return  void
     */
    public function any(string $pattern, array $action, array $middleware = []) {
        
    }
    
    /**
     * @param   array   $methods
     * @param   string  $pattern
     * @param   array   $action
     * @param   array   $middleware
     *
     * @return  void
     */
    public function add(array $methods, string $pattern, array $action, array $middleware = []) {
        
    }
    
    /**
     * @param   string      $name
     * @param   callable    $routes
     * @param   array       $middleware
     *
     * @return  void
     */
    public function group(string $name, callable $routes, array $middleware = []) {
        
    }
    
    /**
     * @param   array       $middleware
     * @param   callable    $routes
     *
     * @return  void
     */
    public function middleware(array $middleware, callable $routes) {
        
    }
    
    /**
     * @return  void
     */
    public function respond() {
        
    }
}