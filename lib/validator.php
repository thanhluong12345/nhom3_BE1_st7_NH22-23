<?php

class Validator {
    public $errors = array();

    public function validate( $input, $rules ) {
        
        foreach( $input as $field => $value ) {
            
            if( !is_array($rules["$field"]) ) {
                $rules["$field"] = array($rules["$field"]);
            }

            foreach( $rules["$field"] as $rule ) {
                switch( $rule ) {
                    case _IS_NULL:
                        if( trim($value) == "" )
                        $this->errors["$field"] = "Please enter a valid $field";
                        break;
                    default:
                    break;
                }
            }

        }

    }
}