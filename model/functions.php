<?php

const DOMAIN = "https://encodify.com.br/";

function getProjetos() {
    return array(
        [
            "nome" => "CLI Python",
            "descricao" => "Ferramenta desenvolvida em Python para automatizar processos no sistema acadêmico e no Ambiente Virtual de Aprendizagem (AVA). O script realiza login automático, 
            navega pelas disciplinas, acessa áreas de avaliações, extrai e armazena dados relevantes — como datas de abertura e encerramento — e gera relatórios organizados em Excel. 
            Além disso, conta com um módulo adicional responsável por monitorar novos alunos, realizar a criação automática de usuários no AVA e matriculá-los nas disciplinas correspondentes, 
            integrando o processo de forma totalmente autônoma.",
            "stack" => ["Python", "Selenium", "Pandas", "Git"],
            "status" => "Em desenvolvimento",
            "ano" => 2025,
            "path" => "mpy",
        ],
        [
            "nome" => "AutCert",
            "descricao" => "Plataforma web para gestão de eventos com emissão de certificados, envio de e-mails e controle de templates personalizados.
            A solução já está em operação, somando mais de 400 certificados gerados, quase 1.000 acessos registrados. O sistema flexível de 
            gerenciamento de templates de certificados permite personalização conforme o tipo de evento e identidade visual da instituição.",
            
            "stack" => ["PHP", "HTML", "CSS", "MySQL", "Bootstrap", "Redis", "Docker", "Git"],
            "status" => "Em desenvolvimento",
            "ano" => 2025,
            "path" => "autcert",
        ],
        [
            "nome" => "Rodriboy despachante",
            "descricao" => "Landing page desenvolvida para um escritório de despachante, com apresentação dos principais serviços oferecidos, formulário de contato funcional, 
            integração com a API do Google Maps para exibir localização, além de um layout responsivo. Todas as artes visuais e o design da página foram criados por mim, prezando por clareza e identidade visual.",
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
            "descricao" => "Landing page desenvolvida para uma marca de vestuário infantil, com foco em vendas por e-commerce. A página destaca os principais diferenciais da marca, exibe os produtos de forma atrativa e 
            possui layout responsivo. Todo o design visual e as artes foram criados por mim, priorizando uma identidade lúdica e acolhedora, alinhada ao público-alvo.",
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
            "path" => "estoque",
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
        "Laravel" => "red",
        "Python" => "indigo",
        "Pandas" => "lime",
        "Selenium" => "gray"
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