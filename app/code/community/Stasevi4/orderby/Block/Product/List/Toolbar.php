<?php
    class Stasevi4_Orderby_Block_Product_List_Toolbar 
          extends Mage_Catalog_Block_Product_List_Toolbar{ 
    
        public function getAvailableOrders()
        {                        
          $this->_availableOrder['created_at'] = 'Data';    
          return  $this->_availableOrder;
        }
   }

?>