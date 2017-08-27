<?php

namespace CrossWordApiBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document
 */
class Word {

    /**
     * @ODM\Id
     */
    private $id;

    /**
     * @ODM\Field(type="string")
     * @ODM\Index
     */
    private $libelle;

    /**
     * @ODM\EmbedMany(targetDocument="Definition")
     */
    private $definitions = array();

    public function getId() {
        return $this->id;
    }

    public function getLibelle() {
        return $this->libelle;
    }

    public function getDefinitions() {
        return $this->definitions;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    public function setDefinitions($definitions) {
        $this->definitions = $definitions;
    }

}
