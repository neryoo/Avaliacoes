import {Professor} from "./Professor.js"
import {Aluno} from "./Aluno.js"
import{Pessoa} from "./Pessoa.js"

let p1 = new Pessoa(" ", 25 );
//p1.idade = 23;
p1.nome = "Sabrina";
p1.fala_pessoa();


let prof1 = new Professor();
prof1.idade = 35;
prof1.nome = "Wagner";
prof1.fala_pessoa();

let aluno1 = new Aluno();
aluno1.idade = 37;
aluno1.nome = "Paulo";
aluno1.fala_pessoa();


