/**
 * Escape Room Game Logic
 * APS Senza Confini - Erasmus+ Educational Game
 */

class EscapeRoomGame {
  constructor() {
    this.currentQuestionIndex = 0;
    this.currentMiniGameIndex = 0;
    this.completedMiniGames = 0;
    this.gamePhase = 'minigames'; // 'minigames' or 'questions'
    this.score = 0;
    this.correctAnswers = 0;
    this.startTime = null;
    this.questionStartTime = null;
    this.gameTimer = null;
    this.questionTimer = null;
    this.timePerQuestion = 30; // seconds
    this.hintsUsed = 0;
    this.isGameActive = false;
    this.questions = [];
    this.achievements = [];
    this.miniGameOrder = ['memoryGame', 'quickQuizGame', 'findOddGame'];
    
    // Audio elements (with error handling)
    this.correctSound = document.getElementById('correctSound');
    this.wrongSound = document.getElementById('wrongSound');
    this.backgroundMusic = document.getElementById('backgroundMusic');
    
    // Handle audio loading errors silently
    if (this.correctSound) {
      this.correctSound.addEventListener('error', () => {
        this.correctSound = null; // Disable if can't load
      }, { once: true });
    }
    if (this.wrongSound) {
      this.wrongSound.addEventListener('error', () => {
        this.wrongSound = null; // Disable if can't load
      }, { once: true });
    }
    if (this.backgroundMusic) {
      this.backgroundMusic.addEventListener('error', () => {
        this.backgroundMusic = null; // Disable if can't load
      }, { once: true });
    }
    
    // Initialize questions based on difficulty
    this.initializeQuestions();
    
    // Initialize UI
    this.initializeUI();
    
    // Mini games state
    this.miniGamesState = {};
  }

  initializeQuestions() {
    // Easy Questions (Integrazione e Diversità Culturale - Livello Base)
    this.easyQuestions = [
      {
        id: 1,
        text: "La prima impressione: Ti mostrano tre informazioni su una persona: Nome: Amir, Nato in Italia, Parla italiano e arabo. Quale delle seguenti affermazioni è uno stereotipo?",
        options: [
          "Amir parla più di una lingua",
          "Amir probabilmente non è davvero italiano",
          "Amir ha due culture",
          "Amir è nato in Europa"
        ],
        correctAnswer: 1,
        hint: "Uno stereotipo è un'assunzione basata su pregiudizi, non su fatti.",
        explanation: "Pensare che qualcuno 'non sia davvero italiano' solo per il nome o le lingue parlate è un pregiudizio che ignora la realtà della cittadinanza.",
        points: 100
      },
      {
        id: 2,
        text: "Il potere delle parole: Un giornale titola 'Emergenza migranti: invasione nelle città europee'. Quale tecnica comunicativa viene usata per influenzare la percezione delle persone?",
        options: [
          "Linguaggio neutrale", 
          "Linguaggio emotivo",
          "Linguaggio scientifico",
          "Linguaggio diplomatico"
        ],
        correctAnswer: 1,
        hint: "Parole come 'invasione' creano emozioni forti e paura.",
        explanation: "Il linguaggio emotivo usa termini carichi di significato per influenzare le emozioni del lettore piuttosto che informare obiettivamente.",
        points: 100
      },
      {
        id: 3,
        text: "Enigma dei dati: In una città europea il 12% della popolazione è composta da persone con background migratorio. Nei social locali però il 60% dei post sulla sicurezza parla di migranti. Cosa suggerisce questa differenza?",
        options: [
          "I migranti sono la principale causa di criminalità",
          "La percezione pubblica può essere influenzata dalla narrazione mediatica",
          "I dati statistici non sono affidabili",
          "I social media sono sempre accurati"
        ],
        correctAnswer: 1,
        hint: "Confronta la percentuale reale (12%) con la percentuale di discussioni online (60%).",
        explanation: "La sproporzione tra dati reali e discussione pubblica dimostra come i media possano distorcere la percezione della realtà.",
        points: 150
      },
      {
        id: 4,
        text: "La barriera invisibile: Due studenti hanno lo stesso curriculum. Uno si chiama Marco, l'altro Karim. Solo Marco viene convocato per un colloquio. Quale fenomeno sociale potrebbe spiegare questa situazione?",
        options: [
          "Caso",
          "Pregiudizio implicito",
          "Differenza di competenze",
          "Errore amministrativo"
        ],
        correctAnswer: 1,
        hint: "I curriculum sono identici, quindi non è una questione di competenze.",
        explanation: "Il pregiudizio implicito porta a discriminazioni inconsapevoli basate su nomi, origini o altre caratteristiche personali.",
        points: 100
      },
      {
        id: 5,
        text: "Il test dei social: Uno studio mostra che i contenuti che provocano paura o rabbia vengono condivisi più velocemente dei contenuti neutrali. Perché questo può rendere difficile combattere gli stereotipi online?",
        options: [
          "Perché le emozioni forti fanno diffondere più velocemente messaggi distorti",
          "Perché le persone leggono solo notizie positive",
          "Perché i social mostrano sempre informazioni corrette",
          "Perché gli algoritmi favoriscono la verità"
        ],
        correctAnswer: 0,
        hint: "Pensa a come si diffondono le emozioni rispetto ai fatti.",
        explanation: "I contenuti emotivamente carichi si diffondono più rapidamente, spesso a scapito dell'accuratezza e contribuendo alla diffusione di stereotipi.",
        points: 100
      }
    ];

    // Medium Questions (Livello Intermedio)
    this.mediumQuestions = [
      {
        id: 6,
        text: "La frase ambigua: 'Io non sono razzista, però...' Perché questa frase segnala spesso un pregiudizio?",
        options: [
          "Perché introduce spesso un commento negativo su un gruppo di persone",
          "Perché è una frase usata per chiedere informazioni su altre culture",
          "Perché dimostra rispetto verso tutte le persone",
          "Perché serve a spiegare meglio una situazione"
        ],
        correctAnswer: 0,
        hint: "La parola 'però' spesso introduce una contraddizione.",
        explanation: "Questa formulazione è tipica di chi cerca di giustificare commenti discriminatori negando di esserlo, ma il 'però' rivela il pregiudizio sottostante.",
        points: 200
      },
      {
        id: 7,
        text: "La stanza delle lingue: Quattro studenti partecipano a un progetto internazionale. Sara parla italiano e spagnolo, Daniel parla inglese e arabo, Lina parla francese e inglese, Karim parla arabo e italiano. Quali due studenti possono comunicare direttamente?",
        options: [
          "Sara e Karim (italiano)",
          "Daniel e Lina (inglese)",
          "Sara e Daniel (nessuna lingua comune)",
          "Tutte le coppie possono comunicare"
        ],
        correctAnswer: 1,
        hint: "Cerca la lingua che hanno in comune.",
        explanation: "Daniel e Lina condividono l'inglese, mentre Sara e Karim condividono l'italiano. Entrambe le coppie possono comunicare.",
        points: 200
      },
      {
        id: 8,
        text: "Identità: Una persona dice: 'Nel mio paese mi chiamano europeo. Qui mi chiamano straniero.' Cosa sta descrivendo questa frase?",
        options: [
          "Confusione culturale",
          "Identità tra due culture",
          "Mancanza di identità",
          "Problemi di comunicazione"
        ],
        correctAnswer: 1,
        hint: "Si tratta di come l'identità cambia a seconda del contesto.",
        explanation: "Questa persona vive la complessità di avere un'identità che viene percepita diversamente a seconda del luogo, tipico di chi ha background multiculturale.",
        points: 200
      },
      {
        id: 9,
        text: "La stanza vuota: Durante un incontro scolastico sull'integrazione vengono invitati insegnanti, politici locali e giornalisti, ma nessuna persona con background migratorio. Qual è il problema principale?",
        options: [
          "L'evento durerà troppo poco",
          "Si discute di un gruppo senza includere la sua prospettiva diretta",
          "Gli insegnanti non dovrebbero partecipare",
          "Ci sono troppe persone coinvolte"
        ],
        correctAnswer: 1,
        hint: "Chi dovrebbe essere presente quando si parla di integrazione?",
        explanation: "Quando si discute di temi che riguardano specifici gruppi di persone, è fondamentale includere le loro voci dirette per avere una visione completa e autentica.",
        points: 200
      },
      {
        id: 10,
        text: "La vera integrazione: Quale definizione descrive meglio l'integrazione?",
        options: [
          "Abbandonare la propria cultura per adattarsi",
          "Vivere separati senza conflitti",
          "Condividere la società rispettando le differenze",
          "Mantenere solo la cultura di origine"
        ],
        correctAnswer: 2,
        hint: "L'integrazione non significa perdere la propria identità o rimanere separati.",
        explanation: "L'integrazione autentica implica la partecipazione comune alla vita sociale mantenendo e rispettando le diverse identità culturali.",
        points: 200
      }
    ];
  }

