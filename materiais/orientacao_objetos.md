# Orinetação a Obejtos

É um paradigma de programação, que define uma forma de escrever sistemas.

Classe -> Como se fosse uma receita de bolo

    propriedades -> Características -> Toda propriedade é um substantivo
    métodos -> Ações

    Classe Humano:
        propriedades:
            cor_dos_olhos
            altura
            peso
            tipo_sanguineo
        métodos:
            andar
            correr
            falar
            gritar
            chorar
            rir

Objeto -> É o bolo pronto

Exemplo usando PHP:

    // Humano 1
    $humano = new Humano();
    $humano -> cor_dos_olhos = 'rosa';
    $humano -> altura = '136cm';
    $humano -> correr();

    // Humano 2
    $humano2 = new Humano();
    $humano2 -> cor_dos_olhos = 'cinza';
    $humano2 -> altura = '1020cm';
    $humano2 -> falar();

