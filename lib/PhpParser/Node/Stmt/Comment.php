<?php

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

class Comment extends Node\Stmt
{
    /** @var Node\Comment declarations */
    public $value;

    /**
     * Constructs a comment node.
     *
     * @param string        $value     Comment value
     * @param array         $attributes Additional attributes
     */
    public function __construct($value, array $attributes = array()) {
        parent::__construct($attributes);
        $this->value = $value;
    }

    public function getSubNodeNames() {
        return array('value');
    }

}
