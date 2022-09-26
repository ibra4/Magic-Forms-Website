<?php

namespace App;

class SendEmailService {
    public function __construct()
    {
        $this->apiKey = env('key');
        $this->request = new Guzzle("htpps:///hfewoijiewj.fewfew");
    }

    public function init($type, $value) {
        // Email
        // Phone
    }

    public function execute() {

    }
}