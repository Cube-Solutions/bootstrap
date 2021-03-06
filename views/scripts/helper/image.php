<? 
    $image = $this->image($this->name, array("thumbnail" => "contentImage", "class" => "img-responsive"));

    if($this->editmode) 
    {
        echo $image;
    } 
    else 
    { 
        if(Pimcore::inDebugMode()) 
        { 
            if($image && $image->getImage() instanceof Asset_Image)
            {
                ?>
                    <img data-width="<?=$image->getImage()->getWidth()?>" data-height="<?=$image->getImage()->getHeight()?>" data-text="<?=$image->getImage()->getAlt()?>" />
                <?
            }
            else
            {
                ?>
                    <img src="debug"/>
                <?
            }
        } 
        else 
        {
            echo $image;
        }
    }