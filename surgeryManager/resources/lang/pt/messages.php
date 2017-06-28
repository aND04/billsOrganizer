<?php

return [

    'main' => [
		'navbar' => [
			'welcome' => 'Bem-vindo',
		],
        'sidebar' => [
			'user_name' 	=> ':First :Last',
			'dashboard' 	=> 'Painel',
            'surgeries'     => 'Cirurgias',
            'appointments'  => 'Consultas',
            'patients'      => 'Pacientes',
            'places'        => 'Clínicas',
            'create'        => 'Criar',
            'list'          => 'Listar',
		],
    ],
    'global' => [
        'save'         => 'Guardar',
        'submit'       => 'Submeter',
        'cancel'       => 'Cancelar',
        'view'         => 'Detalhes',
        'list'         => 'Listar',
        'create'       => 'Criar',
        'edit'         => 'Editar',
        'delete'       => 'Apagar',
        'yes'          => 'Sim',
        'no'           => 'Não',
        'return'       => 'Voltar',
        'modal_delete' => [
            'title'   => 'Apagar :Attribute',
            'message' => 'Tem a certeza que pretende apagar este :attribute?'
        ]
	],
    'places' => [
		'general' => [
            'name'          => 'Nome',
            'address'       => 'Endereço',
            'phone_number'  => 'Telefone',
		],
		'index' => [
            'page_title'    => 'Clínicas',
            'id'            => '#',
		],
        'create' => [
            'page_title'    => 'Novo Local de Trabalho',
        ],
        'show'  => [
            'page_title'    => 'Detalhes do Local de Trabalho',
        ],
    ],
    'appointments' => [
		'general' => [
            'date'          => 'Data',
            'place'         => 'Local',
            'patient_name'  => 'Nome do Paciente',
            'description'   => 'Observações',
            'local'         => 'Clínica',
		],
		'index' => [
            'page_title'    => 'Consultas',
            'id'            => '#',
		],
        'create' => [
            'page_title'    => 'Nova Consulta',
        ],
        'show'  => [
            'page_title'    => 'Detalhes da Consulta',
        ],
    ],
    'patients' => [
		'general' => [
            'name'          => 'Nome',
            'email'         => 'Email',
            'phone_number'  => 'Telefone',
            'patient_name'  => 'Nome do Paciente',
            'birthday'      => 'Data de Nascimento',
            'residency'     => 'Residência',
            'nationality'   => 'Nacionalidade',
            'profession'    => 'Profissão',
		],
		'index' => [
            'page_title'        => 'Pacientes',
            'id'                => '#',
            'last_appointment'  => 'Ultima Consulta',
            'last_surgery'      => 'Ultima Cirúrgia',
		],
        'create' => [
            'page_title'    => 'Novo Paciente',
        ],
        'show'  => [
            'page_title'    => 'Detalhes do Paciente',
        ],
    ],
];
