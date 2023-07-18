<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        date_default_timezone_set('Asia/Jakarta');
    }
    public function continent()
    {
        $this->db->insert('continent', ['continent' => $this->input->post('continent')]);
        $this->session->set_flashdata('success', 'New Continent Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Continent Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function country()
    {
        $data = [
            'continent_id' => $this->input->post('continent'),
            'country' => $this->input->post('country'),
        ];
        $this->db->insert('country', $data);
        $this->session->set_flashdata('success', 'New Country Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Country Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function province()
    {
        $data = [
            'country_id' => $this->input->post('country'),
            'province' => $this->input->post('province'),
        ];

        $this->db->insert('province', $data);
        $this->session->set_flashdata('success', 'New Province Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Province Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function distribution()
    {
        $this->db->insert('distribution', ['distribution' => $this->input->post('distribution')]);
        $this->session->set_flashdata('success', 'New Distribution Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Distribution Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function archipelago()
    {
        $data = [
            'distribution_id' => $this->input->post('distribution'),
            'province_id' => $this->input->post('province'),
            'archipelago' => $this->input->post('archipelago'),
        ];

        $this->db->insert('archipelago', $data);
        $this->session->set_flashdata('success', 'New Archipelago Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Archipelago Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function fishType()
    {
        $data = [
            'type' => $this->input->post('type'),
            'description' => $this->input->post('description'),
        ];

        $this->db->insert('fish_type', $data);
        $this->session->set_flashdata('success', 'New Fish Type Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Fish Type Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function abundance()
    {
        $data = [
            'abundance' => $this->input->post('abundance'),
            'description' => $this->input->post('description'),
        ];

        $this->db->insert('abundance', $data);
        $this->session->set_flashdata('success', 'New Abundance Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Abundance Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function food()
    {
        $this->db->insert('food', ['food' => $this->input->post('food')]);
        $this->session->set_flashdata('success', 'New Food Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Food Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function habitat()
    {
        $this->db->insert('habitats', ['habitat' => $this->input->post('habitat')]);
        $this->session->set_flashdata('success', 'New Habitat Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Habitat Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function kingdom()
    {
        $upload_picture = $_FILES['picture']['name'];
        if ($upload_picture) {
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
            $config['upload_path'] = './assets/img/kingdom';
            $config['max_size']     = '4096';

            // Generate random file name
            $config['file_name'] = uniqid();
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('picture')) {
                $new_picture = $this->upload->data('file_name');
                $this->db->set('picture', 'kingdom/' . $new_picture);
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
        $this->db->insert('kingdoms', [
            'kingdom' => $this->input->post('kingdom'),
            'description' => $this->input->post('description'),
        ]);

        $this->session->set_flashdata('success', 'New Kingdom Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New kingdom Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function phylum()
    {
        $upload_picture = $_FILES['picture']['name'];
        if ($upload_picture) {
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
            $config['upload_path'] = './assets/img/phylum';
            $config['max_size']     = '4096';

            // Generate random file name
            $config['file_name'] = uniqid();
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('picture')) {
                $new_picture = $this->upload->data('file_name');
                $this->db->set('picture', 'phylum/' . $new_picture);
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
        $this->db->insert('phylums', [
            'phylum' => $this->input->post('phylum'),
            'kingdom_id' => $this->input->post('kingdom_id'),
            'description' => $this->input->post('description'),
        ]);

        $this->session->set_flashdata('success', 'New Phylum Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New phylum Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function class()
    {
        $upload_picture = $_FILES['picture']['name'];
        if ($upload_picture) {
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
            $config['upload_path'] = './assets/img/class';
            $config['max_size']     = '4096';

            // Generate random file name
            $config['file_name'] = uniqid();
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('picture')) {
                $new_picture = $this->upload->data('file_name');
                $this->db->set('picture', 'class/' . $new_picture);
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
        $this->db->insert('class', [
            'class' => $this->input->post('class'),
            'general_name' => $this->input->post('general_name'),
            'phylum_id' => $this->input->post('phylum_id'),
            'description' => $this->input->post('description'),
            'species' => $this->input->post('species')
        ]);

        $this->session->set_flashdata('success', 'New Class Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New class Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function ordo()
    {
        $class_id = $this->input->post('class_id');
        if (is_numeric($this->input->post('class_id'))) {
            $class = $this->db->get_where('class', ['id' => $this->input->post('class_id')])->num_rows();
            if ($class > 0) {
                $class_id = $this->input->post('class_id');
            } else {
                $class_id = 0;
            }
        } else {
            $this->db->insert('class', [
                'class' => $this->input->post('class_id')
            ]);
            $class_id = $this->db->insert_id();
        }
        $upload_picture = $_FILES['picture']['name'];
        if ($upload_picture) {
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
            $config['upload_path'] = './assets/img/ordo';
            $config['max_size']     = '4096';

            // Generate random file name
            $config['file_name'] = uniqid();
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('picture')) {
                $new_picture = $this->upload->data('file_name');
                $this->db->set('picture', 'ordo/' . $new_picture);
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
        $this->db->insert('ordo', [
            'ordo' => $this->input->post('ordo'),
            'general_name' => $this->input->post('general_name'),
            'class_id' => $class_id,
            'description' => $this->input->post('description'),
        ]);

        $this->session->set_flashdata('success', 'New Ordo Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New ordo Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function family()
    {
        $ordo_id = $this->input->post('ordo_id');
        if (is_numeric($this->input->post('ordo_id'))) {
            $ordo = $this->db->get_where('ordo', ['id' => $this->input->post('ordo_id')])->num_rows();
            if ($ordo > 0) {
                $ordo_id = $this->input->post('ordo_id');
            } else {
                $ordo_id = 0;
            }
        } else {
            $this->db->insert('ordo', [
                'ordo' => $this->input->post('ordo_id')
            ]);
            $ordo_id = $this->db->insert_id();
        }
        $upload_picture = $_FILES['picture']['name'];
        if ($upload_picture) {
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
            $config['upload_path'] = './assets/img/family';
            $config['max_size']     = '4096';

            // Generate random file name
            $config['file_name'] = uniqid();
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('picture')) {
                $new_picture = $this->upload->data('file_name');
                $this->db->set('picture', 'family/' . $new_picture);
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
        $this->db->insert('families', [
            'family' => $this->input->post('family'),
            'general_name' => $this->input->post('general_name'),
            'ordo_id' => $ordo_id,
            'description' => $this->input->post('description'),
        ]);

        $this->session->set_flashdata('success', 'New Family Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New family Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function genus()
    {
        $family_id = $this->input->post('family_id');
        if (is_numeric($this->input->post('family_id'))) {
            $family = $this->db->get_where('families', ['id' => $this->input->post('family_id')])->num_rows();
            if ($family > 0) {
                $family_id = $this->input->post('family_id');
            } else {
                $family_id = 0;
            }
        } else {
            $this->db->insert('families', [
                'family' => $this->input->post('family_id')
            ]);
            $family_id = $this->db->insert_id();
        }
        $upload_picture = $_FILES['picture']['name'];
        if ($upload_picture) {
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
            $config['upload_path'] = './assets/img/genus';
            $config['max_size']     = '4096';

            // genuste random file name
            $config['file_name'] = uniqid();
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('picture')) {
                $new_picture = $this->upload->data('file_name');
                $this->db->set('picture', 'genus/' . $new_picture);
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
        $this->db->insert('genus', [
            'genus' => $this->input->post('genus'),
            'general_name' => $this->input->post('general_name'),
            'family_id' => $family_id,
            'description' => $this->input->post('description'),
        ]);

        $this->session->set_flashdata('success', 'New Genus Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New genus Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function species()
    {
        $genus_id = $this->input->post('genus_id');
        if (is_numeric($this->input->post('genus_id'))) {
            $genus = $this->db->get_where('genus', ['id' => $this->input->post('genus_id')])->num_rows();
            if ($genus > 0) {
                $genus_id = $this->input->post('genus_id');
            } else {
                $genus_id = 0;
            }
        } else {
            $this->db->insert('genus', [
                'genus' => $this->input->post('genus_id')
            ]);
            $genus_id = $this->db->insert_id();
        }
        $upload_picture = $_FILES['picture']['name'];
        if ($upload_picture) {
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
            $config['upload_path'] = './assets/img/species';
            $config['max_size']     = '4096';

            // genuste random file name
            $config['file_name'] = uniqid();
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('picture')) {
                $new_picture = $this->upload->data('file_name');
                $this->db->set('picture', 'species/' . $new_picture);
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
        $this->db->insert('species', [
            'species' => $this->input->post('species'),
            'general_name' => $this->input->post('general_name'),
            'genus_id' => $genus_id,
            'description' => $this->input->post('description'),
        ]);
        $this->session->set_flashdata('success', 'New Species Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New species Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function fish()
    {
        $species_id = $this->input->post('species_id');
        if (is_numeric($this->input->post('species_id'))) {
            $species = $this->db->get_where('species', ['id' => $this->input->post('species_id')])->num_rows();
            if ($species > 0) {
                $species_id = $this->input->post('species_id');
            } else {
                $species_id = 0;
            }
        } else {
            $this->db->insert('species', [
                'species' => $this->input->post('species_id')
            ]);
            $species_id = $this->db->insert_id();
        }
        $this->db->insert('fish', [
            'scientific_name' => $this->input->post('scientific_name'),
            'general_name' => $this->input->post('general_name'),
            'synonim' => $this->input->post('synonim'),
            'species_id' => $species_id,
            'fish_type_id' => $this->input->post('fish_type_id'),
            'abundance_id' => $this->input->post('abundance_id'),
            'length' => $this->input->post('length'),
            'weight' => $this->input->post('weight'),
            'information' => $this->input->post('information'),
            'image' => $this->input->post('image'),
        ]);
        $fish_id = $this->db->insert_id();
        foreach ($this->input->post('food') as $key => $value) {
            if (is_numeric($value)) {
                $food = $this->db->get_where('food', ['id' => $value]);
                if ($food->num_rows() > 0) {
                    $food_id = $food->row()->id;
                } else {
                    $food_id = 0;
                }
            } else {
                $this->db->insert('food', [
                    'food' => $value
                ]);
                $food_id = $this->db->insert_id();
            }
            $this->db->insert('fish_food', [
                'fish_id' => $fish_id,
                'food_id' => $food_id,
            ]);
        }
        foreach ($this->input->post('habitat') as $key => $value) {
            if (is_numeric($value)) {
                $habitat = $this->db->get_where('habitats', ['id' => $value]);
                if ($habitat->num_rows() > 0) {
                    $habitat_id = $habitat->row()->id;
                } else {
                    $habitat_id = 0;
                }
            } else {
                $this->db->insert('habitats', [
                    'habitat' => $value
                ]);
                $habitat_id = $this->db->insert_id();
            }
            $this->db->insert('fish_habitat', [
                'fish_id' => $fish_id,
                'habitat_id' => $habitat_id,
            ]);
        }
        foreach ($this->input->post('distribution') as $key => $value) {
            if (is_numeric($value)) {
                $distribution = $this->db->get_where('distribution', ['id' => $value]);
                if ($distribution->num_rows() > 0) {
                    $distribution_id = $distribution->row()->id;
                } else {
                    $distribution_id = 0;
                }
            } else {
                $this->db->insert('distribution', [
                    'distribution' => $value
                ]);
                $distribution_id = $this->db->insert_id();
            }
            $this->db->insert('fish_distribution', [
                'fish_id' => $fish_id,
                'distribution_id' => $distribution_id,
            ]);
        }
        foreach ($this->input->post('local_name') as $key => $value) {
            $this->db->insert('local_name', [
                'fish_id' => $fish_id,
                'local_name' => $value,
            ]);
        }
        foreach ($this->input->post('origin') as $key => $value) {
            $this->db->insert('origin', [
                'fish_id' => $fish_id,
                'origin' => $value,
            ]);
        }
        $this->session->set_flashdata('success', 'New Fish Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Fish Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function localName()
    {
        $this->session->set_flashdata('success', 'New Local Name Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Local Name Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function origin()
    {
        $this->session->set_flashdata('success', 'New Origin Added!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Origin Added!
                    </div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
