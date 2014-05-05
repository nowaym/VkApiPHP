<?php
namespace getjump\Vk\Response;


class Api {
    /**
     * @var Response
     */
    public $response = false;
    /**
     * @var bool|Error
     */
    public $error = false;

    public function __construct($data, $callback = false) {
        $this->response = !isset($data->response) ? false : new Response($data->response, $callback);
        $this->error = !isset($data->error) ? false : new Error($data->error);
    }

    /**
     * @param bool|callable $callback
     */
    public function each($callback = false)
    {
        $this->response->each($callback);
    }

    public function getResponse() {
        return $this->response->getResponse();
    }
} 