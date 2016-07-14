<?php

namespace Phphilosophy\Http;

use Phphilosophy\Http\Interfaces\SessionInterface;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Phphilosophy\Http
 * @version     1.0-thales
 */
class Session implements SessionInterface {
    
    /**
     * @param   string  $name
     * @param   mixed   $default
     *
     * @return  mixed
     */
    public function get($name = null, $default = null)
    {
        // Checks, whether a specific value was requested
        if (isset($name))
        {
            // Does the requested value exist?
            if (isset($_SESSION[$name]))
            {
                // Positive: return the value
                return $_SESSION[$name];  
            } 
            // Negative: the default value
            return $default;
        }
        // return the entire session
        return $_SESSION;
    }
    
    /**
     * @param   string  $name
     * @param   mixed   $value
     *
     * @return  void
     */
    public function set(string $name, $value) {
        $_SESSION[$name] = $value;
    }
    
    /**
     * @param   string  $name
     *
     * @return  void
     */
    public function remove(string $name) {
        unset($_SESSION[$name]);
    }
}