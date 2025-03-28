import {Pessoa} from "./Pessoa.js"

export class Professor extends Pessoa{

    fala_pessoa(){
        console.log(this.nome + " agora, abre o coração para o que eu vou falar..." )
    }
}

