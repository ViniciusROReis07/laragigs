<?php
    namespace App\Models;

    class Listing{
        public static function all(){
            return [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => 'Nostrud irure id ad ex ipsum ullamco aliquip dolor qui laboris occaecat.
                     Enim ad ut tempor laborum ipsum duis reprehenderit voluptate ipsum est elit sit.
                     Excepteur exercitation laborum officia ex dolore consectetur mollit ipsum velit id ex velit ipsum voluptate. Eiusmod ullamco sunt nostrud anim aute veniam.
                     Incididunt excepteur quis ullamco magna commodo adipisicing sunt.'
                ],
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'Nostrud irure id ad ex ipsum ullamco aliquip dolor qui laboris occaecat.
                     Enim ad ut tempor laborum ipsum duis reprehenderit voluptate ipsum est elit sit.
                     Excepteur exercitation laborum officia ex dolore consectetur mollit ipsum velit id ex velit ipsum voluptate.
                     Eiusmod ullamco sunt nostrud anim aute veniam. Incididunt excepteur quis ullamco magna commodo adipisicing sunt.'
                ]
                ];
        }


        public static  function find($id){
            $listings = self::all();
            foreach($listings as $listing){
                if($listing['id'] == $id){
                    return $listing;
                }
            }
        }
    }