/*
GETTERS E SETTERS

Getters e Setters são métodos utilizados para acessar e modificar
atributos privados de uma classe, aplicando o conceito de encapsulamento.

- Getter: retorna o valor de um atributo.
- Setter: altera o valor de um atributo.

Exemplo:
*/

class Pedido {
    private string $cliente;

    // Getter
    public function getCliente(): string {
        return $this->cliente;
    }

    // Setter
    public function setCliente(string $cliente): void {
        $this->cliente = $cliente;
    }
}

// Utilização
$pedido = new Pedido();

$pedido->setCliente("Luiz"); // altera o valor
echo $pedido->getCliente();  // exibe o valor

/*
Vantagens:
- Protegem os atributos da classe.
- Permitem validações dos dados.
- Mantêm o encapsulamento.
- Facilitam a manutenção do código.
*/