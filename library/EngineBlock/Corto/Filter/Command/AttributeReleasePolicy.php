<?php

class EngineBlock_Corto_Filter_Command_AttributeReleasePolicy extends EngineBlock_Corto_Filter_Command_Abstract
{
    /**
     * This command may modify the response attributes
     *
     * @return array
     */
    public function getResponseAttributes()
    {
        return $this->_responseAttributes;
    }

    public function execute()
    {
        if (!$this->_spMetadata->attributeReleasePolicy) {
            return;
        }

        $spEntityId = $this->_spMetadata->entityId;
        EngineBlock_ApplicationSingleton::getLog()->info(
            "Applying attribute release policy for $spEntityId"
        );
        $enforcer = new EngineBlock_Arp_AttributeReleasePolicyEnforcer();
        $newAttributes = $enforcer->enforceArp($this->_spMetadata->attributeReleasePolicy, $this->_responseAttributes);

        $this->_responseAttributes = $newAttributes;
    }

    protected function _getServiceRegistryAdapter()
    {
        return EngineBlock_ApplicationSingleton::getInstance()->getDiContainer()->getServiceRegistryAdapter();
    }
}