  initializeUI() {
    // Set initial total questions display dinamically
    const totalQuestions = 10; // 5 easy + 5 medium
    document.getElementById('totalQuestionsDisplay').textContent = totalQuestions.toString();
    document.getElementById('totalQuestions').textContent = totalQuestions.toString();
  }

  startGame() {
    // Set all questions (integrazione e diversità culturale)
    this.setQuestionsByDifficulty();
    
    // Reset game state
    this.currentQuestionIndex = 0;
    this.currentMiniGameIndex = 0;
    this.completedMiniGames = 0;
    this.gamePhase = 'questions'; // Start with questions
    this.score = 0;
    this.correctAnswers = 0;
    this.hintsUsed = 0;
    this.startTime = Date.now();
    this.isGameActive = true;
    this.timePerQuestion = 30; // Fixed time per question

    // Hide welcome screen and start with first question
    this.hideScreen('welcomeScreen');
    this.showScreen('questionScreen');
    this.loadActualQuestion();
    
    // Start background music (optional)
    this.playBackgroundMusic();
    
    // Start game timer display
    this.updateGameStats();
  }

  initializeMiniGame(gameType) {
    console.log('Initializing mini game:', gameType);
    
    // Hide all mini games first
    document.querySelectorAll('.mini-game').forEach(game => {
      game.style.display = 'none';
    });

    // Show the specific mini game
    const gameElement = document.getElementById(gameType);
    if (gameElement) {
      console.log('Found game element:', gameType);
      gameElement.style.display = 'block';
      gameElement.classList.add('animate__animated', 'animate__fadeInUp');
      
      // Initialize the specific game
      switch (gameType) {
        case 'memoryGame':
          console.log('Initializing Enhanced Memory Game');
          this.initEnhancedMemoryGame();
          break;
        case 'quickQuizGame':
          console.log('Initializing Quick Quiz Game');
          this.initQuickQuizGame();
          break;
        case 'findOddGame':
          console.log('Initializing Find Odd Game');
          this.initFindOddGame();
          break;
        default:
          console.error('Unknown mini game type:', gameType);
          this.showFallbackMiniGame();
          break;
      }
    } else {
      console.error('Game element not found for gameType:', gameType);
      this.showFallbackMiniGame();
    }
  }

  setQuestionsByDifficulty() {
    // Combina tutte le 10 domande fornite sull'integrazione e diversità culturale
    this.questions = [...this.easyQuestions, ...this.mediumQuestions];
    
    // Shuffle questions
    this.shuffleArray(this.questions);
    // Utilizziamo esattamente le 10 domande fornite
  }

  shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
    }
  }

  startMiniGame() {
    this.hideScreen('questionScreen');
    this.showScreen('miniGameScreen');
    
    // Choose which mini-game to show based on current question
    const miniGameIndex = this.currentQuestionIndex % 3; // Cycle through 3 mini-games
    const gameType = this.miniGameOrder[miniGameIndex];
    
    console.log(`Question ${this.currentQuestionIndex + 1}: Mini game index ${miniGameIndex}, Game type: ${gameType}`);
    
    // Update mini-game header
    const miniGameTitle = document.querySelector('#miniGameScreen .card-header h4');
    miniGameTitle.innerHTML = `🎮 Mini Gioco ${this.currentQuestionIndex + 1}`;
    
    const miniGameSubtitle = document.querySelector('#miniGameScreen .card-header p');
    miniGameSubtitle.innerHTML = 'Completa il mini-gioco per guadagnare punti bonus!';

    this.initializeMiniGame(gameType);
  }

  loadActualQuestion() {
    const question = this.questions[this.currentQuestionIndex];
    this.questionStartTime = Date.now();

    // Update question number and progress
    document.getElementById('questionNumber').textContent = this.currentQuestionIndex + 1;
    document.getElementById('currentLevel').textContent = this.currentQuestionIndex + 1;
    
    const progress = ((this.currentQuestionIndex + 1) / this.questions.length) * 100;
    document.getElementById('gameProgress').style.width = `${progress}%`;

    // Set question text
    document.getElementById('questionText').textContent = question.text;

    // Hide hint section
    document.getElementById('hintSection').style.display = 'none';
    document.getElementById('hintBtn').style.display = 'inline-block';

    // Generate answer options
    this.generateAnswerOptions(question);

    // Start question timer
    this.startQuestionTimer();
    
    // Add animation
    document.getElementById('questionScreen').classList.add('slide-in-right');
    setTimeout(() => {
      document.getElementById('questionScreen').classList.remove('slide-in-right');
    }, 500);
  }

  generateAnswerOptions(question) {
    const optionsContainer = document.getElementById('answerOptions');
    optionsContainer.innerHTML = '';

    const letters = ['A', 'B', 'C', 'D'];
    
    question.options.forEach((option, index) => {
      const optionDiv = document.createElement('div');
      optionDiv.className = 'answer-option';
      optionDiv.onclick = () => this.selectAnswer(index);
      
      optionDiv.innerHTML = `
        <div class="answer-text">
          <span class="answer-letter">${letters[index]}</span>
          <span>${option}</span>
        </div>
      `;
      
      optionsContainer.appendChild(optionDiv);
    });
  }

  startQuestionTimer() {
    let timeLeft = this.timePerQuestion;
    document.getElementById('questionTimer').textContent = timeLeft;
    
    // Remove warning class initially
    document.querySelector('.timer-display').classList.remove('timer-warning');

    this.questionTimer = setInterval(() => {
      timeLeft--;
      document.getElementById('questionTimer').textContent = timeLeft;
      
      // Add warning animation when time is running out
      if (timeLeft <= 10) {
        document.querySelector('.timer-display').classList.add('timer-warning');
      }
      
      if (timeLeft <= 0) {
        clearInterval(this.questionTimer);
        this.timeUp();
      }
    }, 1000);
  }

  selectAnswer(selectedIndex) {
    if (!this.isGameActive) return;

    clearInterval(this.questionTimer);
    
    const question = this.questions[this.currentQuestionIndex];
    const options = document.querySelectorAll('.answer-option');
    const isCorrect = selectedIndex === question.correctAnswer;

    // Disable all options
    options.forEach(option => option.classList.add('disabled'));

    // Show correct/incorrect feedback
    options[selectedIndex].classList.add(isCorrect ? 'correct' : 'wrong');
    if (!isCorrect) {
      options[question.correctAnswer].classList.add('correct');
    }

    // Play sound
    if (isCorrect) {
      this.playCorrectSound();
      this.correctAnswers++;
      
      // Calculate score based on time taken and difficulty
      const timeBonus = Math.max(0, this.timePerQuestion - Math.floor((Date.now() - this.questionStartTime) / 1000));
      const difficultyMultiplier = this.difficulty === 'easy' ? 1 : this.difficulty === 'medium' ? 1.5 : 2;
      const hintPenalty = document.getElementById('hintSection').style.display === 'block' ? 0.5 : 0;
      
      const points = Math.floor((question.points + (timeBonus * 5)) * difficultyMultiplier * (1 - hintPenalty));
      this.score += points;
      
      // Animate score increase
      document.getElementById('score').classList.add('score-animation');
      setTimeout(() => {
        document.getElementById('score').classList.remove('score-animation');
      }, 600);
      
    } else {
      this.playWrongSound();
    }

    // Update stats
    this.updateGameStats();

    // Show explanation with SweetAlert2
    this.showQuestionResult(isCorrect, question);
  }

  showQuestionResult(isCorrect, question) {
    const title = isCorrect ? '🎉 Risposta Corretta!' : '❌ Risposta Sbagliata';
    const icon = isCorrect ? 'success' : 'error';
    
    Swal.fire({
      title: title,
      text: question.explanation,
      icon: icon,
      confirmButtonText: 'Continua',
      confirmButtonColor: '#667eea',
      timer: 4000,
      timerProgressBar: true,
      allowOutsideClick: false,
      customClass: {
        popup: 'game-modal',
        confirmButton: 'btn btn-primary'
      },
      buttonsStyling: false
    }).then(() => {
      this.nextQuestion();
    });
  }

  timeUp() {
    this.playWrongSound();
    
    Swal.fire({
      title: '⏰ Tempo Scaduto!',
      text: 'Il tempo per rispondere è terminato.',
      icon: 'warning',
      confirmButtonText: 'Continua',
      confirmButtonColor: '#ffc107',
      timer: 3000,
      timerProgressBar: true,
      allowOutsideClick: false,
      customClass: {
        popup: 'game-modal',
        confirmButton: 'btn btn-warning'
      },
      buttonsStyling: false
    }).then(() => {
      this.nextQuestion();
    });
  }

  nextQuestion() {
    // After answering a question, go to mini-game
    this.hideScreen('questionScreen');
    this.showScreen('miniGameScreen');
    this.startMiniGame();
  }

  nextQuestionAfterMiniGame() {
    this.currentQuestionIndex++;
    
    if (this.currentQuestionIndex < this.questions.length) {
      // Fade out current screen
      this.hideScreen('miniGameScreen');
      setTimeout(() => {
        this.showScreen('questionScreen');
        this.loadActualQuestion();
      }, 300);
    } else {
      this.endGame();
    }
  }

  showHint() {
    const question = this.questions[this.currentQuestionIndex];
    document.getElementById('hintText').textContent = question.hint;
    document.getElementById('hintSection').style.display = 'block';
    document.getElementById('hintBtn').style.display = 'none';
    this.hintsUsed++;
  }

  skipQuestion() {
    clearInterval(this.questionTimer);
    
    Swal.fire({
      title: '⏭️ Saltare la domanda?',
      text: 'Sei sicuro di voler saltare questa domanda?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonText: 'Sì, salta',
      cancelButtonText: 'No, continua',
      confirmButtonColor: '#ffc107',
      cancelButtonColor: '#667eea',
      customClass: {
        popup: 'game-modal',
        confirmButton: 'btn btn-warning',
        cancelButton: 'btn btn-primary'
      },
      buttonsStyling: false
    }).then((result) => {
      if (result.isConfirmed) {
        this.nextQuestion();
      } else {
        this.startQuestionTimer();
      }
    });
  }

  endGame() {
    this.isGameActive = false;
    const endTime = Date.now();
    const totalTimeSeconds = Math.floor((endTime - this.startTime) / 1000);
    
    // Stop background music
    this.backgroundMusic.pause();
    
    // Hide question screen and mini-game screen, show complete screen
    this.hideScreen('questionScreen');
    this.hideScreen('miniGameScreen');
    this.showScreen('gameCompleteScreen');
    
    // Calculate performance metrics
    const accuracy = Math.round((this.correctAnswers / this.questions.length) * 100);
    const averageTimePerQuestion = Math.floor(totalTimeSeconds / this.questions.length);
    
    // Determine achievement level
    let achievement = '';
    let icon = '';
    let title = '';
    let message = '';
    
    if (accuracy >= 90) {
      achievement = 'Esperto Erasmus+! 🏆';
      icon = '<i class="ti tabler-trophy text-warning" style="font-size: 4rem;"></i>';
      title = 'Congratulazioni! 🎉';
      message = 'Sei un vero esperto dei programmi Erasmus+! Continua così!';
    } else if (accuracy >= 70) {
      achievement = 'Studente Erasmus! 🎓';
      icon = '<i class="ti tabler-school text-success" style="font-size: 4rem;"></i>';
      title = 'Ottimo lavoro! 👏';
      message = 'Conosci bene i programmi Erasmus+. Continua a imparare!';
    } else if (accuracy >= 50) {
      achievement = 'Principiante Europeo! 🌟';
      icon = '<i class="ti tabler-star text-info" style="font-size: 4rem;"></i>';
      title = 'Buon inizio! 💪';
      message = 'Hai ancora molto da imparare sui programmi europei. Non mollare!';
    } else {
      achievement = 'Esploratore Curioso! 🧭';
      icon = '<i class="ti tabler-compass text-primary" style="font-size: 4rem;"></i>';
      title = 'Continua a esplorare! 🚀';
      message = 'Ogni esperto è stato un principiante. Continua a studiare!';
    }
    
    // Update final screen
    document.getElementById('completeIcon').innerHTML = icon;
    document.getElementById('completeTitle').textContent = title;
    document.getElementById('completeMessage').textContent = `${message} ${achievement}`;
    
    // Update final stats
    document.getElementById('finalScore').textContent = this.score;
    document.getElementById('correctAnswers').textContent = this.correctAnswers;
    document.getElementById('totalTime').textContent = this.formatTime(totalTimeSeconds);
    
    // Store results for sharing
    this.gameResults = {
      score: this.score,
      correct: this.correctAnswers,
      total: this.questions.length,
      accuracy: accuracy,
      time: totalTimeSeconds,
      difficulty: this.difficulty,
      achievement: achievement
    };
  }

  restartGame() {
    // Reset all game state
    this.currentQuestionIndex = 0;
    this.currentMiniGameIndex = 0;
    this.completedMiniGames = 0;
    this.gamePhase = 'minigames';
    this.score = 0;
    this.correctAnswers = 0;
    this.hintsUsed = 0;
    this.isGameActive = false;
    
    // Stop any running timers
    if (this.gameTimer) clearInterval(this.gameTimer);
    if (this.questionTimer) clearInterval(this.questionTimer);
    
    // Cleanup Phaser game
    if (this.phaserGame) {
      this.phaserGame.destroy(true);
      this.phaserGame = null;
    }
    
    // Stop music
    this.backgroundMusic.pause();
    this.backgroundMusic.currentTime = 0;
    
    // Reset UI
    document.getElementById('score').textContent = '0';
    document.getElementById('currentLevel').textContent = '1';
    document.getElementById('timeLeft').textContent = '--';
    
    // Show welcome screen
    this.hideScreen('gameCompleteScreen');
    this.hideScreen('questionScreen');
    this.hideScreen('miniGameScreen');
    this.showScreen('welcomeScreen');
  }

  shareScore() {
    const results = this.gameResults;
    const text = `🎓 Ho completato l'Escape Room Erasmus+ di APS Senza Confini!\n\n` +
                 `📊 Risultati:\n` +
                 `✅ ${results.correct}/${results.total} risposte corrette (${results.accuracy}%)\n` +
                 `⭐ Punteggio: ${results.score}\n` +
                 `⏱️ Tempo: ${this.formatTime(results.time)}\n` +
                 `🏆 Livello: ${results.achievement}\n\n` +
                 `Prova anche tu: https://senzaconfiniaps.eu/modules/escape-room`;

    if (navigator.share) {
      navigator.share({
        title: 'Escape Room Erasmus+ - I miei risultati',
        text: text,
        url: 'https://senzaconfiniaps.eu/modules/escape-room'
      });
    } else {
      // Fallback: copy to clipboard
      navigator.clipboard.writeText(text).then(() => {
        Swal.fire({
          title: '📋 Copiato!',
          text: 'I tuoi risultati sono stati copiati negli appunti.',
          icon: 'success',
          timer: 2000,
          showConfirmButton: false,
          customClass: {
            popup: 'game-modal'
          },
          buttonsStyling: false
        });
      });
    }
  }

  formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const remainingSeconds = seconds % 60;
    return `${minutes}:${remainingSeconds.toString().padStart(2, '0')}`;
  }

  updateGameStats() {
    document.getElementById('score').textContent = this.score;
    
    if (this.startTime) {
      const elapsedSeconds = Math.floor((Date.now() - this.startTime) / 1000);
      document.getElementById('timeLeft').textContent = this.formatTime(elapsedSeconds);
    }
  }

  hideScreen(screenId) {
    document.getElementById(screenId).classList.add('d-none');
  }

  showScreen(screenId) {
    document.getElementById(screenId).classList.remove('d-none');
  }

  playCorrectSound() {
    if (this.correctSound) {
      this.correctSound.currentTime = 0;
      this.correctSound.play().catch(() => {});
    }
  }

  playWrongSound() {
    if (this.wrongSound) {
      this.wrongSound.currentTime = 0;
      this.wrongSound.play().catch(() => {});
    }
  }

  playBackgroundMusic() {
    if (this.backgroundMusic) {
      this.backgroundMusic.volume = 0.3;
      this.backgroundMusic.play().catch(() => {});
    }
  }
  
  // Fallback mini-game method
  showFallbackMiniGame() {
    console.log('Showing fallback mini-game (Memory Game)');
    // Default to memory game if something goes wrong
    const memoryGameElement = document.getElementById('memoryGame');
    if (memoryGameElement) {
      memoryGameElement.style.display = 'block';
      this.initEnhancedMemoryGame();
    } else {
      // If even memory game is missing, show an error message
      document.querySelector('#miniGameScreen .card-body').innerHTML = `
        <div class="text-center">
          <h5 class="text-danger">❌ Errore Mini Gioco</h5>
          <p>Si è verificato un errore nel caricamento del mini-gioco.</p>
          <button class="btn btn-primary" onclick="proceedToQuestion()">Continua alla Prossima Domanda</button>
        </div>
      `;
    }
  }
}

