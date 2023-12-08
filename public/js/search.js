/*==================== SEARCH ====================*/ 
function pesquisar() {
    let termoPesquisa = document.querySelector('.txtBusca').value.trim().toLowerCase();
  
    if (termoPesquisa === '') {
      alert('O campo está vazio.');
      return;
    }
  
    let servicos = [
      "serviços domésticos", "reformas", "reparos", "mecânica", "eventos",
      "tecnologia", "aulas", "saúde", "beleza"
    ];
  
    if (servicos.includes(termoPesquisa)) {
      alert('A D+Serviços oferece o serviço "' + termoPesquisa + '".');
    } else {
      alert('A D+Serviços não oferece o serviço "' + termoPesquisa + '".');
    }
}
