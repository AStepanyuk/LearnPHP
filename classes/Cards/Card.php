<?php

namespace Cards;

class Card {

    const TYPE_DOOR = "door";
    const TYPE_TREASURE = "treasure";

    private $name = "bez nazvaniya";
    private $type;
    private $pack = 1;

    public function __construct($type, $name, $pack)
    {
        $this->setType($type);
        $this->setName($name);
        $this->setPack($pack);

        $player = new \Player();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    private function setName($name)
    {
        $this->name = trim($name);
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    private function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getPack()
    {
        return $this->pack;
    }

    /**
     * @param int $pack
     */
    public function setPack($pack)
    {
        $this->pack = $pack;
    }

}