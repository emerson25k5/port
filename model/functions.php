<?php

const DOMAIN = "https://encodify.com.br/";

function getProjetos() {
    return array(
        [
            "nome" => "Autcert",
            "descricao" => "Ferramenta para gestão de eventos e geração de certificados de forma automática. Já conta com mais de 400 certificados emitidos em produção e quase 1000 acessos.",
            "stack" => ["PHP", "HTML", "CSS", "MySQL", "Bootstrap", "Redis", "Docker", "Git"],
            "status" => "Em desenvolvimento",
            "ano" => 2025,
            "path" => "autcert",
        ],
        [
            "nome" => "Rodriboy despachante",
            "descricao" => "Landpage para um despachante, lista de serviços, formulário para contato e integração com API do Google Maps.",
            "stack" => ["PHP", "HTML", "CSS", "Bootstrap", "Git", "Maps API", "WhatsApp"],
            "status" => "Finalizado",
            "ano" => 2024,
            "path" => "desp",
        ],
        [
            "nome" => "Swupe",
            "descricao" => "Sistema Web para gestão de funcionários, controle de uniformes dos funcionários, férias, trabalhos avulsos, entre outras funcionalidades.",
            "stack" => ["PHP", "HTML", "CSS", "Materialize", "Git"],
            "status" => "Finalizado",
            "ano" => 2023,
            "path" => "swupe",
        ],
        [
            "nome" => "Melb Confecções",
            "descricao" => "Landpage para a marca que confecciona vestimentas infantis, com foco em vendas em e-commerces.",
            "stack" => ["PHP", "HTML", "CSS", "Materialize", "Git"],
            "status" => "Finalizado",
            "ano" => 2023,
            "path" => "melb",
        ],
        [
            "nome" => "Melmi Açaí",
            "descricao" => "Sistema Web para gerenciamento de pedidos de uma açaiteria.",
            "stack" => ["PHP", "HTML", "CSS", "Bootstrap", "Git"],
            "status" => "Finalizado",
            "ano" => 2023,
            "path" => "melmi",
        ],
        [
            "nome" => "Controle de estoque em Laravel",
            "descricao" => "Controle de estoque desenvolvido com Laravel e MySql.",
            "stack" => ["Laravel", "MySQL", "HTML", "CSS", "Bootstrap", "Git"],
            "status" => "Finalizado",
            "ano" => 2023,
            "path" => "phoenix",
        ],
    );
}

function getColorStack() {
    return [
        "PHP" => "blue",
        "MySQL" => "orange",
        "HTML" => "red",
        "CSS" => "yellow",
        "Bootstrap" => "purple",
        "Redis" => "green",
        "Docker" => "cyan",
        "Git" => "amber",
        "Maps API" => "lime",
        "WhatsApp" => "teal",
        "Materialize" => "pink",
        "Laravel" => "red"
    ];
}

function getTecnologias() {
    return array(
        [
            "nome" => "Autcert",
            "descricao" => "Ferramenta para gestão de eventos e geração de certificados de forma automática. Conta com mais de 400 certificados emitidos em produção e quase 1000 acessos.",
            "path_image" => ""
        ],
    );
}

function createUrlProject($path) {
    
    return $url = DOMAIN . $path;

}