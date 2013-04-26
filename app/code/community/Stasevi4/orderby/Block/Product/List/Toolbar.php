<?php
class Orderby_Catalog_Block_Product_List_Toolbar extends Mage_Catalog_Block_Product_List_Toolbar
{

    public function getAvailableOrders()
    {
        
        //Adding Oprion sort by date created

        $this->_availableOrder['created_at']=$this->__('Date');

        return $this->_availableOrder;
     
    }

    public function setDefaultOrder($field)
    {

        $this->_orderField = 'created_at';
        
        return $this;
    }
    
    public function getCurrentDirection() 
	{ 
		if ($dir = (string) $this->getRequest()->getParam($this->getDirectionVarName())) { 
		
			$dir = strtolower($dir);
 
			if (in_array($dir, array('desc', 'asc'))) { 
			    
                return $dir; 
			} 
		} 
		return 'desc'; 
	}
  
}
?>
