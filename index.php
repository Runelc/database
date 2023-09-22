<?php
echo "<title>Chatbot</title>";
echo "<link rel='stylesheet' href='styles.css'>";
echo "<link rel='icon' type='image/x-icon' href='./assets/fav-icon.png'>";
?>

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
          <form>
            <div class="messengerTextField">
              <textarea name=""></textarea>
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

<script>
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