// Initialize game when page loads
let game;

document.addEventListener('DOMContentLoaded', function() {
  game = new EscapeRoomGame();
});

// Global functions for HTML onclick handlers
function startGame() {
  game.startGame();
}

function showHint() {
  game.showHint();
}

function skipQuestion() {
  game.skipQuestion();
}

function restartGame() {
  game.restartGame();
}

function shareScore() {
  game.shareScore();
}

function backToHome() {
  // Stop background music
  if (game.backgroundMusic) {
    game.backgroundMusic.pause();
    game.backgroundMusic.currentTime = 0;
  }
  
  // Reset game active state
  game.isGameActive = false;
  
  // Redirect to homepage
  window.location.href = '../index.html';
}

// Auto-update timer display
setInterval(() => {
  if (game && game.isGameActive) {
    game.updateGameStats();
  }
}, 1000);

// ===================
// MINI GAMES SYSTEM
// ===================

// Add mini-game methods to the EscapeRoomGame class

// Memory Game
EscapeRoomGame.prototype.initMemoryGame = function() {
  const flags = ['🇪🇺', '🇮🇹', '🇫🇷', '🇩🇪', '🇪🇸', '🇵🇱'];
  const gameFlags = [...flags.slice(0, 3), ...flags.slice(0, 3)].sort(() => Math.random() - 0.5);
  
  this.memoryState = {
    cards: gameFlags,
    flipped: [],
    matched: [],
    score: 0
  };
  
  document.getElementById('memoryScore').textContent = '0/3';
  
  const grid = document.getElementById('memoryGrid');
  grid.innerHTML = '';
  
  gameFlags.forEach((flag, index) => {
    const card = document.createElement('div');
    card.className = 'memory-card';
    card.dataset.index = index;
    card.dataset.flag = flag;
    card.textContent = '?';
    card.onclick = () => this.flipMemoryCard(index);
    grid.appendChild(card);
  });
};

EscapeRoomGame.prototype.flipMemoryCard = function(index) {
  if (this.memoryState.flipped.length >= 2 || this.memoryState.flipped.includes(index) || this.memoryState.matched.includes(index)) {
    return;
  }
  
  const card = document.querySelector(`[data-index="${index}"]`);
  card.textContent = this.memoryState.cards[index];
  card.classList.add('flipped');
  this.memoryState.flipped.push(index);
  
  if (this.memoryState.flipped.length === 2) {
    setTimeout(() => this.checkMemoryMatch(), 1000);
  }
};

