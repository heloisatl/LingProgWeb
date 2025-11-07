const selCurso = document.querySelector("#selCurso");

function carregarDiscAssincrona() {
selDisciplina.innerHTML = "";
  var selecione = { id: 0, codigo: "--", nome: "Selecione- --" };
  adicionarOptionDisciplina(selecione);

  var url =
    "/sistema_academico/api/disciplinas_por_curso.php?idCurso=" +
    selCurso.value;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", url, true);

  xhttp.onload = function () {
    var json = xhttp.responseText;
    var disciplinas = JSON.parse(json);

    disciplinas.forEach((d) => {
      // console.log(d.id + " - " + d.nome);

      adicionarOptionDisciplina(d);
    });
  };

  xhttp.send();
  // console.log(json);
}

function adicionarOptionDisciplina(disciplina) {
  const selCurso = document.querySelector("#selDisciplina");

  option = document.createElement("option");
  option.value = disciplina.id;
  option.innerHTML = disciplina.codigo + " - " + disciplina.nome;

  selDisciplina.appendChild(option);
}

function carregarDiscSincrona() {
  selDisciplina.innerHTML = "";
  var selecione = { id: 0, codigo: "--", nome: "Selecione- --" };
  adicionarOptionDisciplina(selecione);

  var url =
    "/sistema_academico/api/disciplinas_por_curso.php?idCurso=" +
    selCurso.value;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", url, false);
  xhttp.send();
  var json = xhttp.responseText;
  // console.log(json);

  var disciplinas = JSON.parse(json);

  disciplinas.forEach((d) => {
    // console.log(d.id + " - " + d.nome);

    adicionarOptionDisciplina(d);
  });
}

function adicionarOptionDisciplina(disciplina) {
  const selCurso = document.querySelector("#selDisciplina");

  option = document.createElement("option");
  option.value = disciplina.id;
  option.innerHTML = disciplina.codigo + " - " + disciplina.nome;

  selDisciplina.appendChild(option);
}
