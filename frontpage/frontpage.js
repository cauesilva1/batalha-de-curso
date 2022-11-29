let numQuestao = document.querySelector("#numQuestao");
let pergunta = document.querySelector("#pergunta");
let pontos = 0;

// alternativa
let a = document.querySelector("#a");
let b = document.querySelector("#b");
let c = document.querySelector("#c");
let d = document.querySelector("#d");

let articleQUestoes = document.querySelector(".questoes");

let alternativas = document.querySelector("#alternativas");

function sleep(milliseconds) {
  return new Promise((resolve) => setTimeout(resolve, milliseconds));
}
const questoes = [];

questoes.push({
  numQuestao: 0,
  pergunta: "pergunta",
  questoes: {
    1: "alternativa A",
    2: "alternativa B",
    3: "alternativa C",
    4: "alternativa D",
  },
  correta: 1,
});

questoes.push({
  numQuestao: 1,
  pergunta: "Qual a ciência que estuda a atmosfera da Terra e a climatologia??",
  questoes: {
    1: "Astronomia",
    2: "Horologia",
    3: "Dispersão atmosférica",
    4: "Meteorologia",
  },
  correta: 4,
});

questoes.push({
  numQuestao: 2,
  pergunta: "Quantos braços tem um polvo??",
  questoes: {
    1: "seis",
    2: "Oito",
    3: "Dez",
    4: "sete",
  },
  correta: 2,
});

questoes.push({
  numQuestao: 3,
  pergunta: "Quem nesses pares, são mamíferos??",
  questoes: {
    1: "Baleia azul e golfinhos",
    2: "Morcegos e galinhas",
    3: "Girafas e tartarugas",
    4: "Porcos e pinguins",
  },
  correta: 1,
});

questoes.push({
  numQuestao: 4,
  pergunta: "Qual dessas aves não voa??",
  questoes: {
    1: "Cegonha",
    2: "Galinha",
    3: "Pato",
    4: "Pinguim",
  },
  correta: 4,
});

questoes.push({
  numQuestao: 5,
  pergunta:
    "Qual é respectivamente o animal terrestre mais lento e o mais veloz??",
  questoes: {
    1: "Bicho-preguiça e guepardo",
    2: "Caracol e tubarão",
    3: "Coala e cavalo",
    4: "Bicho-preguiça e libélula",
  },
  correta: 1,
});

questoes.push({
  numQuestao: 6,
  pergunta: "O etanol é produzido através de qual fonte de energia??",
  questoes: {
    1: "Solar",
    2: "Eólica",
    3: "Biomassa",
    4: "Hidrelétrica",
  },
  correta: 3,
});

questoes.push({
  numQuestao: 7,
  pergunta:
    "Quantos dias, aproximadamente, a Lua demora para dar uma volta à Terra??",
  questoes: {
    1: "365 dias",
    2: "366 dias",
    3: "1 dia",
    4: "28 dias",
  },
  correta: 4,
});

questoes.push({
  numQuestao: 8,
  pergunta: "Qual a unidade que mede a intensidade do som??",
  questoes: {
    1: "Decibel",
    2: "Horologia",
    3: "Ruído",
    4: "Hertz",
  },
  correta: 1,
});

questoes.push({
  numQuestao: 9,
  pergunta:
    "Que personagem da mitologia grega era metade homem metade cavalo??",
  questoes: {
    1: "Centauro",
    2: "Sátiro",
    3: "Górgona",
    4: "Gigante",
  },
  correta: 1,
});

questoes.push({
  numQuestao: 10,
  pergunta:
    "Qual o significado das setas do símbolo internacional da reciclagem??",
  questoes: {
    1: "Fabricação, utilização e reutilização",
    2: "Papel, vidro e metal",
    3: "Coleta, separação e consumo",
    4: "Lixo, reaproveitamento e fabricação",
  },
  correta: 1,
});

// montagem das proximas questões
let userQuest = 1;

$(document).ready(() => {
  document.getElementById("qnum").innerHTML = userQuest;
  $("#modal").hide();
});

$(async function () {
  $("#respostas").on("submit", (e) => {
    e.preventDefault();
    const btns = document.querySelectorAll("input[name='OPCAO']");
    const quest = questoes.filter((dta) => {
      if (dta.numQuestao == document.getElementById("qnum").innerHTML)
        return true;
    });
    btns.forEach((button) => {
      if (button.checked) {
        if (quest[0].correta == button.value) {
          pontos += 10;
          document.getElementById("pontos").innerHTML = pontos;
         let test = document.querySelector("#score").value = pontos;
            // console.log(test);
        }
        userQuest++;

        if (userQuest >= questoes.length) {
          userQuest = 1;
          $("#modal").show();
          pontos = 0

        }

        const newQuest = questoes.filter((dta1) => {
          if (dta1.numQuestao == userQuest) return true;
        });

        document.getElementById("qst").innerHTML = newQuest[0].pergunta;
        document.getElementById("qnum").innerHTML = newQuest[0].numQuestao;
        document.getElementById("resposta1").innerHTML =
          newQuest[0].questoes[1];
        document.getElementById("resposta2").innerHTML =
          newQuest[0].questoes[2];
        document.getElementById("resposta3").innerHTML =
          newQuest[0].questoes[3];
        document.getElementById("resposta4").innerHTML =
          newQuest[0].questoes[4];
      }
    });
  });
});

function bloquearAlternativas() {
  a.classList.add("bloqeado");
  b.classList.add("bloqeado");
  c.classList.add("bloqeado");
  d.classList.add("bloqeado");
}

function desbloquearAlternativas() {
  a.classList.remove("bloqeado");
  b.classList.remove("bloqeado");
  c.classList.remove("bloqeado");
  d.classList.remove("bloqeado");
}

placar = pontos;
instrucoes.textContent = "pontos" + placar;

bloquearAlternativas();

setTimeout(function () {
  proxima = numeroDaQuestao + 1;

  if (proxima > totalDeQuestoes) {
    console.log("fim do jogo");
    fimDoJogo();
  } else {
    proximaQuestao(proxima);
  }
}, 250);
desbloquearAlternativas();
