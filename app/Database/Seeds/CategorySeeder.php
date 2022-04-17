<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // first level
        $this->db->table('categories')->insert([
            'name' => 'Category A'
        ]);
        $categoryA_id=$this->db->insertID();
        $this->db->table('categories')->insert([
            'name' => 'Category B'
        ]);
        $categoryB_id=$this->db->insertID();
        $this->db->table('categories')->insert([
            'name' => 'Category C'
        ]);
        $categoryC_id=$this->db->insertID();
        
        //insert subs of A
        $this->db->table('categories')->insert([
            'name' => 'SUB A1',
            'parent_id'=>$categoryA_id
        ]);
        $sub1_CategoryA_id=$this->db->insertID();
        $this->db->table('categories')->insert([
            'name' => 'SUB A2',
            'parent_id'=>$categoryA_id
        ]);
        $sub2_CategoryA_id=$this->db->insertID();

        //insert subs of B
        $this->db->table('categories')->insert([
            'name' => 'SUB B1',
            'parent_id'=>$categoryB_id
        ]);
        $sub1_CategoryB_id=$this->db->insertID();

        $this->db->table('categories')->insert([
            'name' => 'SUB B2',
            'parent_id'=>$categoryB_id
        ]);
        $sub2_CategoryB_id=$this->db->insertID();

        // insert Subs of C
        $subs_data=[

            [
                'name'     => 'SUB C1',
                'parent_id'=> $categoryC_id
            ],
            [
                'name'     => 'SUB C2',
                'parent_id'=> $categoryC_id
            ],
            [
                'name'     => 'SUB C3',
                'parent_id'=> $categoryC_id
            ]

        ];
        $this->db->table('categories')->insertBatch($subs_data);

        // inset Sub Of Sub A1
        $subs_data=[

            [
                'name'     => 'SUB SUB A1-1',
                'parent_id'=> $sub1_CategoryA_id
            ],
            [
                'name'     => 'SUB SUB A1-2',
                'parent_id'=> $sub1_CategoryA_id
            ],
        ];
        $this->db->table('categories')->insertBatch($subs_data);

        // inset Sub Of Sub A2
        $subs_data=[

            [
                'name'     => 'SUB SUB A2-1',
                'parent_id'=> $sub2_CategoryA_id
            ],
            [
                'name'     => 'SUB SUB A2-2',
                'parent_id'=> $sub2_CategoryA_id
            ],
        ];
        $this->db->table('categories')->insertBatch($subs_data);

        // inset Sub Of Sub B1
        $subs_data=[

            [
                'name'     => 'SUB SUB B1-1',
                'parent_id'=> $sub1_CategoryB_id
            ],
            [
                'name'     => 'SUB SUB B1-2',
                'parent_id'=> $sub1_CategoryB_id
            ],
        ];
        $this->db->table('categories')->insertBatch($subs_data);

        // inset Sub Of Sub B2
        $subs_data=[

            [
                'name'     => 'SUB SUB B2-1',
                'parent_id'=> $sub2_CategoryB_id
            ],
            [
                'name'     => 'SUB SUB B2-2',
                'parent_id'=> $sub2_CategoryB_id
            ],
        ];
        $this->db->table('categories')->insertBatch($subs_data);
    }
}
