<?php
namespace Craft;

class AuditLogModel extends BaseElementModel
{

    const CREATED   = 'live';
    const MODIFIED  = 'pending';
    const DELETED   = 'expired';
    
    protected $elementType = 'AuditLog';
    
    public function getTitle()
    {
        return $this->type;
    }
    
    protected function defineAttributes()
    {
        return array_merge(parent::defineAttributes(), array(
            'id'        => AttributeType::Number,
            'type'      => AttributeType::String,
            'user'      => AttributeType::Number,
            'origin'    => AttributeType::String,
            'before'    => AttributeType::Mixed,
            'after'     => AttributeType::Mixed,
            'diff'      => AttributeType::Mixed,
            'status'    => AttributeType::String
        ));
    }
    
    public function getStatus()
    {
        return $this->status;
    }
    
}