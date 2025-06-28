<?php
class Carro {
    // Atributos da classe Carro
    public string $marca; // Propriedade pública
    public string $modelo; // Propriedade pública
    public int $ano; // Propriedade pública (opcional)
    public string $cor; // Propriedade pública (opcional)

    //Metodo: Construtor da classe Carro
    public function __construct(string $marca, string $modelo, int $ano, string $cor) {
        $this->marca = $marca; // Atribui o valor da marca
        $this->modelo = $modelo; // Atribui o valor do modelo
        $this->ano = $ano; // Atribui um valor padrão para o ano
        $this->cor = $cor; // Atribui um valor padrão para a cor
        echo "Construindo carro: " . $this->marca . "<br>";
    }

    public function acelerar(){
        echo "O $this->marca $this->modelo está acelerando.<br>";
    }

}

// Criação de objeto
$meuCarro = new Carro("Ford", "Mustang", 2021, "Vermelho"); // Cria um novo objeto da classe Carro
$meuCarro->acelerar(); // Chama o método acelerar do objeto
$seuCarro = new Carro("Chevrolet", "Camaro", 2022, "Preto"); // Cria outro objeto da classe Carro
$seuCarro-> cor = "Amarelo"; // Adiciona uma nova propriedade dinamicamente
$seuCarro-> ano = 2020; // Adiciona outra propriedade dinamicamente
print_r($seuCarro); // Exibe as propriedades do objeto
echo "<br>";
$seuCarro->acelerar(); // Chama o método acelerar do objeto
?>