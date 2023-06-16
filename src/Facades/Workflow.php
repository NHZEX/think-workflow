<?php

namespace Zxin\Think\Workflow\Facades;

use think\Facade;

/**
 * @author Boris Koumondji <brexis@yahoo.fr>
 *
 * @mixin \Zxin\Think\Workflow\WorkflowRegistry
 */
class Workflow extends Facade
{
    protected static function getFacadeClass()
    {
        return 'workflow';
    }
}
