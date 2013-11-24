<?php
// src/Acme/StoreBundle/Entity/Product.php
namespace Igor\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Block")
 */
class Block
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $page;

    /**
     * @ORM\Column(type="text")
     */
    protected $content;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $blockPosition;
    
    
    /**
     * @return content
     */
    public function getContent(){
        
        return $this->content;
    }
    /**
     * @return page
     */
    public function getPage(){
        
        return $this->page;
    }

    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set page
     *
     * @param string $page
     * @return Block
     */
    public function setPage($page)
    {
        $this->page = $page;
    
        return $this;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Block
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }
}