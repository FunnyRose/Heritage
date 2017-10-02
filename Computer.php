<?php
/**
 * Created by PhpStorm.
 * User: fannyperret
 * Date: 02/10/2017
 * Time: 09:38
 */
namespace Wcs;

abstract class Computer
{
private $proc;

private $memory;

private $model;

public function __construct(string $model = "", string $proc = "")
{
    $this->setModel($model);
    $this->setProc($proc);
}

    public function display() {
        echo "Modèle : " . $this->getModel() . PHP_EOL;
        echo "Proc : " . $this->getProc() . PHP_EOL;
        echo "Mémoire : " . $this->getMemory() . PHP_EOL;
    }


    /**
     * @return mixed
     */
    public function getProc(): string
    {
        return $this->proc;
    }

    /**
     * @param mixed $proc
     * @return Computer
     */
    public function setProc($proc)
    {
        $this->proc = $proc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * @param mixed $memory
     * @return Computer
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     * @return Computer
     */
    public function setModel($model): Computer
    {
        $this->model = $model;
        return $this;
    }

    abstract public function getSpeed();
    /*Une méthode abstraite on ne fait que la déclarer. On doit implémenter une méthode getSpeed*/


}