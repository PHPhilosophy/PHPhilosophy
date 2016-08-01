<?php

namespace Phphilosophy\Http\Interfaces;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Phphilosophy\Http\Interfaces
 * @version     1.0-thales
 */
interface RequestInterface {
    
    /**
     * @return  string
     */
    public function getMethod();
    
    /**
     * @return  \Phphilosophy\Http\Interfaces\UriInterface
     */
    public function getUri();
    
    /**
     * @return  \Phphilosophy\Http\Interfaces\InputInterface
     */
    public function getInput();
    
    /**
     * @return  \Phphilosophy\Http\Interfaces\SessionInterface
     */
    public function getSession();
    
    /**
     * @param   string  $method
     *
     * @return  self
     */
    public function withMethod(string $method);
    
    /**
     * @param   \Phphilosophy\Http\Interfaces\UriInterface  $uri
     *
     * @return  self
     */
    public function withUri(UriInterface $uri);
    
    /**
     * @param   \Phphilosophy\Http\Interfaces\InputInterface    $input
     *
     * @return  self
     */
    public function withInput(InputInterface $input);
    
    /**
     * @param   \Phphilosophy\Http\Interfaces\SessionInterface  $session
     */
    public function withSession(SessionInterface $session);
    
    /**
     * @param   string  $name
     * @param   mixed   $default
     *
     * @return  mixed
     */
    public function get($name = null, $default = null);
    
    /**
     * @param   string  $name
     * @param   mixed   $default
     *
     * @return  mixed
     */
    public function post($name = null, $default = null);
    
    /**
     * @param   string  $name
     * @param   mixed   $default
     *
     * @return  mixed
     */
    public function session($name = null, $default = null);
}