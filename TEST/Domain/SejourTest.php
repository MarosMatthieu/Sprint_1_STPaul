<?php
/**
 * Created by PhpStorm.
 * User: ANNICK
 * Date: 02/03/2016
 * Time: 15:40
 */

namespace stpaul\Domain;
require_once __DIR__.'/../../src/stpaul/Domain/Sejour.php';


/**
 * Class SejourTest
 * @package stpaul\Domain
 */
class SejourTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var sejour
     */
    protected $object;
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new sejour(1, 'Classe de mer', 170, '2016-05-02', 10);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }


    /**
     *
     */
    public function testDteFin()
    {
  /*      $this->setUp(1, 'Classe de mer', 170, '2016-05-02', 10);

        $resultatAttendu = '2016-05-12';
        $resultatObserve = $this->object->getSejDteFin();

        $this->assertEquals($resultatAttendu, $resultatObserve); */
        return date("Y-m-d",strtotime("+".$this->sejDuree ."  days",strtotime($this->getSejDteDeb())));
    }

}


