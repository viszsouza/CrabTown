// Array de perguntas para exemplo (você pode modificar conforme necessário)
const questions = [
    "Pergunta 1: Qual é a capital da França?",
    "Pergunta 2: Qual é o maior oceano do mundo?",
    "Pergunta 3: Quem escreveu 'Dom Quixote'?",
    "Pergunta 4: Em que ano o homem pisou na Lua?",
    "Pergunta 5: Qual é o país mais populoso do mundo?",
    "Pergunta 6: Qual o maior planeta do sistema solar?",
    "Pergunta 7: Em qual continente fica o Brasil?",
    "Pergunta 8: Qual é a montanha mais alta do mundo?",
    "Pergunta 9: Qual é o animal terrestre mais rápido?",
    "Pergunta 10: Quem pintou a Mona Lisa?"
  ];
  
  let currentQuestion = 0;
  
  const questionElement = document.getElementById('question');
  const progressBar = document.getElementById('progress-bar');
  const questionNumberElement = document.getElementById('question-number');
  const confirmButton = document.getElementById('confirm-btn');
  
  // Função para carregar a próxima pergunta
  function loadQuestion() {
    // Atualiza o texto da pergunta
    questionElement.textContent = questions[currentQuestion];
    
    // Atualiza o número da pergunta
    questionNumberElement.textContent = `${currentQuestion + 1}/10`;
    
    // Atualiza a barra de progresso
    updateProgressBar();
  }
  
  // Função para atualizar a barra de progresso
  function updateProgressBar() {
    // Calcula o progresso com base na questão atual
    const progress = (currentQuestion + 1) / questions.length * 100;
    
    // Aplica a largura na barra de progresso
    progressBar.style.width = `${progress}%`;
  }
  
  // Ação ao clicar no botão Confirmar
  confirmButton.addEventListener('click', () => {
    // Verifica se há mais perguntas
    if (currentQuestion < questions.length - 1) {
      currentQuestion++;
      loadQuestion();
    } else {
      alert("Quiz finalizado!");
    }
  });
  
  // Inicializa a primeira pergunta
  loadQuestion();
  