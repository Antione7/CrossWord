<?php

namespace CrossWordApiBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use JMS\Serializer\Annotation\SerializedName;

/**
 * @ODM\Document(db="dictionary", collection="word")
 */
class Word {

    /**
     * @ODM\Id
     */
    private $_id;

    /**
     * @ODM\Field(type="string")
     * @ODM\Index
     * @SerializedName("Libelle")
     */
    private $Libelle;

    /**
     * @ODM\Field(type="collection")
     * @SerializedName("Definitions")
     */
    private $Definitions = array();

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return $this
     */
    public function setLibelle($libelle)
    {
        $this->Libelle = $libelle;
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string $libelle
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * Set definitions
     *
     * @param collection $definitions
     * @return $this
     */
    public function setDefinitions($definitions)
    {
        $this->Definitions = $definitions;
        return $this;
    }

    /**
     * Get definitions
     *
     * @return collection $definitions
     */
    public function getDefinitions()
    {
        return $this->Definitions;
    }
}
