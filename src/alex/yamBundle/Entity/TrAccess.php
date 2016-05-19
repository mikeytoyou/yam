<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrAccess
 */
class TrAccess
{
    /**
     * @var integer
     */
    private $idProfile;

    /**
     * @var integer
     */
    private $idTab;

    /**
     * @var integer
     */
    private $view;

    /**
     * @var integer
     */
    private $add;

    /**
     * @var integer
     */
    private $edit;

    /**
     * @var integer
     */
    private $delete;


    /**
     * Set idProfile
     *
     * @param integer $idProfile
     * @return TrAccess
     */
    public function setIdProfile($idProfile)
    {
        $this->idProfile = $idProfile;

        return $this;
    }

    /**
     * Get idProfile
     *
     * @return integer 
     */
    public function getIdProfile()
    {
        return $this->idProfile;
    }

    /**
     * Set idTab
     *
     * @param integer $idTab
     * @return TrAccess
     */
    public function setIdTab($idTab)
    {
        $this->idTab = $idTab;

        return $this;
    }

    /**
     * Get idTab
     *
     * @return integer 
     */
    public function getIdTab()
    {
        return $this->idTab;
    }

    /**
     * Set view
     *
     * @param integer $view
     * @return TrAccess
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get view
     *
     * @return integer 
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Set add
     *
     * @param integer $add
     * @return TrAccess
     */
    public function setAdd($add)
    {
        $this->add = $add;

        return $this;
    }

    /**
     * Get add
     *
     * @return integer 
     */
    public function getAdd()
    {
        return $this->add;
    }

    /**
     * Set edit
     *
     * @param integer $edit
     * @return TrAccess
     */
    public function setEdit($edit)
    {
        $this->edit = $edit;

        return $this;
    }

    /**
     * Get edit
     *
     * @return integer 
     */
    public function getEdit()
    {
        return $this->edit;
    }

    /**
     * Set delete
     *
     * @param integer $delete
     * @return TrAccess
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;

        return $this;
    }

    /**
     * Get delete
     *
     * @return integer 
     */
    public function getDelete()
    {
        return $this->delete;
    }
}