EscapeRoomGame.prototype.checkMemoryMatch = function() {
  const [first, second] = this.memoryState.flipped;
  const firstCard = document.querySelector(`[data-index="${first}"]`);
  const secondCard = document.querySelector(`[data-index="${second}"]`);
  
  if (this.memoryState.cards[first] === this.memoryState.cards[second]) {
    // Match!
    firstCard.classList.add('matched');
    secondCard.classList.add('matched');
    this.memoryState.matched.push(first, second);
    this.memoryState.score++;
    document.getElementById('memoryScore').textContent = `${this.memoryState.score}/3`;
    
    if (this.memoryState.score === 3) {
      setTimeout(() => this.completeMiniGame(), 500);
    }
  } else {
    // No match
    firstCard.textContent = '?';
    secondCard.textContent = '?';
    firstCard.classList.remove('flipped');
    secondCard.classList.remove('flipped');
  }
  
  this.memoryState.flipped = [];
};

// Snake Game (Phaser.js version)
EscapeRoomGame.prototype.initSnakeGame = function() {
  // Clean up any existing Phaser game
  if (this.phaserGame) {
    this.phaserGame.destroy(true);
  }
  
  document.getElementById('snakeScore').textContent = '0/5';
  
  // Create Phaser game configuration
  const config = {
    type: Phaser.AUTO,
    width: 400,
    height: 400,
    parent: 'phaserSnakeGame',
    backgroundColor: '#2c3e50',
    physics: {
      default: 'arcade',
      arcade: {
        gravity: { y: 0 }
      }
    },
    scene: {
      preload: () => this.phaserPreload(),
      create: () => this.phaserCreate(),
      update: () => this.phaserUpdate()
    }
  };
  
  this.phaserGame = new Phaser.Game(config);
  
  // Initialize snake state
  this.snakeState = {
    snake: [{x: 200, y: 200}],
    stars: [],
    direction: {x: 0, y: 0},
    score: 0,
    gameRunning: true,
    starSprites: [],
    snakeSprites: [],
    nextMove: 0
  };
};

EscapeRoomGame.prototype.phaserPreload = function() {
  // Create colored rectangles for snake segments and stars
  this.phaserGame.scene.scenes[0].add.graphics()
    .fillStyle(0x3498db)
    .fillRect(0, 0, 20, 20)
    .generateTexture('snakeHead', 20, 20);
    
  this.phaserGame.scene.scenes[0].add.graphics()
    .fillStyle(0x5dade2)
    .fillRect(0, 0, 20, 20)
    .generateTexture('snakeBody', 20, 20);
    
  this.phaserGame.scene.scenes[0].add.graphics()
    .fillStyle(0xf1c40f)
    .fillCircle(10, 10, 8)
    .generateTexture('star', 20, 20);
    
  // Create European flag colors background
  this.phaserGame.scene.scenes[0].add.graphics()
    .fillStyle(0x003399)
    .fillRect(0, 0, 400, 40)
    .fillStyle(0xffcc00)
    .fillRect(0, 360, 400, 40)
    .generateTexture('background', 400, 400);
};

EscapeRoomGame.prototype.phaserCreate = function() {
  const scene = this.phaserGame.scene.scenes[0];
  
  // Add background
  scene.add.image(200, 200, 'background').setAlpha(0.3);
  
  // Create snake head
  this.snakeState.snakeSprites = [];
  const head = scene.add.image(200, 200, 'snakeHead')
    .setOrigin(0.5)
    .setScale(1);
  this.snakeState.snakeSprites.push(head);
  
  // Create stars
  this.snakeState.starSprites = [];
  this.snakeState.stars = [];
  for (let i = 0; i < 5; i++) {
    this.addPhaserStar(scene);
  }
  
  // Add keyboard controls
  this.cursors = scene.input.keyboard.createCursorKeys();
  
  // Add particle effects
  this.starParticles = scene.add.particles(0, 0, 'star', {
    scale: { start: 0.3, end: 0 },
    speed: { min: 50, max: 100 },
    quantity: 5,
    lifespan: 300,
    emitting: false
  });
  
  // Add tween for snake head pulsing
  scene.tweens.add({
    targets: head,
    scaleX: 1.2,
    scaleY: 1.2,
    duration: 500,
    yoyo: true,
    repeat: -1,
    ease: 'Sine.easeInOut'
  });
};

EscapeRoomGame.prototype.addPhaserStar = function(scene) {
  let x, y;
  let attempts = 0;
  
  do {
    x = Phaser.Math.Between(1, 19) * 20;
    y = Phaser.Math.Between(1, 19) * 20;
    attempts++;
  } while (this.isPositionOccupied(x, y) && attempts < 50);
  
  const star = scene.add.image(x, y, 'star')
    .setOrigin(0.5)
    .setScale(1);
    
  // Add floating animation
  scene.tweens.add({
    targets: star,
    y: y - 5,
    duration: 1000,
    yoyo: true,
    repeat: -1,
    ease: 'Sine.easeInOut'
  });
  
  // Add rotation animation  
  scene.tweens.add({
    targets: star,
    rotation: Math.PI * 2,
    duration: 3000,
    repeat: -1,
    ease: 'Linear'
  });
  
  this.snakeState.starSprites.push(star);
  this.snakeState.stars.push({x: x, y: y});
};

EscapeRoomGame.prototype.isPositionOccupied = function(x, y) {
  return this.snakeState.snake.some(segment => 
    Math.abs(segment.x - x) < 20 && Math.abs(segment.y - y) < 20
  );
};

EscapeRoomGame.prototype.phaserUpdate = function() {
  if (!this.snakeState.gameRunning) return;
  
  const scene = this.phaserGame.scene.scenes[0];
  
  // Handle input
  if (this.cursors.left.isDown && this.snakeState.direction.x === 0) {
    this.snakeState.direction = {x: -20, y: 0};
  } else if (this.cursors.right.isDown && this.snakeState.direction.x === 0) {
    this.snakeState.direction = {x: 20, y: 0};
  } else if (this.cursors.up.isDown && this.snakeState.direction.y === 0) {
    this.snakeState.direction = {x: 0, y: -20};
  } else if (this.cursors.down.isDown && this.snakeState.direction.y === 0) {
    this.snakeState.direction = {x: 0, y: 20};
  }
  
  // Move snake every 200ms
  if (scene.time.now > this.snakeState.nextMove) {
    this.snakeState.nextMove = scene.time.now + 200;
    
    if (this.snakeState.direction.x !== 0 || this.snakeState.direction.y !== 0) {
      this.movePhaserSnake(scene);
    }
  }
};

EscapeRoomGame.prototype.movePhaserSnake = function(scene) {
  const head = {...this.snakeState.snake[0]};
  head.x += this.snakeState.direction.x;
  head.y += this.snakeState.direction.y;
  
  // Wrap around edges
  if (head.x < 0) head.x = 380;
  if (head.x >= 400) head.x = 20;
  if (head.y < 0) head.y = 380;
  if (head.y >= 400) head.y = 20;
  
  this.snakeState.snake.unshift(head);
  
  // Check star collision
  let starCollected = false;
  this.snakeState.stars.forEach((star, index) => {
    if (Math.abs(head.x - star.x) < 20 && Math.abs(head.y - star.y) < 20) {
      // Star collected!
      this.starParticles.setPosition(star.x, star.y);
      this.starParticles.explode();
      
      // Remove star sprite
      this.snakeState.starSprites[index].destroy();
      this.snakeState.starSprites.splice(index, 1);
      this.snakeState.stars.splice(index, 1);
      
      this.snakeState.score++;
      document.getElementById('snakeScore').textContent = `${this.snakeState.score}/5`;
      
      // Add new body segment
      const bodySegment = scene.add.image(this.snakeState.snake[this.snakeState.snake.length - 1].x, 
                                         this.snakeState.snake[this.snakeState.snake.length - 1].y, 'snakeBody');
      this.snakeState.snakeSprites.push(bodySegment);
      
      starCollected = true;
      
      if (this.snakeState.score >= 5) {
        this.snakeState.gameRunning = false;
        scene.tweens.add({
          targets: this.snakeState.snakeSprites,
          scaleX: 1.5,
          scaleY: 1.5,
          duration: 500,
          yoyo: true,
          onComplete: () => {
            setTimeout(() => this.completeMiniGame(), 500);
          }
        });
      }
    }
  });
  
  // Remove tail if no star was collected
  if (!starCollected) {
    this.snakeState.snake.pop();
  }
  
  // Update sprite positions
  this.snakeState.snakeSprites.forEach((sprite, index) => {
    if (index < this.snakeState.snake.length) {
      scene.tweens.add({
        targets: sprite,
        x: this.snakeState.snake[index].x,
        y: this.snakeState.snake[index].y,
        duration: 100,
        ease: 'Power2'
      });
    }
  });
};

