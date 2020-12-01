Anotações -

Visibilidade :

Private: propriedades e métodos podem ser manipulados
apenas pela classe em que foram instanciados. *1- A sobrescrição 
deles em outra classe via herança também não é possível, em vez 
de sobrescrever, irá criar um outro/a método/propriedade em tempo de execução 
com visibilidade Public com as propriedades
que você escolheu.

// Na private, se torna possível "manipular" suas propriedades em outro objeto (herança),
caso este objeto for do mesmo tipo da Classe Pai.

Protected: Manipulavel apenas pela classes instanciada e classes que herdam ela.

Public: Disponível para todo o projeto.

-- -- - --- --- - -- 
__GET e __SET

Sempre que usar __GET e __SET colocar uma condição dentro dele para que consiga ser executado quando chamado. 
Isso é usado como forma de segurança para não quebrar o encapsulamento.

Tomar cuidado com 1*- A sobrescrição deles em outra classe via herança também não é possível, em vez 
de sobrescrever, irá criar um outro/a método/propriedade em tempo de execução 
com visibilidade Public com as propriedades
que você escolheu.

- -- --- -- -- - -- --- --

Traits - 
    É o que chamam de herança horizontal, podemos instancia-las e escrevermos um código par aela, e usar em qualquer
     parte do código. Basta apenas chama-la com "use" no arquivo em questão. 