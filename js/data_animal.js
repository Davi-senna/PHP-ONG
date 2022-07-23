const url = `https://viacep.com.br/ws/${cep}/json/`;
const dados = await fetch(url);

const endereco = await dados.json();