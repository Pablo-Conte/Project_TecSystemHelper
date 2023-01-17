CREATE DATABASE tecsystemhelper;

CREATE TABLE estagiario (
    id_estagiario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) UNIQUE,
    email VARCHAR(255) UNIQUE,
    senha VARCHAR(255)
)

INSERT INTO estagiario (
    nome,
    email,
    senha
) VALUES (
    'suporte4',
    'suporte4@tscom.com.br',
    '$2a$12$9fJjZTAKmBfSecNLKdTKnuSGDlv9BpSx0CwXq.H0YDBoCRQgeOL3S'
);