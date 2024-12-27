# FileOrchestrator


# FileOrchestrator

File Orchestrator is a simple yet powerful PHP library for string manipulation.  
It helps developers work with text more efficiently by offering tools to:  

- Extract specific parts of a string by position and length.  
- Format strings to a fixed size with customizable padding.  
- Simplify text handling for use cases like column-based or fixed-width files.  

With Text Orchestrator, you can easily transform and structure your text data, making it more readable and manageable.  

-------------


File Orchestrator é uma biblioteca PHP simples, mas poderosa, para manipulação de strings.  
Ela ajuda os desenvolvedores a trabalhar com texto de forma mais eficiente, oferecendo ferramentas para:  

- Extrair partes específicas de uma string por posição e comprimento.  
- Formatar strings para um tamanho fixo com preenchimento personalizável.  
- Simplificar o manuseio de texto para casos de uso como arquivos baseados em colunas ou de largura fixa.  

Com o FileOrchestrator, você pode facilmente transformar e estruturar seus dados de texto, tornando-os mais legíveis e gerenciáveis.

## Usage

Here is a basic example of how to use FileOrchestrator:

```php
require 'vendor/autoload.php';

use FileOrchestrator\Text;

$string = "12345";
$length = 10;
$padString = '0';
$padType = STR_PAD_LEFT;

echo "Testando método format:\n";
echo Text::format($string, $length, $padString, $padType) . "\n"; // output : "0000012345"

