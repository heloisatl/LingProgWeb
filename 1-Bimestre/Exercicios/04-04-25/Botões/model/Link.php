<?php 

class Link {

    private $linkImg;
    private $info;

    
    
    public function __construct($linkImg, $info) {
        $this->linkImg = $linkImg;
        $this->info = $info;
    }
   
    public function getLinkImg() {
        return $this->linkImg;
    }
    public function setLinkImg($linkImg): self {
        $this->linkImg = $linkImg;
        return $this;
    }

    public function getInfo() {
        return $this->info;
    }

    public function setInfo($info): self {
        $this->info = $info;
        return $this;
    }
}
