# Projeto RU - Sistema de Cardápio do Restaurante Universitário

Este projeto foi desenvolvido como parte da disciplina de Engenharia de Software do curso de Ciência da Computação do 1° Semestre de 2026 com o Professor Edeilson Milhomem, utilizando a arquitetura **MVC (Model-View-Controller)** e persistência de dados em arquivos **JSON**. O fluxo de trabalho seguiu rigorosamente o **GitFlow**, garantindo a integridade do código e a colaboração eficiente da equipe.

---

O PJ-RU é um sistema de gerenciamento de cardápios para o Restaurante Universitário, desenvolvido em PHP. O objetivo principal é oferecer uma interface organizada para a consulta de refeições.

##  Equipe e Atribuições

| Integrante | Função no Projeto |
| :--- | :--- |
| **Vinicius Eduardo de Sousa Silveira** | Arquiteto de Software: Criação do modelo MVC e Setup Inicial |
| **Samara Coelho da Silva** | Desenvolvedora: Implementação da função de Exibir Janta |
| **Klaus Henrique Otaviano de Souza** | Desenvolvedor: Implementação da função de Exibir Almoço |
| **Arthur Pereira Bispo** | Desenvolvedor: Implementação da Home e Navegação Geral |
| **Gustavo Leite Bringel** | Desenvolvedor: Implementação do Painel de Administração (ADM) |

---

##  Tecnologias Utilizadas

* **Linguagem:** PHP 8.x
* **Arquitetura:** MVC (Separação de lógica, dados e interface)
* **Banco de Dados:** Persistência via arquivos JSON
* **Versionamento:** Git (Branching Model: GitFlow)

---

##  Como Rodar o Projeto Localmente

Para testar o sistema em sua máquina local, siga os passos abaixo:

1.  Certifique-se de ter o **PHP** instalado.
2.  Clone o repositório:
    ```bash
    git clone [https://github.com/seu-usuario/PJ-RU.git](https://github.com/seu-usuario/PJ-RU.git)
    ```
3.  Navegue até a pasta do projeto e inicie o servidor embutido do PHP apontando para a pasta pública:
    ```bash
    php -S localhost:8000 -t public
    ```
4.  Abra o navegador e acesse: `http://localhost:8000`

---

##  Fluxo de Desenvolvimento (GitFlow)

O projeto seguiu o seguinte padrão de branches:
* `main`: Versão estável e finalizada (Release).
* `develop-v2`: Branch de integração onde todas as features foram unidas.
* `feature/`: Branches individuais utilizadas por cada membro para desenvolver suas funções específicas antes do Pull Request.

Link da Apresentação

https://drive.google.com/file/d/1f_b4SL_xncGpQNbWqNRm30Fye9_vNHwK/view?usp=sharing
