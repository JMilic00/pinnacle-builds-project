<?php
    function object_to_array($data)
    {
        if(is_array($data) || is_object($data))
        {
            $result = array();
    
            foreach( $data as $key => $value ) {
                $result[$key] = object_to_array($data[$key]);
            }
    
            return $result;
        }
    
        return $data;
    }
?>