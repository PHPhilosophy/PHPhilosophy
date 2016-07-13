<?php

namespace Phphilosophy\Http;

use Phphilosophy\Http\Interfaces\InputInterface;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Phphilosophy\Http
 * @version     1.0-thales
 */
class Input implements InputInterface {
    
    /**
     * @var array
     */
    private $input = [];
    
    /**
     * @param   array   $get
     * @param   array   $post
     */
    public function __construct(array $get, array $post)
    {
        $this->input['get'] = $get;
        $this->input['post'] = $post;
    }
}