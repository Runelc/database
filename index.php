<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chatbot</title>
  <link rel='stylesheet' href='styles.css'>
  <link rel='icon' type='image/x-icon' href='./assets/fav-icon.png'>
</head>

<body>
  <div class="MSN-container">
    <div class="topBar">
      <div class="topButtonContainer">
        <button class="miniBut">
          <div class="miniIcon"></div>
        </button>
        <button class="openBut">
          <div class="openIcon">
            <div class="openIconSquare"></div>
          </div>
        </button>
        <button class="closeBut">
          <div class="line1"></div>
          <div class="line2"></div>
        </button>
      </div>
    </div>
    <div class="settingsTools">
      <ul>
        <li class="fileList"><a href="#">F̲ile</a></li>
        <li><a href="#">E̲dit</a></li>
        <li><a href="#">A̲ctions</a></li>
        <li><a href="#">T̲ools</a></li>
        <li><a href="#">H̲elp</a></li>
      </ul>
    </div>
    <div class="msnTools">
      <div class="emojiDiv">
        <div class="emojiWrapper">
          <p class="emoji">🗣️</p>
        </div>
        <p class="text">I̲nvite</p>
      </div>
      <div class="emojiDiv">
        <div class="emojiWrapper">
          <p class="emoji">📁</p>
        </div>
        <p class="text">Send fil̲es</p>
      </div>
      <div class="emojiDiv">
        <div class="emojiWrapper">
          <p class="emoji">📹</p>
        </div>
        <p class="text">Video̲</p>
      </div>
      <div class="emojiDiv">
        <div class="emojiWrapper">
          <p class="emoji">🎤</p>
        </div>
        <p class="text">Voic̲e</p>
      </div>
      <div class="emojiDiv">
        <div class="emojiWrapper">
          <p class="emoji">🎵</p>
        </div>
        <p class="text">Activ̲ities</p>
      </div>
      <div class="emojiDiv">
        <div class="emojiWrapper">
          <p class="emoji">🎲</p>
        </div>
        <p class="text">G̲ames</p>
      </div>

    </div>
    <div class="messengerContainer">
      <div class="wholeChat">
        <div class="pcChatContainer">
          <div class="pcChatWrapper">
            <div class="pcChatTop">
              <p class="pcChatTopText">To: <b>Chatbot</b>
                &lt;chat.bot@telefonica.net&gt;
              </p>
            </div>
            <div class="pcChat">

              <div class="messageContainer">
                <div class="messages">
                  <p class="topInfo">Never give out your password or credit card number in an instant message conversation. <br>────</p>

                </div>
              </div>
            </div>
          </div>
          <div class="imageWrapper">
            <div class="outerBox">
              <img class="pcChatImg" src="./assets/profile.jpeg" alt="profile image">
              <img class="arrow" src="./assets/arrow.png" alt="arrow">
            </div>
            <div class="arrowSide">
              <img class="arrowSideImage" src="./assets/arrow.png" alt="arrow">
            </div>
          </div>
        </div>
      </div>
      <div class="wholeChat">
        <div class="pcChatWrapper">
          <div class="userTopBar">
            <div class="emojiDiv">
              <div class="emojiWrapperUser">
                <p class="emoji letter">A</p>
              </div>
            </div>


            <div class="emojiDiv">
              <div class="emojiWrapperUser imageSmiley">
                <p class="emoji">😊</p>
                <img class="arrowSmallDown" src="./assets/arrow.png" alt="arrow">
              </div>
            </div>

            <div class="emojiDiv">
              <div class="emojiWrapperUser imageSmiley">
                <p class="emoji">🔊</p>
                <p class="userTopBarText">Voice clip</p>
              </div>
            </div>

            <div class="emojiDiv">
              <div class="emojiWrapperUser imageSmiley">
                <p class="emoji">😉</p>
                <img class="arrowSmallDown" src="./assets/arrow.png" alt="arrow">
              </div>
            </div>

            <div class="emojiDiv">
              <div class="emojiWrapperUser imageSmiley">
                <p class="emoji">🌄</p>
                <img class="arrowSmallDown" src="./assets/arrow.png" alt="arrow">
              </div>
            </div>

            <div class="emojiDiv">
              <div class="emojiWrapperUser imageSmiley">
                <p class="emoji">🎁</p>
                <img class="arrowSmallDown" src="./assets/arrow.png" alt="arrow">
              </div>
            </div>

            <div class="emojiDiv">
              <div class="emojiWrapperUser">
                <p class="emoji shake">🫨</p>
              </div>
            </div>

          </div>
          <form id="formular">
            <div class="messengerTextField">
              <textarea id="userMessage" name="userMessage"></textarea>
              <div class="textButtons">
                <button class="sendButton userButtons" type="submit"><u>S</u>end</button>
                <button class="searchButton userButtons">Sea<u>r</u>ch</button>
              </div>
            </div>
            <div class="bottomBar">
              <p class="bottomBarText">Last message received on 21/12/2004</p>
            </div>
        </div>
        </form>
        <div class="imageWrapper">
          <div class="outerBox">
            <img class="pcChatImg" src="./assets/duck.png" alt="profile image">
            <img class="arrow" src="./assets/arrow.png" alt="arrow">
          </div>
          <div class="arrowSide">
            <img class="arrowSideImage" src="./assets/arrow.png" alt="arrow">
          </div>
        </div>
      </div>
      <div class="underLine">
        <p class="underLineText"> Click for new Emoticons and Theme Packs from Blue Mountain
        </p>
      </div>
    </div>
  </div>
  </div>
</body>

</html>

<script>
  const formular = document.getElementById("formular");
  formular.addEventListener("submit", sendMessage);

  function sendMessage(event) {
    event.preventDefault();
    const userMessage = document.getElementById("userMessage").value.trim();

    if (userMessage === "") {
      return; // Ignore empty messages
    }

    const chatDiv = document.querySelector(".messageContainer");

    // Funktion til at tilføje en besked i chatvinduet
    function addMessage(sender, message) {
      const messageDiv = document.createElement('div');
      messageDiv.className = 'messages';

      const userParagraph = document.createElement('p');
      userParagraph.classList.add('user');
      userParagraph.textContent = sender;
      messageDiv.appendChild(userParagraph);

      const specificMessParagraph = document.createElement('p');
      specificMessParagraph.classList.add('specificMess');
      specificMessParagraph.textContent = message;
      messageDiv.appendChild(specificMessParagraph);

      chatDiv.appendChild(messageDiv);
    }

    fetch('backend/backend.php', {
        method: 'POST',
        body: JSON.stringify({
          message: userMessage
        }),
        headers: {
          'Content-Type': 'application/json'
        }
      })
      .then(response => response.json())
      .then(data => {
        // Tilføj brugerens besked
        addMessage('Me:', userMessage);

        // Tilføj chatbot's svar
        addMessage('ChatBot Says:', data.response);

        // Clear the user input field
        document.getElementById("userMessage").value = "";
        scrollChatToBottom();
      })
      .catch(error => console.error('Error:', error));
  }

  // Function to scroll the chat container to the bottom
  function scrollChatToBottom() {
    const chatContainer = document.querySelector(".messageContainer");
    chatContainer.scrollTop = chatContainer.scrollHeight;
  }

  /* Shakin animation */
  const emojiElement = document.querySelector(".shake");

  const msnContainer = document.querySelector(".MSN-container");

  emojiElement.addEventListener("click", function() {
    msnContainer.classList.toggle("shaking");
    setTimeout(function() {
      msnContainer.classList.remove("shaking");
    }, 500);
  });
</script>