// Pattern Match Game
EscapeRoomGame.prototype.initPatternGame = function() {
  this.patternState = {
    sequence: [],
    userSequence: [],
    level: 0,
    colors: ['blue', 'yellow', 'red', 'green'],
    showing: false
  };
  
  document.getElementById('patternLevel').textContent = '1/4';
  this.setupPatternButtons();
  this.nextPatternLevel();
};

EscapeRoomGame.prototype.setupPatternButtons = function() {
  const container = document.getElementById('patternButtons');
  container.innerHTML = '';
  
  this.patternState.colors.forEach(color => {
    const btn = document.createElement('button');
    btn.className = `pattern-btn ${color}`;
    btn.onclick = () => this.patternButtonClick(color);
    container.appendChild(btn);
  });
};

EscapeRoomGame.prototype.nextPatternLevel = function() {
  this.patternState.level++;
  this.patternState.userSequence = [];
  
  // Add one more color to sequence
  const randomColor = this.patternState.colors[Math.floor(Math.random() * 4)];
  this.patternState.sequence.push(randomColor);
  
  document.getElementById('patternLevel').textContent = `${this.patternState.level}/4`;
  
  setTimeout(() => this.showPatternSequence(), 500);
};

EscapeRoomGame.prototype.showPatternSequence = function() {
  this.patternState.showing = true;
  const display = document.getElementById('patternDisplay');
  display.innerHTML = '';
  
  this.patternState.sequence.forEach(color => {
    const circle = document.createElement('div');
    circle.className = `pattern-color`;
    circle.style.background = this.getPatternColor(color);
    display.appendChild(circle);
  });
  
  let index = 0;
  const showNext = () => {
    if (index < this.patternState.sequence.length) {
      display.children[index].classList.add('active');
      setTimeout(() => {
        display.children[index].classList.remove('active');
        index++;
        setTimeout(showNext, 400);
      }, 600);
    } else {
      this.patternState.showing = false;
    }
  };
  
  showNext();
};

EscapeRoomGame.prototype.getPatternColor = function(color) {
  const colors = {
    blue: '#007bff',
    yellow: '#ffc107',
    red: '#dc3545',
    green: '#28a745'
  };
  return colors[color];
};

EscapeRoomGame.prototype.patternButtonClick = function(color) {
  if (this.patternState.showing) return;
  
  this.patternState.userSequence.push(color);
  
  // Check if correct so far
  const currentIndex = this.patternState.userSequence.length - 1;
  if (this.patternState.userSequence[currentIndex] !== this.patternState.sequence[currentIndex]) {
    // Wrong! Restart level
    this.patternState.userSequence = [];
    setTimeout(() => this.showPatternSequence(), 1000);
    return;
  }
  
  // Check if level complete
  if (this.patternState.userSequence.length === this.patternState.sequence.length) {
    if (this.patternState.level >= 4) {
      // Game complete!
      setTimeout(() => this.completeMiniGame(), 500);
    } else {
      // Next level
      setTimeout(() => this.nextPatternLevel(), 1000);
    }
  }
};

// Reaction Game
EscapeRoomGame.prototype.initReactionGame = function() {
  this.reactionState = {
    attempts: 0,
    successes: 0,
    waiting: false
  };
  
  document.getElementById('reactionAttempts').textContent = '0/3';
  
  const circle = document.getElementById('reactionCircle');
  circle.className = 'reaction-circle';
  circle.textContent = 'Attendi...';
  circle.onclick = () => this.reactionClick();
  
  this.startReactionRound();
};

EscapeRoomGame.prototype.startReactionRound = function() {
  const circle = document.getElementById('reactionCircle');
  circle.className = 'reaction-circle waiting';
  circle.textContent = 'Attendi...';
  this.reactionState.waiting = true;
  
  // Random delay 1-4 seconds
  const delay = 1000 + Math.random() * 3000;
  
  this.reactionTimeout = setTimeout(() => {
    circle.className = 'reaction-circle go';
    circle.textContent = 'CLICCA ORA!';
    this.reactionState.waiting = false;
    
    // Auto-fail after 2 seconds
    this.reactionFailTimeout = setTimeout(() => {
      if (circle.classList.contains('go')) {
        this.reactionResult(false);
      }
    }, 2000);
  }, delay);
};

EscapeRoomGame.prototype.reactionClick = function() {
  const circle = document.getElementById('reactionCircle');
  
  if (this.reactionState.waiting) {
    // Too early!
    this.reactionResult(false);
  } else if (circle.classList.contains('go')) {
    // Good timing!
    clearTimeout(this.reactionFailTimeout);
    this.reactionResult(true);
  }
};

EscapeRoomGame.prototype.reactionResult = function(success) {
  const circle = document.getElementById('reactionCircle');
  this.reactionState.attempts++;
  
  if (success) {
    this.reactionState.successes++;
    circle.className = 'reaction-circle success';
    circle.textContent = 'Perfetto!';
  } else {
    circle.className = 'reaction-circle fail';
    circle.textContent = 'Troppo presto!';
  }
  
  document.getElementById('reactionAttempts').textContent = `${this.reactionState.attempts}/3`;
  
  clearTimeout(this.reactionTimeout);
  
  if (this.reactionState.attempts >= 3) {
    if (this.reactionState.successes >= 2) {
      setTimeout(() => this.completeMiniGame(), 1000);
    } else {
      // Restart
      this.reactionState.attempts = 0;
      this.reactionState.successes = 0;
      document.getElementById('reactionAttempts').textContent = '0/3';
      setTimeout(() => this.startReactionRound(), 2000);
    }
  } else {
    setTimeout(() => this.startReactionRound(), 1500);
  }
};

