<?php

namespace lhs\Yii2SaveRelationsBehavior;

trait SaveRelationsTrait
{

    public function load($data, $formName = null)
    {
        $loaded = parent::load($data, $formName);
        if ($loaded && $this->hasMethod('loadRelationsForSave')) {
            $this->loadRelationsForSave($data);
        }
        return $loaded;
    }
}
