<?php

//Material_request model

    class Material_request extends Model{
        protected $allowedColumns = [
            'material_or_item_id',
            'material_or_item_name',
            'mesure_unit',
            'quantity',
        ];

        public function validate($DATA){
            

            return false;
        }

    }