// Complete mini-game
EscapeRoomGame.prototype.completeMiniGame = function() {
  // Cleanup
  if (this.snakeKeyHandler) {
    document.removeEventListener('keydown', this.snakeKeyHandler);
    this.snakeKeyHandler = null;
  }
  
  // Cleanup Phaser game
  if (this.phaserGame) {
    this.phaserGame.destroy(true);
    this.phaserGame = null;
  }
  
  if (this.reactionTimeout) clearTimeout(this.reactionTimeout);
  if (this.reactionFailTimeout) clearTimeout(this.reactionFailTimeout);
  
  // Play success sound
  this.playCorrectSound();
  
  // Add bonus points
  this.score += 50;
  this.completedMiniGames++;
  this.updateGameStats();
  
  // Update button text - always go to next question
  const continueButtonText = document.getElementById('continueButtonText');
  if (this.currentQuestionIndex < this.questions.length - 1) {
    continueButtonText.textContent = 'Continua alla Prossima Domanda';
  } else {
    continueButtonText.textContent = 'Completa il Gioco';
  }
  
  // Hide current mini-game and show complete screen
  document.querySelectorAll('.mini-game').forEach(game => game.style.display = 'none');
  document.getElementById('miniGameComplete').classList.remove('d-none');
};

// Global function to proceed to next question after mini-game
function proceedToQuestion() {
  // Hide complete message
  const completeDiv = document.getElementById('miniGameComplete');
  completeDiv.classList.add('d-none');
  completeDiv.classList.remove('animate__animated', 'animate__zoomIn');
  
  // Proceed to next question or end game
  game.nextQuestionAfterMiniGame();
}

// ===================
// NEW MINI GAMES IMPLEMENTATION
// ===================

// Enhanced Memory Game with Cultural Symbols
EscapeRoomGame.prototype.initEnhancedMemoryGame = function() {
  const symbols = ['🏛️', '🎭', '🎨', '🎪', '📚', '🎵', '⚖️', '🕊️'];
  const gameSymbols = [...symbols.slice(0, 4), ...symbols.slice(0, 4)];
  this.shuffleArray(gameSymbols);
  
  this.miniGamesState.memoryGame = {
    cards: gameSymbols,
    flipped: [],
    matched: [],
    moves: 0
  };
  
  document.getElementById('memoryScore').textContent = '0/4';
  document.getElementById('memoryMoves').textContent = '0';
  
  const grid = document.getElementById('memoryEnhancedGrid');
  grid.innerHTML = '';
  
  gameSymbols.forEach((symbol, index) => {
    const card = document.createElement('div');
    card.className = 'memory-enhanced-card';
    card.dataset.index = index;
    card.innerHTML = `<div class="card-content">${symbol}</div>`;
    
    card.addEventListener('click', () => this.flipEnhancedMemoryCard(index));
    
    grid.appendChild(card);
  });
};

EscapeRoomGame.prototype.flipEnhancedMemoryCard = function(index) {
  const state = this.miniGamesState.memoryGame;
  
  if (state.flipped.length >= 2 || 
      state.flipped.includes(index) || 
      state.matched.includes(index)) {
    return;
  }
  
  const card = document.querySelector(`#memoryEnhancedGrid [data-index="${index}"]`);
  card.classList.add('flipped');
  state.flipped.push(index);
  
  if (state.flipped.length === 2) {
    state.moves++;
    document.getElementById('memoryMoves').textContent = state.moves;
    
    setTimeout(() => this.checkEnhancedMemoryMatch(), 1000);
  }
};

EscapeRoomGame.prototype.checkEnhancedMemoryMatch = function() {
  const state = this.miniGamesState.memoryGame;
  const [first, second] = state.flipped;
  const firstCard = document.querySelector(`#memoryEnhancedGrid [data-index="${first}"]`);
  const secondCard = document.querySelector(`#memoryEnhancedGrid [data-index="${second}"]`);
  
  if (state.cards[first] === state.cards[second]) {
    // Match!
    firstCard.classList.remove('flipped');
    secondCard.classList.remove('flipped');
    firstCard.classList.add('matched');
    secondCard.classList.add('matched');
    
    state.matched.push(first, second);
    document.getElementById('memoryScore').textContent = `${state.matched.length / 2}/4`;
    
    this.playCorrectSound();
    
    if (state.matched.length === 8) {
      setTimeout(() => this.completeMiniGame(), 500);
    }
  } else {
    // No match
    firstCard.classList.remove('flipped');
    secondCard.classList.remove('flipped');
    firstCard.classList.add('wrong');
    secondCard.classList.add('wrong');
    
    setTimeout(() => {
      firstCard.classList.remove('wrong');
      secondCard.classList.remove('wrong');
    }, 500);
    
    this.playWrongSound();
  }
  
  state.flipped = [];
};

// Quick Quiz Game
EscapeRoomGame.prototype.initQuickQuizGame = function() {
  // Pool ampio di domande da cui selezionare casualmente
  const questionPool = [
    {
      question: "Quale colore NON è nella bandiera UE?",
      options: ["Blu", "Giallo", "Rosso", "Stelle"],
      correct: 2
    },
    {
      question: "Quante stelle ha la bandiera europea?",
      options: ["10", "12", "15", "20"],
      correct: 1
    },
    {
      question: "Cosa simboleggiano le stelle UE?",
      options: ["Paesi", "Unità", "Pace", "Diversità"],
      correct: 1
    },
    {
      question: "In che anno è nata l'Unione Europea?",
      options: ["1957", "1993", "1999", "2007"],
      correct: 1
    },
    {
      question: "Qual è la capitale dell'UE?",
      options: ["Strasburgo", "Bruxelles", "Lussemburgo", "Francoforte"],
      correct: 1
    },
    {
      question: "Quanti paesi membri ha l'UE attualmente?",
      options: ["25", "27", "28", "30"],
      correct: 1
    },
    {
      question: "Quale di questi NON è un valore UE?",
      options: ["Dignità", "Libertà", "Uguaglianza", "Competizione"],
      correct: 3
    },
    {
      question: "Il motto UE è 'Unita nella'?",
      options: ["Pace", "Diversità", "Forza", "Solidarietà"],
      correct: 1
    },
    {
      question: "Quale istituzione UE rappresenta i cittadini?",
      options: ["Consiglio UE", "Commissione", "Parlamento", "Corte"],
      correct: 2
    },
    {
      question: "L'Euro è stato introdotto nel?",
      options: ["1999", "2000", "2001", "2002"],
      correct: 1
    },
    {
      question: "Quale programma UE promuove la mobilità studentesca?",
      options: ["Erasmus+", "Horizon", "LIFE", "Interreg"],
      correct: 0
    },
    {
      question: "La Carta dei diritti fondamentali UE è del?",
      options: ["1957", "1992", "2000", "2009"],
      correct: 2
    }
  ];
  
  // Seleziona 3 domande casuali dal pool
  const shuffled = [...questionPool].sort(() => Math.random() - 0.5);
  const selectedQuestions = shuffled.slice(0, 3);
  
  this.miniGamesState.quickQuiz = {
    questions: selectedQuestions,
    currentQuestion: 0,
    correct: 0,
    timeLeft: 5
  };
  
  document.getElementById('quizCorrect').textContent = '0/3';
  document.getElementById('quizTimer').textContent = '5';
  document.getElementById('quizProgressFill').style.width = '0%';
  
  this.showQuickQuizQuestion();
};

