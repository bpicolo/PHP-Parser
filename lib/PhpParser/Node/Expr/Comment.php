<?php

namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;

class Comment extends Expr
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
