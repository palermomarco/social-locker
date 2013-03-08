<?php

class FactoryFormFR100HiddenFormControl extends FactoryFormFR100Control 
{
    public $type = 'hidden';
    
    public function render() {
        
        $value = $this->provider->getValue( $this->props['name'], $this->props['default'] );
        $fullname = $this->props['fullname'];
        ?>
            <input type="hidden" value="<?php echo $value ?>" id="<?php echo $fullname ?>" name="<?php echo $fullname ?>" />  
        <?php
    }
}