EscapeRoomGame.prototype.showQuickQuizQuestion = function() {
  const state = this.miniGamesState.quickQuiz;
  const question = state.questions[state.currentQuestion];
  
  document.getElementById('quizQuestion').textContent = question.question;
  
  const optionsContainer = document.getElementById('quizOptions');
  optionsContainer.innerHTML = '';
  
  question.options.forEach((option, index) => {
    const optionElement = document.createElement('div');
    optionElement.className = 'quiz-option';
    optionElement.textContent = option;
    optionElement.addEventListener('click', () => this.answerQuickQuiz(index));
    optionsContainer.appendChild(optionElement);
  });
  
  // Start timer
  this.startQuickQuizTimer();
};

EscapeRoomGame.prototype.startQuickQuizTimer = function() {
  const state = this.miniGamesState.quickQuiz;
  
  const timer = setInterval(() => {
    state.timeLeft--;
    document.getElementById('quizTimer').textContent = state.timeLeft;
    
    if (state.timeLeft <= 0) {
      clearInterval(timer);
      this.answerQuickQuiz(-1); // Wrong answer (timeout)
    }
  }, 1000);
  
  this.miniGamesState.quickQuiz.timer = timer;
};

EscapeRoomGame.prototype.answerQuickQuiz = function(selectedIndex) {
  const state = this.miniGamesState.quickQuiz;
  const question = state.questions[state.currentQuestion];
  
  clearInterval(state.timer);
  
  // Disable options
  document.querySelectorAll('.quiz-option').forEach(option => {
    option.classList.add('disabled');
  });
  
  if (selectedIndex === question.correct) {
    state.correct++;
    document.querySelectorAll('.quiz-option')[selectedIndex].classList.add('correct');
    this.playCorrectSound();
  } else if (selectedIndex !== -1) {
    document.querySelectorAll('.quiz-option')[selectedIndex].classList.add('wrong');
    this.playWrongSound();
  }
  
  // Show correct answer
  if (selectedIndex !== question.correct) {
    document.querySelectorAll('.quiz-option')[question.correct].classList.add('correct');
  }
  
  document.getElementById('quizCorrect').textContent = `${state.correct}/3`;
  
  // Next question or complete
  setTimeout(() => {
    state.currentQuestion++;
    if (state.currentQuestion < 3) {
      state.timeLeft = 5;
      const progress = ((state.currentQuestion) / 3) * 100;
      document.getElementById('quizProgressFill').style.width = `${progress}%`;
      this.showQuickQuizQuestion();
    } else {
      document.getElementById('quizProgressFill').style.width = '100%';
      setTimeout(() => this.completeMiniGame(), 1000);
    }
  }, 2000);
};

// Find the Odd Game
EscapeRoomGame.prototype.initFindOddGame = function() {
  // Pool ampio di rounds da cui selezionare casualmente
  const roundsPool = [
    {
      items: [
        { icon: '🇮🇹', label: 'Italia', odd: false },
        { icon: '🇫🇷', label: 'Francia', odd: false },
        { icon: '🇺🇸', label: 'USA', odd: true }
      ]
    },
    {
      items: [
        { icon: '🏛️', label: 'Cultura', odd: false },
        { icon: '🎭', label: 'Arte', odd: false },
        { icon: '🚗', label: 'Auto', odd: true }
      ]
    },
    {
      items: [
        { icon: '🤝', label: 'Unione', odd: false },
        { icon: '🕊️', label: 'Pace', odd: false },
        { icon: '⚔️', label: 'Guerra', odd: true }
      ]
    },
    {
      items: [
        { icon: '🇪🇺', label: 'UE', odd: false },
        { icon: '🇩🇪', label: 'Germania', odd: false },
        { icon: '🇯🇵', label: 'Giappone', odd: true }
      ]
    },
    {
      items: [
        { icon: '📚', label: 'Educazione', odd: false },
        { icon: '🎓', label: 'Studio', odd: false },
        { icon: '🎮', label: 'Gaming', odd: true }
      ]
    },
    {
      items: [
        { icon: '🌍', label: 'Europa', odd: false },
        { icon: '🌎', label: 'America', odd: false },
        { icon: '🌙', label: 'Luna', odd: true }
      ]
    },
    {
      items: [
        { icon: '⚖️', label: 'Giustizia', odd: false },
        { icon: '🛡️', label: 'Protezione', odd: false },
        { icon: '💰', label: 'Avidità', odd: true }
      ]
    },
    {
      items: [
        { icon: '🎪', label: 'Festival', odd: false },
        { icon: '🎨', label: 'Arte', odd: false },
        { icon: '🔧', label: 'Industria', odd: true }
      ]
    },
    {
      items: [
        { icon: '🌱', label: 'Ambiente', odd: false },
        { icon: '♻️', label: 'Riciclo', odd: false },
        { icon: '🏭', label: 'Inquinamento', odd: true }
      ]
    },
    {
      items: [
        { icon: '👥', label: 'Comunità', odd: false },
        { icon: '🤲', label: 'Solidarietà', odd: false },
        { icon: '🚪', label: 'Chiusura', odd: true }
      ]
    },
    {
      items: [
        { icon: '🗳️', label: 'Democrazia', odd: false },
        { icon: '🗣️', label: 'Dialogo', odd: false },
        { icon: '🔒', label: 'Censura', odd: true }
      ]
    },
    {
      items: [
        { icon: '🌈', label: 'Diversità', odd: false },
        { icon: '🤝', label: 'Inclusione', odd: false },
        { icon: '🚫', label: 'Esclusione', odd: true }
      ]
    }
  ];
  
  // Seleziona 3 rounds casuali dal pool
  const shuffled = [...roundsPool].sort(() => Math.random() - 0.5);
  const selectedRounds = shuffled.slice(0, 3);
  
  this.miniGamesState.findOdd = {
    rounds: selectedRounds,
    currentRound: 0,
    found: 0
  };
  
  document.getElementById('oddRound').textContent = '1/3';
  document.getElementById('oddFound').textContent = '0';
  
  this.showFindOddRound();
};

EscapeRoomGame.prototype.showFindOddRound = function() {
  const state = this.miniGamesState.findOdd;
  const round = state.rounds[state.currentRound];
  
  const container = document.getElementById('oddItems');
  container.innerHTML = '';
  
  round.items.forEach((item, index) => {
    const itemElement = document.createElement('div');
    itemElement.className = 'odd-item';
    itemElement.innerHTML = `
      <div class="odd-item-icon">${item.icon}</div>
      <div class="odd-item-label">${item.label}</div>
    `;
    
    itemElement.addEventListener('click', () => this.selectOddItem(index, item.odd));
    
    container.appendChild(itemElement);
  });
};

EscapeRoomGame.prototype.selectOddItem = function(index, isOdd) {
  const state = this.miniGamesState.findOdd;
  const items = document.querySelectorAll('.odd-item');
  const selectedItem = items[index];
  
  if (isOdd) {
    // Correct!
    selectedItem.classList.add('correct');
    state.found++;
    document.getElementById('oddFound').textContent = state.found;
    this.playCorrectSound();
    
    setTimeout(() => {
      state.currentRound++;
      if (state.currentRound < 3) {
        document.getElementById('oddRound').textContent = `${state.currentRound + 1}/3`;
        this.showFindOddRound();
      } else {
        this.completeMiniGame();
      }
    }, 1500);
  } else {
    // Wrong!
    selectedItem.classList.add('wrong');
    this.playWrongSound();
    
    // Remove wrong class and try again
    setTimeout(() => {
      selectedItem.classList.remove('wrong');
    }, 1000);
  }
};