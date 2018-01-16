<?php
namespace PingReceive\PingReceive\Domain\Model;

/***
 *
 * This file is part of the "PingReceiveApp" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * Order
 */
class Order extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * id
     *
     * @var int
     */
    protected $id = 0;

    /**
     * address
     *
     * @var string
     */
    protected $address = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * custname
     *
     * @var string
     */
    protected $custname = '';

    /**
     * contact
     *
     * @var string
     */
    protected $contact = '';

    /**
     * dishes
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PingReceive\PingReceive\Domain\Model\Dishes>
     * @cascade remove
     */
    protected $dishes = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->dishes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id
     *
     * @param int $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Returns the address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     *
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the custname
     *
     * @return string $custname
     */
    public function getCustname()
    {
        return $this->custname;
    }

    /**
     * Sets the custname
     *
     * @param string $custname
     * @return void
     */
    public function setCustname($custname)
    {
        $this->custname = $custname;
    }

    /**
     * Returns the contact
     *
     * @return string $contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets the contact
     *
     * @param string $contact
     * @return void
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Adds a Dishes
     *
     * @param \PingReceive\PingReceive\Domain\Model\Dishes $dish
     * @return void
     */
    public function addDish(\PingReceive\PingReceive\Domain\Model\Dishes $dish)
    {
        $this->dishes->attach($dish);
    }

    /**
     * Removes a Dishes
     *
     * @param \PingReceive\PingReceive\Domain\Model\Dishes $dishToRemove The Dishes to be removed
     * @return void
     */
    public function removeDish(\PingReceive\PingReceive\Domain\Model\Dishes $dishToRemove)
    {
        $this->dishes->detach($dishToRemove);
    }

    /**
     * Returns the dishes
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PingReceive\PingReceive\Domain\Model\Dishes> $dishes
     */
    public function getDishes()
    {
        return $this->dishes;
    }

    /**
     * Sets the dishes
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PingReceive\PingReceive\Domain\Model\Dishes> $dishes
     * @return void
     */
    public function setDishes(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $dishes)
    {
        $this->dishes = $dishes;
    }
}
