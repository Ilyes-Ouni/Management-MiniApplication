use bib;

CREATE TABLE student(
    codeEtudiant int(5),
    nom VARCHAR(255),
    prenom VARCHAR(255),
    adresse VARCHAR(255),
    classe VARCHAR(255),

    PRIMARY key(codeEtudiant)
);

CREATE TABLE book(
    codeLivre int(5),
    titre VARCHAR(255),
    auteur VARCHAR(255),
    dateEdition DATE,

    PRIMARY key(codeLivre)
)

CREATE table loan(
    codeEmprunt int(5),
    #codeEtudiant int(5),
    #codeLivre int(5),
    dateEmprunt DATE,

    PRIMARY key(codeEmprunt)
)
