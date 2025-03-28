export class Pessoa{
    #nome;
    idade;

    constructor(nome, idade){
        this.#nome = nome;
        this.idade = idade;
    }

    get nome(){
        return this.#nome;
    }

    set nome(nome){
        if(this.idade >= 18){
            this.#nome = nome;
            console.log("Nome: " + this.#nome + " Idade: " + this.idade  + " Situação: Maior de idade, pode trocar o nome!")
        }else{
            console.log("Nome: " + this.#nome + " Idade: " + this.idade + " Situação: Menor de idade, não pode trocar o nome." )
        }
    }

    fala_pessoa(){
        console.log("Método: "+ this.#nome + " falando...");
    }
}