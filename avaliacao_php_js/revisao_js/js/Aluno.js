import {Pessoa} from "./Pessoa.js"

export class Aluno extends Pessoa{

    fala_pessoa(){
        console.log(this.nome + " perguntando..." )
    }
}

