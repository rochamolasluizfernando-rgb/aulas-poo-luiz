<?php
class NotificadorEmail implements Notificador
{
    /* Implementação do método enviar de acordo com os padrões 
    definidos na Interface: mesmo nome, mesma quantidade de parÂmetros, 
    mesmo tipo de dados dos parâmetros, mesmo tipo de retorno esperado.*/

    // Contator de envios 
    private static int $quantidadeEnviada = 0;
    
    public function enviar(string $mensagem): string
    {
        /* Corpo do método: detalhes da implementação PODEM ser 
        do jeito que quisermos */
        /* Sempre que ocorrer o acionamento do método enviar, 
        atualizaremos a propriedade estática da classe */
        self::$quantidadeEnviada++;
        return "E-mail: $mensagem";       
    }

    /* Usaremos um getter estático para ter 
    acesso ao total de envios feitos */
    public static function getQuantidadeEnviada(): int
    {
        return self::$quantidadeEnviada;
    }
}