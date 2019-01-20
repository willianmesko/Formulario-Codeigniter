<?php
    class Register_model extends CI_Model 
    {   
        
        
        private $estados = array(
                '' =>'Selecione ',
                'AC' =>'Acre',
                'AL' =>'Alagoas',
                'AP' => 'Amapá',
                'AM' => 'Amazonas',
                'BA' => 'Bahia',
                'CE' => 'Ceará',
                'DF' => 'Distrito Federal',
                'ES' => 'Espírito Santo',
                'GO' => 'Goías',
                'MA' => 'Maranhão',
                'MT' => 'Mato Grosso',
                'MS' => 'Mato Grosso do Sul',
                'MG' => 'Minas Gerais',
                'PA' => 'Pará',
                'PB' => 'Paraíba',
                'PR' => 'Paraná',
                'PE' => 'Pernambuco',
                'PI' => 'Piauí',
                'RJ' => 'Rio de Janeiro',
                'RN' => 'Rio Grande do Norte',
                'RS' => 'Rio Grande do Sul',
                'RO' => 'Rondônia',
                'RR' => 'Roraima',
                'SC' => 'Santa Catarina',
                'SP' => 'São Paulo',
                'SE' => 'Sergipe',
                'TO' => 'Tocantins'
            );

        public function inputConfig()
        {
            
           return $inputs = array(
               'atributos' =>
                    [
                       'class' => 'formContato ',
                        'id' => 'formContato'
                    ],
                'nome'=> 
                    [   
                    'name'  =>  'nome',
                    'placeholder' =>'Digite seu nome',
                    'class'=>'form-control',
                    'id' =>'nome'
                    ],
                'email' =>
                [   
                    'name'  =>  'email',
                    'type' =>'email',
                    'placeholder' =>'Digite seu email',
                    'class'=>'form-control',
                    'id' => 'email'      
                ],
                'telefone' =>
                    [  
                    'name'  =>    'telefone',
                    'placeholder' =>  'Digite seu telefone',
                    'class' =>     'form-control telefone' 
                    ],
                  'celular' => 
                    [  
                        'name'  =>  'celular',
                        'placeholder' =>    'Digite seu celular',
                        'class' =>   'form-control celular',
                    ],
                    'wpp' =>
                    [
                           'name' => 'whatsapp',
                            'cheked' => false,
                            'class' => 'form-check-input',
                    ],
                    'departamento' =>
                    [
                        'name' => 'departamento',
                        'options' => [
                            '' =>'Selecione',
                            'Suporte',
                            'Comercial',
                            'Desenvolvimento'
                        ],
                        'class' =>'form-control',
                        'id' => 'departamento'
                    ],
                    'estado' =>
                        [
                            'options' => $this->estados,
                            'name' =>'estado',
                            'class' => 'form-control',
                            'id' => 'estado',
                            'onChange'=>'buscaCidades(this.value)'
                        ],
                      'cidade' =>
                        [
                            'name' =>'cidade',
                            'class' => 'form-control',
                            'id' => 'cidade'
                        ],
                        'mensagem' =>
                            [
                                'name' =>'msg',
                                'class' => 'form-control',
                                'id' => 'mensagem' 
                            ],
                         'botao' => [
                             'name' => 'enviar',
                             'value' => 'enviar',
                             'class' => 'btn btn-primary'
                         ]   
                    );
                 }



    }